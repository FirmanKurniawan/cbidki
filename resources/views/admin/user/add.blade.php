@extends('layouts.layouts-admin')
@section('title')
Add - User
@endsection
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form">
                <div class="container-fluid">
                    <div class="row">
                        <form action="{{url('admin/user/save/')}}" method="POST" id="adminpro-order-form" class="adminpro-form" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>User</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $profile = \App\Profile::all()->where('id', 1);
                                    ?>
                                    @foreach($profile as $p)
                                    <form>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Nama</label>
                                          <input type="hidden" name="id">
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Nama" name="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Email</label>
                                          <input type="email" class="form-control" id="inputPassword4" placeholder="Email" name="email">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputEmail4">Password</label>
                                          <input type="password" class="form-control" id="inputEmail4" placeholder="Password" name="password">
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
                                      <div class="form-group">
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" style="margin-left: 3%;"><i class="fa fa-edit"></i></button>
                                        </div>
                                      </div>
                                </form>
                                    @endforeach
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
            <script type="text/javascript">
                         function readURL2(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah2')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
            <script type="text/javascript">
                         function readURL3(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah3')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
            @endsection