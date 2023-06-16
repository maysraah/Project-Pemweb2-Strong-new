<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
    .box1{
        border-radius: 20px;
        margin-top: 80px;
        margin-left: 80px;
        margin-right: 80px;
        margin-bottom: 80px;
        padding-top: 40px;
        padding-left: 40px;
        padding-bottom: 70px;
        font-size:40px;
        color: teal;
        background: #F0F0F0;
        text-align : center;
    }
    .box2{
        margin-top: 20px;
        margin-left: 100px;
        margin-right: 80px;
        padding-top: 40px;
        font-size:30px;
        color: teal;
        border : 1px black;
    }

    .box3{
        padding-bottom: 100%;
    }

    .container {
            padding: 20px;
        }
        .container-md {
                width: 800px;
                background-color: rgb(255, 244, 94);
                padding: 20px;
                border-radius: 7px;
                /* text-align: center; */
            }

        .btn-primary {
            width: 200px;
            background-color: rgb(221, 219, 219);
            border: rgb(221, 219, 219);
            color: black;
        }
        p {
            font-size: 20px;
        }
        .margin{
            margin-top: 50px;
            /* align: center; */
        }
        td {
            font-size: 25px;
        }
        a:link {
            color: black;
            text-decoration: none;
        }
            a:visited {
                color: black;
            }

            a:hover {
                color: rgb(150, 165, 250);
            }

            a:active {
                color: blue;
            }
    </style>
</head>
<body>
    <!-- <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu Admin</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.materi') }}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Tabel Materi</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Tabel Soal</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Tabel Kunci Jawaban</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.dataPengguna') }}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Tabel Pengguna</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> -->

    <div class="row">
    <div class="col-8 col-md-3 bg-light">
    <p class="box2">Menu Admin</p>
        <table class="margin" style="margin-left:auto;margin-right:auto">
            <tr>
                <td><a href="{{ route('admin.materi') }}">Tabel Untuk Materi</a>
                <hr size="2" width="90%" color="black">
                </td>
            </tr>
            <tr>
                <td><a href="{{ route('admin.kuis') }}">Tabel Untuk Soal</a>
                <hr size="2" width="90%" color="black">
                </td>
            </tr>
            <tr>
                <td><a href="{{ route('admin.nilai') }}">Tabel Untuk Nilai Siswa</a>
                <hr size="2" width="90%" color="black">
                </td>
            </tr>
            <tr>
                <td><a href="{{ route('admin.dataPengguna') }}">Tabel Untuk Pengguna</a>
                <hr size="2" width="90%" color="black">
                </td>
            </tr>
        </table>
        <p class="box3">
    </div>
    
<!-- potong bebek angsa -->
                    
                        
            <div class="col py-3">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="{{ route('landing.page') }}">Home</a>
                                @php
                                    if (Auth::user()->is_admin == 1) {
                                @endphp
                                    <a class="nav-link" aria-current="page" href="{{ route('admin.admin.index') }}">Admin</a>
                                @php
                                    }
                                @endphp
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
                <div class="box1">
                <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
                <h3>Ini adalah halaman Admin</h3>
                <p>Silahkan pilih menu data di samping</p>
                <div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>