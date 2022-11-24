<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        return view('app.dashboard.index',[
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ]);
    }
}
