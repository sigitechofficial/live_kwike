<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\FrontEndSettings;
use Illuminate\Http\Request;

class FrontEndSettingsController extends Controller
{
  
    public function create_tnc(Request $request)
    {
        $tnc = FrontEndSettings::where('title',"Terms And Conditions")->first();
        
        if($tnc->count() >= 1 ){
            $tnc->value = $request->tnc;
        }
        else {
            $tnc = new FrontEndSettings;
            $tnc->title = "Terms And Conditions";
            $tnc->value = $request->tnc;
        }
        
        $tnc->save();
        return redirect()->route('terms_conditions1');
    }
    
    public function create_privacy(Request $request)
    {
        $privacy = FrontEndSettings::where('title',"Privacy")->first();
        
        if($privacy->count() >= 1 ){
            $privacy->value = $request->privacy;
        }
        else {
            $privacy = new FrontEndSettings;
            $privacy->title = "Privacy";
            $privacy->value = $request->privacy;
        }
        
        $privacy->save();
        return redirect()->route('privacy_policy1');
    }
    
   
    
    
   
    
  
    
    // show areas start here
    public function show_tnc()
    {
      
        $tnc = FrontEndSettings::where('title','Terms And Conditions')->first();
        
        return view('terms_conditions',[
            'tnc'=>$tnc->value,
            ]);
    }
    
    // show areas start here
    public function show_privacy()
    {
      
        $privacy = FrontEndSettings::where('title','Privacy')->first();
        
        return view('privacy_policy',[
            'privacy'=>$privacy->value,
            ]);
    }
    
   
    
 
    
}
