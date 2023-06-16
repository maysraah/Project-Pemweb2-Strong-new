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
        .aa {
            color: black;
            text-decoration: none;
            color: blue;
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
                    @php
                        if (Auth::user()->is_admin == 1) {
                    @endphp
                        <a class="nav-link" aria-current="page" href="{{ route('admin.admin.index') }}">Admin</a>
                    @php
                        }
                    @endphp
                    <a class="nav-link" href="#">Tentang</a>
                </div>
            </div>
            <div class="user me-3">
                Halo, {{ Auth::user()->nama }}
            </div>
            <div class="logout">
                <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>

    <div>
        <p></p>
        <p></p>
        <h1 align="center">Selamat Datang, {{ Auth::user()->nama }} !</h1>
        <div class="container">
            <p align="center"></p>
        </div>

        <div class="container-md">
            <p><b>Petunjuk</b></p>
            <p>Klik button <b>Materi</b> untuk mulai belajar</p>
            <p>Klik button <b>Kuis</b> untuk mulai kuis</p>
        </div><br>

        <div class="container-md">
            <p><b>Tujuan Pembelajaran</b></p>
            <p>Setelah mempelajari materi pada website ini, kalian mampu memahami dan menerapkan bahasa pemrograman python dasar untuk membuat data.</p>
        </div><br>

        <div align="center">
            <button type="submit" class="btn btn-primary"><a class="aa" href="{{ route('halMateri.index') }}"><b>Materi</b><a></button>
        </div><br>
        <div align="center">
            <button type="submit" class="btn btn-primary"><b>Kuis</b></button>
        </div><br>
    </div>
