@extends('layouts.user')
@section('title')
Contact
@endsection
@section('content')
<!-- start banner Area -->
			

			<!-- Start contact-page Area --><br><br>
			<section class="contact-page-area section-gap">

<h1 class="mb-10 header-text text-center">Contact</h1>
				<div class="container" style="padding-top: 50px;">
					<div class="row">
						<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Dhaka, Bangladesh</h5>
									<p>56/8, West Panthapath</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>00 (880) 9865 562</h5>
									<p>Mon to Fri 9am to 6 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>support@codethemes.com</h5>
									<p>Send us your query anytime!</p>
								</div>
							</div>														
						</div>



						<div class="col-lg-8">
							<form class="form-area" action="{{url('/admin/contact/save')}}" method="POST" class="contact-form text-right">
								@csrf
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="nama" placeholder="Enter your name" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Enter email address" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Enter your subject" class="common-input mb-20 form-control" required="" type="text">
										<div class="mt-20 alert-msg" style="text-align: left;"></div>
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="pesan" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										<button type="submit" class="primary-btn mt-20 text-white" style="float: right;">Send Message</button>
																				
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->
@endsection