<?php

namespace App\Repositories\BannerRepository;

use App\Http\Requests\HomeRequest;
use Illuminate\Http\Request;


interface BannerRepositoryInterface {

    public function getAllBanners();
    public function storeBanner($request);
    public function editBanner($request);
    public function updateBanner($request,$id);

}
