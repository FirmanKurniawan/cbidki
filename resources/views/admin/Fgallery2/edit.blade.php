@extends('layouts.layouts-admin')
@section('title')
Edit - Korwil
@endsection
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form">
                <div class="container-fluid">
                    <div class="row">
                        <form action="{{url('gallery2/update')}}" method="POST" id="adminpro-order-form" class="adminpro-form" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Gallery</h1>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="row">
                                        <div class="form-group col-md-12">
                                        	<input type="hidden" name="id" value="{{$gallery2->id}}">
                                          	<label for="inputEmail4">Pengantar 1</label>
                                          	<textarea id="ckeditor1" type="text" class="form-control" id="inputEmail4" placeholder="Pengantar 1" name="pengantar1" value="">{{$gallery2->pengantar1}}</textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="inputPassword4">Pengantar 2</label>
                                          <textarea id="ckeditor2" type="text" class="form-control" id="inputPassword4" placeholder="Pengantar 2" name="pengantar2" value="">{{$gallery2->pengantar2}}</textarea>
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <center>
                                          <div class="form-group col-md-12">
                                            <br>
                                            <label>Gambar</label>
                                            <br>
                                            <img src="{{asset('images/'.$gallery2->gambar)}}" alt="Nature" class="responsive" id="blah1" style="width: 200px;height: 200px;">
                                            <center>
                                            </center>
                                          </div>
                                          </center>
                                      </div>
                                      <center>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <input type="file" id="inputCity" name="gambar" onchange="readURL1(this);">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-pen"></i></button>
                                        </div>
                                      </div>
                                    </center>
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