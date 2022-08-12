<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(){
        $tableStore = [];
        return view("pages.store",compact("tableStore"));
    }}
