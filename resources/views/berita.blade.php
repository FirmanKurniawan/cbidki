@extends('layouts.user')
@section('content')
<style>
	.tengah{
		margin-left: 50%;
	}
</style>
			<section class="blog-posts-area section-gap">
				<div class="container">
					<br>
					<br>
					<h1 class="text-center">Berita Kami</h1>
					<br>
					<br>
					<div class="row">
						<div class="col-lg-8 post-list blog-post-list">
							<!-- START FOREACH -->
							<?php
						$berita = \App\Berita::latest()->paginate(env('PER_PAGE'));

				?>
				@foreach($berita as $br)
							<div class="single-post">
								<a href="{{url('lengkap/'.$br->id)}}"><img class="img-fluid" src="{{asset('images/'.$br->foto)}}" alt="" style="width: 800px; height: auto;"></a>
								<ul class="tags">
									<li><a href="#">Art, </a></li>
									<li><a href="#">Technology, </a></li>
									<li><a href="#">Fashion</a></li>
								</ul>
								<a href="{{url('lengkap/'.$br->id)}}">
									<h1>
										{{$br->judul}}
									</h1>
								</a>
									<p>
										{!!str_limit(strip_tags($br->isi), 200) !!}
									</p>
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<div class="comment-wrap col-lg-6">
											<ul>
												<li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
											</ul>
										</div>
										<div class="social-wrap col-lg-6">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-behance"></i></a></li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>
							@endforeach
		
							<!-- ENDFOREACH -->
																									
						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-widget search-widget">
								<form class="example" action="#" style="margin:auto;max-width:300px">
								  <input type="text" placeholder="Search Posts" name="search2">
								  <button type="submit"><i class="fa fa-search"></i></button>
								</form>								
							</div>

							<div class="single-widget protfolio-widget">
								<img src="img/blog/user2.jpg" alt="">
								<a href="#"><h4>Adele Gonzalez</h4></a>
								<p>
									MCSE boot camps have its supporters and
									its detractors. Some people do not understand why you should have to spend money
									on boot camp when you can get.
								</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>								
							</div>

							
							<div class="single-widget recent-posts-widget">
								<h4 class="title">Recent Posts</h4>
								<div class="blog-list ">
										@foreach ($s as $r)
									<div class="single-recent-post d-flex flex-row">
										<div class="recent-thumb">
											<img class="img-fluid" src="img/blog/r1.jpg" alt="">
										</div>
										<div class="recent-details">
											<a href="blog-single.html">
												<h4>
													{{$r->judul}} - {{$r->created_at->diffForHumans()}}
												</h4>
											</a>
											<p>
												{!!str_limit(strip_tags($r->isi), 100)!!}
											</p>
										</div>
									</div>
										@endforeach
								</div>								
							</div>

							<div class="single-widget category-widget">
								<h4 class="title">Post Archive</h4>
								<ul>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Dec '17</h6> <span>37</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Nov '17</h6> <span>24</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Oct '17</h6> <span>59</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Sep '17</h6> <span>29</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Aug '17</h6> <span>15</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Jul '17</h6> <span>09</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Jun '17</h6> <span>44</span></a></li>
								</ul>
							</div>						

						</div>
					</div>

				</div>	
				<div class="tengah">
									{!! $s->render() !!}
							</div>	
			</section>
			<!-- End blog-posts Area -->
			
@endsection

