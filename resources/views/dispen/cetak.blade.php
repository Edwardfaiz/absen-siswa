<!DOCTYPE html>
<html>
<head>
    <title>Cetak Surat Dispen</title>

    <style>
        body{
            font-family: Arial;
            padding: 40px;
        }

        .kop{
            text-align: center;
            margin-bottom: 30px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        td, th{
            border: 1px solid #000;
            padding: 10px;
        }

        .ttd{
            margin-top: 50px;
            text-align: right;
        }
    </style>
</head>

<body onload="window.print()">

<div class="kop">
    <h2>SURAT DISPENSASI SISWA</h2>
    <h3>SMK 1 Citeureup Bogor</h3>
    <hr>
</div>

<table>

    <tr>
        <th>Nama Siswa</th>
        <td>{{ $dispen->nama_siswa }}</td>
    </tr>

    <tr>
        <th>Kelas</th>
        <td>{{ $dispen->kelas }}</td>
    </tr>

    <tr>
        <th>Jurusan</th>
        <td>{{ $dispen->jurusan }}</td>
    </tr>

    <tr>
        <th>Alasan</th>
        <td>{{ $dispen->alasan }}</td>
    </tr>

    <tr>
        <th>Tujuan</th>
        <td>{{ $dispen->tujuan }}</td>
    </tr>

    <tr>
        <th>Jam Keluar</th>
        <td>{{ $dispen->jam_keluar }}</td>
    </tr>

    <tr>
        <th>Jam Kembali</th>
        <td>{{ $dispen->jam_kembali }}</td>
    </tr>

    <tr>
        <th>Status</th>
        <td><b>{{ $dispen->status }}</b></td>
    </tr>

</table>

<div class="ttd">
    <p>Bogor, {{ date('d-m-Y') }}</p>
    <br><br>
    <p><b>Admin Sekolah</b></p>
</div>

</body>
</html>