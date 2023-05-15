<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data['sepatu'] = DB::table('sepatu')->get();
        return view('home');
    }
}
