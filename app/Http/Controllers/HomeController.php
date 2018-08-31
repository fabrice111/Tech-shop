<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Payment;
use App\Product;
use App\Shipping;
use App\Slider;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $products = Product::all();
        $categories = Category::all();

        if(auth()->user()->admin==1){
            return view('admin.home') ->with('products_count', Product::all()->count())
                                            ->with('shipping_count', Shipping::all()->count())
                                            ->with('payments_count', Payment::all()->count())
                                            ->with('users_count', User::all()->count())
                                            ->with('categories_count', Category::all()->count())
                                            ->with('sliders_count', Slider::all()->count())
                                            ->with('blogs_count', Blog::all()->count());
        }
        else{
            return view('pages.home_content')->with('products', Product::orderBy('created_at', 'desc')->paginate(6))
                                                   ->with('categories',$categories)
                                                   ->with('sliders',$sliders);
        }

    }
}
