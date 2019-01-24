@extends('layouts.user')
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
							<h6>{!! $q->pengantar1 !!}</h6>
							<span class="bar"></span>
							<h1 class="text-white">
								{!! $q->pengantar2 !!}<br>
								{!! $q->pengantar3 !!}
							</h1>
							<a href="#" class="genric-btn">Book Consultancy</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start about-video Area -->
			<section class="about-video-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 about-video-left">
							<h6 class="text-uppercase">Brand new app to blow your mind</h6>
							<h1>
								We’ve made a life <br>
								that will change you 
							</h1>
							<p>
								<span>We are here to listen from you deliver exellence</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmo d tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<a class="primary-btn" href="#">Get Started Now</a>
						</div>
						<div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex">
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="{{asset('images/'.$q->gambar_about)}}" alt=""></a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End about-video Area -->
			
			<!-- Start feature Area -->
			
			<!-- End feature Area -->
			
			
			
			

			

			<!-- Start latest-blog Area -->
			<section class="latest-blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest News from our Blog</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-6 single-blog">
							<img class="img-fluid" src="{{asset('cbi_user/img/b1.jpg')}}" alt="">
							<ul class="tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">31st January, 2018</p>
						</div>
						<div class="col-lg-6 single-blog">
							<img class="img-fluid" src="{{asset('cbi_user/img/b2.jpg')}}" alt="">
							<ul class="tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">31st January, 2018</p>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End latest-blog Area -->		

			<!-- Start gallery Area -->
			<section class="gallery-area">
				<div class="container-fluid">
					<div class="row no-padding">
						<div class="active-gallery">
							<div class="item single-gallery">
							    <div class="thumb">
							        <img src="{{asset('cbi_user/img/g1.jpg')}}" alt="">
							        <div class="align-items-center justify-content-center d-flex">
							        </div>
							    </div>
							</div>	
							<div class="item single-gallery">
							    <div class="thumb">
							        <img src="{{asset('cbi_user/img/g2.jpg')}}" alt="">
							        <div class="align-items-center justify-content-center d-flex">
							        </div>
							    </div>
							</div>	
							<div class="item single-gallery">
							    <div class="thumb">
							        <img src="{{asset('cbi_user/img/g3.jpg')}}" alt="">
							        <div class="align-items-center justify-content-center d-flex">
							        </div>
							    </div>
							</div>	
							<div class="item single-gallery">
							    <div class="thumb">
							        <img src="{{asset('cbi_user/img/g4.jpg')}}" alt="">
							        <div class="align-items-center justify-content-center d-flex">
							        </div>
							    </div>
							</div>	
							<div class="item single-gallery">
							    <div class="thumb">
							        <img src="{{asset('cbi_user/img/g5.jpg')}}" alt="">
							        <div class="align-items-center justify-content-center d-flex">
							        </div>
							    </div>
							</div>	
							<div class="item single-gallery">
							    <div class="thumb">
							        <img src="{{asset('cbi_user/img/g6.jpg')}}" alt="">
							        <div class="align-items-center justify-content-center d-flex">
							        </div>
							    </div>
							</div>								

						</div>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
@endsection