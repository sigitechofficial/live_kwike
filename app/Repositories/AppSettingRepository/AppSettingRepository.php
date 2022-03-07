<?php

namespace App\Repositories\AppSettingRepository;

use App\Http\Requests\HomeRequest;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\CategoryResources;
use App\Http\Resources\ProductResource;
use App\Models\AppSetting;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\s;

class AppSettingRepository implements AppSettingRepositoryInterface
{
    protected $setting;
    public function getAllSettings(){
        return $this->setting = AppSetting::all();
    }
    public function storeSettings($request){
        $request_data = $request->except(['_token','files']);

        foreach($request_data as $key => $value){
            $app_setting = AppSetting::where('shortcode',$key)->first();
            if($app_setting != null){
                $app_setting->description = $value;
                $app_setting->save();
            }
            else{
                AppSetting::create([
                    'shortcode' => $key,
                    'description' => $value,
                ]);
            }
        }
    }
}