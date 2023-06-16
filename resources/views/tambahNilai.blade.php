@extends('layouts.main')

@section('container')
<h3 class="text-center">Tambah Nilai Siswa</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="{{ route('admin.nilai.store') }}" method="POST">
                    @csrf 

                    <div class="mb-3">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="namaInput" id="nama_Input">
                          <option>Pilih Nama Siswa</option>
                          @foreach ($nilai as $user)
                            <option value="{{$user->id_user}}">{{$user->nama}}</option>
                          @endforeach
                        </select>
                    </div>

                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection