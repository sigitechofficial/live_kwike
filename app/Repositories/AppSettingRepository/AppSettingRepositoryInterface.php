<?php

namespace App\Repositories\AppSettingRepository;

use App\Http\Requests\HomeRequest;
use Illuminate\Http\Request;


interface AppSettingRepositoryInterface {

    public function getAllSettings();
    public function storeSettings($request);

}
