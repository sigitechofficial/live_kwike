<?php

namespace App\Repositories\StripeRepository;

use Illuminate\Http\Request;

interface StripeRepositoryInterface {

    public function addCard($request);
    public function removeCard(Request $request);
    public function getCardList();
}
