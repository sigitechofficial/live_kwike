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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>order_no</th>
                                        <th>payment_method</th>
                                        <th>order_type</th>
                                        <th>voucher_code</th>
                                        <th>voucher_discount</th>
                                        <th>tax</th>
                                        <th>sub_total</th>
                                        <th>total</th>
                                        <th>Assign Driver</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($orders) && $orders->count() > 0)
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>
                                                    <a href="{{route('orders.show',['order_id'=>$order->id])}}">
                                                        {{ $order->order_no }}
                                                    </a>
                                                </td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>{{ $order->order_type }}</td>
                                                <td>{{ $order->voucher_code }}</td>
                                                <td>{{ $order->voucher_discount }}</td>
                                                <td>{{ $order->tax }}</td>
                                                <td>{{ $order->sub_total }}</td>
                                                <td>{{ $order->total }}</td>
                                                <td>
                                                    @if (isset($drivers) && $drivers->count() > 0)
                                                        <select class="form-control" onchange="updateDriver({{$order->id}},this.options[this.selectedIndex].value)">
                                                            <option value="">None</option>
                                                            @foreach ($drivers as $driver)
                                                                <option value="{{$driver->id}}" {{ $order->driver_id == $driver->id ? "selected":"" }} >{{$driver->first_name}} {{$driver->last_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    @else
                                                    {{__("No Driver Available")}}
                                                    @endif
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
    <script>
        function updateDriver(order_id,driver_id){
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", "{{route('orders.assignDriver')}}?order_id="+order_id+"&driver_id="+driver_id+"", true);
            xhttp.send();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    toastr.info(this.responseText);
                }
            };
        }
    </script>
@endsection
