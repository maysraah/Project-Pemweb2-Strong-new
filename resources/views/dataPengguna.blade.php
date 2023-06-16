<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Data Pengguna</title>
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

    .btn-group-spacing .btn {
        margin-right: 5px;
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
                        <h1>Tabel Data Pengguna</h1>
                        <a href="{{ route('admin.dataPengguna.create') }}" class="btn btn-success">Tambah Data</a>
                        <table class="table">
                            <thead>
                                <tr align="center">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $n= 1;
                                @endphp
                                @foreach ($users as $user)
                                <tr align="center">
                                    <th scope="row">{{ $n }}</th>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ ($user->is_admin)== 1 ? "Admin" : "Siswa" }}</td>
                                    <td>
                                        <div style="display: flex; gap: 10px;" align="center">
                                            <a href="{{ route('admin.dataPengguna.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('admin.dataPengguna.destroy',$user->id) }}" method="POST" class="d-inline">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>