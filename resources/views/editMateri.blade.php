@extends('layouts.main')

@section('container')
<h3 class="text-center">Edit Materi</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="{{ route('admin.materi.update', $materi->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="judul_input" class="form-label">Judul Materi</label>
                        <input type="text" class="form-control" id="judul_input" name="judulInput" value="{{ $materi->judul_materi }}">
                    </div>
                    <div class="mb-3">
                        <label for="definisi_input" class="form-label">Definisi</label>
                        <input type="text" class="form-control" id="definisi_input" name="definisiInput" value="{{ $materi->definisi }}">
                    </div>
                    
                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection