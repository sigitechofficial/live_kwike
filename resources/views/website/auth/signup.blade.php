@extends('website.welcome')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/dropifynew.min.css')}}">

<style>
    *{
        margin:0px;
        padding:0px;
    }
    
    .dropify-wrapper .dropify-message span.file-icon:before {
        content: url(assets/images/upload.svg) !important;
        height: 50px;
    }
    .dropify-wrapper{
        width: 350px!important;
        background-color: transparent;
        border-radius: 8px;
        box-shadow: inset 2px 2px 4px #d1d9e6, inset -2px -2px 4px #f9f9f9;
    }
    .dropify-wrapper .dropify-message p{
        display:none;
    }
    .dropify-wrapper .dropify-preview{
        background-color:transparent;
    }
    
    .card{
        border-radius: 1rem;
        box-shadow: 10px 10px 10px #d1d9e6,-10px -10px 10px #f9f9f9;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
    }

    .left_side_neuro{
        background-color: #ecf0f3;
        overflow: hidden;
        z-index: 10;
        box-shadow: 4px 4px 10px #d1d9e6, -4px -4px 10px #f9f9f9;
        display: grid!important;
        place-content: center;
        place-items: center;
    }
    .right_side_neuro{
        background-color: #ecf0f3;
    }
    .switch__circle{
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background-color: #ecf0f3;
        box-shadow: inset 8px 8px 12px #d1d9e6, inset -8px -8px 12px #f9f9f9;
        bottom: -21%;
        left: -60%;
        transition: 1.25s;
        z-index: -1;
    }
    .switch__circle--t{
        top: -13%;
        left: 60%;
        width: 300px;
        height: 300px;
    }

    .form-control{
        letter-spacing: 0.15px;
        font-size: 1rem;
        border: none;
        outline: none;
        /* font-family: 'Montserrat', sans-serif; */
        background-color: #ecf0f3;
        transition: 0.25s ease;
        border-radius: 8px;
        box-shadow: inset 2px 2px 4px #d1d9e6, inset -2px -2px 4px #f9f9f9;
    }

    .form-control:focus {
        box-shadow: inset 4px 4px 4px #d1d9e6, inset -4px -4px 4px #f9f9f9;
        background-color: #ecf0f3;
        
    }

    @media  screen and (max-width: 480px) {
        .switch__circle--t{
            top: 13%;
            left: 70%;
        }
        .switch__circle{
            width: 310px;
        }
    }

	/* preloader  */
		
	:root {
		--fg: #17181c;
		--shade1: #727274;
		--shade2: #cccdd1;
		--shade3: #f3f4f8;
		--shade4: #ffffff;
		--dur1: 1s;
		--dur2: 6s;
		
	}

	.preloader {
		animation: largePopOut var(--dur1) linear;
		border-radius: 50%;
		box-shadow:
			0.15em 0.15em 0.15em var(--shade4) inset,
			-0.15em -0.15em 0.15em var(--shade1) inset,
			1em 1em 2em var(--shade1), 
			-1em -1em 2em var(--shade4);
		margin-bottom: 3em;
		position: relative;
		width: 12em;
		height: 12em;
	}
	.preloader__square {
		animation: smallPopOut1 var(--dur1) linear, popInOut var(--dur2) var(--dur1) linear infinite;
		border-radius: 0.5em;
		box-shadow:
			0.15em 0.15em 0.15em var(--shade4) inset,
			-0.15em -0.15em 0.15em var(--shade1) inset,
			0.25em 0.25em 0.5em var(--shade1),
			-0.25em -0.25em 0.5em var(--shade4);
		position: absolute;
		top: 2.5em;
		left: 2.5em;
		width: 3em;
		height: 3em;
	}
	.preloader__square:nth-child(n + 2):nth-child(-n + 3) {
		left: 6.5em;
	}
	.preloader__square:nth-child(n + 3) {
		top: 6.5em;
	}
	.preloader__square:nth-child(2) {
		animation: smallPopOut2 var(--dur1) linear, move2 var(--dur2) var(--dur1) linear infinite;
	}
	.preloader__square:nth-child(3) {
		animation: smallPopOut3 var(--dur1) linear, move3 var(--dur2) var(--dur1) linear infinite;
	}
	.preloader__square:nth-child(4) {
		animation: smallPopOut4 var(--dur1) linear, move4 var(--dur2) var(--dur1) linear infinite;
	}
	.status {
		animation: fadeIn var(--dur1) linear forwards;
		text-align: center;
	}
	.status__dot {
		animation: appear1 var(--dur1) var(--dur1) steps(1,start) infinite;
		display: inline-block;
	}
	.status__dot:nth-child(2) {
		animation: appear2 var(--dur1) var(--dur1) steps(1,start) infinite;
	}
	.status__dot:nth-child(3) {
		animation: appear3 var(--dur1) var(--dur1) steps(1,start) infinite;
	}


	/* Animations */
	@keyframes largePopOut {
		from, 20% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1), 
				0 0 0 var(--shade4);
		}
		40% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				2em 2em 2em var(--shade1), 
				-2em -2em 4em var(--shade4);
		}
		60%, to {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				1em 1em 2em var(--shade1), 
				-1em -1em 2em var(--shade4);
		}
	}
	@keyframes smallPopOut1 {
		from, 40% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1), 
				0 0 0 var(--shade4);
		}
		60% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.5em 0.5em 0.5em var(--shade1),
				-0.5em -0.5em 1em var(--shade4);
		}
		80%, to {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.25em 0.25em 0.5em var(--shade1),
				-0.25em -0.25em 0.5em var(--shade4);
		}
	}

	@keyframes smallPopOut2 {
		from, 45% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1), 
				0 0 0 var(--shade4);
		}
		65% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.5em 0.5em 0.5em var(--shade1),
				-0.5em -0.5em 1em var(--shade4);
		}
		85%, to {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.25em 0.25em 0.5em var(--shade1),
				-0.25em -0.25em 0.5em var(--shade4);
		}
	}

	@keyframes smallPopOut3 {
		from, 50% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1), 
				0 0 0 var(--shade4);
		}
		70% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.5em 0.5em 0.5em var(--shade1),
				-0.5em -0.5em 1em var(--shade4);
		}
		90%, to {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.25em 0.25em 0.5em var(--shade1),
				-0.25em -0.25em 0.5em var(--shade4);
		}
	}

	@keyframes smallPopOut4 {
		from, 55% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1), 
				0 0 0 var(--shade4);
		}
		75% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.5em 0.5em 0.5em var(--shade1),
				-0.5em -0.5em 1em var(--shade4);
		}
		95%, to {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.25em 0.25em 0.5em var(--shade1),
				-0.25em -0.25em 0.5em var(--shade4);
		}
	}
	@keyframes popInOut {
		from {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.25em 0.25em 0.5em var(--shade1),
				-0.25em -0.25em 0.5em var(--shade4);
			transform: translate(0,0);
		}
		4% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.5em 0.5em 0.5em var(--shade1),
				-0.5em -0.5em 1em var(--shade4);
			transform: translate(0,0);
		}
		8% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1),
				0 0 0 var(--shade4);
			transform: translate(0,0);
		}
		12%, 16% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1),
				0 0 0 var(--shade4);
			transform: translate(4em,0);
		}
		20% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.5em 0.5em 0.5em var(--shade1),
				-0.5em -0.5em 1em var(--shade4);
			transform: translate(4em,0);
		}
		24%, 25% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.25em 0.25em 0.5em var(--shade1),
				-0.25em -0.25em 0.5em var(--shade4);
			transform: translate(4em,0);
		}
		29% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.5em 0.5em 0.5em var(--shade1),
				-0.5em -0.5em 1em var(--shade4);
			transform: translate(4em,0);
		}
		33% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1),
				0 0 0 var(--shade4);
			transform: translate(4em,0);
		}
		37%, 41% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1),
				0 0 0 var(--shade4);
			transform: translate(4em,4em);
		}
		45% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.5em 0.5em 0.5em var(--shade1),
				-0.5em -0.5em 1em var(--shade4);
			transform: translate(4em,4em);
		}
		49%, 50% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.25em 0.25em 0.5em var(--shade1),
				-0.25em -0.25em 0.5em var(--shade4);
			transform: translate(4em,4em);
		}
		54% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.5em 0.5em 0.5em var(--shade1),
				-0.5em -0.5em 1em var(--shade4);
			transform: translate(4em,4em);
		}
		58% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1),
				0 0 0 var(--shade4);
			transform: translate(4em,4em);
		}
		62%, 66% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1),
				0 0 0 var(--shade4);
			transform: translate(0,4em);
		}
		70% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.5em 0.5em 0.5em var(--shade1),
				-0.5em -0.5em 1em var(--shade4);
			transform: translate(0,4em);
		}
		74%, 75% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.25em 0.25em 0.5em var(--shade1),
				-0.25em -0.25em 0.5em var(--shade4);
			transform: translate(0,4em);
		}
		79% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.5em 0.5em 0.5em var(--shade1),
				-0.5em -0.5em 1em var(--shade4);
			transform: translate(0,4em);
		}
		83% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1),
				0 0 0 var(--shade4);
			transform: translate(0,4em);
		}
		87%, 91% {
			box-shadow:
				0 0 0 var(--shade4) inset,
				0 0 0 var(--shade1) inset,
				0 0 0 var(--shade1),
				0 0 0 var(--shade4);
			transform: translate(0,0);
		}
		95% {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.5em 0.5em 0.5em var(--shade1),
				-0.5em -0.5em 1em var(--shade4);
			transform: translate(0,0);
		}
		99%, to {
			box-shadow:
				0.15em 0.15em 0.15em var(--shade4) inset,
				-0.15em -0.15em 0.15em var(--shade1) inset,
				0.25em 0.25em 0.5em var(--shade1),
				-0.25em -0.25em 0.5em var(--shade4);
			transform: translate(0,0);
		}
	}
	@keyframes move2 {
		from, 8% {
			transform: translate(0,0);
			width: 3em;
			height: 3em;
		}
		12% {
			transform: translate(-4em,0);
			width: 7em;
			height: 3em;
		}
		16%, 83% {
			transform: translate(-4em,0);
			width: 3em;
			height: 3em;
		}
		87% {
			transform: translate(-4em,0);
			width: 3em;
			height: 7em;
		}
		91%, to {
			transform: translate(-4em,4em);
			width: 3em;
			height: 3em;
		}
	}
	@keyframes move3 {
		from, 33% {
			transform: translate(0,0);
			height: 3em;
		}
		37% {
			transform: translate(0,-4em);
			height: 7em;
		}
		41%, to {
			transform: translate(0,-4em);
			height: 3em;
		}
	}
	@keyframes move4 {
		from, 58% {
			transform: translate(0,0);
			width: 3em;
		}
		62% {
			transform: translate(0,0);
			width: 7em;
		}
		66%, to {
			transform: translate(4em,0);
			width: 3em;
		}
	}
	@keyframes fadeIn {
		from, 67% {
			opacity: 0;
		}
		83.3%, to {
			opacity: 1;
		}
	}
	@keyframes appear1 {
		from {
			visibility: hidden;
		}
		33%, to {
			visibility: visible;
		}
	}
	@keyframes appear2 {
		from, 33% {
			visibility: hidden;
		}
		67%, to {
			visibility: visible;
		}
	}
	@keyframes appear3 {
		from, 67% {
			visibility: hidden;
		}
		to {
			visibility: visible;
		}
	}

	/* Dark mode */
	@media (prefers-color-scheme: dark) {
		:root {
			--fg: #e3e4e8;
			--shade1: #23252a;
			--shade2: #3e424c;
			--shade3: #4a4e5a;
			--shade4: #686e7e;
		}
	}

	.btn-nero{
		position: relative;
		background-color: #e6e7ee;
		color: #2d4cc8!important;
		transition: all .2s ease;
		letter-spacing: .025em;
		font-size: 1rem;
		border-color: #d1d9e6;
		box-shadow: 3px 3px 6px #b8b9be, -3px -3px 6px #fff;
	}
	.btn-nero:hover{
		color: #31344b;
		background-color: #e6e7ee;
		border-color: #e6e7ee;
		box-shadow: inset 2px 2px 5px #b8b9be, inset -3px -3px 7px #fff;
	}
</style>

<body>
    <div class="container-fluid pt-5" style="background-color: #ecf0f3;">
        <!-- Masked Input -->
        <div class="row clearfix pt-5">
            <div class="col-md-12">            
                    <section>
                      <div class="container-fluid py-5">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                          <div class="col-12 col-xl-10">
                            <div class="card">
								@if(Session::has('error'))
								<p class="alert alert-danger">{!! Session::get('error') !!}</p>
								@endif
                              <div class="row g-0">
                                <div class="col-md-4 col-lg-4 left_side_neuro">
                                    <div class="switch__circle"></div>
                                    <div class="switch__circle switch__circle--t"></div>
                                    <!-- <img src="logo.png" alt="login" class="img-fluid"> -->
                                    
									<div class="preloader">
										<div class="preloader__square"></div>
										<div class="preloader__square"></div>
										<div class="preloader__square"></div>
										<div class="preloader__square"></div>
									</div>
									
                                </div>
                                <div class="col-md-8 col-lg-8 d-flex align-items-center right_side_neuro">
									<form action="{{route('signup.driver')}}" method="post" enctype="multipart/form-data">
										@csrf
										<div class="card-body p-3 p-lg-4 text-black">
											<div class="d-flex align-items-center mb-3 pb-1">
												<i class="fa fa-user-plus fa-2x me-3" aria-hidden="true" style="color: #ff6219;"></i>
												<span class="h4 fw-bold mb-0" style="color: #ff6219;">Add New Employee</span>
											</div>
											<hr>
											<h4>Personal Information</h4>
											<div class="row">
												<div class="col-lg-6 col-md-6 col-12">
													<div class="form-outline mb-2">
														<label class="form-label" >First Name</label>
														<input type="text" name="first_name" class="form-control form-control-lg">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-12">
													<div class="form-outline mb-2">
														<label class="form-label" >Last Name</label>
														<input type="text" name="last_name" class="form-control form-control-lg">
													</div>
												</div>
											</div>
											<div class="form-outline mb-2">
												<label class="form-label" >Email</label>
												<input type="text" name="email"  class="form-control form-control-lg">
											</div>
											<div class="form-outline mb-2">
												<label class="form-label" >Phone</label>
												<input type="text" name="phone"  class="form-control form-control-lg">
											</div>
											<div class="form-outline mb-2">
												<label class="form-label">Password</label>
												<input type="text"  name="password"  class="form-control form-control-lg">
											</div>
											<div class="form-outline mb-2">
												<label class="form-label" >License No*</label>
												<input type="text" name="license_no" class="form-control form-control-lg">
											</div>
											<div class="row">
												<div class="col-12 col-md-6 col-lg-6">
													<div class="form-outline mb-2">
														<label class="form-label">License Front Image</label>
														<input type="file" name="license_front_image"  class="form-control form-control-lg dropify">
													</div>
												</div>
												<div class="col-12 col-md-6 col-lg-6">
													<div class="form-outline mb-2">
														<label class="form-label">License Back Image</label>
														<input type="file" name="license_back_image"  class="form-control form-control-lg dropify">
													</div>
												</div>    
											</div>

											<hr>
											<h4>Address</h4>
											<div class="form-outline mb-2">
												<label class="form-label">Address</label>
												<input type="text"  name="address"  class="form-control form-control-lg">
											</div>
											<div class="form-outline mb-2">
												<label class="form-label">Building/Apt.</label>
												<input type="text"  name="building"  class="form-control form-control-lg">
											</div>
											<div class="form-outline mb-2">
												<label class="form-label">Postal Code</label>
												<input type="text"  name="postal_code"  class="form-control form-control-lg">
											</div>
											<div class="form-outline mb-2">
												<label class="form-label">City</label>
												<input type="text"  name="city"  class="form-control form-control-lg">
											</div>
											
											<hr>
											<h4>Vehicle Detail</h4>
											<div class="form-outline mb-2">
												<label class="form-label" >Make</label>
												<input type="text" name="make" class="form-control form-control-lg">
											</div>
											<div class="form-outline mb-2">
												<label class="form-label">Model</label>
												<input type="text" name="model" class="form-control form-control-lg">
											</div>
											<div class="form-outline mb-2">
												<label class="form-label">Year</label>
												<input type="text" name="year" class="form-control form-control-lg">
											</div>
											<div class="form-outline mb-2">
												<label class="form-label">License Plate</label>
												<input type="text" name="license_plate" class="form-control form-control-lg">
											</div>
											<div class="form-outline mb-2">
												<label class="form-label">Vehicle Color</label>
												<input type="text" name="vehicle_color" class="form-control form-control-lg">
											</div>
											<div class="form-outline mb-2">
												<label class="form-label">Vehicle Type</label>
												<select name="vehicle_type" class="form-control form-control-lg" >
													@if (isset($vehicle_types) && $vehicle_types->count() > 0)
														@foreach ($vehicle_types as $vehicle_type)
															<option value="{{ $vehicle_type->id }}">{{ $vehicle_type->title }}</option>
														@endforeach
													@endif
												</select>
											</div>
											
							
											<div class="col-md-12">
												<div class="pt-1 mb-1">
													<button class="btn-nero btn-lg btn-block" type="submit">Submit</button>
												</div>
											</div>    
										</div>
									</form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
            </div>
        </div>
    </div>


<script src="{{asset('assets/js/dropifynew.min.js')}}"></script> 
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


@endsection
