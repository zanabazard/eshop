<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adnix-admin-template.multipurposethemes.com/main-semidark/auth_lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 10:59:46 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://adnix-admin-template.multipurposethemes.com/images/favicon.ico">

    <title>Eshop </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ URL::asset('admin/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ URL::asset('admin/css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('admin/css/skin_color.css') }}">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	<div class="wrapper">
		@include('backend.includes.header')
		@include('backend.includes.sidebar')
		<div class="content-wrapper">
			<div class="container-full">
				@yield('content')
			</div>
		</div>

		@include('backend.includes.footer')
	</div>
	<!-- Vendor JS -->
	<script src="{{ URL::asset('admin/js/vendors.min.js') }}"></script>
	<script src="{{ URL::asset('admin/js/pages/chat-popup.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/icons/feather-icons/feather.min.js') }}"></script>	
	<script src="{{ URL::asset('admin/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
	<script src="{{ URL::asset('admin/assets/vendor_components/echarts/dist/echarts-en.min.js') }}"></script>
	<script src="{{ URL::asset('admin/assets/vendor_components/Flot/jquery.flot.js') }}"></script>
	<script src="{{ URL::asset('admin/assets/vendor_components/Flot/jquery.flot.resize.js') }}"></script>
	<script src="{{ URL::asset('admin/assets/vendor_components/Flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ URL::asset('admin/assets/vendor_components/Flot/jquery.flot.categories.js') }}"></script>	
	<script src="{{ URL::asset('admin/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-us-aea-en.js') }}"></script>
	<script src="{{ URL::asset('admin/assets/vendor_components/chart.js-master/Chart.min.js') }}"></script>
	<!-- Adnix Admin App -->
	<script src="{{ URL::asset('admin/js/template.js') }}"></script>
	<script src="{{ URL::asset('admin/js/pages/dashboard2.js') }}"></script>
</body>

<!-- Mirrored from adnix-admin-template.multipurposethemes.com/main-semidark/auth_lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 10:59:46 GMT -->
</html>
