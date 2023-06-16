<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HalMateriController extends Controller
{
    public function index()
    {
        $data = Materi::all();
        return view('halMateri', ['materi' => $data]);
    }

    public function show($id)
    {
        $materi=\App\Models\Materi::find($id);

        $data=['materi'=>$materi];
        return view('intiMateri')->with($data);

    }
}

