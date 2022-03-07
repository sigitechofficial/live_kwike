<?php

namespace App\Repositories\BankRepository;

use App\Http\Resources\UserResource;
use App\Models\AppSetting;
use App\Models\Role;
use App\Models\User;
use App\Repositories\BankRepository\BankRepositoryInterface;
use App\Http\Requests\RegisterRequest;
use App\Models\Bank;
use App\Models\UserRole;
use App\Models\UserStore;
use App\Traits\CreateStripeCustomerTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class BankRepository implements BankRepositoryInterface
{

    use CreateStripeCustomerTrait;
    public function addBank($request){
        $bank = Bank::create([
            'user_id' => Auth::id(),
            'bank_name' => $request->bank_name,
            'account_title' => $request->account_title,
            'iban' => $request->iban,
            'country' => $request->country
        ]);
        return $bank;
    }
}
