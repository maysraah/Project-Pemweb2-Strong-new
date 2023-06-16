<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <style>

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
        p {
            font-size: 20px;
        }
        .margin{
            margin-top: 50px;
            align: center;
        }
        td {
            font-size: 25px;
        }
        a:link {
            color: black;
            text-decoration: none;
        }
            a:visited {
                color: white;
            }

            a:hover {
                color: black;
            }

            a:active {
                color: red;
            }
            
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid" style="background-color:#4887b9;">
            <a class="navbar-brand" style=color:white; href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link active" style=color:white; aria-current="page" href="{{ route('landing.page') }}">Home</a>
                    @php
                        if (Auth::user()->is_admin == 1) {
                    @endphp
                        <a class="nav-link" style=color:white; aria-current="page" href="{{ route('admin.admin.index') }}">Admin</a>
                    @php
                        }
                    @endphp
                    <a class="nav-link active" style=color:white; aria-current="page" href="{{ asset('../public')}}/compiler/index.html">Compiler</a>
                    
                </div>
            </div>
            {{-- <div class="user me-3">
                Halo, {{ Auth::user()->name }}
            </div> --}}
            <div class="logout">
                <a href="{{ route('login.logout') }}" class="btn btn-danger" style=color:white;>Logout</a>
            </div>
        </div>
    </nav>

  <!-- Materi List -->
  <div class="row">
    <div class="col-8 col-md-3" style="background-color:#4887b9;">
        <table class="table">
            <tbody>                   
                @foreach ($materi as $item)
                    <tr>
                        <td><a href="{{ route('halMateri.show', $item->id) }}">{{ $item->judul_materi }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
     <!-- Materi Konten -->
    <div class="col-md-9 col-xs-12 konten">
        <div>
            @if($item)
            <p></p><h1 align="center">{{ $materi[0]->judul_materi }}</h1>
            <div class="container">
                <p align="justify">Python adalah sebuah bahasa pemrograman yang digunakan untuk membuat aplikasi, perintah komputer, dan melakukan analisis data. Sebagai general-purpose language, Python bisa digunakan untuk membuat program apa saja dan menyelesaikan berbagai permasalahan. Selain itu, Python juga dinilai mudah untuk dipelajari. Namun, jangan salah, Python termasuk bahasa pemrograman tingkat tinggi. Mulai dari profesi back-end developer, IT, sampai data scientist, Python benar-benar menjadi pilihan favorit.</p>
            </div>
            <h1 align="center">Mengapa Python Sangat Populer?</h1>
            <div class="container">
                <p align="justify">Sejak awal kemunculannya di era 1990-an, Python selalu masuk ke dalam bahasa pemrograman yang paling sering dipakai di industri. Bahkan, survei dari RedMonk mengungkapkan bahwa Python menduduki peringkat kedua sebagai bahasa pemrograman favorit para developer pada 2021—sekitar 30 tahun sejak peluncurannya.</p>
                <p align="justify">Kita sudah mengenal apa itu Python secara singkat, sekarang mari ungkap alasan mengapa bahasa pemrograman ini begitu populer. Pertama, Python memiliki syntax yang mudah diingat dan mudah dimengerti. Kedua, Python bisa digunakan untuk berbagai hal, baik itu pengolahan data maupun pembuatan website baru. </p>
                <p align="justify">Ketiga, Python bersifat open-source, alias dibuka gratis untuk publik. Ini juga artinya ada banyak sekali fitur dan kode buatan kreator yang semakin memperluas kapabilitas Python. Semua alasan ini semakin membuat Python dicintai oleh komunitas pencinta teknologi. Maka dari itu, tidak heran kalau banyak sekali pemula yang mengambil langkah pertamanya untuk belajar soal Python. Mungkin Anda pun salah satunya. </p>
                <p align="justify">{{!! $materi[0]->definisi !!}}</p>
@endif
                <!-- $foreach($materi as $item)
                <h1><a href="halMateri{{ $item->id }}">{{ $item->judul_materi }}</a></h1> -->
                <p>
            </div>
        </div>    
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>