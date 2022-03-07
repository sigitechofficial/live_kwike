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
                            <h5 class="card-title">Add Banner</h5>
                            <form action="{{route('banners.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-5">
                                    <div class="col-md-12 col-lg-12">
                                        <label for="title" class="form-label">Title</label>
                                        <input class="form-control" type="text" name="title"></input>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-12 col-lg-12">
                                        <label for="image" class="form-label">Image</label>
                                        <input class="form-control" type="file" name="image"></input>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-12 col-lg-12">
                                        <label for="valid_till" class="form-label">Valid Till</label>
                                        <input class="form-control" type="date" name="valid_till"></input>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection