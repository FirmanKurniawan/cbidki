@extends('layouts.login')

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
<div class="login-form-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <form id="adminpro-form" class="adminpro-form">
                            <div class="col-lg-4">
                                <div class="login-bg"   style="border-radius: 40px;">
                                    <div class="card fat" style="border-radius: 60px; margin-top: 10px; background-color: #ffffff"> 
                           <!--          <div class="row"> -->
                                        <div class="col-lg-15">
                                            <div class="login-title text-center">
                                                <h1>Login Form</h1>
                                            </div>
                                        </div>
                                <!--     </div> -->

                    <div class="row">
                        <img src="{{url('cbi_user/img/CBI.png')}}" class="img-responsive">
                    </div> 
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                                <a href="#"><img src="img/logo/logo.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>E-mail</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="email" name="email" />
                                                <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Password</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="password" name="password" />
                                                <i class="fa fa-lock login-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">

                                        </div>
                                        <div class="a" style="margin-left: 300px;">
                                            <div class="login-button-pro">
                                                <button type="submit" class="login-button login-button-lg">Log in</button>
                                                

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>
</form>
