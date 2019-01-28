@extends('layouts.user')
@section('content')

			<!-- Start training Area -->
			
		<br><br>
			<section class="training-area section-gap">
				<h1 class="mb-10 header-text text-center">Merchandise Kami</h1>
				<div class="container" style="padding-top: 40px;">
					<div class="row">
              <?php
              $merchandise = \App\Merchandise::all(); 
               ?>
               @foreach($merchandise as $q)
            <!-- START FOREACH GAMBAR -->
						<div class="col-lg-4 cl-md-6">
							<div class="single-training">
								<div class="thumb relative">
									<div class="overlay-bg"></div>
									<img class="img-fluid" src="{{ url('images/'.$q->logo)}}" style="width: 400px; height: 300px;">	
								</div>
								<div class="details">
									<div class="title justify-content-between d-flex">
									<h4>{{$q->nama}}</h4>
									</div>
									<p>
										{{$q->deskripsi}}
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