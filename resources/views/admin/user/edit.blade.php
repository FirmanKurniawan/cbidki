@extends('layouts.layouts-admin')
@section('title')
Edit - User
@endsection
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form">
                <div class="container-fluid">
                    <div class="row">
                        <form action="{{url('admin/user/update/')}}" method="POST" id="adminpro-order-form" class="adminpro-form" enctype="multipart/form-data">
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
                                    <form>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Nama</label>
                                          <input type="hidden" name="id" value="{{$user->id}}">
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Nama" name="name" value="{{$user->name}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Email</label>
                                          <input type="email" class="form-control" id="inputPassword4" placeholder="Email" name="email" value="{{$user->email}}">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputEmail4">Password Lama</label>
                                          <input type="password" class="form-control" placeholder="Password" name="oldpw" id="oldpw">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputEmail4">Password Baru</label>
                                          <input type="password" class="form-control" placeholder="Password" name="newpw" id="newpw">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputEmail4">Konfirmasi Password</label>
                                          <input type="password" class="form-control" placeholder="Password" name="confnewpw" id="confnewpw">
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
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            @endsection