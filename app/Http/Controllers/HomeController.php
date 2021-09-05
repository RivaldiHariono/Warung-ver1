<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::count();
        $productPriceTotal = Product::sum('price');

        $productAvgPrice = $productPriceTotal / $product;
        

        return view('pages.home',[
            'product' => $product,
            'avgPrice' => $productAvgPrice
        ]);
    }
}
