<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $data['materi'] = DB::table('materi')->get();
        return view('home', $data);
    }
}
