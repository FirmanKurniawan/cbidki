@extends('layouts.user')
@section('title')
About
@endsection
@section('content')
	<?php
				$q = \App\Profile::where('id', 1)->first();

			?>
			
			<!-- Start home-about Area -->
			<br><br>
			<section class="home-about-area section-gap">
				<div class="container-center" style="margin-left: 650px;">
				<h1>About</h1>
			</div><br><br>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 home-about-left">
							<img class="mx-auto d-block img-fluid" src="{{asset('images/'.$q->gambar_about)}}" alt="">
						</div>
						<div class="col-lg-6 home-about-right">
							<h6 class="text-uppercase">Brand new app to blow your mind</h6>
							<h1>We’ve made a life <br>
							that will change you</h1>
							<p>
								<span>We are here to listen from you deliver exellence</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis.
							</p>
							<a class="primary-btn" href="#">Get Started Now</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			
			<!-- Start feature Area -->
			<section class="feature-area relative pt-100 pb-20" style="background: url(images/{{$q->gambar_bawah}}) center;
  background-size: cover;">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#"><h4 class="text-white">Expert Technicians</h4></a>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#"><h4 class="text-white">Professional Service</h4></a>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#"><h4 class="text-white">Great Support</h4></a>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#"><h4 class="text-white">Technical Skills</h4></a>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#"><h4 class="text-white">Highly Recomended</h4></a>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#"><h4 class="text-white">Positive Reviews</h4></a>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End feature Area -->			

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
			
			
@endsection
