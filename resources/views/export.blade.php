<!DOCTYPE html>
<html>
<head>
    <title>Export PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Data Nilai Kuis Siswa</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $siswa)
                <tr>
                    <td>{{ $siswa->id }}</td>
                    <td>{{ $siswa->user['nama'] }}</td>
                    <td>{{ $siswa->nilai }}</td>
                    <!-- Tambahkan kolom sesuai dengan struktur tabel Anda -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
