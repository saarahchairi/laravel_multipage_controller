<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
        $tableProducts = [];
        return view("pages.products",compact("tableProducts"));
    }
}
