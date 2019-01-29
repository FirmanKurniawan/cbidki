@extends('layouts.layouts-admin')
@section('title')
Add - Berita
@endsection
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form">
                <div class="container-fluid">
                  <div class="login-bg">
                    <div class="row">
                        <form action="{{url('admin/berita/save')}}" method="POST" id="adminpro-order-form" class="adminpro-form" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Berita</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group col-md-12">
                                          <label for="inputEmail4">Judul</label>
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Judul" name="judul">
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="inputPassword4">Tanggal</label>
                                          <input type="date" class="form-control" id="inputPassword4" name="tanggal">
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="inputPassword4">Penulis</label>
                                          <input type="text" class="form-control" id="inputPassword4" placeholder="Penulis" name="penulis" value="{{ Auth::user()->name }}" readonly>
                                        </div>                          
                                        <div class="form-group col-md-12">
                                          <label for="inputCity">Isi</label>
                                          <textarea id="ckeditor1" type="text" class="form-control" id="inputCity" name="isi" placeholder="isi"></textarea>
                                        </div>
                                      
                                      <div class="form-row">
                                        <center>
                                          <div class="form-group col-md-12">
                                            <img src="{{asset('images/no-image.png')}}" alt="Nature" class="responsive" id="blah1" style="width: 200px;height: 200px;">
                                            <center>
                                            <label>Foto</label>
                                            </center>
                                          </div>
                                          </center>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <input type="file" class="form-control" id="inputCity" name="foto" onchange="readURL1(this);">
                                        </div>
                                        
                                      </div>
                                      <div class="form-group">
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i></button>
                                        </div>
                                      </div>
                                </form>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                         function readURL1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah1')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
            @endsection