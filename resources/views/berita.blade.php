@extends('layouts.user')
@section('content')
			<section class="about-video-area section-gap">
				<div class="container">
					<br>	
							<br>	
							<br>	
							<h1 class="text-center">Berita Kami</h1>
					<div class="row">
						</h1>
							<?php
						$berita = \App\Berita::all();

				?>
				@foreach($berita as $br)

						<div class="col-lg-6 home-about-right">
							<br>	
							<br>	
							<hr>	
						<a href="{{url('lengkap/'.$br->id)}}"><img src="{{asset('images/'.$br->foto)}}"  class="mx-auto d-block img-fluid" style="width: 500px; height: auto;"></a>
					</div>
						
						<div class="col-lg-6 about-video-left">
							<br>	
							<br>
								
							<h1><a href="{{url('lengkap/'.$br->id)}}" style="color: black;">
								{{$br->judul}}
							</h1></a>
							
							<p>
								{!!str_limit(strip_tags($br->isi), 200) !!}
							</p>
					</div>
					@endforeach
				</div>	
			</section>
<!-- End blog-posts Area -->
@endsection

