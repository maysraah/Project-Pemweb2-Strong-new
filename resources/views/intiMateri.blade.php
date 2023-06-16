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
        .content{
            width:90%;
            margin:auto;
            height:420px;
            padding:0px;
            background:#fff;
            color:#333;
        }
        .jarak{
            padding:0 2pc;
        }
        .box2{
            margin-top: 20px;
            margin-left: 20px;
            margin-right: 80px;
            font-size:30px;
            color: teal;
            border : 1px black;
        }
        .box3{
            padding-bottom: 100%;
        }
        .border{
            border-color:100px solid #4887b9;
            margin-top:1pc;
            padding-bottom:1pc;
            padding-left:2pc;
            padding-right:2pc;
        }
        .container {
            padding: 20px;
            
        }
        .kanan{
            width:30%;
            float:left;
            margin:auto;
            background:#fff;
            height:420px;
        }
        .kiri{
            width:70%;
            float:left;
            margin:auto;
            background:#fff;
            height:420px;
        }
        .container-md {
            width: 800px;
            background-color:#417aa8;
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
            color: black;
        }

        a:hover {
            color: rgb(150, 165, 250);
        }
        a:active {
            color: blue;
        }
        .footer{
            width:100%;
            margin:auto;
            height:50px;
            line-height:40px;
            background:#417aa8;
            color:#fff;
            margin-bottom: 1pc;
            text:center;
        }
        .button4 {
            border-radius: 12px;
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        textarea{
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
            resize: none;
        }

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color:#4887b9;">
        <div class="container-fluid">
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
                        <a class="nav-link" aria-current="page" style=color:white; href="{{ route('admin.admin.index') }}">Admin</a>
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

  <!-- Back -->
  <div class="row">
    <div class="box2">
        <table class="table">
            <tbody>
                    <tr>
                        <td><a href="{{ route('halMateri.index') }}">🔙Back</a></td>
                    </tr>
            </tbody>
        </table>
    </div>

     <!-- Materi Konten -->
    <div class="content">
    <div class="jarak">
    <div class="border">
            <p></p><h1 align="center">{{ $materi->judul_materi }}</h1>
            <div class="container">
                {!! $materi->definisi !!}<br>
                {{-- <a href="{{ asset('../public')}}/compiler/index.html">Klik untuk bisa ke halaman Compiler!</a> --}}
            </div>
            </div>
            </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </div>
</body>
</html>