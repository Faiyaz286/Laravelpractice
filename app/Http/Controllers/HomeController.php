<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\HomeProduct;

class HomeController extends Controller
{
    public function index()
    {   
        $homeProducts = HomeProduct::with('product')->get();
        
        return view('pages.home',compact('homeProducts'));
    }

    public function productDetails($slug)
    {   
        $product = Product::where('slug',$slug)->firstOrFail();

        
        
        return view('pages.product-details',compact('product'));
    }

    public function contact(){

        return view('pages.contact');
        
    }
}
