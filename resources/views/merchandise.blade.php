@extends('layouts.user')
@section('title')
Merchandise
@endsection
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




				
						<div class="col-lg-4 col-md-6">
							<div class="single-service-page">
								<div class="thumbs relative">
							
									<img class="img-fluid" src="{{ url('images/'.$q->logo)}}" alt="" style="width: 300px; height: 200px;">
								</div>
								<br>
								<div class="details">
									<a href="#"><h4>{{$q->nama}}</h4></a>
									<p>
										{!!$q->deskripsi!!}
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