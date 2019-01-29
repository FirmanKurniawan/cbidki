@extends('layouts.user')
@section('title')
Member
@endsection
@section('content')
<!-- Start service-page Area -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<section class="service-page-area section-gap">
            <form class="form-inline my-2 my-lg-0" action="{{url('member/search')}}" method="get">
            <label for="formGroupExampleInput">Cari Anggota &nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="search" class="form-control" name="query" id="formGroupExampleInput" 
            placeholder="Cari Disini ..." required>
            <input type="hidden" name="search" value="1">
          </form>
          </div>
          <div class="container">
  <h2>Pencarian Autocomplete di Laravel Menggunakan Ajax</h2>
  <br/>
  <select class="cari form-control" style="width:500px;" name="cari"></select>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
  $('.cari').select2({
    placeholder: 'Cari...',
    ajax: {
      url: '/cari',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
            return {
              text: item.email,
              id: item.id
            }
          })
        };
      },
      cache: true
    }
  });

</script>
          <div class="table-responsive">
            <?php  
            $id = 1;
             $pem = \App\Member::all(); 
            ?>
             @foreach($pem as $q)
            <table class="table" id="example">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Nomor Identitas</th>
                  <th>Foto</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
               
                <tr>
                  <td></td>
                  <td>{{$q->nama}}</td>
                  <td>{{$q->alamat}}</td>
                  <td>{{$q->no_identitas}}</td>
                  <td><img src="{{ url('images/'.$q->foto) }}" style="width: 70px; height: 70px"></td>
                  <td>
                   <a href="{{url('member'.$q->id)}}" onclick="return confirm('anda yakin untuk memilihnya ?')" 
                     class="btn btn-outline-warning btn-sm">Pengembalian</a>
                   </tr>
                   @endforeach
                 </tbody>
               </table>
             </div>	
</section>
<!-- End service-page Area -->
@endsection