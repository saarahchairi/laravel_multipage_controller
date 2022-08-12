<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $tableAbout = [];
        return view("pages.about",compact("tableAbout"));
    }
}
