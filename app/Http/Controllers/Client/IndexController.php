<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hero;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $categories = Category::where('isActive', 1)->get();
        $products = Product::where('isActive', 1)->get();
        $reviews = Review::where('isActive', 1)->get();
        $heroes = Hero::all();
        return view('Client.index', compact('products','reviews', 'categories', 'heroes'));
    }
}
