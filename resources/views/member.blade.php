@extends('layouts.user')
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
			<br><br>
			<section class="service-page-area section-gap">
				<h1 class="mb-10 header-text text-center">Cari Anggota</h1>
				<div class="container" style="padding-top: 40px;">							
					<div class="row">
						
<div class="form-inline" style="margin-left: auto; margin-right: auto;">
@foreach($member as $x)
<form action="{{ url('member/search') }}" method="GET">

    <input class="form-control" type="search" placeholder="Search" name="search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit" data-target="#{{$x->nama}}" data-toggle="modal">Search</button>

  </div>
  </div>
  <br>
  <br>
 
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
								<ol class="text-justify" style="">
								  <li><h5 class="">&nbsp;&nbsp;&nbsp;&nbsp;{{$i++}}.&nbsp;{{$ka->nama}}({{$ka->kode}})</h5></li>

									</ol>
									@endforeach
<br>
</div>
@endforeach
<!-- END FOREACH -->
						</div>	

						</div>

																														
					</div>
					<div class="modal fade" id="{{$z->nama}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Nomor Identitas</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$z->nama}}</td>
      <td>{{$z->alamat}}</td>
      <td>{{$z->no_identitas}}</td>
      <td><img src="{{ url('images/'.$z->foto) }}" style="width: 70px; height: 70px"></td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>

</form>    
 @endforeach
</div>
  </div>
</div>
				</div>	
			</section>
			<!-- End service-page Area -->
			
			
			
@endsection