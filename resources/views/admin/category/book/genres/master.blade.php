<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/normalize.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/icomoon.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/transitions.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/flags.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/prettyPhoto.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/jquery-ui.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/scrollbar.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/chartist.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/main.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/dashboard.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/color.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/responsive.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/dbresponsive.css">
	<script src="{{ asset('/') }}admin/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">

<!--				Header Start-->
        
        @include('admin.include.header.header')
        
		@yield('body')
        
<!--				Footer Start-->
        @include('admin.include.footer.footer')
        
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="{{ asset('/') }}admin/js/vendor/jquery-library.js"></script>
	<script src="{{ asset('/') }}admin/js/vendor/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
	<script src="{{ asset('/') }}admin/js/tinymce/tinymce.min.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci"></script>
	<script src="{{ asset('/') }}admin/JS/responsivethumbnailgallery.js"></script>
	<script src="{{ asset('/') }}admin/js/jquery.flagstrap.min.js"></script>
	<script src="{{ asset('/') }}admin/js/backgroundstretch.js"></script>
	<script src="{{ asset('/') }}admin/js/owl.carousel.min.js"></script>
	<script src="{{ asset('/') }}admin/js/jquery.vide.min.js"></script>
	<script src="{{ asset('/') }}admin/js/jquery.collapse.js"></script>
	<script src="{{ asset('/') }}admin/js/scrollbar.min.js"></script>
	<script src="{{ asset('/') }}admin/JS/chartist.min.js"></script>
	<script src="{{ asset('/') }}admin/js/prettyPhoto.js"></script>
	<script src="{{ asset('/') }}admin/js/jquery-ui.js"></script>
	<script src="{{ asset('/') }}admin/js/countTo.js"></script>
	<script src="{{ asset('/') }}admin/js/appear.js"></script>
	<script src="{{ asset('/') }}admin/js/gmap3.js"></script>
	<script src="{{ asset('/') }}admin/js/main.js"></script>


	


<!-- Searching is here -->
<script>
$(document).ready(function(){

 function clear_icon()
 {
  $('#id_icon').html('');
  $('#post_title_icon').html('');
 }

 function fetch_data(page, sort_type, sort_by, query)
 {
  $.ajax({
   url:"/pagination/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
   success:function(data)
   {
    $('tbody').html('');
    $('tbody').html(data);
   }
  })
 }

 $(document).on('keyup', '#serach', function(){
  var query = $('#serach').val();
  var column_name = $('#hidden_column_name').val();
  var sort_type = $('#hidden_sort_type').val();
  var page = $('#hidden_page').val();
  fetch_data(page, sort_type, column_name, query);
 });

 $(document).on('click', '.sorting', function(){
  var column_name = $(this).data('column_name');
  var order_type = $(this).data('sorting_type');
  var reverse_order = '';
  if(order_type == 'asc')
  {
   $(this).data('sorting_type', 'desc');
   reverse_order = 'desc';
   clear_icon();
   $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
  }
  if(order_type == 'desc')
  {
   $(this).data('sorting_type', 'asc');
   reverse_order = 'asc';
   clear_icon
   $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
  }
  $('#hidden_column_name').val(column_name);
  $('#hidden_sort_type').val(reverse_order);
  var page = $('#hidden_page').val();
  var query = $('#serach').val();
  fetch_data(page, reverse_order, column_name, query);
 });

 $(document).on('click', '.pagination a', function(event){
  event.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
  $('#hidden_page').val(page);
  var column_name = $('#hidden_column_name').val();
  var sort_type = $('#hidden_sort_type').val();

  var query = $('#serach').val();

  $('li').removeClass('active');
        $(this).parent().addClass('active');
  fetch_data(page, sort_type, column_name, query);
 });

});
</script> 
<!-- Searching end -->



</body>
</html>



