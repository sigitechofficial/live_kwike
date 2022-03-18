@extends('retailer.layout.master')
@section('content')

    <style>
        label {
            font-weight: bold;
        }

        /*.btn-primary {*/
        /*    color: black;*/
        /*}*/
    </style>

    <div class="page-content">
        <div class="main-wrapper">

            <!--form layout-->

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Create Store</h5>
                            @if(Session::has('messages'))
                            <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                @foreach (Session::get('messages') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            </div>
                            @endif
                            <form action="" method="POST">
                                @csrf
                                <div class="row mt-5">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">Store Name</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="name">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">description</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="description">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">Email</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="First name" name="email">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">Mobile No.</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="phone">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">latitude</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="latitude">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">longitude</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="longitude">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">zip_code</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="zip_code">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">address</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="address">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">logo</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="logo">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">image_url</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="image_url">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">opening_Closing_time</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="opening_Closing_time">
                                    </div>
                                </div>
                                
                                <div class="row mt-5">
                                    <div class="col-12">
                                        <div style="float: right;">
                                            <button type="submit" class="btn btn-primary shadow" type="submit">Add</button>
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

@endsection
