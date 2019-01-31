@extends('layouts.user')
@section('title')
Member
@endsection
@section('content')
            <style>
.bulat{
border-radius:100em;
opacity:1;
width:200px;
height:200px;
}
.kiwil
{
  position: sticky;
 margin-left: 30px;
}
.bulat2{
border-radius:100em;
opacity:1;
width:150px;
height:150px;
}
.tengah-teratur{
    color: black;  
    margin: 0 auto;
    text-align: justify;
    width: 10em;
}
.float-right{
    font-family: "Candara";
}
</style>
<!-- Start service-page Area -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<section class="service-page-area section-gap">
<div class="container" style="margin-top: 5%;">
  @if (session('alert'))
  <div class="alert alert-success">
      {{ session('alert') }}
  </div>
  @endif
    <center>
    <h1>Cari Anggota</h1>
    </center>   
    <br>
    <br>
    <div class="row">
    <div class="form-inline" style="margin-left: auto; margin-right: auto;">
    <input class="form-control" type="text" name="nama" id="data">
   
    <button class="btn btn-primary" id="submit" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-search"></i>
    </button>
    </div>
  </div>
</div>
</div>
<br>
<br>
  
<script type="text/javascript">

   $(document).ready(function() {
    $('#submit').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = document.getElementById('data').value;
        $.ajax({
             type:"GET",
             url:"search2/" + id,
             success : function(results) {
              if (results.no_identitas) {
                  document.getElementById('nama').innerHTML =
                    '<label>Nama : </label>' +
                    '<input class="form-control" type="text" readonly style="background-color:#fff;" value="'+results.nama+'">';
                  document.getElementById('alamat').innerHTML =
                    '<label>Alamat : </label>' +
                    '<input class="form-control" type="text" readonly style="background-color:#fff;" value="'+results.alamat+'">';
                  document.getElementById('no_identitas').innerHTML =
                    '<label>No Identitas : </label>' +
                    '<input class="form-control" type="text" readonly style="background-color:#fff;" value="'+results.no_identitas+'">';
                  $('#no_identitas').val(results.no_identitas)
                  document.getElementById('gambar').innerHTML = 
                    '<img src="images/'+results.foto+' "class="bulat2" style="margin-left:30px;"/>';

                  }else{
                    document.getElementById('no_identitas1').innerHTML =
                    '<center><h1><i class="fas fa-times-circle fa-6x" style="color:red;margin-bottom:50px;margin-left:30px;"></i></h1></center>'+
                    '<h2 style="margin-left:30px;">IDENTITAS TIDAK TERSEDIA</h2>';
                  }
             }
        }); 
    });
}); 


</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal">
  <div>
    <div class="modal-content" style="width: 500px;height: auto;margin-left: auto;margin-right: auto;margin-top: 7%;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari Anggota</h5>
        <form action="{{url('/member')}}">
        <button type="submit" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </form>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="float-left">
          <br>
         <div id="gambar" class="img-fluid">
         </div>
         </div>
         <div class="float-right" style="margin-left: 30px;">  
          <div id="nama"></div>
      <br>
      <div id="alamat"></div>
      <br>
      <div id="no_identitas"></div>
      <div id="no_identitas1"></div>
          <!-- {{-- <img src="{{url('images/'.$foto)}}"> --}} -->

</div>
</div>
      </div>
    </div>
  </div>
</div>


<h1 class="mb-10 header-text text-left" style="margin-left: 60px;">Kordinasi Wilayah</h1>
                <br>
                <br>
                <div class="row">
 
                    <!-- START FOREACH KORWIL -->
                    <?php
                    $i = 1;
                    $kiwil = App\Korwil::all();
 
                     ?>
                     @foreach($kiwil as $k)
                        <div class="col-lg-4 col-md-6">
                                                       
                                <h3 class="text-center"><img class="img-fluid bulat" src="{{ url('images/'.$k->logo) }}" alt="" style="width: 80px; height: 80px;">&nbsp;&nbsp;&nbsp;{{$k->nama}}</h3>
                                <br>
                                <?php
                                    $km = App\Korwilmember::where('idkorwil',$k->id)->get();
                                 ?>
                                 @foreach($km as $ka)
                                <ol class="kiwil">
                                  <li style="color: black;">
                                    <br>  &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i> &nbsp;<img src="{{url('images/'.$ka->logo)}}" style="width: 50px;">&nbsp;{{$ka->nama}}&nbsp;({{$ka->kode}})    </li>
                                    </ol>
                                    @endforeach
<br>
</div>
@endforeach
</div>
 
<!-- END FOREACH -->   
</section>
<!-- End service-page Area -->
@endsection