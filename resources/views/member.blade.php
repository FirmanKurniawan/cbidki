@extends('layouts.user')
@section('content')
<!-- Start service-page Area -->
<section class="service-page-area section-gap">
            <form class="form-inline my-2 my-lg-0" action="{{url('member/search')}}" method="get">
            <label for="formGroupExampleInput">Cari Anggota &nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="search" class="form-control" name="query" id="formGroupExampleInput" 
            placeholder="Cari Disini ..." required>
            <input type="hidden" name="search" value="1">
          </form>
          </div>
          <form method="GET">
            <input type="text" name="cari">
            <input type="submit">
          </form>
          <div class="table-responsive">
            <?php  
            $id = 1;
             $pem = \App\Member::all()->where('id', $id); 
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