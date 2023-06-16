<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Nilai Siswa</title>
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
        .margin{
            margin-top: 50px;
            font-size: 25px;
            /* align: center; */
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

     /* Responsiveness for table */
    .table {
        width: 100%;
    }

    @media (max-width: 767px) {
        #sidebar.responsive {
            left: 0;
        }
    
        #content.responsive {
        margin-left: 0;
        }
    
        #sidebarCollapse {
        display: block;
        }
    }

     /* Contoh CSS tambahan */
    .responsive {
        transition: all 0.3s;
    } 

    /* CSS tambahan untuk konten saat sidebar ditampilkan */
    #content.shifted {
        margin-left: 250px;
        transition: all 0.3s;
    }

    @media (max-width: 767px) {
    #content.shifted {
        margin-left: 0;
    }
    }

    </style>
</head>
<body>
    <div class="row">
        <div class="col-12 col-md-3 bg-light">
            <p class="box2">Menu Admin</p>
            <div class="list-group">
                <a href="{{ route('admin.materi') }}" class="list-group-item">Tabel Untuk Materi</a>
                <a href="{{ route('admin.kuis') }}" class="list-group-item">Tabel Untuk Soal</a>
                <a href="{{ route('admin.nilai') }}" class="list-group-item">Tabel Untuk Nilai Siswa</a>
                <a href="{{ route('admin.dataPengguna') }}" class="list-group-item">Tabel Untuk Pengguna</a>
            </div>
        </div>
        <div class="col-12 col-md-9">
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
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-10">
                        <h1>Tabel Nilai Siswa</h1>
                        {{-- <a href="{{ route('admin.nilai.create') }}" class="btn btn-success">Tambah Data</a> --}}
                        <a href="{{ route('admin.export.pdf') }}" class="btn btn-info text-white ">Export PDF</a>
                        <table class="table">
                            <thead>
                                <tr align="center">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $n= 1;
                                @endphp
                                @foreach ($nilai as $item)
                                <tr align="center">
                                    <th scope="row">{{ $n }}</th>
                                    <td>{{ $item->user['nama'] }}</td>
                                    <td>{{ $item->nilai }}</td>
                                    <td>
                                        <div style="display: flex; gap: 10px;" align="center">
                                            <a href="{{ route('admin.nilai.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('admin.nilai.destroy',$item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $n++;
                                @endphp
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- <div class="row">
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
    </div> --}}

            {{-- <div class="col py-3">
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
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-10">
                        <h1>Tabel Nilai Siswa</h1>
                        {{-- <a href="{{ route('admin.nilai.create') }}" class="btn btn-success">Tambah Data</a>
                        <a href="{{ route('admin.export.pdf') }}" class="btn btn-info text-white ">Export PDF</a>
                        <table class="table">
                            <thead>
                                <tr align="center">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $n= 1;
                                @endphp
                                @foreach ($nilai as $item)
                                <tr align="center">
                                    <th scope="row">{{ $n }}</th>
                                    <td>{{ $item->user['nama'] }}</td>
                                    <td>{{ $item->nilai }}</td>
                                    <td>
                                        <div style="display: flex; gap: 10px;" align="center">
                                            <a href="{{ route('admin.nilai.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('admin.nilai.destroy',$item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $n++;
                                @endphp
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>