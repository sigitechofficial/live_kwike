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
                        <div class="card-header">
                            {{ $order->order_no }}
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Product</th>
                                        <th>quantity</th>
                                        <th>price</th>
                                        <th>tax</th>
                                        <th>total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($order->orderItems) && $order->orderItems->count() > 0)
                                    @foreach($order->orderItems as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->productStore->products->title }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->tax }}</td>
                                                <td>{{ $item->total }}</td>
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
