@extends('layouts.layouts-admin')
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form id="adminpro-order-form" class="adminpro-form" method="POST" action="{{url('gallery/save')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-6">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Add Galery</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <div class="login-table-reponsive">
                                                    <table class="table" id="example">
                                                        <thead>
                                                        <tr>
                                                        <th>#</th>
                                                        <th>Gambar</th>
                                                        </tr>
                                                        <tbody>
                                                        <?php
                                                        $i = 1;
                                                        $gallery = \App\Gallery::all();
                                                        ?>   
                                                        @foreach ($gallery as $n)
                                                            <tr>
                                                                <th scope="row">{{$i++}}</th>
                                                                <td><img src="{{ url('images/'.$n->gambar) }}" style="width: 70px; height: 70px"></td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input name="gambar[]" type="file" multiple="true">
                                            </div>
                                        </div>
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
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            @endsection