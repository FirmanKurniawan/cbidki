@extends('layouts.layouts-admin')
@section('title')
Admin - Footer
@endsection
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form">
                <div class="container-fluid">
                    <div class="row">
                        
                        <form action="{{url('admin/footer/update')}}" method="POST" id="adminpro-order-form" class="adminpro-form">
                            @csrf
                            <div class="col-lg-6" style="width: 100%;">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Footer</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $footer = \App\Footer::all();
                                    ?>
                                    @foreach($footer as $data)
                                    
                                 <!--    <div class="container">


                                    <div class="row">
                                        <div class="col-md-13"> -->
                                            <div class="login-textarea-area">
                                                <p>Pengantar 1</p>
                                                <textarea id="ckeditor1" class="contact-message" cols="30" rows="10" name="pengantar1">{!! $data->pengantar1 !!}</textarea>
                                                
                                            </div>
                                      <br><br>
                                     <!-- <div class="row">
                                        
                                        <div class="col-md-13"> -->
                                            <div class="login-textarea-area">
                                                <p>Pengantar 2</p>
                                                <textarea id="ckeditor2" class="contact-message" cols="30" rows="10" name="pengantar2">{!! $data->pengantar2 !!}</textarea>
                                                
                                            </div>
                                       <br><br>
                                   
                                            <div class="login-textarea-area">
                                                <p>Pengantar 3</p>
                                                <textarea id="ckeditor3" class="contact-message" cols="30" rows="10" name="pengantar3">{!! $data->pengantar3 !!}</textarea>
                                                
                                            </div>
                                       
                        <br><br>
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro" style="float: right; margin-right: 2%;">
                                                <button type="submit" class="login-button login-button-lg"><i class="fa fa-edit"></i></button>
                                            </div>  
                                        </div>
                                    </div>
                                    </div>


                                    
                                    @endforeach
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            @endsection