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
            background-color: rgb(166, 178, 247);
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
                background-color: rgb(255, 244, 94);
                border: rgb(221, 219, 219);
                color: black;
        }
        .child {
            left: 50%;
        }
        .container-isi {
            font-family: arial;
            font-size: 30px;
            margin: 25px;
            margin-top: 15%;
            position: relative;
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
                    <a class="nav-link active" aria-current="page" href="{{ route('landing.page') }}">Home</a>
                    @can('admin')
                    <a class="nav-link" href="{{ route('homeAdmin.index') }}">Admin</a>
                    @endcan
                    
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

    <div class="container-isi">
        <div class="child"
        <h1 align="center">Klik Button di bawah ini untuk memulai kuis!</h1>
        
        <div align="center">
            <a href="{{ route('halKuis.show') }}" class="btn btn-primary"><b>Mulai Kuis</a>
        <div>
    </div>