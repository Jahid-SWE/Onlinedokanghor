<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard.dashboard');

    }
    public function chart(){
        return view('backend.chart.chart');

    }
    public function static_layout(){
        return view('backend.layouts.static_navigation');

    }
    public function light_sidenav(){
        return view('backend.layouts.light_sidenav');

    }
    public function table(){
        return view('backend.table.table');

    }

}
