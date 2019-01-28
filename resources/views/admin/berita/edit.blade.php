@extends('layouts.layouts-admin')
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form">
                <div class="container-fluid">
                    <div class="row">
                    	<?php
                    		$berita = \App\Berita::all();
                    	?>
                    	@foreach ($berita as $m)
                        <form action="{{url('admin/berita/update')}}" method="POST" id="adminpro-order-form" class="adminpro-form" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Berita</h1>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                        	<input type="hidden" name="id" value="{{$m->id}}">
                                          	<label for="inputEmail4">Judul</label>
                                          	<input type="text" class="form-control" id="inputEmail4" placeholder="Judul" name="judul" value="{{$m->judul}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Tanggal</label>
                                          <input type="date" class="form-control" id="inputPassword4" placeholder="Tanggal" name="tanggal" value="{{$m->tanggal}}">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputCity">Isi</label>
                                          <textarea id="ckeditor1" type="text" class="form-control" id="inputCity" name="isi" placeholder="Deskripsi" value="">{{$m->isi}}</textarea>
                                        </div>
                                      
                                  </div>


                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputEmail4">Penulis</label>
                                          <textarea type="text" class="form-control" id="inputEmail4" placeholder="Penulis" name="penulis">{{$m->penulis}}</textarea>
                                        </div>
                                      </div>
                                      {{-- <div class="form-row">
                                          <div class="form-group col-md-4">
                                            <img src="{{asset('images/201901221517025c4733ee8e39a.png')}}" alt="Nature" class="responsive">
                                            <center>
                                            <label>afas</label>
                                            </center>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <img src="{{asset('images/201901221517025c4733ee8e39a.png')}}" alt="Nature" class="responsive">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <img src="{{asset('images/201901221517025c4733ee8e39a.png')}}" alt="Nature" class="responsive">
                                          </div>
                                      </div> --}}
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
                                            <button type="submit" class="btn btn-primary" style="margin-left: 3%;"><i class="fa fa-edit"></i></button>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </form>
                    	@endforeach
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