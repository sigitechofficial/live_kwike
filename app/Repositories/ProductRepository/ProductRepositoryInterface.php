<?php

namespace App\Repositories\ProductRepository;

use App\Http\Requests\RegisterRequest;

interface ProductRepositoryInterface{
    
    public function select($product_id);
    public function deselect($product_id);
}
