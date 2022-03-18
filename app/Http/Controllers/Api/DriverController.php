<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderDetailRequest;
use App\Repositories\DriverRepository\DriverRepositoryInterface;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public $driver;

    public function __construct(DriverRepositoryInterface $driver)
    {
        $this->driver = $driver;
    }
    public function order_detail(OrderDetailRequest $request){
        
        $data = $this->driver->orderDetail($request);
        ResponseNow('1', 'Order Detail', $data, 200);
    }
    public function order_accept(OrderDetailRequest $request){
        
        $data = $this->driver->order_accept($request);
        ResponseNow('1', 'Order Accepted', $data, 200);
    }
    public function order_picked(OrderDetailRequest $request){
        
        $data = $this->driver->order_picked($request);
        ResponseNow('1', 'Order Picked', $data, 200);
    }
    public function order_completed(OrderDetailRequest $request){
        
        $data = $this->driver->order_completed($request);
        ResponseNow('1', 'Order Completed', $data, 200);
    }
    public function getorders()
    {
        $data = $this->driver->getOrders();
        ResponseNow('1', 'Orders for Driver!', $data, 200);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
