@extends('admin/welcome')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
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
                                    <th>Email</th>
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
                                    <td><img class="rounded-circle" src="assets/images/res_1.jpg" style="width: 15%;"></td>
                                    <td>Tokyo</td>

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
                                    <td><img class="rounded-circle" src="assets/images/res_1.jpg" style="width: 15%;"></td>
                                    <td>HEROBEAR AND RESTAURANT PARTNERS WARN OF GRAVE DAMAGE TO INDUSTRY</td>

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
                                        <img class="rounded-circle" src="assets/images/res_1.jpg" style="width: 15%;">
                                    </td>
                                    <td>CO-OP HITS MAJOR MILESTONE WITH 400 STORES ON HEROBEAR</td>

                                    <td>
                                        <div style="display: flex;">&nbsp;
                                            <a href="{{route('add_news')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
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
                                    <td><img class="rounded-circle" src="assets/images/res_1.jpg" style="width: 15%;"></td>
                                    <td>Best deal by xoomi</td>

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
                                    <td><img class="rounded-circle" src="assets/images/res_1.jpg" style="width: 15%;"></td>
                                    <td>HEROBEAR RESPONSE TO THE SUMMER ECONOMIC UPDATE</td>
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
                                    <td><img class="rounded-circle" src="assets/images/res_1.jpg" style="width: 15%;"></td>
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
                                    <td><img class="rounded-circle" src="assets/images/res_1.jpg" style="width: 15%;"></td>
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
                                    <td><img class="rounded-circle" src="assets/images/res_1.jpg" style="width: 15%;"></td>
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
                                    <td><img class="rounded-circle" src="assets/images/res_1.jpg" style="width: 15%;"></td>
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
                                    <td><img class="rounded-circle" src="assets/images/res_1.jpg" style="width: 15%;"></td>
                                    <td>HEROBEAR AND NSPCC ANNOUNCE NEW PARTNERSHIP</td>

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

    <script>
        function myFunction() {
            alert("Do you really want to delete this country?");
        }
    </script>

@endsection
