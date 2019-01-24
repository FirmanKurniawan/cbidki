@extends('layouts.admin')
@section('title')
Edit Pemasukan
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <hr>
      <form action="{{url('/admin/misi/update')}}" method="POST" enctype="multipart/form-data">

        <div class="form-group col-md-25">
            <label>Isi</label>
            <label for="ckeditor"></label>
            <textarea name="isi" id="ckeditor1">{!!$a->isi!!}</textarea>
        </div>
         
          @csrf
          <input type="hidden" name="id" value="{{$a->id}}">
          <button class="btn btn-primary float-right btn-lg" type="submit"><i class="fas fa-pen"></i></button>
        </form>
      </form>

      </div>
    </div>
  </div>
@endsection