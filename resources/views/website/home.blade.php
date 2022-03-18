@extends('website.welcome')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.2.0/css/swiper.min.css">

<style>


/*contact us section start here */
.brand-wrapper {
    margin-bottom: 19px;
}
   
.brand-wrapper .logo {
    height: 70px;
}

.login-card {
    border: 0;
    border-radius: 27.5px;
    -webkit-box-shadow: 2px -2px 13px 10px rgba(0,0,0,0.14);
    -moz-box-shadow: 2px -2px 13px 10px rgba(0,0,0,0.14);
    box-shadow: 2px -2px 13px 10px rgba(0,0,0,0.14);
    overflow: hidden;
}

.login-card-img {
    border-radius: 0;
    position: absolute;
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
}

.login-card .card-body {
    padding: 85px 60px 60px;
}

@media (max-width: 422px) {
    .login-card .card-body {
        padding: 35px 24px;
    }
}
.login-card-description {
    font-size: 25px;
    color: #000;
    font-weight: normal;
    margin-bottom: 23px;
}
  
.login-card .form-control {
    border: 1px solid #d5dae2;
    padding: 15px 25px;
    margin-bottom: 20px;
    min-height: 45px;
    font-size: 13px;
    line-height: 15;
    font-weight: normal;
}

.login-card .form-control::-webkit-input-placeholder {
      color: #919aa3;
}

.login-card .form-control::-moz-placeholder {
      color: #919aa3;
}

.login-card .form-control:-ms-input-placeholder {
      color: #919aa3;
}

.login-card .form-control::-ms-input-placeholder {
      color: #919aa3;
}

.login-card .form-control::placeholder {
      color: #919aa3;
}

.login-card .login-btn {
    padding: 13px 20px 12px;
    background-color: #000;
    border-radius: 4px;
    font-size: 17px;
    font-weight: bold;
    line-height: 20px;
    color: #fff;
    margin-bottom: 24px;
}

.login-card .login-btn:hover {
      border: 1px solid #000;
      background-color: transparent;
      color: #000;
}

.login-card .forgot-password-link {
    font-size: 14px;
    color: #919aa3;
    margin-bottom: 12px;

    
}
  .login-card-footer-text {
    font-size: 16px;
    color: #0d2366;
    margin-bottom: 60px;
}

@media (max-width: 767px) {
    .login-card-footer-text {
        margin-bottom: 24px;
    }
}

.login-card-footer-nav a {
    font-size: 14px;
    color: #919aa3;
}

/*# sourceMappingURL=login.css.map */


/*contact us section end here */

    .slanted {
    	position: relative;
    	overflow: hidden;
    }
    .oval {
    	position: relative;
    	overflow: hidden;
    }
    
    .slanted:before {
        content: '';
        border-style: solid;
        border-width: 0 0 86px 121rem;
        width: 100%;
        height: auto;
        right:1px;
        position: absolute;
        color:#01C7B8;
        border-left-color: white;
    }
    .oval:before {
        content: '';
        background:#fde24f url('public/design.png') no-repeat;
        background-size: contain;
        width: 100%;
        height: 245px;
        position: absolute;
        bottom:80%;
    }
    
    .slanted:after {
        content: '';
        border-style: solid;
        border-width: 114px 156rem 0 0;
        width: 100%;
        height: auto;
        height: 75px;
        top: 88%;
        right:0px;
        position: absolute;
        color:#01C7B8;
        border-right-color: white;
    }
     .oval:after {
        content: '';
        background:url('public/design1.png') no-repeat;
        background-size: contain;
        width: 100%;
        height: 184px;
        top:60%;
        z-index:-2;
        position: absolute;
    }

    .cta{
        background:#fde24f;
        border-bottom-right-radius:41%;
        border-bottom-left-radius:40%;
    }

    .hero-default-bg{
        background:url('public/banner.png');
        background-color: rgb(215 250 254);
        background-size: contain;
        background-repeat: no-repeat;
        background-position: right;
    }
    
   
    
    @media only screen and (max-width: 460px) {
        .hero-default-bg {
           background-size: cover;
           background:url('public/fruits-12128.png');
           background-position: center;
           background-color: rgb(215 250 254);
        }
        .cta{
            background:#fde24f;
            border-bottom-right-radius:0%;
            border-bottom-left-radius:0%;
        }
        .oval:before {
            bottom:62%;
        }
        .oval:after {
            top:100%;
        }
        .oval_div{
            margin-top:61px;
        }
        .slanted:after {
            top: 95%;
            border-width: 170px 156rem 0 0;
        }
        #dtr-header-global, #dtr-header-global.on-scroll{
            padding:0px;
        }
    }
    @media only screen and (max-width: 560px) {
      .parcel_deliver_pic {
        justify-content:center!important;
      }
    }
    
    @media only screen and (max-width: 700px) {
        .hide-content {
            display: none;
        }
    }
    
    @media only screen and (max-width: 991px) {
        .done {
            display: none;
        }
    }
    
    @media only screen and (min-width: 991px) {
        .done1 {
            display: none;
        }
    }
    
    </style>

    <!-- hero section starts
================================================== -->
    <section id="home" class="hero-section dtr-py-8 hero-default-bg">
        <div class="container">
            <div class="row align-items-center">
                <!-- column 1 starts -->
                <div class="col-12 col-md-6 justify-content-center">
                     
                        <!-- Heading -->
                        <h2 class="dtr-mb-4 wow fadeInUp" data-wow-delay="0.4s" style="color: #f88c67;">
                            Everything at your <br>doorstep.
                        </h2>
                        <!-- Text -->
                        <p class=""> Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                        <h5 class=""> Get The App Now.  </h5>
                        <div class="row mt-5 done">
                            <div class="col-md-5 col-lg-5 col-12">
                                <img src="{{asset('public/play.png')}}">
                            </div>
                            <div class="col-md-5 col-lg-5 col-12">
                                <img src="{{asset('public/ios.png')}}">
                            </div>
                        </div>
                    
                </div>
                <!-- column 1 ends -->

                <!-- column 2 starts -->
                <div class="col-12 col-md-6 wow fadeInRight" data-wow-delay="0.4s">
                    <!--<img class="img-fluid" src="{{asset('public/banner_img.png')}}" width="600">-->
                </div>
                <!-- column 2 ends -->
            </div>
            
            <div class="row done1">
                    <div class="col-md-5 col-lg-5 col-12">
                        <img src="assets/images/play-store.png">
                    </div>
                    <div class="col-md-5 col-lg-5 col-12">
                        <img src="assets/images/app-store.png">
                    </div>
            </div>
        
        </div>
    </section>
    <!-- hero section starts
================================================== -->


    <!-- features section starts
================================================== -->
    <section id="about" class="dtr-pt-7 dtr-pb-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 col-lg-6">
                    <div class="text-center">
                        <img class="img-fluid text-center" src="{{asset('public/about.png')}}" width="180">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6" style="display:grid; align-items:center;">
                    <div class="">
                        <p>
                            <h3>
                                About the App
                            </h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- features section ends
================================================== -->

    <!-- features section starts
================================================== -->
    <div class="slanted">
    <section id="pricing" style="background-color:#01C7B8;margin-bottom:5rem;">
        <div class="container" style="padding-bottom:30px;padding-top: 116px;" >
            <h3 class="" style="font-weight: 800;">From any store to your door, just make a list and we’ll make it disappear</h3>
            <div class="row mt-5">
                <div class="col-md-4 col-lg-4">
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-md-10 col-lg-10">
                                <div class="d-flex justify-content-start parcel_deliver_pic">
                                    <img class="dtr-mb-4" src="{{asset('public/g-1.png')}}" alt="icon">
                                </div>
                                <!-- Text -->
                                <h5>Have your parcel delivered </h5>
                                <p style="text-align: left;font-size:12px;line-height: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                        <!-- Heading -->
                    </div>
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-md-10 col-lg-10">
                                <div class="d-flex justify-content-start parcel_deliver_pic">
                                    <img class="dtr-mb-4" src="{{asset('public/g-1.png')}}" alt="icon">
                                </div>
                                <!-- Text -->
                                <h5>Have your parcel delivered </h5>
                                <p style="text-align: left;font-size:12px;line-height: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!-- Heading -->
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-md-10 col-lg-10">
                                <div class="d-flex justify-content-start parcel_deliver_pic">
                                    <img class="dtr-mb-4" src="{{asset('public/g-1.png')}}" alt="icon">
                                </div>
                                <!-- Text -->
                                <h5>Have your parcel delivered </h5>
                                <p style="text-align: left;font-size:12px;line-height: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!-- Heading -->
                    </div>
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-md-10 col-lg-10">
                                <div class="d-flex justify-content-start parcel_deliver_pic">
                                    <img class="dtr-mb-4" src="{{asset('public/g-1.png')}}" alt="icon">
                                </div>
                                <!-- Text -->
                                <h5>Have your parcel delivered </h5>
                                <p style="text-align: left;font-size:12px;line-height: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!-- Heading -->
                    </div>
                </div>
                <div class="col-md-4 col-lg-4" style="display:grid;place-content: center;">
                    <div class="text-center">
                        <img class="img-fluid text-center" src="{{asset('public/group.png')}}">
                    </div>
                </div>
            </div>

        </div>
    </section>
    </div>
    <!-- features section ends
================================================== -->

   
<!-- features section starts
================================================== -->
    <section id="#" class="dtr-pt-7 dtr-pb-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 col-lg-6" style="display:grid; align-items:center;">
                    <div class="">
                        <p><h3>Start Selling Now</h3>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                        </p>
                        <a href="{{route('signup.retailer')}}" class="mt-5" style="background-color: #FDE24F; padding: 10px 30px;">Become a Seller</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="text-center">
                        <img class="img-fluid text-center" src="{{asset('public/selling.png')}}" style="border-radius:50%;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- features section ends
================================================== -->

 
    <!-- cta section starts
================================================== -->
    
<div class="oval" style="overflow: initial;margin-top:140px;">
    <section class="mb-5 cta" style="">
        <div class="container">
            <div class="row" style="padding: 60px 60px 0px 60px;">
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp text-center" data-wow-delay="0.4s">
                    <img class="img-fluid" src="{{asset('public/Vector.png')}}" width="70">
                    <p class="mt-2" style="font-weight: 900;line-height: normal;">Download the<br> Kwik eMart app</p>
                </div>
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp text-center" data-wow-delay="0.4s" style="margin-top: 61px;">
                    <img src="{{asset('public/Vector1.png')}}" width="70">
                    <p class="mt-2" style="font-weight: 900;line-height: normal;">Browse your fvrt products</p>
                </div>
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp text-center oval_div" data-wow-delay="0.4s">
                    <img src="{{asset('public/Vector2.png')}}" width="70">
                    <p class="mt-2" style="font-weight: 900;line-height: normal;">Grab your products <br>just in 15 mins</p>
                </div>
            </div>
        </div>
    </section>
</div>    

    <!-- cta section ends
================================================== -->

 
<!-- features section starts
================================================== -->
    <section id="driver" class="dtr-pt-7 dtr-pb-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-7 col-lg-7">
                    <div class="text-center">
                        <img class="img-fluid text-center" src="{{asset('public/delivery.png')}}">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5" style="display:grid; align-items:center;">
                    <div class="">
                        <h3>
                            <a href="{{route('signup')}}">Become a Driver</a>
                        </h3>
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                        </p>
                        <button class="mt-5" style="background-color: #FDE24F; padding: 10px 30px;">
                            <a href="{{route('signup')}}">Register Now</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- features section ends
================================================== -->


<!-- features section starts
================================================== -->
    <section class="dtr-pt-7 dtr-pb-5">
        <div class="container">
            <div class="row mt-5 mb-5 justify-content-center text-center">
                <h2>Trusted Partners</h2>
                <div class="p-2"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. .</b></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 mb-2">
                        <div class="card shadow">
                            <img src="https://drive.google.com/uc?export=view&id=1aj_vT5zjJlkdEQ_VcCsdnvpVBi-Fjwyb" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 mb-2">
                        <div class="card shadow">
                            <img src="https://drive.google.com/uc?export=view&id=1aj_vT5zjJlkdEQ_VcCsdnvpVBi-Fjwyb" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 mb-2">
                        <div class="card shadow">
                            <img src="https://drive.google.com/uc?export=view&id=1aj_vT5zjJlkdEQ_VcCsdnvpVBi-Fjwyb" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 mb-2">
                        <div class="card shadow">
                            <img src="https://drive.google.com/uc?export=view&id=1aj_vT5zjJlkdEQ_VcCsdnvpVBi-Fjwyb" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- features section ends
================================================== -->


<!-- Exclusive listings -->
<section class="loco_listing loco_section py-4 py-sm-5 swiper-cpagination" id="testinomials" style="background:#DAFFFC;">
  <div class="container">
    <div class="row text-center">
        <div class="col-md-12 col-lg-12 mb-3">
            <h2 class="mb-4 mt-3" style="color: #77C3FD;">People are Talking</h2>
            <p><b>Learn one-on-one from a tutor who’s certified to teach your specific subject. Review profiles and read their reviews to choose the tutor that fits your learning style.</b></p>
        </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="swiper-container swiper-container-horizontal loco_listing__carousel" data-slides-per-view="3" data-space-between="30" data-loop="true" data-click="false" data-spvxs="1" data-center-xs-slide="true" data-spvsm="auto" data-spvmd="2" data-spvlg="3" data-spvxl="3" data-dynamic-bullets="true" data-free-mode="true">
          <div class="swiper-wrapper pb-5">
            <div class="swiper-slide loco_listing__carousel_slide">
              <div class="card shadow" style="background:#01C7B8!important;">
                <div class="position-relative">
                  <a href="#">
                    <img class="img-fluid" src="https://blog.hubspot.com/hubfs/Customer-testimonial-page.jpg" alt="loco wp listing">
                  </a>
                </div>
                <div class="card-body loco_listing__card_body p-4">
                  <div class="loco_listing__card_footer">
                    <p class="font-weight-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <h4><b>Emilly Wills</b></h4>
                    <span>Student, New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide loco_listing__carousel_slide">
              <div class="card shadow">
                <div class="position-relative">
                  <a href="#">
                    <img class="img-fluid" src="https://sixads.net/wp-content/uploads/2021/03/thumbs-up.jpg" alt="loco wp listing">
                  </a>
                </div>
                <div class="card-body loco_listing__card_body p-4">
                  <div class="loco_listing__card_footer">
                    <p class="font-weight-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <h4><b>Emilly Wills</b></h4>
                    <span>Student, New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide loco_listing__carousel_slide">
              <div class="card shadow">
                <div class="position-relative">
                  <a href="">
                    <img class="img-fluid" src="https://media.istockphoto.com/photos/portrait-of-a-black-businessman-picture-id1272484631?k=20&m=1272484631&s=612x612&w=0&h=5NnMzEH0qmUb_Kd8NlPN4XkAIKDVVIgn6dZlP9qXGYc=" alt="loco wp listing">
                  </a>
                </div>
                <div class="card-body loco_listing__card_body p-4">
                  <div class="loco_listing__card_footer">
                    <p class="font-weight-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <h4><b>Emilly Wills</b></h4>
                    <span>Student, New York</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide loco_listing__carousel_slide">
              <div class="card shadow">
                <div class="position-relative">
                  <a href="single.html">
                    <img class="img-fluid" src="https://ca.hellomagazine.com/imagenes//celebrities/20211114126298/shakira-bares-all-daring-throwback-incredible-milestone-anniversary/0-609-12/shakira-hair-standard-t.jpg" alt="loco wp listing">
                  </a>
                </div>
                <div class="card-body loco_listing__card_body p-4">
                  <div class="loco_listing__card_footer">
                    <p class="font-weight-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <h4><b>Emilly Wills</b></h4>
                    <span>Student, New York</span>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
          <div class="swiper-pagination loco_carousel__pagination carousel__pagination mt-4"></div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.Exclusive listings -->



    <!-- cta section ends
================================================== -->
    <!-- cta section starts
================================================== -->
    <!--<section id="dtr-footer-global" class="dtr-pt-7 dtr-pb-5 dtr-sm-mb-30px color-white">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-4 col-lg-4">-->
    <!--                <form>-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-md-6">-->
    <!--                            <input type="text" name="" placeholder="First Name" style="border: 0; border-bottom: 1px solid #999999; outline: 0;">-->
    <!--                        </div>-->
    <!--                        <div class="col-md-6">-->
    <!--                            <input type="text" name="" placeholder="Last Name" style="border: 0; border-bottom: 1px solid #999999; outline: 0;">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <input type="text" name="email" placeholder="Email" style="border: 0; border-bottom: 1px solid #999999; outline: 0;">-->
    <!--                    <input type="text" name="notes" placeholder="Message" style="border: 0; border-bottom: 1px solid #999999; outline: 0;">-->
    <!--                    <button class="mt-5" style="background-color: #01C7B8; padding: 10px 30px; color: white;">Send Message</button>-->
    <!--                </form>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- cta section ends
================================================== -->
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0 mb-5 mt-5">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
            <div class="col-md-5" style="background:#01C7B8;">
                <div class="text-white" style="padding:60px;">
                    <h3 class="text-white">Contact Information</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div  class="text-white d-flex flex-column justify-content-between" style="padding:0px 60px 60px 60px;">
                    <p><i class="fas fa-phone-alt"></i> +92000000000</p>
                    <p><i class="fas fa-map-marker-alt"></i> Model Town, Lahore</p>
                    <p><i class="fas fa-envelope"></i> abc@xyz.com</p>
                </div>
              
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="" placeholder="First Name" style="border: 0; border-bottom: 1px solid #999999; outline: 0;">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="" placeholder="Last Name" style="border: 0; border-bottom: 1px solid #999999; outline: 0;">
                            </div>
                        </div>
                        <input type="text" name="email" placeholder="Email" style="border: 0; border-bottom: 1px solid #999999; outline: 0;">
                        <input type="text" name="notes" placeholder="Message" style="border: 0; border-bottom: 1px solid #999999; outline: 0;">
                        <button class="mt-5" style="background-color: #01C7B8; padding: 10px 30px; color: white;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </main>
<style>

</style>




<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.2.0/js/swiper.min.js"></script>
<script>
jQuery(document).ready(function(){
  jQuery('.swiper-container').each(function () {
    var swiperThis = jQuery(this);
    var loopLength = swiperThis.data('slides-per-view');
    var divLength = jQuery(this).find("div.swiper-slide").length;
    var nextbtn = swiperThis.closest(".swiper-btns").find('.carousel__btn_next');
    var prevbtn = swiperThis.closest(".swiper-btns").find('.carousel__btn_prev');
    var sPagination = swiperThis.closest(".swiper-cpagination").find('.carousel__pagination');
    if (divLength >= loopLength) {
      var locoSwiper = new Swiper(swiperThis, {
        slidesPerView: swiperThis.data('slides-per-view'),
        observer: true,
        observeParents: true,
        spaceBetween: swiperThis.data("space-between"),
        loop: swiperThis.data("loop"),
        clickable: swiperThis.data("click"),
        centeredSlides: swiperThis.data("center-slide"),
        freeMode: swiperThis.data("free-mode"),
        effect: swiperThis.data("effect"),
        autoHeight: swiperThis.data("auto-height"),
        autoplay: swiperThis.data("auto-play"),
        pagination: {
          el: sPagination,
          clickable: true,
          dynamicBullets: swiperThis.data("dynamic-bullets"),
        },
        navigation: {
          nextEl: nextbtn,
          prevEl: prevbtn
        },
        scrollbar: {
          container: swiperThis,
          hide: true,
        },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: swiperThis.data("spvxs"),
            spaceBetween: swiperThis.data("space-between"),
          },
          // when window width is >= 576px
          576: {
            slidesPerView: swiperThis.data("spvsm"),
            spaceBetween: swiperThis.data("space-between"),
          },
          // when window width is >= 768px
          768: {
            slidesPerView: swiperThis.data("spvmd"),
            spaceBetween: swiperThis.data("space-between"),
          },
          // when window width is >= 992px
          992: {
            slidesPerView: swiperThis.data("spvlg"),
            spaceBetween: swiperThis.data("space-between"),
          },
          1200:{
            slidesPerView: swiperThis.data("spvxl"),
            spaceBetween: swiperThis.data("space-between"),
          }
        }
      });
    }else{
      var locoSwiper = new Swiper(swiperThis, {
        slidesPerView: swiperThis.data("slides-per-view"),
        spaceBetween: swiperThis.data("space-between"),
        loop: false,
        clickable: swiperThis.data("click"),

        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.carousel__btn_next',
          prevEl: '.carousel__btn_prev',
        },
        scrollbar: {
          container: swiperThis,
          hide: true,
        },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: swiperThis.data("spvxs"),
            spaceBetween: swiperThis.data("space-between"),
          },
          // when window width is >= 576px
          576: {
            slidesPerView: swiperThis.data("spvsm"),
            spaceBetween: swiperThis.data("space-between"),
          },
          // when window width is >= 768px
          768: {
            slidesPerView: swiperThis.data("spvmd"),
            spaceBetween: swiperThis.data("space-between"),
          },
          // when window width is >= 992px
          992: {
            slidesPerView: swiperThis.data("spvlg"),
            spaceBetween: swiperThis.data("space-between"),
          },
          1200: {
            slidesPerView: swiperThis.data("spvxl"),
            spaceBetween: swiperThis.data("space-between"),
          }
        }
      });
    }
  });
});

</script>

<script>
// select all accordion items
const accItems = document.querySelectorAll(".accordion__item");

// add a click event for all items
accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

function toggleAcc() {
  // remove active class from all items exept current item
  accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null
  );

  // toggle active class on current item
  if (this.classList != "accordion__item--active") {
    this.classList.toggle("accordion__item--active");
  }
}

</script>


@endsection
