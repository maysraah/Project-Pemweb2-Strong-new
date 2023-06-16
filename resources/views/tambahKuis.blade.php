@extends('layouts.main')

@section('container')
<h3 class="text-center">Tambah Soal Kuis</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="{{ route('admin.kuis.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="soal_input" class="form-label">Soal</label>
                        <input type="text" class="form-control" id="soal_input" name="soalInput">
                    </div>
                    <div class="mb-3">
                        <label for="pilA_input" class="form-label">Pilihan A</label>
                        <input type="text" class="form-control" id="pilA_input" name="pil_aInput">
                    </div>
                    <div class="mb-3">
                        <label for="pilB_input" class="form-label">Pilihan B</label>
                        <input type="text" class="form-control" id="pilB_input" name="pil_bInput">
                    </div>
                    <div class="mb-3">
                        <label for="pilC_input" class="form-label">Pilihan C</label>
                        <input type="text" class="form-control" id="pilC_input" name="pil_cInput">
                    </div>
                    <div class="mb-3">
                        <label for="pilD_input" class="form-label">Pilihan D</label>
                        <input type="text" class="form-control" id="pilD_input" name="pil_dInput">
                    </div>
                    <div class="mb-3">
                        <label for="kunci_input" class="form-label">Kunci Jawaban</label>
                        <input type="text" class="form-control" id="kunci_input" name="kunciInput">
                    </div>
                    <div class="mb-3">
                        <label for="gambar_input" class="form-label">Gambar</label>
                        <input type="file" class="form-control" @error('gambarInput') is-invalid @enderror id="gambar_input" name="gambarInput">
                    @error('gambarInput')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    </div>

                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection