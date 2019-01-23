@extends('layouts.layouts-admin')
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form action="{{url('visimisi/update')}}" method="POST" class="adminpro-form">
                            @csrf
                            <div class="col-lg-6">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <?php
                                          $visimisi = \App\Visimisi::all()->where('tipe', 1);
                                          ?>
                                          @foreach ($visimisi as $q)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>VisiMisi</h1>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>VISI</p>
                                                <input type="hidden" name="id_visi" value="{{$q->id}}">
                                            </div>
                                        </div>
                                         
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <textarea class="contact-message" cols="30" rows="10" name="visi">{!!$q->isi!!}</textarea>
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
                                        
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <textarea class="contact-message" cols="30" rows="10" name="misi">{!!$q->isi!!}</textarea>
                                                <i class="fa fa-comment login-user"></i>
                                            </div>
                             
                                        </div>
                                        @endforeach
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <button type="submit" class="login-button login-button-lg"><i class="fa fa-plus"></i></button>
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