@extends('admin/welcome')
@section('content')

    <style>
        label {
            font-weight: bold;
        }

        .btn-primary {
            color: black;
        }
    </style>

    <div class="page-content">
        <div class="main-wrapper">

            <!--form layout-->

            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Create Your Own Voucher</h5>
                            <div class="row">
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="Voucher name" aria-label="">
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Discount £</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="Discount value" aria-label="">
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Type</label>
                                    <select class="form-select shadow-sm" id="autoSizingSelect">
                                        <option  selected>Free Delivery</option>
                                        <option value="2">Normal</option>
                                        <option value="3">Assigned</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">From</label>
                                    <input type="date" class="form-control shadow-sm" placeholder="" aria-label="First name">
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">To</label>
                                    <input type="date" class="form-control shadow-sm" placeholder="" aria-label="First name">
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Paid By</label>
                                    <select class="form-select shadow-sm" id="autoSizingSelect">
                                        <option  selected disabled>Choose One</option>
                                        <option value="2">Normal</option>
                                        <option value="3">Assigned</option>
                                    </select>
                                </div>
                            </div>



                            <div class="row mt-5">
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Total Users</label>
                                    <input type="number" class="form-control shadow-sm" placeholder="0" aria-label="">
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Min Order £</label>
                                    <input type="number" class="form-control shadow-sm" placeholder="0" aria-label="">
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Paid By</label>
                                    <select class="form-select shadow-sm" id="autoSizingSelect">
                                        <option  selected disabled>Choose One</option>
                                        <option value="2">Normal</option>
                                        <option value="3">Assigned</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12">
                                    <div style="float: right;">
                                        <button class="btn btn-primary shadow" type="submit">Add Coupon</button>
                                        <button class="btn btn-primary shadow" type="submit">Cancel</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid" src="assets/images/coupons.png">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
