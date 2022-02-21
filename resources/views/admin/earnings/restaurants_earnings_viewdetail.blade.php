@extends('admin/welcome')
@section('content')



    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <h5 class="card-title">All Charges</h5>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-4">
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <a href="#" class="btn" style="background-color: #4EBA46;">Filter</a>
                                </div>
                            </div>

                            <hr>
{{--                            <h4 class="text-center">Delivery Charges Managment</h4>--}}
                            <div class="row mt-5">

                                <div class="col-12">

                                    <div class="row">
{{--                                        <div class="col-md-4 col-lg-4">--}}
{{--                                            <div class="card mb-3 shadow">--}}
{{--                                                <div class="row g-0">--}}
{{--                                                    <div class="col-md-4">--}}
{{--                                                        <img src="assets/images/fixed_delivery_charges.png" class="img-fluid rounded-start" alt="...">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-8">--}}
{{--                                                        <div class="card-body">--}}
{{--                                                            <h6 style="font-size: 12px;">Fixed Delivery Charges</h6>--}}
{{--                                                            <input type="text" class="form-control">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="col-md-2 col-lg-2"></div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card mb-3 shadow">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/money.png" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h6 style="font-size: 12px;">Total Earnings</h6>
                                                            <h5 class="card-title">
                                                                £ 1984.89
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card mb-3 shadow">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/money.png" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h6 style="font-size: 12px;">Admin Commission</h6>
                                                            <h5 class="card-title">
                                                                £ 272.76
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-lg-2"></div>
                                    </div>
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-4 col-lg-4">--}}
{{--                                            <div class="card mb-5 shadow">--}}
{{--                                                <div class="row g-0">--}}
{{--                                                    <div class="col-md-4">--}}
{{--                                                        <img src="assets/images/services_charges.png" class="img-fluid rounded-start" alt="...">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-8">--}}
{{--                                                        <div class="card-body">--}}
{{--                                                            <h6 style="font-size: 12px;">Service Charges (%)</h6>--}}
{{--                                                            <input type="text" class="form-control">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title">Orders</h5>
                            </div>

                            <hr>
                            {{--                            <h4 class="text-center">Delivery Charges Managment</h4>--}}
                            <div class="row mt-5">

                                <div class="col-12">

                                    <div class="row">
                                                                                <div class="col-md-4 col-lg-4">
                                                                                    <div class="card mb-3 shadow">
                                                                                        <div class="row g-0">
                                                                                            <div class="col-md-4">
                                                                                                <img src="assets/images/online-order.png" class="img-fluid rounded-start" alt="...">
                                                                                            </div>
                                                                                            <div class="col-md-8">
                                                                                                <div class="card-body">
                                                                                                    <h6 style="font-size: 12px;">Fixed Delivery Charges</h6>
                                                                                                    <h5 class="card-title">
                                                                                                        26
                                                                                                    </h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                        <div class="col-md-4 col-lg-4">
                                            <div class="card mb-3 shadow">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/order-completed.png" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h6 style="font-size: 12px;">Total Earnings</h6>
                                                            <h5 class="card-title">
                                                                51
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card mb-3 shadow">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/cancel.png" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h6 style="font-size: 12px;">Admin Commission</h6>
                                                            <h5 class="card-title">
                                                                5
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="col-md-4 col-lg-4">--}}
                                    {{--                                            <div class="card mb-5 shadow">--}}
                                    {{--                                                <div class="row g-0">--}}
                                    {{--                                                    <div class="col-md-4">--}}
                                    {{--                                                        <img src="assets/images/services_charges.png" class="img-fluid rounded-start" alt="...">--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                    <div class="col-md-8">--}}
                                    {{--                                                        <div class="card-body">--}}
                                    {{--                                                            <h6 style="font-size: 12px;">Service Charges (%)</h6>--}}
                                    {{--                                                            <input type="text" class="form-control">--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}

                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="assets/images/Store Details.xlsx" class="btn mb-3" download style="background-color: gray; color: white;">Excel</a>
                                            <table id="zero-conf" class="display" style="width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Restaurants</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>

                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td><img class="rounded-circle" src="assets/images/retailers_images/son-miguel-restaurant.png" style="width: 20%;"></td>
                                                    <td>Son Miguel Restaurant</td>

                                                    <td>
                                                        <div style="display: flex;">&nbsp;
                                                            <a href="{{route('add_news')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><img class="rounded-circle" src="assets/images/retailers_images/pizza-hut.jpg" style="width: 20%;"></td>
                                                    <td>Pizza hut</td>

                                                    <td>
                                                        <div style="display: flex;">&nbsp;
                                                            <a href="{{route('add_news')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <img class="rounded-circle" src="assets/images/retailers_images/burger-king.png" style="width: 20%;">
                                                    </td>
                                                    <td>Burger King</td>

                                                    <td>
                                                        <div style="display: flex;">&nbsp;
                                                            <a href="{{route('restaurants_earnings_viewdetail')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>


                                                    <td>$327,900</td>
                                                </tr>

                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Violet Mccormick</td>
                                                    <td>Edinburgh</td>

                                                    <td>$103,600</td>
                                                </tr>

                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>

                                                    <td>$342,000</td>
                                                </tr>


                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>

                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>

                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>

                                                    <td>$725,000</td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td><img class="rounded-circle" src="assets/images/retailers_images/saltn-pepper.png" style="width: 20%;"></td>
                                                    <td>Salt'n Pepper</td>

                                                    <td>
                                                        <div style="display: flex;">&nbsp;
                                                            <a href="{{route('add_news')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>

                                                    <td>$675,000</td>
                                                </tr>


                                                <tr>
                                                    <td>2</td>
                                                    <td><img class="rounded-circle" src="assets/images/retailers_images/mei-kong.jpg" style="width: 20%;"></td>
                                                    <td>Mei Kong</td>
                                                    <td>
                                                        <div style="display: flex;">&nbsp;
                                                            <a href="{{route('add_news')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>




                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>

                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sydney</td>

                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>

                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>

                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td><img class="rounded-circle" src="assets/images/retailers_images/yasir-broast.png" style="width: 20%;"></td>
                                                    <td>Yasir Broast</td>
                                                    <td>
                                                        <div style="display: flex;">&nbsp;
                                                            <a href="{{route('add_news')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>

                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>

                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td><img class="rounded-circle" src="assets/images/retailers_images/mcdonalds.png" style="width: 20%;"></td>
                                                    <td>San Francisco</td>
                                                    <td>
                                                        <div style="display: flex;">&nbsp;
                                                            <a href="{{route('add_news')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td><img class="rounded-circle" src="assets/images/retailers_images/hadrees.jpg" style="width: 20%;"></td>
                                                    <td>San Francisco</td>
                                                    <td>
                                                        <div style="display: flex;">&nbsp;
                                                            <a href="{{route('add_news')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>

                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>

                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td><img class="rounded-circle" src="assets/images/retailers_images/subway.jpg" style="width: 35%;"></td>
                                                    <td>New York</td>
                                                    <td>
                                                        <div style="display: flex;">&nbsp;
                                                            <a href="{{route('add_news')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>

                                                    <td>$234,500</td>
                                                </tr>

                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>

                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>

                                                    <td>$98,540</td>
                                                </tr>

                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>

                                                    <td>$138,575</td>

                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>

                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>

                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sigi Food</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>

                                                    <td>$75,650</td>
                                                </tr>


                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>

                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td><img class="rounded-circle" src="assets/images/retailers_images/lahore-broast.jpg" style="width: 20%;"></td>
                                                    <td>Lahore Broast</td>

                                                    <td>
                                                        <div style="display: flex;">&nbsp;
                                                            <a href="{{route('add_news')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>

                                                    <td>$183,000</td>

                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>

                                                    <td>$183,000</td>
                                                </tr>

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>


                                                </tr>
                                                </tfoot>
                                            </table>
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
