<?php

namespace App\Repositories\StoreRepository;

use App\Http\Requests\HomeRequest;
use Illuminate\Http\Request;


interface StoreRepositoryInterface
{

    public function orders($request);
    public function orderDetail($request);
}
