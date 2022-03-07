<?php

namespace App\Repositories\BannerRepository;

use App\Http\Requests\HomeRequest;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\CategoryResources;
use App\Http\Resources\ProductResource;
use App\Models\Banner;
use App\Repositories\BannerRepository\BannerRepositoryInterface;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\s;

class BannerRepository implements BannerRepositoryInterface
{
    protected $banners;
    public function getAllBanners(){
        return $this->banners = Banner::all();
    }
    public function storeBanner($request){
        if(isset($request->image)){
            $image = "banner-".time().'.'.$request->image->extension();  
            $request->image->move(storage_path('app/public/images/banners'),$image);
            $data['image'] = 'banners/'.$image;
        }
        $data['title'] = $request->title;
        $data['valid_till'] = $request->valid_till;
        Banner::create($data);
    }
    public function editBanner($request){
        $id = $request;
        $banner = Banner::find($id);
        return $this->banners = $banner;
    }
    public function updateBanner($request,$id){
        $banner = Banner::find($id);

        if(isset($request->image)){
            $path = 'storage/app/public/images/'.$banner->image;
            unlink($path);
            $image = "banner-".time().'.'.$request->image->extension();  
            $request->image->move(storage_path('app/public/images/banners'),$image);
            $data['image'] = 'banners/'.$image;
        }
        $data['title'] = $request->title;
        $data['valid_till'] = $request->valid_till;

        $banner->update($data);

        return $this->banners = $banner;

    }
}