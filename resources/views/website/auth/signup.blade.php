@extends('website.welcome')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/dropifynew.min.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/css/signup.css')}}">

<style>
   


</style>

<body>
    <div class="container-fluid pt-5" style="background-color: #ecf0f3;">
        <!-- Masked Input -->
        <div class="row clearfix pt-5">
            <div class="col-md-12">            
                    <section>
                      <div class="container-fluid py-2 mb-3">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                          <div class="col-12 col-xl-10">
                            <div class="card">
								<!-- @if(Session::has('error'))
								<p class="alert alert-danger">{!! Session::get('error') !!}</p>
								@endif -->
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
                                <div class="col-md-8 col-lg-8  right_side_neuro">
									<form action="{{route('signup.driver')}}" method="post" enctype="multipart/form-data">
										@csrf
										<div class="card-body p-3 p-lg-4 text-black">
											<div class="d-flex align-items-center mb-3 pb-1">
												<i class="fa fa-user-plus fa-2x me-3" aria-hidden="true" style="color: #ff6219;"></i>
												<span class="h4 fw-bold mb-0" style="color: #ff6219;">Signup as Driver</span>
											</div>
											<hr>											
											<div class="container mt-2">
												<div class="row">
													<div class="col-md-12 ml-auto col-xl-12 mr-auto">
													<!-- Tabs with Background on Card -->
													<div class="card">
														<div class="card-header">
															<ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
																<li class="nav-item">
																<a class="nav-link active" data-toggle="tab"  href="#home1" role="tab">Personal Information</a>
																</li>
																<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Address / Vehicle Detail </a>
																</li>           
															</ul>
														</div>
														<div class="card-body">
														<!-- Tab panes -->
															<div class="tab-content">
																<div class="tab-pane active" id="home1" role="tabpanel">
																	<div class="row">
																		<div class="col-12 col-md-6 col-lg-6">
																			<div class="form-outline mb-2">
																				<label class="form-label" >First Name</label>
																				<input type="text" name="first_name" class="form-control form-control-lg">
																			</div>
																			<div class="form-outline mb-2">
																				<label class="form-label" >Last Name</label>
																				<input type="text" name="last_name" class="form-control form-control-lg">
																			</div>
																			<div class="form-outline mb-2">
																				<label class="form-label" >Email</label>
																				<input type="text" name="email"  class="form-control form-control-lg">
																			</div>
																		</div>
																		<div class="col-12 col-md-6 col-lg-6">
																			<div class="form-outline mb-2">
																				<label class="form-label">Profile Image</label>
																				<input type="file" name="profile_image"  class="form-control form-control-lg dropify text-center">
																			</div>
																		</div>   
																	</div>
																	<div class="row">
																		<div class="col-12 col-md-6 col-lg-6">	
																			<div class="form-outline mb-2">
																				<label class="form-label" >Phone</label>
																				<input type="text" name="phone"  class="form-control form-control-lg">
																			</div>
																		</div>
																		<div class="col-12 col-md-6 col-lg-6">							
																			<div class="form-outline mb-2">
																				<label class="form-label">Password</label>
																				<input type="text"  name="password"  class="form-control form-control-lg">
																			</div>
																		</div>
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
																		<!-- <div class="col-md-4">
																			<ul class="nav nav-tabs " role="tablist">
																				<li class="nav-item">
																					<a class="nav-link btn-nero btn-lg btn-block" data-toggle="tab" href="#profile1" role="tab">Address / Vehicle Detail </a>
																				</li>           
																			</ul>
																		</div>      -->
																	</div>
																</div>
																<div class="tab-pane" id="profile1" role="tabpanel">
																	<div class="row">
																		<div class="col-12 col-md-6 col-lg-6">
																			<div class="form-outline mb-2">
																				<label class="form-label">Address</label>
																				<input type="text"  name="address"  class="form-control form-control-lg">
																			</div>
																		</div>
																		<div class="col-12 col-md-6 col-lg-6">
																			<div class="form-outline mb-2">
																				<label class="form-label">Building/Apt.</label>
																				<input type="text"  name="building"  class="form-control form-control-lg">
																			</div>
																		</div>
																	</div>	
																	<div class="row">
																		<div class="col-12 col-md-6 col-lg-6">
																			<div class="form-outline mb-2">
																				<label class="form-label">Postal Code</label>
																				<input type="text"  name="postal_code"  class="form-control form-control-lg">
																			</div>
																		</div>
																		<div class="col-12 col-md-6 col-lg-6">
																			<div class="form-outline mb-2">
																				<label class="form-label">City</label>
																				<input type="text"  name="city"  class="form-control form-control-lg">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-12 col-md-6 col-lg-6">
																			<div class="form-outline mb-2">
																				<label class="form-label" >Make</label>
																				<input type="text" name="make" class="form-control form-control-lg">
																			</div>
																		</div>
																		<div class="col-12 col-md-6 col-lg-6">
																			<div class="form-outline mb-2">
																				<label class="form-label">Model</label>
																				<input type="text" name="model" class="form-control form-control-lg">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-12 col-md-6 col-lg-6">
																			<div class="form-outline mb-2">
																				<label class="form-label">Year</label>
																				<input type="text" name="year" class="form-control form-control-lg">
																			</div>
																		</div>
																		<div class="col-12 col-md-6 col-lg-6">
																			<div class="form-outline mb-2">
																				<label class="form-label">License Plate</label>
																				<input type="text" name="license_plate" class="form-control form-control-lg">
																			</div>
																		</div>
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
																	<div class="form-outline mb-2">
																		<label class="form-label">Time Zone</label>
																		<select name="time_zone" class="form-control form-control-lg" >
																			<option value="Asia/Karachi">Asia/Karachi</option>
																		</select>
																	</div>
																	<div class="col-md-12">
																		<div class="pt-1 mb-1">
																			<button class="btn-nero btn-lg btn-block" type="submit">Submit</button>
																		</div>
																	</div> 
																</div>
															</div>
														</div>
													</div>
													<!-- End Tabs on plain Card -->
													</div>
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
