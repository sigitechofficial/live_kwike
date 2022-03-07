<!doctype html>
<html lang="en">

<head>
    <title>Kwik E Mart - Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="Sigi Tech, www.sigitechnologies.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendor/font-awesome/css/font-awesome.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/color_skins.css')}}">
     <!--toastr-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body class="theme-orange">
<!-- WRAPPER -->
<div id="wrapper" class="auth-main">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-8">
                <div class="auth_detail">
                    <h2 class="text-monospace">
                        Everything<br> you need for
                        <div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel" data-interval="1500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">your Grocery</div>
                                <div class="carousel-item">your Shine</div>
                                <div class="carousel-item">your Look</div>
                                <div class="carousel-item">your Style</div>
                                <div class="carousel-item">your Reflect</div>
                            </div>
                        </div>
                    </h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <ul class="social-links list-unstyled">
                        <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">

                    <div class="header text-center">
                        <img class="img-fluid" src="{{asset('logo.png')}}">
                        <p class="lead">Login to your account</p>
                    </div>
                    <div class="body">
                        <form class="form-auth-small" action="{{route('admin/login/check')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="email" class="form-control" id="signin-email" value="email@email.com" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" class="form-control" id="signin-password" value="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox">
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">LOGIN</button>
                            <div class="bottom">
                                <span class="helper-text m-b-10"><i class="fa fa-lock"></i><a href="{{route('forget_password')}}">Forgot password?</a></span>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
<script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('message') }}");
    @endif
  
    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{!! session('error') !!}");
    @endif
  
    @if(Session::has('info'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true,
        "positionClass": "toast-bottom-full-width"
    }
            toastr.info("{{ session('info') }}");
    @endif
    
    @if (Session::has('success'))
          toastr.options.positionClass = 'toast-bottom-right';
          toastr.success("{{ Session::get('success') }}");
    @endif
    
    
    @if (Session::has('alert'))
          toastr.options.positionClass = 'toast-bottom-right';
          toastr.alert("{{ Session::get('alert') }}");
    @endif
  
  
    @if(Session::has('warning'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true,
        "positionClass": "toast-bottom-right"
    }
            toastr.warning("{{ session('warning') }}");
    @endif
    
  </script>
<script src="{{asset('public/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('public/assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('public/assets/bundles/mainscripts.bundle.js')}}"></script>
</body>
</html>
