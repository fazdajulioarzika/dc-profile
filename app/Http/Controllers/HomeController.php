<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\ProgramComputer;

class HomeController extends Controller
{
    public function index()
    {
        return view('index',  [
            'title' => 'Beranda | LPK Dewa Computer',
            'active' => 'beranda',
            'like' => Like::find(1),

        ]);
    }
    public function about()
    {
        return view('about',  [
            'title' => 'Tentang Kami | LPK Dewa Computer',
            'active' => 'tentang',

        ]);
    }
    public function goals()
    {
        return view('goals',  [
            'title' => 'Visi & Misi | LPK Dewa Computer',
            'active' => 'goals',

        ]);
    }
    public function service()
    {
        return view('service',  [
            'title' => 'Layanan Kami | LPK Dewa Computer',
            'active' => 'service',
            'computer' => ProgramComputer::all(),

        ]);
    }
}
