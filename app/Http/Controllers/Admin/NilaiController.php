<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nilai;
use App\Models\User;
use PDF;

class NilaiController extends Controller
{
    public function index()
    {
        $data['nilai'] = Nilai::with('user')->get();

        return view('nilai',$data);
    }

    // public function create()
    // {
    //     {
    //         $data = User::select('id', 'nama')->get();
    //         return view('tambahNilai', ['nilai'=> $data]);
    //     }
    // }

    // public function store(Request $request)
    // {
    //     // $validatedData = $request->validate([
    //     //     'namaInput' => 'required',
    //     // ]);

    //     $namaInput = $request->input('namaInput');

    //     // dd($request->input(''));

    //     $query = DB::table('nilai')->insert([
    //         'id_user' =>  $namaInput
    //     ]);

    //     if ($query) {
    //         return redirect()->route('admin.nilai')->with('success', 'Data Berhasil Ditambahkan');
    //     } else {
    //         return redirect()->route('admin.nilai')->with('failed', 'Data Gagal Ditambahkan');
    //     }
    // }

    public function show($id)
    {
        $data['nilai'] = DB::table('nilai')->where('id', $id)->first();

        return view('editNilai', $data);
    }

    public function edit($id)
    {
        $data['nilai'] = DB::table('nilai')->where('id', $id)->first();

        return view('editNilai', $data);
    }

    public function update(Request $request, $id)
    {
        $nilaiInput = $request->input('nilaiInput');

        $query = DB::table('nilai')->where('id', $id)->update([
            'nilai' =>  $nilaiInput
        ]);

        if ($query) {
            return redirect()->route('admin.nilai')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('admin.nilai')->with('failed', 'Data Gagal Diupdate');
        }

    }

    public function destroy($id)
    {
        $query = DB::table('nilai')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('admin.nilai')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('admin.nilai')->with('failed', 'Data Gagal Dihapus');
        }
    }

    public function storePoint(string $nilai, $pengguna)
    {
        $id_user = $pengguna;
        $nilai = $nilai;

        $query = DB::table('nilai')->insert([
            'id_user' => $id_user,
            'nilai' => $nilai
        ]);

        if ($query) {
            return redirect()->route('halKuis.index');
        } else {
            return redirect()->route('halKuis.index');
        }

    }

    public function exportPDF(){
        $data = Nilai::with('user')->get();
        $pdf = PDF::loadView('export', compact('data'));
        return $pdf->download('data_nilai_kuis.pdf');
    }
}
