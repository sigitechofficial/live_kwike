@extends('welcome')
@section('content')

<!-- == content section starts == -->
    <div id="dtr-main-content" style="margin-top: 100px;">
        <div class="container">
            <div class="dtr-page-with-sidebar dtr-has-right-sidebar"> 
                
                <!-- ========== page main content area starts ========== -->
                <div class="dtr-main page-pt page-pb"> 
                    <div class="single-post"> 
                        
                        <!-- image -->
                        <div class="single-img"> <img src="https://www.dsspak.pk/wp-content/uploads/2021/08/terms-and-condition-booking-nepal-tour.jpg" alt="image"> </div>
                        
                        <!-- meta-->
                        <!--<ul class="entry-meta single-meta clearfix">-->
                        <!--    <li class="meta-date"><a href="#">February 25, 2020</a></li>-->
                        <!--    <li class="meta-author"><a href="#">John Doe</a></li>-->
                        <!--    <li class="meta-category"><span>in</span> <a href="#">Marketing</a>, <a href="#">Fintech</a></li>-->
                        <!--</ul>-->
                        
                        <!-- content text starts -->
                        <div class="single-post-content">
                            {{ $tnc }}
                        </div>
                        <!-- content text ends --> 
                        
                        
                        
                    </div>
                </div>
                <!-- ========== page main content area ends ========== --> 
                
                
                
            </div>
        </div>
        
        
        
    </div>
    <!-- == content section ends == --> 

@endsection