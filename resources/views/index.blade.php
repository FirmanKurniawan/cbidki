@extends('layouts.user')
@section('title')
Home
@endsection
@section('content')
<!-- start banner Area -->

<?php
	$q = \App\Profile::where('id', 1)->first();

?>
			<section class="banner-area relative" id="home" style="background: url(images/{{$q->gambar_depan}}) center;
  background-size: cover;">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-12">
							<br>
							<br>
							<h6>{!! $q->pengantar1 !!}</h6>
							<span class="bar"></span>
							<h1 class="text-white">
								{!! $q->pengantar2 !!}<br>
								{!! $q->pengantar3 !!}
							</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start about-video Area -->
			<section class="about-video-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 home-about-right">
						<img src="{{asset('images/'.$q->gambar_about)}}" class="mx-auto d-block img-fluid">
					</div>
						
						<div class="col-lg-6 about-video-left">
								<h6 class="text-uppercase">History CB DKI Jakarta</h6>
							<h1>
								History 
							</h1>
							<?php
						$q = \App\History::where('id', 1)->first();

				?>
							<p>
								{!!$q->history!!}
							</p>
					</div>
				</div>	
			</section>
			<section class="latest-blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Visi Misi CB DKI Jakarta</h1>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-6 single-blog">
							<h4>Visi</h4>
							<?php 
								$visi = \App\Visimisi::all()->where('tipe',1);
							 ?>
							 @foreach($visi as $v)
							<p>
								{!!$v->isi!!}
							</p>
						@endforeach
						</div>
						<div class="col-lg-6 single-blog">
							<h4>Misi</h4>
							<?php 
								$misi = \App\Visimisi::all()->where('tipe',2);
							 ?>
							 @foreach($misi as $m)
							<p>
								{!!$m->isi!!}
							</p>
						@endforeach
						</div>						
					</div>
				</div>	
			</section>
			<!-- End latest-blog Area -->		

			<!-- Start gallery Area -->
		
@endsection