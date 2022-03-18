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
                            <h5 class="card-title">Store Profile</h5>
                            @if(Session::has('messages'))
                            <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                @foreach (Session::get('messages') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            </div>
                            @endif

                            @if(isset($profile) && $profile->count() > 0)
                            <div class="card">
                                <div class="card-header">
                                    <img src="{{asset('storage/app/public/images')}}/{{$profile->logo}}" class="img-fluid" width="50">
                                    {{$profile->name}} - {{$profile->description}}
                                </div>
                                <div class="card-body">
                                    <img src="{{asset('storage/app/public/images')}}/{{$profile->image_url}}" class="img-fluid" width="500">
                                    <h4>Email</h4>
                                    {{$profile->email}}
                                    <h4>Mobile</h4>
                                    {{$profile->mobile}}
                                    <h4>Address</h4>
                                    {{$profile->address}}
                                    <h4>Opening Closing Time</h4>
                                    {{$profile->opening_Closing_time}}
                                </div>
                            </div>
                            @else
                            {{__("No store created.")}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
