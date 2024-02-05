<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeProductController extends Controller
{
    public function product()
    {
        return view('frontend.product.index');
    }

    public function subCat()
    {
        return view('frontend.product.sub-cat');
    }

    public function subSubCat()
    {
        return view('frontend.product.sub-sub-cat');
    }

    public function productDetails()
    {
        return view('frontend.product.product-details');
    }

    
}
