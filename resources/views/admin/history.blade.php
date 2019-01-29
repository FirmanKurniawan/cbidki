@extends('layouts.layouts-admin')
@section('title')
Admin - History
@endsection
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form">
                <div class="container-fluid">
                    <div class="row">
                        
                        <form action="{{url('/admin/history/update')}}" method="POST" id="adminpro-order-form" class="adminpro-form">
                            @csrf
                            <div class="col-lg-6" style="width: 100%;">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>History</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $history = \App\History::all();
                                    ?>
                                    @foreach($history as $data)                                    
                                        <div class="login-textarea-area">
                                            <textarea id="ckeditor1" class="contact-message" cols="30" rows="10" name="history">{!!$data->history!!}
                                            </textarea>
                                        </div>
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