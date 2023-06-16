<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kuis;

class KuisController extends Controller
{
    public function index()
    {
        $data['kuis'] = Kuis::all();

        return view('kuis',$data);
    }

    public function create()
    {
        return view('tambahKuis');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'soalInput' => 'required|max:255',
            'pil_aInput' => 'required|max:255',
            'pil_bInput' => 'required|max:255',
            'pil_cInput' => 'required|max:255',
            'pil_dInput' => 'required|max:255',
            'kunciInput' => 'required|max:255',
            'gambarInput' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        if($request->file('gambarInput')){
            $validatedData['gambarInput'] = $request->file('gambarInput')->store('public/images');
        }

        $soalInput = $request->input('soalInput');
        $pil_aInput = $request->input('pil_aInput');
        $pil_bInput = $request->input('pil_bInput');
        $pil_cInput = $request->input('pil_cInput');
        $pil_dInput = $request->input('pil_dInput');
        $kunciInput = $request->input('kunciInput');
        $gambarInput = $request->file('gambarInput')->store('images');

        $query = DB::table('kuis')->insert([
            'soal' => $soalInput,
            'pil_a' => $pil_aInput,
            'pil_b' => $pil_bInput,
            'pil_c' => $pil_cInput,
            'pil_d' => $pil_dInput,
            'kunci_jawaban' => $kunciInput,
            'gambar' => $gambarInput
        ]);

        if ($query) {
            return redirect()->route('admin.kuis')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('admin.kuis')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function show($id)
    {
        $data['kuis'] = DB::table('kuis')->where('id_soal', $id)->first();

        return view('editKuis', $data);
    }

    public function edit($id)
    {
        $data['kuis'] = DB::table('kuis')->where('id_soal', $id)->first();

        return view('editKuis', $data);
    }

    public function update(Request $request, $id)
    {
        $pil_aInput = $request->input('pil_aInput');
        $pil_bInput = $request->input('pil_bInput');
        $pil_cInput = $request->input('pil_cInput');
        $pil_dInput = $request->input('pil_dInput');
        $kunciInput = $request->input('kunciInput');
        $gambarInput = $request->input('gambarInput');

        $query = DB::table('kuis')->where('id_soal', $id)->update([
            'soal' => $soalInput,
            'pil_a' => $pil_aInput,
            'pil_b' => $pil_bInput,
            'pil_c' => $pil_cInput,
            'pil_d' => $pil_dInput,
            'kunci_jawaban' => $kunciInput,
            'gambar' => $gambarInput
        ]);

        if ($query) {
            return redirect()->route('admin.kuis')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('admin.kuis')->with('failed', 'Data Gagal Ditambahkan');
        }

    }

    public function destroy($id)
    {
        $query = DB::table('kuis')->where('id_soal', $id)->delete();

        if ($query) {
            return redirect()->route('admin.kuis')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('admin.kuis')->with('failed', 'Data Gagal Dihapus');
        }
    }
}
