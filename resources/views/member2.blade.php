@extends('layouts.user')
@section('content')
<section>
<div class="modal fade add-friends-modal" tabindex="-1" role="dialog" 
aria-labelledby="friends-modal" aria-hidden="true">
<div class="modal-dialog modal-lg">

<div class="modal-content">

    <div class="modal-header ">
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <h5 class="modal-title text-center">Add new friend:</h5>
                </div>
                <div class="row mx-auto">
                    <form class="form-inline mt-4 mb-4" action="javascript:search();">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" 
              id="search-input">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>

            </div>
        </div>

        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="modal-body">
      <div id="results"></div>
  </div>

</div>
<script type="text/javascript">
function loaddata()
{
 var name=document.getElementById( "username" );
	
 if(name)
 {
  $.ajax({
  type: 'POST',
  url: '',
  data: {
   user_name:name,
  },
  success: function (response) {
   // We get the element having id of display_info and put the response inside it
   $( '#display_info' ).html(response);
  }
  });
 }
	
 else
 {
  $( '#display_info' ).html("Please Enter Some Words");
 }
}
</script>
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
	function search($){
var price = $
var image = $
var name  = $
var id    = $
$.ajax({
type: "POST",
url: "url('')",
data: "id="+id+"&image="+image+"&name="+name+"&price="+price,
success: function (response) {
	$(".cartcount").text(response);
}
});
}
</script>

</section>
@endsection