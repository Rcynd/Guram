<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // AIzaSyCLVf2mpifHNfcrQizBZJERf1nTmcoeW_Y
    public function index(){
        return view('app.home.index',[
            'active' => 'home',
            "title" => "Home"
        ]);
    }
}
