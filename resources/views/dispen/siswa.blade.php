<!DOCTYPE html>
<html>
<head>
    <title>Halaman Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background: #f5f5f5;
        }

        .card{
            border: none;
            border-radius: 15px;
        }

        .table{
            vertical-align: middle;
        }

    </style>

</head>

<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h3 class="mb-0">
                Status Pengajuan Dispen Siswa
            </h3>

        </div>

        <div class="card-body">

            <div class="mb-3">

                <a href="/pengajuan"
                   class="btn btn-primary">

                    Ajukan Dispen Baru

                </a>

                <a href="/"
                   class="btn btn-dark">

                    Kembali

                </a>

            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Tujuan</th>
                            <th>Status</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($dispen as $item)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $item->nama_siswa }}</td>

                            <td>{{ $item->kelas }}</td>

                            <td>{{ $item->jurusan }}</td>

                            <td>{{ $item->tujuan }}</td>

                            <td>

                                @if($item->status == 'Diproses')

                                    <span class="badge bg-warning">
                                        Menunggu Persetujuan
                                    </span>

                                @elseif($item->status == 'Disetujui')

                                    <span class="badge bg-success">
                                        Disetujui
                                    </span>

                                @else

                                    <span class="badge bg-danger">
                                        Ditolak
                                    </span>

                                @endif

                            </td>

                            <td>

                                @if($item->status == 'Disetujui')

                                    <a href="/dispen/cetak/{{ $item->id }}"
                                       target="_blank"
                                       class="btn btn-success btn-sm">

                                        Cetak Surat

                                    </a>

                                @elseif($item->status == 'Ditolak')

                                    <span class="text-danger">
                                        Pengajuan Ditolak
                                    </span>

                                @else

                                    <span class="text-warning">
                                        Menunggu Approval Admin
                                    </span>

                                @endif

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>