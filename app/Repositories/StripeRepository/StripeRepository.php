<?php

namespace App\Repositories\StripeRepository;

use Illuminate\Http\Request;

class StripeRepository implements StripeRepositoryInterface{

    private $stripe;

    public function __construct()
    {
        $this->stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));
    }
    public function addCard($request){

        $customer_id=auth()->user()->stripe_customer_id;
        $flag = 0;
        $cards =   $this->stripe->paymentMethods->all([
            'customer' => $customer_id,
            'type' => 'card',
        ]);
        if (count($cards) < 1) {
            $flag = 1;
        }

        $pm =  $this->stripe->paymentMethods->create([
            'type' => 'card',
            'card' => [
                'number' => $request->get('card_number'),
                'exp_month' => $request->get('exp_month'),
                'exp_year' => $request->get('exp_year'),
                'cvc' => $request->get('cvc'),
            ],
        ]);

        $attach =  $this->stripe->paymentMethods->attach(
            $pm['id'],
            ['customer' => $customer_id]
        );

        if ($flag == 1) {
            $result =   $this->stripe->customers->update(
                $customer_id,
                ['invoice_settings' => array('default_payment_method' => $pm['id'])]
            );
        }

        if ($pm) {
            $msg = 'Card Added Successfully';
        } else {
            $msg = "something went wrong. please try again later";
        }
        $message = array(
            'ResponseCode' => 1,
            'ResponseMessage' => $msg,
            'card' => $pm,
            'attach' => $attach,
        );
        return $message;

    }


    public function removeCard(Request $request){

        $request->validate([
            'pm_id' =>  'required',
            'customer_id'   =>  'required'
        ]);

            //detach card
            $de =  $this->stripe->paymentMethods->detach(
                $request->input('pm_id'),
                []
            );

            if ($de['id']) {

                //get customer
                $customer =  $this->stripe->customers->retrieve(
                    $request->input('customer_id'),
                    []
                );

                if ($customer['invoice_settings']->default_payment_method == null) {
                    $cards =   $this->stripe->paymentMethods->all([
                        'customer' => $request->input('customer_id'),
                        'type' => 'card',
                    ]);

                    if (count($cards) > 0) {
                        $result =   $this->stripe->customers->update(
                            $request->input('customer_id'),
                            ['invoice_settings' => array('default_payment_method' => $cards['data'][0]->id)]
                        );
                    }
                }


               return 1;
            } else {
                return 0;
            }
    }

    public function getCardList(){


          $customer_id=auth()->user()->stripe_customer_id;
            $default_card = 0;

            $cards =   $this->stripe->paymentMethods->all([
                'customer' => $customer_id,
                'type' => 'card',
            ]);

            $customer =  $this->stripe->customers->retrieve(
                $customer_id,
                []
            );

            if (count($cards->data) > 0) {
                for ($i = 0; $i <= count($cards); $i++) {
                    if ($cards['data'][$i]->id == $customer['invoice_settings']->default_payment_method) {
                        $default_card = $cards['data'][$i];
                        break;
                    }
                }
                $defaultCard = $default_card;

                return [
                    'default_card' => $defaultCard,
                    'cards' => $cards,
                ];

            } else {

               return null;
            }
    }

    public function charge(Request $request){

        $request->validate([
            'amount'        =>  'required',
            'pm_id'         =>  'required',
            'customer_id'   =>  'required'
        ]);

        $charge = $this->stripe->paymentIntents->create([
            'amount' => $request->amount * 100,
            'currency' => 'USD',
            'customer' => $request->customer_id,
            'payment_method' => $request->pm_id,
            'off_session' => true,
            'confirm' => true,
        ]);

        // $charge =   \Stripe\PaymentIntent::create([
        //     'amount' => $request->amount * 100,
        //     'currency' => 'USD',
        //     'customer' => $request->customer_id,
        //     'payment_method' => $request->pm_id,
        //     'off_session' => true,
        //     'confirm' => true,
        // ]);

        return $charge;
    }
}
