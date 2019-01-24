@extends('layouts.user')
@section('content')
<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Services			
							</h1>	
							<p class="text-white link-nav"><a href="{{url('index')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('service')}}"> Services</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start service-page Area -->
			<section class="service-page-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-9 pb-40 header-text text-center">
							<h1 class="pb-10">Our Offered Services that grow interests</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-service-page">
								<div class="thumbs relative">
									<div class="overlay-bg"></div>
									<img class="img-fluid" src="{{asset('cbi_user/img/pages/sp1.jpg')}}" alt="">
								</div>
								<div class="details">
									<a href="#"><h4>Personal Trainings</h4></a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-service-page">
								<div class="thumbs relative">
									<div class="overlay-bg"></div>
									<img class="img-fluid" src="{{asset('cbi_user/img/pages/sp2.jpg')}}" alt="">
								</div>
								<div class="details">
									<a href="#"><h4>Personal Trainings</h4></a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-service-page">
								<div class="thumbs relative">
									<div class="overlay-bg"></div>
									<img class="img-fluid" src="{{asset('cbi_user/img/pages/sp3.jpg')}}" alt="">
								</div>
								<div class="details">
									<a href="#"><h4>Personal Trainings</h4></a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-service-page">
								<div class="thumbs relative">
									<div class="overlay-bg"></div>
									<img class="img-fluid" src="{{asset('cbi_user/img/pages/sp4.jpg')}}" alt="">
								</div>
								<div class="details">
									<a href="#"><h4>Personal Trainings</h4></a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-service-page">
								<div class="thumbs relative">
									<div class="overlay-bg"></div>
									<img class="img-fluid" src="{{asset('cbi_user/img/pages/sp5.jpg')}}" alt="">
								</div>
								<div class="details">
									<a href="#"><h4>Personal Trainings</h4></a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-service-page">
								<div class="thumbs relative">
									<div class="overlay-bg"></div>
									<img class="img-fluid" src="{{asset('cbi_user/img/pages/sp6.jpg')}}" alt="">
								</div>
								<div class="details">
									<a href="#"><h4>Personal Trainings</h4></a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
								</div>
							</div>
						</div>																								
					</div>
				</div>	
			</section>
			<!-- End service-page Area -->
			
			
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