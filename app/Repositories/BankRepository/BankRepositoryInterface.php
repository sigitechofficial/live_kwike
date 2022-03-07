<?php

namespace App\Repositories\BankRepository;

use App\Http\Requests\RegisterRequest;

interface BankRepositoryInterface{

    public function addBank($request);
}
