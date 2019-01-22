@extends('layouts.app')
@section('title')
Add Gallery
@endsection
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<hr>
			<form action="{{url('gallery/save')}}" method="POST" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group">
						<label for="inputgambar"></label>
						<input type="file" class="form-control" name="gambar[]" multiple="true">
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-lg">Tambah Data</button>
				@csrf
			</form>
		</div>
	</div>
</div>
@endsection