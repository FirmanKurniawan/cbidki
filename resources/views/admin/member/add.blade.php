@extends('layouts.layouts-admin')
@section('content')

<!-- Breadcome End-->
<!-- Order Form Start-->
<div class="login-form">
  <div class="login-bg">
    <div class="container-fluid">
      <div class="row">
        <form action="{{url('admin/member/save')}}" method="POST" id="adminpro-order-form" class="adminpro-form" enctype="multipart/form-data">
          @csrf
          <div class="col-lg-12">
            
            <div class="row">
              <div class="col-lg-12">
                <div class="login-title">
                  <h1>Member</h1>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nama</label>
                <input type="hidden" name="id">
                <input type="text" class="form-control" id="inputEmail4" placeholder="Nama" name="nama">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">No Identitas</label>
                <input type="number" class="form-control" id="inputPassword4" placeholder="No Identitas" name="no_identitas">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Alamat</label>
                <textarea  type="text" class="form-control" id="inputEmail4" placeholder="Alamat" name="alamat"></textarea>
              </div>
            </div>
            <div class="form-row">
              <center>
                <div class="form-group col-md-12">
                  <img src="{{asset('images/no-image.png')}}" alt="Nature" class="responsive" id="blah1" style="width: 200px;height: 200px;">
                  <center>
                    <label>Foto</label>
                  </center>
                </div>
              </center>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <input type="file" class="form-control" id="inputCity" name="foto" onchange="readURL1(this);">
              </div>
            </div>
            <div class="form-row" style="float: right;">
              <div class="form-group" style="float: right;">
                <button type="submit" class="btn btn-primary" style="float: right;"><i class="fa fa-edit"></i></button>
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
<script type="text/javascript">
 function readURL1(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah1')
      .attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>
@endsection