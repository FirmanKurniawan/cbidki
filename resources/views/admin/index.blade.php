@extends('layouts.admin')
@section('title')
Pemasukan
@endsection
@section('content')
<!-- visi -->
<label>Visi</label>

    <div class="container">
  <div class="row justify-content-center">
    <div class="col md-8">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>No</th>
              <th>Isi</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody> 
          <?php
              $i= 1;
              $l = \App\Visimisi::all()->where('tipe',1);
              ?>
              @foreach($l as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{!!$q->isi!!}</td>
              <td>
                <a href="{{url('admin/visi/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"></i>                
                </a>
                 </td>
            </tr>
            @endforeach               
          </tbody>
        </table>
        </div>
        <hr>
        <div class="">
          <label>   </label>
        </div>
        @csrf
          
          </div>
      </div>
    </div>

<!-- misi -->

<label>Misi</label>
<div class="container">
  <div class="row justify-content-center">
    <div class="col md-8">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>No</th>
              <th>Isi</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody> 
          <?php
              $i= 1;
              $l = \App\Visimisi::all()->where('tipe',2);
              ?>
              @foreach($l as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{!!$q->isi!!}</td>
              <td>
                <a href="{{url('admin/misi/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"></i>                
                </a>

                 </td>
            </tr>
            @endforeach               
          </tbody>
        </table>
        </div>
        <hr>
        <div class="">
          <label>   </label>
        </div>


        @csrf

          </div>
      </div>
    </div>




    <br>
    <br>
    <br>
    

@endsection