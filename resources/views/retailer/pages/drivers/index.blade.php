@extends('retailer.layout.master')
@section('content')


<style>
    .btnstyle {
        background-color: #414bb2;
        color: white;
    }
    
    .btnstyle:hover{
        background-color: #414bb2;
        color: white;
    }
</style>

    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-5">
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="float-lg-end">
                                </div>
                            </div>
                        </div>
                        <h2 class="card-title">All Drivers</h2>
                        <div class="table-responsive">
                            @if (isset($drivers) && sizeof($drivers) > 0)
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($drivers as $driver)
                                            <tr>
                                                <td>{{$driver->first_name}}</td>
                                                <td>{{$driver->last_name}}</td>
                                                <td>{{$driver->email}}</td>
                                                <td>{{$driver->phone}}</td>
                                                <td>Action</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            @else
                            {{__("No Driver Found")}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection