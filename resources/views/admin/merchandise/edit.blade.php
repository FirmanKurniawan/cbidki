@extends('layouts.layouts-admin')
@section('title')
Edit - Merchandise
@endsection
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form action="{{url('admin/merchandise/update')}}" method="POST" id="adminpro-order-form" class="adminpro-form" enctype="multipart/form-data">
                            <div class="col-lg-6">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Merchandise</h1>
                                            </div>
                                        </div>
                                    
                                    <form>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Nama</label>
                                          <input type="hidden" name="id" value="{{$merchandise->id}}">
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Nama" name="nama" value="{{$merchandise->nama}}">
                                        </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputCity">Deskripsi</label>
                                          <textarea id="ckeditor1" type="text" class="form-control" id="inputCity" name="deskripsi" placeholder="Deskripsi" value="">{{$merchandise->deskripsi}}</textarea>
                                        </div>
                                      
                                  </div>
                                  <div class="form-row">
                                      <div class="col-lg-8">
                                        <div class="login-input-area">
                                          <label>Logo</label>
                                          <input name="logo" type="file" class="ts-forms" value="{{$merchandise->logo}}" >
                                        </div>
                                      </div>
                                      </div>
                                      <br>
                                      <div class="form-row">
                                        <div class="col-lg-8">
                                          <div class="login-input-area">
                                            <button type="submit" class="btn btn-primary" style="margin-left: 430px;"><i class="fa fa-edit"></i></button>
                                      </div>
                                      </div>
                                      </div>
                                </form>
                            @csrf
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            @endsection