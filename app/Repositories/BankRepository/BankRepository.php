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
    public function update($request){
        $bank = Bank::where('user_id',Auth::id())->where('id',$request->bank_id)->first();
        $bank->update($request->all());
        $bank->save();
        // return $request->all();
        return $bank;
    }
    public function getBanks(){
        $bank = Bank::where('user_id',Auth::id())->get();
        return $bank;
    }
    public function destroy($bank_id){
        $bank = Bank::find($bank_id);
        $bank->delete();
        return 1;
    }
}
