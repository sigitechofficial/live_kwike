<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Http\Requests\FavoriteRequest;
use App\Http\Requests\HomeRequest;
use App\Http\Requests\OrderDetailRequest;
use App\Http\Requests\OrderListRequest;
use App\Http\Requests\VoucherRequest;
use App\Models\Category;
use App\Repositories\StoreRepository\StoreRepositoryInterface;
use App\Traits\TimeZoneToUTC;
use Carbon\Carbon;
use Illuminate\Http\Request;
use stdClass;

class  StoreController extends Controller
{
    use TimeZoneToUTC;
    public $store;

    public function __construct(StoreRepositoryInterface $store)
    {
        $this->store = $store;
    }

    public function orders(OrderListRequest $request){
       $orders=$this->store->orders($request);
        ResponseNow('1', 'List for '.$request->status.' orders', $orders, 200);

    }
    public function orderDetail(OrderDetailRequest $request){
       $order=$this->store->orderDetail($request);
        ResponseNow('1', 'Order detail is', $order, 200);
    }
    public function busyMode(Request $request){
        auth()->user()->store()->update(['busy_mode'=>Carbon::now()->addMinutes($request->busy_mode)]);
        ResponseNow('1', 'Sore Orders busy mode status changed successfully', new stdClass(), 200);
    }
    public function pauseOrders(Request $request){
        auth()->user()->store()->update(['pause_orders'=>$request->pause_orders]);
        ResponseNow('1', 'Sore Orders paused status changed successfully', new stdClass(), 200);
    }
    public function foreverOpen(Request $request){
        auth()->user()->store()->update(['forever_open'=>$request->forever_open]);
        ResponseNow('1', 'Sore Orders forever open status changed successfully', new stdClass(), 200);
    }




}
