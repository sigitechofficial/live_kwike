<?php

namespace App\Repositories\DriverRepository;

use App\Http\Requests\HomeRequest;
use Illuminate\Http\Request;


interface DriverRepositoryInterface {

    public function getOrders();
    public function orderDetail($request);
    public function order_accept($request);
    public function order_picked($request);
    public function order_started($request);
    public function order_completed($request);

}
