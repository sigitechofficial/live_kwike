@extends('admin/welcome')
@section('content')

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Jquery Datatable</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Table</li>
                        <li class="breadcrumb-item active">Jquery Datatable</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Users List
                                {{--                                <small>Basic example without any additional modification classes</small>--}}
                            </h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Request</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Request</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#01</td>
                                        <td>Cedric Kelly</td>
                                        <td>Cedrickelly@gmail.com</td>
                                        <td>+923244643817</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn" style="background: linear-gradient(-60deg, #3DA9FC 50%, #FF8C67 50%); border: none;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr>
                                        <td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                    </tr>
                                    <tr>
                                        <td>Thor Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2013/08/11</td>
                                        <td>$98,540</td>
                                    </tr>
                                    <tr>
                                        <td>Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
                                    </tr>
                                    <tr>
                                        <td>Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr>
                                        <td>Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>2012/06/01</td>
                                        <td>$115,000</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013/02/01</td>
                                        <td>$75,650</td>
                                    </tr>
                                    <tr>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
