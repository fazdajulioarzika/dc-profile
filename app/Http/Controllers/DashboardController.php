<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index',  [
            'title' => 'Dashboard | LPK Dewa Computer',
            'active' => 'dashboard',

        ]);
    }
    public function computer()
    {
        return view('dashboard.computer',  [
            'title' => 'Dashboard | LPK Dewa Computer',
            'active' => 'computer',

        ]);
    }
    public function bahasa()
    {
        return view('dashboard.bahasa',  [
            'title' => 'Dashboard | LPK Dewa Computer',
            'active' => 'bahasa',

        ]);
    }
}
