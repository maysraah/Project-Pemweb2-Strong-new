<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            .container-md {
                background-color: rgb(181, 191, 245);
                padding: 20px;
                border-radius: 7px;
            }
            img {
                width: 300px;
            }
        </style>
    </head>
    <body>
        <div class="container p-3">
            <h1 class="text-center">Login Media Pembelajaran Python STRONG</h1>
            <div class="row justify-content-center mt-5">
                <div class="row justify-content-center mt-3">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('../public')}}/storage/images/py.png" alt="Gambar" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="container-md">
                    <div class="form">
                        <form method="post" action="{{ route('login.auth') }}">
                            @csrf
                            
                            <div class="mb-3">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="email">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>                      

                            <div class="row text-center">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div><br>
                            <div class="row text-start">
                                <div class="col-md-12">
                                    <p><a href="{{ route('register.show') }}">Belum punya akun? Register!</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

{{-- <!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            body {
                /* background-color: rgb(150, 165, 250); */
            }

            .container-md {
                background-color: rgb(181, 191, 245);
                padding: 20px;
                border-radius: 7px;
            }
        </style>
    </head> --}}
    {{-- <body>
        <div class="container-lg p-3">
            <h1 class="text-center">Login Media Pembelajaran Python STRONG</h1>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="container-md">
                                <div class="form">
                                    <form method="post" action="{{ route('login.auth') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </div><br>
                                        <div class="row text-start">
                                            <div class="col-md-12">
                                                <p><a href="{{ route('register.show') }}">Belum punya akun? Register!</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('../public')}}/storage/images/py.png" alt="Image" class="img-fluid" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html> --}}