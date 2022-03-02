<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Request as rides;
use App\Models\AppSetting;


class Helper
{
    
    public static function about_us(){
        $app_setting = AppSetting::where('shortcode','About us')->first();
        if($app_setting != null){
            return $app_setting->value1;
        }
    }
    
    public static function notification($body,$title,$device_token){
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $token = $device_token;
        $notification = [
            'title' => $title,
            'body' => $body,
            'sound' => true,
        ];
        $fcmNotification = [
            // 'registration_ids' => $token_list
            'to' => $token, //single token
            'notification' => $notification,
        ];
        $headers = [
            // 'Authorization: key= '.'AAAA89lzn8c:APA91bHBfcfnea-rsxxLrJeYIlomC7Sv10-cTi6_xDihtUn1QxzlRQm2FF3BvO7Odmu2UGOHauJ34D1tvzvkyek1eLlwMNh1dKD3u4sYQ99gN1MqbVF_YI_9RDgoBusBp890oRqdlpg7',
            'Authorization: key= '.'AAAA7KG6QUs:APA91bFh_82IkU0tU1JpUh5zwzfv7ubv0kNGuHrgC1W6NihhZrNtvezsY-dls0jlYlOK1ysaZcDHimYw9-UlK9W0piP6CnVw6sXFRLLO6F6De7m0fSstomW45c2-DxlC14vSyzsqjwJE',
            'Content-Type: application/json'
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    
    public static function bulknotification($body,$title,$token_list,$requestid){
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $notification = [
            'title' => $title,
            'body' => $body,
            'sound' => true,
        ];
        
        $ride = rides::where('id',$requestid)->first();
        
        if($ride->status == 'accepted'){
            $driver_id =  (string) $ride->driver_id;
            $online_drivers = self::getOnlineDrivers();
            
            $google_data = array();
            $google_data['esttime'] = "0";
            $google_data['distance'] = 0.0;
            
            
            foreach($online_drivers as $online_driver){
                if( $online_driver->driver_id == $driver_id){
                    $online_driver->lat = (string) $online_driver->lat;
                    $online_driver->long = (string) $online_driver->long;
                    $google_data = self::getGoogleMap($ride->pickup_lat, $ride->pickup_long, $online_driver->lat, $online_driver->long);
                    break;
                }
            }
            
            $user_device_token = User::where('id',$ride->user_id)->first()->device_token;
            
            $data = [
                'request_id' => $requestid,
                'pickup_lat' => $ride->pickup_lat,
                'pickup_long' => $ride->pickup_long,
                'pickup_address' => $ride->pickup_address,
                'user_device_token' => $user_device_token,
                'esttime' => $google_data['esttime'],
                'distance' => $google_data['distance'],
                ];
        }
        else{
            $data = [
                'request_id' => $requestid,
                'pickup_lat' => $ride->pickup_lat,
                'pickup_long' => $ride->pickup_long,
                'pickup_address' => $ride->pickup_address,
                ];
        }
        
            
        $fcmNotification = [
            'registration_ids' => $token_list,
            'notification' => $notification,
            'data'=> $data
        ];
        $headers = [
            // 'Authorization: key= '.'AAAA89lzn8c:APA91bHBfcfnea-rsxxLrJeYIlomC7Sv10-cTi6_xDihtUn1QxzlRQm2FF3BvO7Odmu2UGOHauJ34D1tvzvkyek1eLlwMNh1dKD3u4sYQ99gN1MqbVF_YI_9RDgoBusBp890oRqdlpg7',
            'Authorization: key= '.'AAAA7KG6QUs:APA91bFh_82IkU0tU1JpUh5zwzfv7ubv0kNGuHrgC1W6NihhZrNtvezsY-dls0jlYlOK1ysaZcDHimYw9-UlK9W0piP6CnVw6sXFRLLO6F6De7m0fSstomW45c2-DxlC14vSyzsqjwJE',
            'Content-Type: application/json'
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    
    public static function getOnlineDrivers(){
        $online_drivers = file_get_contents('https://ubolt-f2720-default-rtdb.firebaseio.com/online_driver.json');
        $online_drivers = json_decode($online_drivers);
        
        // remove object node to array
        foreach($online_drivers as $online_driver){
            $data[] = $online_driver;
        }
        
        return $data;
    }
    
    public static function getHomePage(){
        $data->Users = User::where('role','user')->count();
        $data->Drivers = User::where('role','driver')->count();
        $data->Trips = rides::count();
        return $data;
    }
    
    public static function getGoogleMap($origin_lat, $origin_long, $dist_lat, $dist_long){
        
        $response = Http::get('https://maps.googleapis.com/maps/api/directions/json?mode=driving&transit_routing_preference=less_driving&origin='.$origin_lat.','.$origin_long.'&destination='.$dist_lat.','.$dist_long.'&key=AIzaSyDoVmHrVkO68EObrVfhWrzgbAHHPQ9McMM');
        $json_response = json_decode($response);
        

        // Error check in Google API
        if($json_response->status == "OK"){
            $routes = $json_response->routes;
            
            foreach($routes as $route){
                $legs = $route->legs;
                foreach($legs as $leg){
                    $distance = $leg->distance->value/1000;
                    $duration = $leg->duration->value/60;
                    $esttime = $leg->duration->text;
                }
            }
            
            $data = [
                'distance'=>$distance,
                'duration'=>$duration,
                'esttime'=>$esttime,
                'status'=>$json_response->status
                ];
        }
        else{
            $data = [
                'distance'=> "0",
                'duration'=> "0",
                'esttime'=> "0",
                'status'=>$json_response->status
                ];
        }
        
        return $data;
    }
    
    public static function payStripeOld($user_id, $total, $pm_id){
        
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
    
        $userdetail = User::find($user_id);
        $customer_id = $userdetail->stripe_customer_id;

        $charge = $stripe->paymentIntents->create([
                'amount' => (int) $total * 100,
                'currency' => 'GBP',
                'customer' => $customer_id,
                'payment_method' => $pm_id,
                'payment_method_types'=> ['card'],
                'capture_method'=> 'manual'
            ]);
              
        $stripe->paymentIntents->confirm($charge->id);
          
        $ch= $stripe->paymentIntents->capture(
              $charge->id,
              []
            );
        
        $response_array = $charge;
        
        return $response_array;
    }
    
    public static function payStripeNew($user_id, $card_number, $exp_month, $exp_year, $cvc, $total, $card_save){
        
        $userdetail = User::find($user_id);
        $customer_id = $userdetail->stripe_customer_id;
        
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $token= $stripe->tokens->create([
                                        'card' => [
                                                    'number' => $card_number,
                                                    'exp_month' => $exp_month,
                                                    'exp_year' => $exp_year,
                                                    'cvc' => $cvc,
                                                ],
                                        ]);
        $capture = $stripe->charges->create([
                                              "amount" => (int) $total*100,
                                              "currency" => "GBP",
                                              "source" => $token->id,
                                              "capture"=>true
                                            ]);
        if($card_save == true){
            $flag = 0;
            $cards = $stripe->paymentMethods->all([
                        'customer' => $customer_id,
                        'type' => 'card',
                    ]);
            
            if (count($cards) < 1) {
                        $flag = 1;
                    }
            $pm =  $stripe->paymentMethods->create([
                        'type' => 'card',
                        'card' => [
                                    'number' => $card_number,
                                    'exp_month' => $exp_month,
                                    'exp_year' => $exp_year,
                                    'cvc' => $cvc,
                                ],
                    ]);
            
            $attach =  $stripe->paymentMethods->attach($pm['id'],['customer' => $customer_id]);
                                                    
            if ($flag == 1) {
                    $result =   $stripe->customers->update($customer_id,['invoice_settings' => array('default_payment_method' => $pm['id'])]);
                }
            }
            
        $response_array = $capture;
        
        return $response_array;
    }
}