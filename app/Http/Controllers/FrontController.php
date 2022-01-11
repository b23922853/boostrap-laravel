<?php

namespace App\Http\Controllers;

use App\Article;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $article = Article::orderbydesc('id')->take(3)->get();
        $product = Product::get();

        return view('front.index',compact('product','article'));

    }
}
