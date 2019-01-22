@extends('layouts.app')
@section('title')
Edit Gallery
@endsection
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<hr>
			<form action="{{url('gallery/update')}}" method="POST" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group">
						<label class="inputgambar"></label>
						<input type="file" name="form-control" name="gambar[]" value="{{$gallery->gambar}}" multiple="true">
					</div>
				</div>
				<hr>
				<input type="hidden" name="id" value="{{$gallery->id}}">
				<button type="submit" class="btn btn-primary btn-lg">Edit Data</button>
				@csrf
			</form>
		</div>
	</div>
</div>
@endsection