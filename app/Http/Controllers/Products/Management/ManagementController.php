<?php

namespace App\Http\Controllers\Products\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;

use App\Category;

use App\User;

use App\Order;

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
    //get total products and categories
    public function totalProducts(){
            $totalProducts = count(Product::all());
            $totalCategories = count(Category::all());
            return response()->json(['totalProducts'=>$totalProducts,'totalCategories'=>$totalCategories],200);
    }
    //get total Users and subscribers
    public function totalUsers(){
        $totalUsers = count(User::all());
        $totalSubcribers = User::where('subscription','subscribe')->get()->count();
        return response()->json(['totalUsers'=>$totalUsers,'totalSubcribers'=>$totalSubcribers],200);
   }
   //get all orders

    public function allOrders(){
        $orders = Order::all();
        return response()->json($orders,200);
    }
}
