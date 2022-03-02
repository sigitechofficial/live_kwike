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
                            <h5 class="card-title">Banners</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Validity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($banners) && $banners->count() > 0)
                                        @foreach ($banners as $banner)
                                            <tr>
                                                <td>{{$banner->id}}</td>
                                                <td>{{$banner->title}}</td>
                                                <td>
                                                    <img src="{{asset('storage/app/public/images')}}/{{$banner->image}}" class="img-fluid" width="120">
                                                </td>
                                                <td>{{$banner->valid_till}}</td>
                                                <td>
                                                    <a href="{{route('banners.edit',['id'=>$banner->id])}}" class="btn btn-primary">Edit</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection