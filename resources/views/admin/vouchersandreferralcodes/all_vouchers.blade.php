@extends('admin/welcome')
@section('content')

    <div class="page-content">
        <div class="main-wrapper">
            <h2>Vouchers</h2>
            <div class="card">
                <div class="card-body">
                    <div class="mt-3">

                        <br>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home">Free Delivery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#menu1">Normal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#menu2">Assigned</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Vouchers for free delivery</h5>
                                                <div class="table-responsive">
                                                <table id="zero-conf" class="display" style="width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Code</th>
                                                        <th>Restaurant</th>
                                                        <th>Discount</th>
                                                        <th>Remaining Users</th>
                                                        <th>Min Order</th>
                                                        <th>Paid By</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">

                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                        <th>Salary</th>
                                                        <th>Salary</th>
                                                        <th>Salary</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Vouchers for free delivery</h5>
                                                <div class="table-responsive">
                                                <table id="zero-conf1" class="display" style="width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Code</th>
                                                        <th>Restaurant</th>
                                                        <th>Discount</th>
                                                        <th>Remaining Users</th>
                                                        <th>Min Order</th>
                                                        <th>Paid By</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                        <th>Salary</th>
                                                        <th>Salary</th>
                                                        <th>Salary</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Vouchers for free delivery</h5>
                                                <div class="table-responsive">
                                                <table id="zero-conf2" class="display" style="width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Code</th>
                                                        <th>Restaurant</th>
                                                        <th>Discount</th>
                                                        <th>Remaining Users</th>
                                                        <th>Min Order</th>
                                                        <th>Paid By</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>test1</td>
                                                        <td>Mei Kong</td>
                                                        <td>£ 16</td>
                                                        <td>10</td>
                                                        <td>£ 10</td>
                                                        <td>admin</td>
                                                        <td>2021-03-22</td>
                                                        <td>2021-03-31</td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <a href="{{route('pending_retailerview')}}" class="btn btn-primary"></a>
                                                                &nbsp;
                                                                <a href="{{route('edit_vouchers')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                                &nbsp;
                                                                <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                        <th>Salary</th>
                                                        <th>Salary</th>
                                                        <th>Salary</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="menu3" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <h3>No Order Available</h3>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <img src="assets/images/nostore.png">
                                    </div>
                                </div>
                            </div>

                            <div id="menu4" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <h3>No Order Available</h3>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <img src="assets/images/nostore.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script>
        function myFunction() {
            alert("Do you really want to delete this country?");
        }
    </script>

@endsection
