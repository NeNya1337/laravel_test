<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function load(){
        $produkte = DB::table('products')->get();
        $productlist = Product::all();
        return view('dashboard',['productlist' => $productlist, 'products' => $productlist->toJson()]);
    }

}
