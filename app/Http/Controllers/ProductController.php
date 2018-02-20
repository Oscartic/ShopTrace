<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $products = Product::latest()->paginate(20);
        return view('home', compact('products'));
    }

    public function show(Product $product) {
        dd($product);
    }
}
