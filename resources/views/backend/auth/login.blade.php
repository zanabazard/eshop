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
<body class="hold-transition theme-primary bg-img" style="background-image: url({{ URL::asset('admin/images/auth-bg/bg-1.jpg') }}">
    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">	
            
            <div class="col-12">
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded30 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Нэвтрэх хуудас</h2>
                                <p class="mb-0">Eshop админ хэсэг</p>							
                            </div>
                            <div class="p-40">
                                <form action="/dashboard" method="post">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control pl-15 bg-transparent" placeholder="Нэвтрэх нэр">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                            </div>
                                            <input type="password" class="form-control pl-15 bg-transparent" placeholder="Нууц үг">
                                        </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-6">
                                          <div class="checkbox">
                                            <input type="checkbox" id="basic_checkbox_1" >
                                            <label for="basic_checkbox_1">Сануулах</label>
                                          </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                         <div class="fog-pwd text-right">
                                            <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Нууц үгээ мартсан</a><br>
                                          </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                          <button type="submit" class="btn btn-danger mt-10">Нэвтрэх</button>
                                        </div>
                                        <!-- /.col -->
                                      </div>
                                </form>	
                                <div class="text-center">
                                    <p class="mt-15 mb-0"> <a href="auth_register.html" class="text-warning ml-5">Бүртгүүлэх</a></p>
                                </div>	
                            </div>						
                        </div>
                        <div class="text-center">
                          <p class="mt-20 text-white">- Sign With -</p>
                          <p class="gap-items-2 mb-20">
                              <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
                              <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
                              <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
                            </p>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Vendor JS -->
	<script src="{{ URL::asset('admin/js/vendors.min.js') }}"></script>
	<script src="{{ URL::asset('admin/pages/chat-popup.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/icons/feather-icons/feather.min.js') }}"></script>	

</body>

<!-- Mirrored from adnix-admin-template.multipurposethemes.com/main-semidark/auth_lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 10:59:46 GMT -->
</html>
