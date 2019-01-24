@extends('layouts.user')
@section('content')
	
			
			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 home-about-left">
							<img class="mx-auto d-block img-fluid" src="{{asset('cbi_user/img/about-img.png')}}" alt="">
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
<?php
	$q = \App\Profile::where('id', 1)->first();

?>
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
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="{{asset('cbi_user/img/play.png')}}" alt=""></a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End about-video Area -->			
			
			<!-- Start booking Area -->
			<section class="booking-area section-gap relative" id="consultancy">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 booking-left">
							<div class="active-review-carusel">
								<div class="single-carusel">
									<img src="{{asset('cbi_user/img/r1.png')}}" alt="">
									<div class="title justify-content-start d-flex">
										<h4>Fannie Rowe</h4>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
									</div>
									<p>
										Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
									</p>
									<img src="{{asset('cbi_user/img/r2.png')}}" alt="">
									<div class="title justify-content-start d-flex">
										<h4>Hulda Sutton</h4>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
									</div>
									<p>
										Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
									</p>									
								</div>
								<div class="single-carusel">
									<img src="{{asset('cbi_user/img/r1.png')}}" alt="">
									<div class="title justify-content-start d-flex">
										<h4>Fannie Rowe</h4>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
									</div>
									<p>
										Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
									</p>
									<img src="{{asset('cbi_user/img/r2.png')}}" alt="">
									<div class="title justify-content-start d-flex">
										<h4>Hulda Sutton</h4>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
									</div>
									<p>
										Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
									</p>									
								</div>
								<div class="single-carusel">
									<img src="{{asset('cbi_user/img/r1.png')}}" alt="">
									<div class="title justify-content-start d-flex">
										<h4>Fannie Rowe</h4>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
									</div>
									<p>
										Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
									</p>
									<img src="{{asset('cbi_user/img/r2.png')}}" alt="">
									<div class="title justify-content-start d-flex">
										<h4>Hulda Sutton</h4>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
									</div>
									<p>
										Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
									</p>									
								</div>																
							</div>
						</div>
						<div class="col-lg-4 col-md-6 booking-right">
								<h4 class="mb-20">Appointment Form</h4>
								<form action="#">
									<input class="form-control" type="text" name="name" placeholder="Your name" required>
									<input class="form-control" type="email" name="email" placeholder="Email Address" required>
									<input class="form-control" type="text" name="phone" placeholder="Phone Number" required>
									<div class="input-group dates-wrap">                                          
										<input id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
										<div class="input-group-prepend">
											<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
										</div>											
									</div>
									<textarea class="common-textarea form-control mt-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
									<button  class="btn btn-default btn-lg btn-block text-center">Book Now!</button>
								</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End booking Area -->
@endsection
