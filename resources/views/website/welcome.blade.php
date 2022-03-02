<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Kwik e Mart</title>
    <meta name="author" content="">
    <meta name="description" content="Kwik e Mart">
    <meta name="keywords" content="landing, creative, works, showcase, portfolio, projects, modern, agency, freelancers">

    <!-- FAVICON FILES -->
    <link href="assets/images/icons/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="assets/images/icons/apple-touch-icon-120-precomposed.png" rel="apple-touch-icon" sizes="120x120">
    <link href="assets/images/icons/apple-touch-icon-76-precomposed.png" rel="apple-touch-icon" sizes="76x76">
    <link href="assets/images/icons/favicon.png" rel="shortcut icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700&display=swap" rel="stylesheet">

    <!-- CSS FILES -->

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/venobox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/scrolltotop_arrow_style.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,900|Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://zeeshannawaz.com/tehmoor/woowlook/assets/css/dropifynew.min.css">
    <!-- Add icon library -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,900|Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <style>
        .input-container {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }

        .icon {
            padding: 32px;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            outline: 0;
            border: 0;
            border-bottom: 1px solid #999999;

        }

        .input-field:focus {
            border: 2px solid dodgerblue;
        }
        
        @media screen and (min-width: 991px) {
        .ml-auto {
           margin-left: -1200px;
        }
}

    </style>

</head>
    <body>

    <!-- Header
============================================= -->
    <header id="dtr-header-global" class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark dtr-menu">
            <div class="container">

                <!-- light logo -->
                <a class="navbar-brand logo-light" href="{{route('home')}}"><img class="img-fluid" src="{{asset('public/logo.png')}}" alt="Kwik e Mart" width="90"></a>
                <!-- dark logo -->
                <a class="navbar-brand logo-dark" href="{{route('home')}}"><img class="img-fluid" src="{{asset('public/logo.png')}}" alt="Kwik e Mart" width="90"></a>

                <!-- nav menu toggler-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

                <!-- menu starts-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="dtr-scrollspy navbar-nav ml-auto">
                        <li class="nav-item"> <a class="nav-link" href="{{route('home')}}">Home</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#about">Download the App</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#driver">Become Driver</a> </li>
                        <li class="nav-item"><a href="#testinomials" class="nav-link" style="border: 1px solid #002A5C; padding: 8px 35px;">Testinomials</a></li>
                    </ul>
                </div>
                <!-- menu ends-->


            </div>
        </nav>
    </header>
    <!-- header ends
================================================== -->

@yield('content')


    <!-- footer starts
================================================== -->
        <footer id="dtr-footer-global text-white" style="background:#023047;">
            <div class="container p-5" style="border-bottom: 2px solid white;"> 
                <!-- footer columns row starts -->
                <div class="row text-white"> 
                    <!-- column 1 starts -->
                    <div class="col-12 col-sm-6 col-lg-6 dtr-sm-mb-30px">
                        <p><img src="{{asset('public/logo.png')}}" width="90" alt="Kwik E Mart" class="wow pulse" data-wow-delay="0.4s"></p>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">
                            <?php echo Helper::about_us() ?>
                        </p>
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-sm-3 col-lg-3 wow fadeInRight" data-wow-delay="0.8s">
                        <h4 class="text-white">Our Facilities </h4>
                        <ul class="dtr-list">
                            <li><a class="text-white" href="{{route('privacy_policy')}}">Privacy Policy</a></li>
                            <li><a class="text-white" href="{{route('terms_conditions')}}">Terms And Conditions</a></li>
                            <!--<li><a class="text-white" href="{{route('terms_conditions')}}">Research Equipments</a></li>-->
                            <!--<li><a class="text-white" href="{{route('terms_conditions')}}">IT Support</a></li>-->
                        </ul>
                    </div>
                    <!-- column 2 ends --> 
                    
                    <!-- column 3 starts -->
                    <div class="col-12 col-sm-3 col-lg-3 dtr-sm-mb-30px wow fadeInRight" data-wow-delay="0.4s">
                        <h4 class="text-white">Registration</h4>
                        <ul class="dtr-list">
                            <li><a class="text-white" href="{{route('home')}}">Home</a></li>
                            <li><a class="text-white" href="{{route('signup')}}">Become Driver</a></li>
                            <!--<li><a class="text-white" href="{{route('terms_conditions')}}">Media Center</a></li>-->
                            <!--<li><a class="text-white" href="{{route('terms_conditions')}}">People</a></li>-->
                        </ul>
                    </div>
                    <!-- column 3 ends --> 
                </div>
                <!-- footer columns row ends --> 
            </div>
        </footer>
        <footer class="p-4" style="background:#023047;">
            <div class="container"> 
                <!-- copyright row starts -->
                <div class="row">
                    <div class="col-12 col-md-12 text-white text-center">&copy; copyright 2022. Designed & Developed by<a href="https://sigitechnologies.com/"> SIGI Technologies</a></div>
                </div>
                <!-- copyright row ends --> 
            </div>
        </footer>
        <!-- footer ends
================================================== -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Log In</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <div class="p-3">
            <div class="mt-2">
                <div class="authent-logo text-center mb-3">
                    <img class="img-fluid" src="{{asset('public/logo.png')}}" alt="U-Bolt" width="80" >
                </div>
                    
                <div class="form-style">
                    @if(Session::has('message'))
                        <p class="alert alert-danger text-danger">{{ Session::get('message') }}</p>
                    @endif
                    <form method='POST' action="https://devglocal.com/nzcs/login">
                            @csrf
                        <div class="mb-2">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" value="admin@gmail.com" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="form-floating">
                                <input type="password" name="password" value="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button  type="submit" class="btn btn-info m-b-xs">Login</button>
                        </div>
                    </form>
                    <div class="pt-4 text-center">
                        Get Members Benefit. <a href="{{route('signup')}}">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <!-- Modal footer -->
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
      <!--</div>-->

    </div>
  </div>
</div>

<script>
        $(document).ready(function(){
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element){
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e){
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>


        <!-- JS FILES -->
    <script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript" ></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/jquery.easing.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/swiper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/venobox.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/select2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/jquery.form.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/wow.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/custom.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/scrolltotop_arrow_code.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/dropifynew.min.js')}}"></script>



        <script>
            // wow animations
            if( $(window).outerWidth() >= 767 ) {
                new WOW().init({
                    mobile: false,
                });
            }
        </script>



    </body>
</html>
