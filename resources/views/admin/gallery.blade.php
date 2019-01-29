@extends('layouts.layouts-admin')
@section('title')
Admin - Gallery
@endsection
@section('content')

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form id="adminpro-order-form" class="adminpro-form" method="POST" action="{{url('gallery/save')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Gallery<span class="table-project-n"></span></h1>
                                <div class="sparkline13-outline-icon">
                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="No">No</th>
                                            <th data-field="gambar">Gambar</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        $gallery = \App\Gallery::all();  
                                        ?>
                                        @foreach ($gallery as $n)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td><img src="{{ url('images/'.$n->gambar) }}" style="width: 70px; height: 70px"></td>
                                            <td class="datatable-ct"><a href="{{url('gallery/delete/'.$n->id)}}"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                                <div class="form-row">
                                    <br>
                                    <center>
                                        <label>Tambah Gambar</label>
                                        <div class="form-group col-md-12">
                                          <img src="{{asset('images/no-image.png')}}" alt="Nature" class="responsive" id="blah1" style="width: 200px;height: 200px;">
                                          <center>
                                          </center>
                                      </div>
                                  </center>
                              </div>
                                <div class="form-row">
                              <center>
                                  <div class="form-group col-md-12">
                                    <input type="file" multiple="true" id="inputCity" name="gambar[]" onchange="readURL1(this);">
                                </div>
                            </div>
                            <div class="form-row">
                                <center>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        </center>
                    </div>
                </form>
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