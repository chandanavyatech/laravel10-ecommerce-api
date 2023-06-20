<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return Product::GetData()->get();
    }
}
