<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kuis</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    {{-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous">
    </script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            align-content: center;
        }

        body{
            align-content: center;
            background-color: rgb(183, 192, 243);
            margin: 100px;
            padding: 0;
        }
        .container{
            background-color: #f7f3f3;
            color: #000000;
            border-radius: 10px;
            padding: 20px;
            font-family: 'Montserrat', sans-serif;
            max-width: 700px;
        }
        .container > p{
            font-size: 32px;
        }
        .question{
            width: 75%;
        }
        .options{
            position: relative;
            padding-left: 40px;
        }
        #options label{
            display: block;
            margin-bottom: 15px;
            font-size: 14px;
            cursor: pointer;
        }
        .options input{
            opacity: 0;
        }
        .checkmark {
            position: absolute;
            top: -1px;
            left: 0;
            height: 25px;
            width: 25px;
            /* background-color: #e2e2e2; */
            border: 2px solid #979797;
            border-radius: 50%;
        }
        .options input:checked ~ .checkmark:after {
            display: block;
        }
        .options .checkmark:after{
            content: "";
            width: 10px;
            height: 10px;
            display: block;
            background: white;
            position: absolute;
            top: 50%;
            left: 50%;
            border-radius: 50%;
            transform: translate(-50%,-50%) scale(0);
            transition: 300ms ease-in-out 0s;
        }
        .options input[type="radio"]:checked ~ .checkmark{
            background: #21bf73;
            transition: 300ms ease-in-out 0s;
        }
        .options input[type="radio"]:checked ~ .checkmark:after{
            transform: translate(-50%,-50%) scale(1);
        }
        .btn-primary{
            background-color: #555;
            color: #ddd;
            border: 1px solid #ddd;
        }
        .btn-primary:hover{
            background-color: #21bf73;
            border: 1px solid #21bf73;
        }
        .btn-success{
            padding: 5px 25px;
            background-color: #21bf73;
        }
        img {
            width:300px;
        }
        @media(max-width:576px){
            .question{
                width: 100%;
                word-spacing: 2px;
            } 
            img {
                max-width: 100%;
                height: auto;
            }
        }
        h1 {
            text-align: center;
            color: rgb(21, 37, 73);
            font-family: 'Montserrat', sans-serif;
        }
</style>
<!------ Include the above in your HEAD tag ---------->
</head>
    <body>
        @include('sweetalert::alert')
        <h1>Kuis Media Pembelajaran Python Dasar</h1><br>
        <div class="container" style="margin: 0 auto;">
            @foreach ($kuis as $soal => $item)
            <section class="section-{{ $soal + 1 }}" id="section-{{ $soal + 1 }}" style="{{ $soal > 0 ? 'display:none' : '' }}" >
                <div class="mt-sm-5 my-1">
                    <div class="question ml-sm-5 pl-sm-5 pt-2">
                        <div><img src="{!! asset('storage/'.$item->gambar) !!}"></div><br> 
                        <div class="py-2 h5"><b> {{ $item->soal }}</b></div>
                        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                            <label class="options" for="one-a-{{ $soal + 1 }}" onclick="checkAnswer('{{$item->kunci_jawaban}}', 'one-a-{{ $soal + 1 }}','{{ $item->pil_a }}')">{{ $item->pil_a }}
                                <input type="radio" id="one-a-{{ $soal + 1 }}" name="yes-{{ $soal + 1 }}" value="{{ $item->pil_a }}" required>
                                <span class="checkmark"></span>
                            </label>
                            <label class="options" for="one-b-{{ $soal + 1 }}" onclick="checkAnswer('{{$item->kunci_jawaban}}', 'one-b-{{ $soal + 1 }}','{{ $item->pil_b }}')">{{ $item->pil_b }}
                                <input type="radio" id="one-b-{{ $soal + 1 }}" name="yes-{{ $soal + 1 }}" value="{{ $item->pil_b }}" required>
                                <span class="checkmark"></span>
                            </label>
                            <label class="options" for="one-c-{{ $soal + 1 }}" onclick="checkAnswer('{{$item->kunci_jawaban}}', 'one-c-{{ $soal + 1 }}','{{ $item->pil_c }}')">{{ $item->pil_c }}
                                <input type="radio" id="one-c-{{ $soal + 1 }}" name="yes-{{ $soal + 1 }}" value="{{ $item->pil_c }}" required>
                                <span class="checkmark"></span>
                            </label>
                            <label class="options" for="one-d-{{ $soal + 1 }}" onclick="checkAnswer('{{$item->kunci_jawaban}}', 'one-d-{{ $soal + 1 }}','{{ $item->pil_d }}')">{{ $item->pil_d }}
                                <input type="radio" id="one-d-{{ $soal + 1 }}" name="yes-{{ $soal + 1 }}" value="{{ $item->pil_d }}" required>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        {{-- <div id="prev">
                            <button class="btn btn-primary">Previous</button>
                        </div> --}}
                        <div class="ml-auto mr-sm-5">
                            @if ($soal + 1 < count($kuis))
                                <button class="btn btn-success" onclick="nextSection({{ $soal + 1}})">Next</button>
                            @else
                                <button class="hint" style="font-size: 20px" onclick="selesai()">Selesai</button>     
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            @endforeach
        </div>
    

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    <script>
        let jawaban_benar = 0;
        let skor = 0;

        function nextSection(currentIndex) {
        document.getElementById(`section-${currentIndex}`).style.display = 'none';
        const nextIndex = currentIndex + 1;
        document.getElementById(`section-${nextIndex}`).style.display = 'block';
        }
    
        function checkAnswer(correctAnswer, selectedOption, Jawaban) {
        const label = document.querySelector(`label[for="${selectedOption}"]`);
        const radio = document.getElementById(selectedOption);
    
        if (Jawaban === correctAnswer) {
            label.style.color = 'green';
            jawaban_benar++
            skor+=5;
        } else {
            label.style.color = 'red';
        }
    }
        const scoreLink = document.getElementById('score-link');
        const skorPlaceholder = '__skor__';
        const updatedHref = scoreLink.getAttribute('href').replace(skorPlaceholder, skor.toString());
        scoreLink.setAttribute('href', updatedHref);

        function selesai() {
        let userId = '<?php echo Auth::user()->id; ?>';
        let leaderboardUrl = `<?php echo route('nilai.storePoint', ['_score', '__user_']) ?>`;
        leaderboardUrl = leaderboardUrl.replace('_score', skor).replace('__user_', userId);

        Swal.fire({
            title: 'Skor: ' + skor,
            text: 'Klik URL Kembali di bawah untuk kembali ke halaman kuis.',
            footer: '<a id="score-link" href="' + leaderboardUrl + '">Kembali</a>',
            showConfirmButton: false
        });
    }
</script>
</body>
</html>



