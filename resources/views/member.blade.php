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
.tengah-teratur{
    color: black;  
    margin: 0 auto;
    text-align: justify;
    width: 10em;
}
</style>
<!-- Start service-page Area -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<section class="service-page-area section-gap">
<div class="container" style="margin-top: 5%;">
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
                 $('#nama').val(results.nama)
                  $('#alamat').val(results.alamat)
                  $('#no_identitas').val(results.no_identitas)
                  document.getElementById('gambar').innerHTML = 
                    '<img src="images/'+results.foto+' "class="img-fluid" style="width:150px; height:150px; margin-left:30px;"/>';
             }
        }); 
    });
});  


</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="float-left">
          <br>
         <div id="gambar" class="img-fluid">
         </div>
         </div>
         <div class="float-right" style="margin-left: 30px;">
      <label>Nama : <input type="text" id="nama" readonly="true" class="form-control"></label>
      <br>
      <label>Alamat :<textarea type="text" id="alamat" readonly="true" class="form-control"></textarea></label>
      <br>
      <label>Nomor Identitas<input type="number" id="no_identitas" readonly="true" class="form-control"></label> 
          {{-- <img src="{{url('images/'.$foto)}}"> --}}
</div>
</div>
      </div>
    </div>
  </div>
</div>


<h1 class="mb-10 header-text text-center">Korwil</h1>
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
                                <ol class="text-center" style="">
                                  <li><h5 class="">&nbsp;&nbsp;&nbsp;&nbsp;{{$i++}}.&nbsp;{{$ka->nama}}({{$ka->kode}})</h5></li>
 
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