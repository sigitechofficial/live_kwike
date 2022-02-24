@extends('admin.layout.master')
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
                            <h5 class="card-title">Add User</h5>

                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">First Name</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Last Name</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Email</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="First name">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Mobile No.</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                            <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input type="file" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>

                            </div>
                            
                            
                            <div class="row mt-5">
                                <div class="col-12">
                                    <div style="float: right;">
                                        <button class="btn btn-primary shadow" type="submit">Add</button>
                                        <button class="btn btn-primary shadow" type="submit">Cancel</button>
                                    </div>

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
