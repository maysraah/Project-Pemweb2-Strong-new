<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Kuis;

class HalKuisController extends Controller
{
    public function index()
    {
        return view('halKuis');
    }

    public function showKuis()
    {
        $dataKuis['kuis'] = DB::table('kuis')->take(10)->get();
        return view('quiz', $dataKuis);
    }
}
