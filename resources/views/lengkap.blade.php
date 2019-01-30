@extends('layouts.user')
@section('content')
            <section class="blog-posts-area section-gap">
                <div class="container">
                    <br>
                    <br>

                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-8 post-list blog-post-list">
                            <!-- START FOREACH -->
                            <div class="single-post">
                                <img class="img-fluid" src="{{url('images/'.$baca->foto)}}" alt="" style="width: 800px; height: auto;">
                                <ul class="tags">
                                    <li><a href="#">Art, </a></li>
                                    <li><a href="#">Technology, </a></li>
                                    <li><a href="#">Fashion</a></li>
                                </ul>
                                    <h1>
                                        {{$baca->judul}}
                                    </h1>
                                </a>
                                    <p>
                                        {!!$baca->isi!!}
                                    </p>
                                <div class="bottom-meta">
                                    <div class="user-details row align-items-center">
                                        <div class="comment-wrap col-lg-6">
                                            <ul>
                                                <li><a href="#"><span class="lnr lnr-heart"></span> 4 likes</a></li>
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
                                    <div class="single-recent-post d-flex flex-row">
                                        <div class="recent-thumb">
                                            <img class="img-fluid" src="img/blog/r1.jpg" alt="">
                                        </div>
                                        <div class="recent-details">
                                            <a href="blog-single.html">
                                                <h4>
                                                    Home Audio Recording
                                                    For Everyone
                                                </h4>
                                            </a>
                                            <p>
                                                02 hours ago
                                            </p>
                                        </div>
                                    </div>  
                                    <div class="single-recent-post d-flex flex-row">
                                        <div class="recent-thumb">
                                            <img class="img-fluid" src="img/blog/r2.jpg" alt="">
                                        </div>
                                        <div class="recent-details">
                                            <a href="blog-single.html">
                                                <h4>
                                                    Home Audio Recording
                                                    For Everyone
                                                </h4>
                                            </a>
                                            <p>
                                                02 hours ago
                                            </p>
                                        </div>
                                    </div>  
                                    <div class="single-recent-post d-flex flex-row">
                                        <div class="recent-thumb">
                                            <img class="img-fluid" src="img/blog/r3.jpg" alt="">
                                        </div>
                                        <div class="recent-details">
                                            <a href="blog-single.html">
                                                <h4>
                                                    Home Audio Recording
                                                    For Everyone
                                                </h4>
                                            </a>
                                            <p>
                                                02 hours ago
                                            </p>
                                        </div>
                                    </div>  
                                    <div class="single-recent-post d-flex flex-row">
                                        <div class="recent-thumb">
                                            <img class="img-fluid" src="img/blog/r4.jpg" alt="">
                                        </div>
                                        <div class="recent-details">
                                            <a href="blog-single.html">
                                                <h4>
                                                    Home Audio Recording
                                                    For Everyone
                                                </h4>
                                            </a>
                                            <p>
                                                02 hours ago
                                            </p>
                                        </div>
                                    </div>                                                                                                                                                  
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
            </section>
            <!-- End blog-posts Area -->
            
@endsection

