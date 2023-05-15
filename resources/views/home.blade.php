<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(150, 165, 250);
        }

        .container {
            padding: 20px;
        }
        .container-md {
                width: 800px;
                background-color: rgb(255, 244, 94);
                padding: 20px;
                border-radius: 7px;
                text-align: center;
            }

            .btn-primary {
                width: 200px;
                background-color: rgb(221, 219, 219);
                border: rgb(221, 219, 219);
                color: black;
            }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                    @can('admin')
                    <a class="nav-link" href="{{ route('homeAdmin.index') }}">Admin</a>
                    @endcan
                    <a class="nav-link" href="#">Tentang</a>
                </div>
            </div>
            {{-- <div class="user me-3">
                Halo, {{ Auth::user()->name }}
            </div> --}}
            <div class="logout">
                <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>

    <div>
        <h1 align="center">Selamat Datang, User!</h1>
        <div class="container">
            <p align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="container-md">
            <p><b>Petunjuk</b></p>
            <p>Klik button Materi untuk mulai belajar</p>
            <p>Klik button Kuis untuk mulai kuis</p>
        </div><br>

        <div class="container-md">
            <p><b>Tujuan Pembelajaran</b></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div><br>

        <div align="center">
            <button type="submit" class="btn btn-primary"><b>Materi</b></button>
        </div><br>
        <div align="center">
            <button type="submit" class="btn btn-primary"><b>Kuis</b></button>
        </div><br>
    </div>
