@extends('welcome')
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
                            <h5 class="card-title">Run Reports</h5>

                            <div class="row mt-5">
                                <div class="col-md-3 col-lg-3">
                                    <label for="formFile" class="form-label">From</label>
                                    <input type="date" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <label for="formFile" class="form-label">To</label>
                                    <input type="date" class="form-control shadow-sm" placeholder="" aria-label="">
                                </div>

                                <div class="col-md-3 col-lg-3">
                                    <label for="formFile" class="form-label">Select Retailers</label>
                                    <select class="form-select shadow-sm" id="autoSizingSelect">
                                        <option selected>Choose...</option>
                                        <option value="1">Malmo</option>
                                        <option value="2">Gourment</option>
                                        <option value="3">Al-Fatah Store</option>
                                        <option value="3">Umer cash carry</option>
                                        <option value="3">Rainbow Store</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <label for="formFile" class="form-label">Run Reports</label>
                                    <select class="form-select shadow-sm" id="autoSizingSelect">
                                        <option selected>Choose...</option>
                                        <option value="1">Top Selling Products</option>
                                        <option value="2">Product Sales Report</option>
                                        <option value="3">Daily/Weekly/Monthly Sales</option>
                                        <option value="3">Top Customers</option>
                                        <option value="3">Stores Sales Reports (in case retailer has multi locations)</option>
                                        <option value="3">Graphs & Trends for sale</option>
                                        <option value="3">Declined/Cancelled Orders</option>
                                        <option value="3">Delivery Performance</option>
                                        <option value="3">Age restricted log - driver checking and marking checked ID</option>
                                        <option value="3">Customer Feedback Reports</option>
                                        <option value="3">Store Pause Reports</option>
                                        <option value="3">Driver Registration & Delivery Reports</option>
                                        <option value="3">Drop down list to select stores as some retailers might have more than one store</option>
                                        <option value="3">Daily/Weekly/Monthly Sales</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card stat-widget shadow" style="background-color: #768FFE;">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color: white;">Total Orders</h5>

                                            <h4 style="font-weight: bold; color: white;">22</h4>
{{--                                            <div class="progress">--}}
{{--                                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card stat-widget shadow" style="background-color: #F88797;">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color: white;">Cancelled Orders</h5>

                                            <h4 style="font-weight: bold; color: white;">0</h4>
{{--                                            <div class="progress">--}}
{{--                                                <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card stat-widget shadow" style="background-color: #F88346;">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color: white;">Total Earnings</h5>

                                            <h4 style="font-weight: bold; color: white;">$471.05</h4>
{{--                                            <div class="progress">--}}
{{--                                                <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="col-md-6 col-xl-3">--}}
{{--                                    <div class="card stat-widget shadow">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <h5 class="card-title">Orders</h5>--}}
{{--                                            <h2>87</h2>--}}
{{--                                            <p>Orders in waitlist</p>--}}
{{--                                            <div class="progress">--}}
{{--                                                <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="assets/images/Store Details.xlsx" class="btn mb-3" download style="background-color: gray; color: white;">Excel</a>
                                            <div class="table-responsive">
                                            <table id="zero-conf" class="display" style="width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Phone</th>
                                                    <th>Featured</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Processingses</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>
                                                        <span class="badge bg-danger">Non Featured</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Inactive</span>
                                                    </td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <a href="{{route('pending_retailerview')}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                            &nbsp;
                                                            <a href="{{route('add_retail')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Alexander Collier</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>
                                                        <span class="badge bg-danger">Non Featured</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Inactive</span>
                                                    </td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <a href="{{route('pending_retailerview')}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                            &nbsp;
                                                            <a href="{{route('add_retail')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>1</td>
                                                    <td>Amir Irwin</td>
                                                    <td>Tokyo</td>
                                                    <td>Lahore City, Pakistan</td>
                                                    <td>+1 (336) 281-8102</td>
                                                    <td>
                                                        <span class="badge bg-danger">Non Featured</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Inactive</span>
                                                    </td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <a href="{{route('pending_retailerview')}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                            &nbsp;
                                                            <a href="{{route('add_retail')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>$327,900</td>
                                                    <td>$327,900</td>
                                                </tr>

                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Violet Mccormick</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>$103,600</td>
                                                    <td>$103,600</td>
                                                </tr>

                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>$342,000</td>
                                                    <td>$342,000</td>
                                                </tr>


                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>$385,750</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>$198,500</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>$725,000</td>
                                                    <td>$725,000</td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>Violet Mccormick</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>
                                                        <span class="badge bg-danger">Non Featured</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Inactive</span>
                                                    </td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <a href="{{route('pending_retailerview')}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                            &nbsp;
                                                            <a href="{{route('add_retail')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>$675,000</td>
                                                    <td>$675,000</td>
                                                </tr>


                                                <tr>
                                                    <td>2</td>
                                                    <td>Sybil Davenport</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>
                                                        <span class="badge bg-danger">Non Featured</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Inactive</span>
                                                    </td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <a href="{{route('pending_retailerview')}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                            &nbsp;
                                                            <a href="{{route('add_retail')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>




                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>$163,000</td>
                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sydney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>$95,400</td>
                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>$114,500</td>
                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>$145,000</td>
                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Cameron Duke</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>
                                                        <span class="badge bg-danger">Non Featured</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Inactive</span>
                                                    </td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <a href="{{route('pending_retailerview')}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                            &nbsp;
                                                            <a href="{{route('add_retail')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>$324,050</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>$85,675</td>
                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Imani Ferrell</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>
                                                        <span class="badge bg-danger">Non Featured</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Inactive</span>
                                                    </td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <a href="{{route('pending_retailerview')}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                            &nbsp;
                                                            <a href="{{route('add_retail')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Lyle Calhoun</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>
                                                        <span class="badge bg-danger">Non Featured</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Inactive</span>
                                                    </td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <a href="{{route('pending_retailerview')}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                            &nbsp;
                                                            <a href="{{route('add_retail')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>$452,500</td>
                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>$136,200</td>
                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>
                                                        <span class="badge bg-danger">Non Featured</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Inactive</span>
                                                    </td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <a href="{{route('pending_retailerview')}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                            &nbsp;
                                                            <a href="{{route('add_retail')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>$234,500</td>
                                                    <td>$234,500</td>
                                                </tr>

                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>$139,575</td>
                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>$98,540</td>
                                                    <td>$98,540</td>
                                                </tr>

                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>$138,575</td>
                                                    <td>$138,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>$125,250</td>
                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>$115,000</td>
                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sigi Food</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>$75,650</td>
                                                    <td>$75,650</td>
                                                </tr>


                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>$103,500</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>
                                                        <span class="badge bg-danger">Non Featured</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger">Inactive</span>
                                                    </td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <a href="{{route('pending_retailerview')}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                            &nbsp;
                                                            <a href="{{route('add_retail')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            &nbsp;
                                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fas fa-trash"></i></a>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>$183,000</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>$183,000</td>
                                                    <td>$183,000</td>
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
                                                </tr>
                                                </tfoot>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-12">
                                    <div style="float: right;">
                                        <button class="btn btn-primary shadow" type="submit">Submit</button>
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

