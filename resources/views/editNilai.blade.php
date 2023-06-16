@extends('layouts.main')

@section('container')
<h3 class="text-center">Edit Nilai</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="{{ route('admin.nilai.update', $nilai->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nilai_input" class="form-label">Nilai</label>
                        <input type="text" class="form-control" id="nilai_input" name="nilaiInput" value="{{ $nilai->nilai }}">
                    </div>
                    
                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection