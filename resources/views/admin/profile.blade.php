@extends('layouts.layouts-admin')
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form action="{{url('admin/profile/update/{id}')}}" method="POST" id="adminpro-order-form" class="adminpro-form" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-6">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Profile</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $profile = \App\Profile::all();
                                    ?>
                                    @foreach($profile as $p)
                                    <form>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Nama</label>
                                          <input type="hidden" name="id" value="{{$p->id}}">
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Nama" name="nama" value="{{$p->nama}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Email</label>
                                          <input type="email" class="form-control" id="inputPassword4" placeholder="Email" name="email" value="{{$p->email}}">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputEmail4">Alamat</label>
                                          <textarea type="text" class="form-control" id="inputEmail4" placeholder="Alamat" name="alamat" value="">{{$p->alamat}}</textarea>
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputPassword4">Telepon</label>
                                          <input type="number" class="form-control" id="inputCity" name="telepon" placeholder="Telepon" value="{{$p->telepon}}">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputCity">Fanspage</label>
                                          <input type="text" class="form-control" id="inputCity" name="fanspage" placeholder="Fanspage" value="{{$p->fanspage}}">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputCity">Pengantar 1</label>
                                          <textarea id="ckeditor1" type="text" class="form-control" id="inputCity" name="pengantar1" placeholder="Pengantar 1" value="">{{$p->pengantar1}}</textarea>
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputCity">Pengantar 2</label>
                                          <textarea id="ckeditor2" type="text" class="form-control" id="inputCity" name="pengantar2" placeholder="Pengantar 2" value="">{{$p->pengantar2}}</textarea>
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputCity">Pengantar 3</label>
                                          <textarea id="ckeditor3" type="text" class="form-control" id="inputCity" name="pengantar3" placeholder="Pengantar 3" value="">{{$p->pengantar3}}</textarea>
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputCity">Gambar Depan</label>
                                          <input id="ckeditor3" type="file" class="form-control" id="inputCity" name="gambar_depan">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputCity">Gambar About</label>
                                          <input id="ckeditor3" type="file" class="form-control" id="inputCity" name="gambar_about">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-12">
                                          <label for="inputCity">Gambar Bawah</label>
                                          <input id="ckeditor3" type="file" class="form-control" id="inputCity" name="gambar_bawah">
                                        </div>
                                      </div>
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
            @endsection