@extends('layouts.user')
@section('content')
<br>    
<br>    
<br>    
<br> 
<br>    
<br>    
 <div class="container">

                    <div class="row">
<!-- start FOREACH BERITA -->
  <center>
                        <div class="col-lg-8 post-list blog-post-list">
                            <div class="single-post">   
                                <img class="img-fluid" src="{{ url('images/'.$baca->foto) }}" alt="" style="width: 1000px; height: auto;">
                                </center>
                                    <h1>
                                        {{$baca->judul}}
                                    </h1>
                                </a>
                                 <p >
                                {!!$baca->isi!!}
                                            </p>
                                            <h4>
                                                <br>
                                                Penulis : {{$baca->penulis}}</h4>
                            </div>
    
         

                        </div>
                        
<!--END FOREACH BERTIA -->
                    </div>

                </div>  
            </section>
            <!-- End blog-posts Area -->
            @endsection