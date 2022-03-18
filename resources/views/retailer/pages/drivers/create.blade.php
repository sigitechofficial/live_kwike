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
                            <h5 class="card-title">Add User</h5>
                            @if(Session::has('messages'))
                            <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                @foreach (Session::get('messages') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            </div>
                            @endif
                            <form action="{{ route('drivers.store') }}" method="POST">
                                @csrf
                                <div class="row mt-5">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">First Name</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="first_name">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">Last Name</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="last_name">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">Email</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="First name" name="email">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">Password</label>
                                        <input type="password" class="form-control shadow-sm" placeholder="" aria-label="" name="password">
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="formFile" class="form-label">Mobile No.</label>
                                        <input type="text" class="form-control shadow-sm" placeholder="" aria-label="" name="phone">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label class="form-label">Time Zone</label>
                                        <select name="time_zone" class="form-control form-control-lg" >
                                            <option value="Asia/Karachi">Asia/Karachi</option>
                                        </select>
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
