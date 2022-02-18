@extends('welcome')
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


                            {{--                            <div class="col-md-6 col-lg-6">--}}
                            {{--                                <label for="formFile" class="form-label">Approval</label>--}}
                            {{--                                <select class="form-select shadow-sm" id="autoSizingSelect">--}}
                            {{--                                    <option selected="">Choose...</option>--}}
                            {{--                                    <option value="1">Admin</option>--}}
                            {{--                                    <option value="2">Super Admin</option>--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}


                        </div>
                        <div class="row">

                            <div class="col-md-12 col-lg-12">
                                <div class="float-lg-end">


                                </div>
                            </div>

                        </div>


                        <!--<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">-->
                        <!--    <ol class="breadcrumb">-->
                        <!--        <li class="breadcrumb-item"><a href="#">Baby Products</a></li>-->
                        <!--        <li class="breadcrumb-item active" aria-current="page">Lotions</li>-->
                        <!--    </ol>-->
                        <!--</nav>-->
                        


                        <!--<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">-->
                        <!--    <ol class="breadcrumb mt-5">-->
                        <!--        <li class="breadcrumb-item"><a href="#">House Hold Needs</a></li>-->
                        <!--        <li class="breadcrumb-item active" aria-current="page">Lotions</li>-->
                        <!--    </ol>-->
                        <!--</nav>-->
                        <h2 class="card-title">All Retailers Order</h2>
                        <div class="table-responsive">
                            <table id="zero-conf1" class="display" style="width: 100%;">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Rating</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                
                                <td>
                                    1
                                </td>
                                <td><img class="img-fluid" src="assets/images/user.png"></td>
                                <td>Zeeshan</td>
                                <td>Nawaz%</td>
                                <td>Demo@gmail.com</td>
                                <td>+923024280958</td>
                                <td></td>
                                <td><span class="badge bg-danger">Block</span></td>
                                <td>
                                    <div style="display: flex;">
                                        <a href="{{route('order_status')}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                        &nbsp;
                                        <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        &nbsp;
                                        <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                    </div>

                                </td>
                            </tr>

                            <tr>
                                
                                <td>
                                    1
                                </td>
                                <td><img class="img-fluid" src="assets/images/user.png"></td>
                                <td>Zeeshan</td>
                                <td>Nawaz%</td>
                                <td>Demo@gmail.com</td>
                                <td>+923024280958</td>
                                <td></td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <div style="display: flex;">
                                        <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                        &nbsp;
                                        <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        &nbsp;
                                        <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                    </div>

                                </td>
                            </tr>




                            {{--                            <tr>--}}
                            {{--                                <td>10</td>--}}
                            {{--                                <td><img class="" src="assets/images/res_1.jpg" style="width: 50%;"></td>--}}
                            {{--                                <td>HEROBEAR AND NSPCC ANNOUNCE NEW PARTNERSHIP</td>--}}

                            {{--                                <td>--}}
                            {{--                                    <div style="display: flex;">&nbsp;--}}
                            {{--                                        <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>--}}
                            {{--                                        &nbsp;--}}
                            {{--                                        <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>--}}
                            {{--                                    </div>--}}

                            {{--                                </td>--}}
                            {{--                            </tr>--}}



                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Rating</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <label for="formFile" class="form-label">Add Item Image</label>
                            <input type='file' />
                            <br>
                            <img class="img-fluid" id="myImg" src="#">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <label for="formFile" class="form-label">Select Category</label>
                            <select class="form-select shadow-sm" id="autoSizingSelect">
                                <option selected="">Choose...</option>
                                <option value="1">Baby Products</option>
                                <option value="2">Households</option>
                            </select>
                        </div>


                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12 col-lg-12">
                            <label for="formFile" class="form-label">Select Sub Category</label>
                            <select class="form-select shadow-sm" id="autoSizingSelect">
                                <option selected="">Choose...</option>
                                <option value="1">Lotions</option>
                                <option value="2">Cleaning spray</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12 col-lg-12">
                            <label for="formFile" class="form-label">Add Items</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary shadow" type="button" data-bs-dismiss="modal">Save</button>
                    <button class="btn btn-primary shadow" type="submit">Send For Approval</button>
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