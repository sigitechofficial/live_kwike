<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCardRequest;
use App\Repositories\StripeRepository\StripeRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Resources\StripeCardResource;

class StripeController extends Controller
{
    private $stripe;

    public function __construct(StripeRepositoryInterface $stripe)
    {
        $this->stripe = $stripe;
    }

    public function cardList(){
        $response = $this->stripe->getCardList();
        if(!is_null($response)){
            $default_card = StripeCardResource::make($response['default_card']);
            $otherCards = StripeCardResource::collection($response['cards']['data']);
            ResponseNow('1', 'list of cards', ['default_card' => $default_card, 'other_cards' => $otherCards],200);
        }
        ResponseNow('0', 'Something went wrong.!', 'No card found',200);

    }
    public function addCard(AddCardRequest $request)
    {
        $date = explode('/', $request->input('exp')); // 12/22
        $month = $date[0];
        $year = $date[1];
        
        // return response()->json([$month,$year]);
        $data = $request;
        $data['exp_month'] = $month;
        $data['exp_year'] = $year;
        
        // return $data;
        
        $response = $this->stripe->addCard($data);
        ResponseNow('1', 'Card added successfully', [], 200);

    }

    public function removeCard(Request $request){
        $response = $this->stripe->removeCard($request);
        if($response){
            return response()->success('1', 'Card removed successfully', []);
        }
        return response()->error('0', [], 'Something went wrong. Please try again later');
    }
}
