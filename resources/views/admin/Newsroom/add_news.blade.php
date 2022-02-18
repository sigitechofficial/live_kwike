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
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add News</h5>
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6 col-lg-6">--}}
{{--                                    <label for="formFile" class="form-label">Default file input example</label>--}}
{{--                                    <input class="form-control shadow-sm" type="file" id="formFile">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-lg-6">--}}
{{--                                    <img class="" src="assets/images/user_img.jpg" style="width: 200px; height: 200px;">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group mt-5">--}}
{{--                                <h4 class="text-light bg-dark" style="text-align: center; padding: 10px; margin-top: 5px;">Driver Information</h4>--}}
{{--                            </div>--}}
                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Title</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="Enter title" aria-label="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <img src="assets/images/avatar.png" style="width: 100px;">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Tags</label>
                                    <input type="text" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="formFile" class="form-label">Default file input example</label>
                                    <input class="form-control shadow-sm" type="file" id="formFile">
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-12 col-lg-12">
                                    <label for="formFile" class="form-label">Description</label>
                                    <textarea class="form-control" rows="5"></textarea>
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
