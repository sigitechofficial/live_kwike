@extends('welcome')
@section('content')



    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <h5 class="card-title">All Charges</h5>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Charges Management</h3>
                            <hr>
                            <h4 class="text-center">Delivery Charges Managment</h4>
                            <div class="row mt-5">

                                <div class="col-12">

                                    <div class="row">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card mb-3 shadow">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/fixed_delivery_charges.png" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h6 style="font-size: 12px;">Fixed Delivery Charges</h6>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card mb-3 shadow">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/initial_distance.png" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h6 style="font-size: 12px;">Initial Distance (Km)</h6>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card mb-3 shadow">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/charges_perminute.png" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h6 style="font-size: 12px;">Charges Per Extra Distance</h6>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card mb-5 shadow">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/services_charges.png" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h6 style="font-size: 12px;">Service Charges (%)</h6>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <h4 class="text-center">Retailer Charges Managment</h4>
                            <div class="row mt-5">

                                <div class="col-12">

                                    <div class="row">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card mb-3 shadow">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/retailer_commission.png" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h6 style="font-size: 12px;">Retailer Comision(%)</h6>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>




                                </div>
                            </div>
                            <h4 class="text-center">Driver Commission Managment</h4>
                            <div class="row mt-5">

                                <div class="col-12">

                                    <div class="row">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card mb-3 shadow">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/driver_charges.png" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h6 style="font-size: 12px;">Driver Commission(%)</h6>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div style="float: right;">
                                        <a class="btn btn-primary shadow" type="submit">Update Settings</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
    @endsection
