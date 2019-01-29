@extends('layouts.user')
@section('title')
Member
@endsection
@section('content')
<!-- Start service-page Area -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<section class="service-page-area section-gap">
<div class="container" style="margin-top: 5%;">
    <center>
    <h1>Cari Anggota</h1>
    </center>   
    <input class="form-control" type="text" name="nama" id="data">
    <center>
      <br>
    <button class="btn btn-primary" id="submit" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-search"></i></button>
    </center>
</div>
</div>
  
<script type="text/javascript">

   $(document).ready(function() {
    $('#submit').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = document.getElementById('data').value;
        $.ajax({
             type:"GET",
             url:"search2/" + id,
             success : function(results) {
                 $('#nama').val(results.nama)
                  $('#alamat').val(results.alamat)
                  $('#no_identitas').val(results.no_identitas)
                  document.getElementById('gambar').innerHTML = 
                    '<img src="images/'+results.foto+' "width="20%"/>';
             }
        }); 
    });
});  


</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <input type="text" id="nama" readonly="true">
      <input type="text" id="alamat" readonly="true">
      <input type="text" id="no_identitas" readonly="true"> 
      <div id="gambar" class="img-fluid"></div>     {{-- <img src="{{url('images/'.$foto)}}"> --}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
         
</section>
<!-- End service-page Area -->
@endsection