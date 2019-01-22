@extends('layouts.app')
@section('title')
Gallery
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col md-8">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>Gambar</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $gallery = \App\Gallery::all();
              ?>
              @foreach($gallery as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td><img src="{{ url('images/'.$q->gambar) }}" style="width: 50px; height: 50px"></td>
              <td>
                 <a href="{{url('gallery/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>
          <a href="{{url('gallery/add')}}" class="btn btn-outline-primary btn-lg">Add Gallery</a>
      </div>
    </div>
@endsection