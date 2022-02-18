<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Kwik E Mart - DASHBAORD</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="www.sigitechnologies.com">

    <link rel="icon" href="{{asset('logo.png')}}" type="image/x-icon">
    
        <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts-c3/plugin.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/multi-select/css/multi-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/dropify/css/dropify.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/summernote/dist/summernote.css')}}" />
    
    
        <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
    
        <!--toastr-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   
    <style>
        /* ===== Scrollbar CSS ===== */
        /* Firefox */
        * {
            scrollbar-width: auto;
            scrollbar-color: #8f54a0 #ffffff;
        }
        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 16px;
        }
        *::-webkit-scrollbar-track {
            background: #ffffff;
        }
        *::-webkit-scrollbar-thumb {
            background-color: #8f54a0;
            border-radius: 10px;
            border: 3px solid #ffffff;
        }
    </style>
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('logo.png')}}" alt="Kwik E Mart"></div>
        <p>Please wait...</p>
    </div>
</div>

<div id="wrapper">
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="{{route('admin/home')}}"><img src="{{asset('logo.png')}}" alt="Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
            </div>

            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('settings')}}"><i class="icon-settings"></i></a></li>
                        <li><a href="{{route('login')}}" class="icon-menu"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand text-center">
            <a href="{{route('admin/home')}}"><img src="{{asset('logo.png')}}" alt="Kwik E Mart Logo" class="img-fluid" width="90"></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="active"><a href="{{route('admin/home')}}"><i class="icon-home"></i><span>Dashboard</span></a></li>
                    <li>
                        <a href="#uiElements" class="has-arrow mb-1"><i class="icon-users"></i><span>Retailer Management</span></a>
                        <ul @if(\Request::route()->getName() == 'add_retail' || \Request::route()->getName() == 'pending_retailer' || \Request::route()->getName() == 'all_retailer') class="collapse in" aria-expanded="true" @endif>
                            <li @if(\Request::route()->getName() == 'add_retail') class="active" @endif><a href="{{route('add_retail')}}"> Add Retail</a></li>
                            <li @if(\Request::route()->getName() == 'pending_retailer') class="active" @endif><a href="{{route('pending_retailer')}}"> Pending Retailer</a></li>
                            <li @if(\Request::route()->getName() == 'all_retailer') class="active" @endif><a href="{{route('all_retailer')}}"> All Retailers</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#forms" class="has-arrow mb-1"><i class="fa fa-users"></i><span>&nbsp; Users </span></a>
                        <ul @if(\Request::route()->getName() == 'add_user' || \Request::route()->getName() == 'all_user') class="collapse in" aria-expanded="true" @endif>
                            <li @if(\Request::route()->getName() == 'add_user') class="active" @endif><a href="{{route('add_user')}}">Add Users</a></li>
                            <li @if(\Request::route()->getName() == 'all_user') class="active" @endif><a href="{{route('all_user')}}">All Users</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#forms" class="has-arrow mb-1"><i class="icon-pencil"></i><span>Category Management</span></a>
                        <ul @if(\Request::route()->getName() == 'category.index' || \Request::route()->getName() == 'category.create' || \Request::route()->getName() == 'category.create.sub'  || \Request::route()->getName() == 'category.create.sub.sub' || \Request::route()->getName() == 'category.load_sub') class="collapse in" aria-expanded="true" @endif>
                            <li @if(\Request::route()->getName() == 'category.index') class="active" @endif><a href="{{route('category.index')}}">Main Categories</a></li>
                            <li @if(\Request::route()->getName() == 'category.create') class="active" @endif><a href="{{route('category.create')}}">Add Category</a></li>
                            <li @if(\Request::route()->getName() == 'category.create.sub') class="active" @endif><a href="{{route('category.create.sub')}}">Add Sub Category</a></li>
                            <li @if(\Request::route()->getName() == 'category.create.sub.sub') class="active" @endif><a href="{{route('category.create.sub.sub')}}">Add Sub Sub Category</a></li>
                            <li @if(\Request::route()->getName() == 'category.load_sub') class="active" @endif><a href="{{route('category.load_sub')}}">View Sub Category</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#forms" class="has-arrow mb-1"><i class="fa fa-car"></i><span>Driver Management</span></a>
                        <ul @if(\Request::route()->getName() == 'adds_driver' || \Request::route()->getName() == 'all_drivers' || \Request::route()->getName() == 'driver_pendingrequests') class="collapse in" aria-expanded="true" @endif>
                            <li @if(\Request::route()->getName() == 'adds_driver') class="active" @endif><a href="{{route('adds_driver')}}">Adds Driver</a></li>
                        <!--<li><a href="{{asset('orders_by_drivers')}}">Orders by Driver</a></li>-->
                            <li @if(\Request::route()->getName() == 'all_drivers') class="active" @endif><a href="{{route('all_drivers')}}">All Drivers</a></li>
                            <li @if(\Request::route()->getName() == 'driver_pendingrequests') class="active" @endif><a href="{{route('driver_pendingrequests')}}">Pending Requests</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#forms" class="has-arrow mb-1"><i class="fa fa-cubes"></i><span>Inventory Products</span></a>
                        <ul @if(\Request::route()->getName() == 'products' || \Request::route()->getName() == 'products.create') class="collapse in" aria-expanded="true" @endif>
                            <li @if(\Request::route()->getName() == 'products') class="active" @endif><a href="{{route('products')}}">Products</a></li>
                            <li @if(\Request::route()->getName() == 'products.create') class="active" @endif><a href="{{route('products.create')}}">Add Product</a></li>
                            <!--<li><a href="{{route('mark_products')}}">Mark Products</a></li>-->
                        </ul>
                    </li>
                    <li @if(\Request::route()->getName() == 'autocustomer_invoices') class="active" @endif> <a href="{{route('autocustomer_invoices')}}"><i class="fa fa-money"></i><span>charges Management</span></a></li>
                    <li @if(\Request::route()->getName() == 'autocustomer_invoices') class="active" @endif><a href="{{route('autocustomer_invoices')}}"><i class="fa fa-file-text"></i><span>Auto/Customer Invoices</span></a></li>
                    <li @if(\Request::route()->getName() == 'referral_code') class="active" @endif><a href="{{route('referral_code')}}"><i class="fa fa-tags"></i><span>Add Promo Code</span></a></li>
                    <li @if(\Request::route()->getName() == 'all_referralcode') class="active" @endif><a href="{{route('all_referralcode')}}"><i class="fa fa-ticket"></i><span>All Promo Code</span></a></li>
                    <li @if(\Request::route()->getName() == 'customer_notifications') class="active" @endif><a href="{{route('customer_notifications')}}"><i class="fa fa-bell-o"></i><span>Push Notifications</span></a></li>
                    <li @if(\Request::route()->getName() == 'customer_notifications') class="active" @endif><a href="{{route('customer_notifications')}}"><i class="fa fa-bell"></i><span>Customer Notications</span></a></li>
                    <li @if(\Request::route()->getName() == 'driver_notifications') class="active" @endif ><a href="{{route('driver_notifications')}}"><i class="fa fa-asterisk"></i><span>Driver Notifications </span></a></li>
                    <li @if(\Request::route()->getName() == 'retailer_notifications') class="active" @endif><a href="{{route('retailer_notifications')}}"><i class="fa fa-bell"></i><span>Retailer Notification</span></a></li>
                    <li @if(\Request::route()->getName() == 'settings') class="active" @endif><a href="{{route('settings')}}"><i class="fa fa-wrench"></i><span> Website Settings</span></a></li>
                    <li @if(\Request::route()->getName() == 'front_end_settings') class="active" @endif><a href="{{route('front_end_settings')}}"><i class="fa fa-cog"></i><span>Front End Settings</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="main-content">
        <div class="block-header">
            @yield('content')
        </div>
    </div>

</div>


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

<!-- Javascript -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>


<!--Table/Data Table JS-->
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>


<!--Image Uplaod And View JS -->
<script src="{{asset('assets/vendor/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/dropify.js')}}"></script>

<!--Multi Select JS -->
<script src="{{asset('assets/vendor/multi-select/js/jquery.multi-select.js')}}"></script><!-- Multi Select Plugin Js -->
<script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>

<!--Summer Notes JS -->
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/summernote/dist/summernote.js')}}"></script>

<script>
    $(function () {
    // Summernote
    $('.textarea').summernote()
  })
  </script>
 

</body>
</html>
