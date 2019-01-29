@extends('layouts.layouts-admin')
@section('title')
Admin - Visi Misi
@endsection
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form">
                <div class="container-fluid">
                    <div class="row">
                        
                        <form action="{{url('admin/visimisi/update')}}" method="POST" class="adminpro-form">
                            @csrf
                            <div class="col-lg-12">
                                <div class="login-bg">
                                    <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Visi Misi<span class="table-project-n"></span></h1>
                                        <div class="sparkline13-outline-icon">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <?php
                                          $visimisi = \App\Visimisi::all()->where('tipe', 1);
                                          ?>
                                          @foreach ($visimisi as $q)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>VISI</p>
                                                <input type="hidden" name="id_visi" value="{{$q->id}}">
                                            </div>
                                        </div>
                                         
                                        <div class="col-lg-12">
                                            <div class="login-textarea-area">
                                                <textarea id="ckeditor1" class="contact-message" cols="30" rows="10" name="visi">{!!$q->isi!!}</textarea>
                                                <i class="fa fa-comment login-user"></i>
                                            </div>
                       
                                            
                                        @endforeach
                                    </div>
                                    <?php
                                    $visimisi = \App\Visimisi::all()->where('tipe', 2);
                                    ?>
                                    @foreach ($visimisi as $q)

                                        <div class="col-lg-12">
                                     <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>MISI</p>
                                                <input type="hidden" name="id_misi" value="{{$q->id}}">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="login-textarea-area">
                                                <textarea id="ckeditor2" class="contact-message" cols="30" rows="10" name="misi">{!!$q->isi!!}</textarea>
                                                <i class="fa fa-comment login-user"></i>
                                            </div>
                             
                                        </div>
                                        @endforeach
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <button style="float: right;" type="submit" class="login-button login-button-lg"><i class="fas fa-edit"></i></button>
                                            </div>  
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            @endsection