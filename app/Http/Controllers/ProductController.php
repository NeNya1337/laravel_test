<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function load(){
        $productlist = DB::table('products')->get();
        return view('dashboard',['productlist' => $productlist]);
    }

}
