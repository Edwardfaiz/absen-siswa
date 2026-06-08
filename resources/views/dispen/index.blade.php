<!DOCTYPE html>
<html>
<head>

    <title>Data Dispen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
        }

        .card-stat{
            border:none;
            border-radius:15px;
        }

        .table{
            vertical-align:middle;
        }

    </style>

</head>

<body>

<div class="container mt-5">

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white">

            <h3 class="mb-0">
                Dashboard Dispen Siswa
            </h3>

        </div>

        <div class="card-body">

            <!-- Statistik -->

            <div class="row mb-4">

                <div class="col-md-3">

                    <div class="card card-stat bg-primary text-white shadow">

                        <div class="card-body">

                            <h6>Total Dispen</h6>

                            <h2>{{ $total }}</h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card card-stat bg-warning shadow">

                        <div class="card-body">

                            <h6>Diproses</h6>

                            <h2>{{ $diproses }}</h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card card-stat bg-success text-white shadow">

                        <div class="card-body">

                            <h6>Disetujui</h6>

                            <h2>{{ $disetujui }}</h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card card-stat bg-danger text-white shadow">

                        <div class="card-body">

                            <h6>Ditolak</h6>

                            <h2>{{ $ditolak }}</h2>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Menu -->

            <div class="mb-4">

                <a href="/dispen"
                   class="btn btn-dark">

                    Dashboard

                </a>

                <a href="/kelas"
                   class="btn btn-primary">

                    Data Kelas

                </a>

                <a href="/logout"
                   class="btn btn-danger">

                    Logout

                </a>

            </div>

            <!-- Tombol Tambah -->

            <a href="{{ route('dispen.create') }}"
               class="btn btn-success mb-3">

                Tambah Dispen

            </a>

            <!-- Table -->

            <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Alasan</th>
                            <th>Tujuan</th>
                            <th>Jam Keluar</th>
                            <th>Jam Kembali</th>
                            <th>Status</th>
                            <th>Approval Admin</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($dispen as $item)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $item->nama_siswa }}</td>

                            <td>{{ $item->kelas }}</td>

                            <td>{{ $item->jurusan }}</td>

                            <td>{{ $item->alasan }}</td>

                            <td>{{ $item->tujuan }}</td>

                            <td>{{ $item->jam_keluar }}</td>

                            <td>{{ $item->jam_kembali }}</td>

                            <td>

                                @if($item->status == 'Diproses')

                                    <span class="badge bg-warning">
                                        Diproses
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
                                       class="btn btn-success btn-sm mb-1">

                                        Cetak Surat

                                    </a>

                                @endif

                                <!-- EDIT -->

                                <a href="{{ route('dispen.edit', $item->id) }}"
                                   class="btn btn-warning btn-sm mb-1">

                                    Edit

                                </a>

                                <!-- HAPUS -->

                                <form action="{{ route('dispen.destroy', $item->id) }}"
                                      method="POST"
                                      style="display:inline;">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm">

                                        Hapus

                                    </button>

                                </form>

                                <br><br>

                                <!-- APPROVAL -->

                                <form action="/dispen/status/{{ $item->id }}"
                                      method="POST">

                                    @csrf

                                    <select name="status"
                                            class="form-select form-select-sm"
                                            onchange="this.form.submit()">

                                        <option value="Diproses"
                                            {{ $item->status == 'Diproses' ? 'selected' : '' }}>

                                            Diproses

                                        </option>

                                        <option value="Disetujui"
                                            {{ $item->status == 'Disetujui' ? 'selected' : '' }}>

                                            Disetujui

                                        </option>

                                        <option value="Ditolak"
                                            {{ $item->status == 'Ditolak' ? 'selected' : '' }}>

                                            Ditolak

                                        </option>

                                    </select>

                                </form>

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