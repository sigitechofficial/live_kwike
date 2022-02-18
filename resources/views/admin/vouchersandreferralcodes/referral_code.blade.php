@extends('welcome')
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
                            <h5 class="card-title"> Add New Promocode</h5>
                            <div class="row">
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Promo code</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="Promo code" aria-label="">
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Discount (%)</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="Promo code" aria-label="">
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <label for="formFile" class="form-label">Expiration</label>
                                    <input type="date" class="form-control shadow-sm" placeholder="Promo code" aria-label="">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12">
                                    <div style="float: right;">
                                        <button class="btn btn-primary shadow" type="submit">Add Promo Code</button>
                                        <button class="btn btn-primary shadow" type="submit">Reset</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center">
                            <img class="img-fluid" src="{{asset('coupons.jpg')}}" width="180">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
