<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            .container-md {
                background-color: rgb(181, 191, 245);
                padding: 20px;
                border-radius: 7px;
            }
        </style>
    </head> 
    <body>
        <div class="container p-3">
            <h1 class="text-center">Registrasi Pengguna Baru</h1>
            <div class="row justify-content-center mt-5">
                <div class="col-md-5">
                    <div class="container-md">
                        <div class="form">
                            <form method="post" action="{{ route('register.store') }}">
                                @csrf

                                <div class="mb-3">
                                    <input type="text" class="form-control @error('namaInput') is-invalid @enderror" id="namaInput" name="namaInput" value="{{ old('namaInput') }}" placeholder="Nama">
                                    @error('namaInput')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>                            
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control @error('nisInput') is-invalid @enderror" id="nisInput" name="nisInput" value="{{ old('nisInput') }}" placeholder="NIS">
                                    @error('nisInput')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>                            
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <input type="text" class="form-control @error('emailInput') is-invalid @enderror" id="emailInput" name="emailInput" value="{{ old('emailInput') }}" placeholder="Email">
                                    @error('emailInput')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>                            
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <input type="password" class="form-control @error('passwordInput') is-invalid @enderror" id="passwordInput" name="passwordInput" placeholder="Password">
                                    @error('passwordInput')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>                            
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <input type="password" class="form-control @error('passwordInput_confirmation') is-invalid @enderror" id="passwordInput_confirmation" name="passwordInput_confirmation" placeholder="Konfirmasi Password">
                                    @error('passwordInput')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>                            
                                    @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
