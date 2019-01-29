@extends('layouts.user')
@section('title')
Gallery
@endsection
@section('content')

			<!-- Start training Area -->
			
		<br><br>
			<section class="training-area section-gap">
				<h1 class="mb-10 header-text text-center">Gallery</h1>
				<div class="container" style="padding-top: 40px;">
					<div class="row">
              <?php
              $galery = \App\Gallery2::all(); 
               ?>
               @foreach($galery as $q)
            <!-- START FOREACH GAMBAR -->
						<div class="col-lg-4 cl-md-6">
							<div class="single-training">
								<div class="thumb relative">
									<div class="overlay-bg"></div>
									<img class="img-fluid" src="{{ url('images/'.$q->gambar)}}" style="width: 400px; height: 300px;">	
								</div>
								<div class="details">
									<div class="title justify-content-between d-flex">
									<h4>{{$q->pengantar1}}</h4>
									</div>
									<p>
										{{$q->pengantar2}}
									</p>
								</div>
							</div>
						</div>
            @endforeach
						<!-- END FOREACH GAMBAR -->
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End training Area -->
									
			
			
@endsection