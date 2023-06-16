<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Materi;

class MateriAdminController extends Controller
{
    public function index()
    {
        $data['materi'] = DB::table('materi')->get();
        return view('materi', $data);
    }

    public function create()
    {
        return view('tambahMateri');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judulInput' => 'required|max:255',
            'definisiInput' => 'required'
        ]);

        $judulInput = $request->input('judulInput');
        $definisiInput = $request->input('definisiInput');

        // dd($request->input(''));

        $query = DB::table('materi')->insert([
            'judul_materi' =>  $judulInput,
            'definisi' => $definisiInput
        ]);

        if ($query) {
            return redirect()->route('admin.materi')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('admin.materi')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function show($id)
    {
        $data['materi'] = DB::table('materi')->where('id', $id)->first();

        return view('editMateri', $data);
    }

    public function edit($id)
    {
        $data['materi'] = DB::table('materi')->where('id', $id)->first();

        return view('editMateri', $data);
    }

    public function update(Request $request, $id)
    {
        $judulInput = $request->input('judulInput');
        $definisiInput = $request->input('definisiInput');

        $query = DB::table('materi')->where('id', $id)->update([
            'judul_materi' =>  $judulInput,
            'definisi' => $definisiInput
        ]);

        if ($query) {
            return redirect()->route('admin.materi')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('admin.materi')->with('failed', 'Data Gagal Diupdate');
        }

    }

    public function destroy($id)
    {
        $query = DB::table('materi')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('admin.materi')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('admin.materi')->with('failed', 'Data Gagal Dihapus');
        }
    }
}
