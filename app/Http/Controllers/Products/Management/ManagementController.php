<?php

namespace App\Http\Controllers\Products\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;

use App\Category;

class ManagementController extends Controller
{
    public function dashboard()
    {
        return view('shop.cpanel.dashboard');
    }

    /**
     * Product Dashboard
    */

    public function productsDashboard(){
        $products = Product::all();
        $categories = Category::all();
        return view('shop.cpanel.products')->with(['products'=>$products,'categories'=>$categories]);
    }

    public function categoryDashboard(){
        $categories = Category::all();
        return view('shop.cpanel.category')->with(['categories'=>$categories]);
    }
}
