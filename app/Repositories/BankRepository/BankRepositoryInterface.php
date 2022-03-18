<?php

namespace App\Repositories\BankRepository;

use App\Http\Requests\RegisterRequest;

interface BankRepositoryInterface{

    public function addBank($request);
    public function update($request);
    public function getBanks();
    public function destroy($bank_id);
}
