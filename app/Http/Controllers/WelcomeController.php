<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
        $tableWelcome = [];
        return view("welcome",compact("tableWelcome"));
    }
}
