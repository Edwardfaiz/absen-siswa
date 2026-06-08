<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dispen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f5f5f5;">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Form Dispen Siswa</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('dispen.store') }}" method="POST">

                @csrf

                <div class="mb-3">

                    <label>Nama Siswa</label>

                    <input type="text"
                           name="nama_siswa"
                           class="form-control"
                           required>

                </div>

                <div class="mb-3">

                    <label>Kelas</label>

                    <select name="kelas" class="form-control">

                        @php

                        $jurusan = [
                            'RPL',
                            'TKJ',
                            'AKL',
                            'DKV',
                            'TO',
                            'TBSM',
                            'TSM',
                            'Perhotelan',
                            'Farmasi',
                            'Multimedia'
                        ];

                        @endphp

                        @for ($tingkat = 10; $tingkat <= 12; $tingkat++)

                            @foreach ($jurusan as $j)

                                @for ($kelas = 1; $kelas <= 7; $kelas++)

                                    <option>
                                        {{ $tingkat }} {{ $j }} {{ $kelas }}
                                    </option>

                                @endfor

                            @endforeach

                        @endfor

                    </select>

                </div>

                <div class="mb-3">

                    <label>Jurusan</label>

                    <select name="jurusan"
                            class="form-control">

                        <option>RPL</option>
                        <option>TKJ</option>
                        <option>AKL</option>
                        <option>DKV</option>
                        <option>TO</option>
                        <option>TBSM</option>
                        <option>TSM</option>
                        <option>Perhotelan</option>
                        <option>Farmasi</option>
                        <option>Multimedia</option>

                    </select>

                </div>

                <div class="mb-3">

                    <label>Alasan</label>

                    <textarea name="alasan"
                              class="form-control"
                              required></textarea>

                </div>

                <div class="mb-3">

                    <label>Tujuan</label>

                    <input type="text"
                           name="tujuan"
                           class="form-control"
                           required>

                </div>

                <div class="mb-3">

                    <label>Jam Keluar</label>

                    <input type="text"
                           name="jam_keluar"
                           class="form-control"
                           placeholder="08:00"
                           required>

                </div>

                <div class="mb-3">

                    <label>Jam Kembali</label>

                    <input type="text"
                           name="jam_kembali"
                           class="form-control"
                           placeholder="10:00"
                           required>

                </div>

                <button type="submit"
                        class="btn btn-success">

                    Simpan

                </button>

                <a href="/dispen"
                   class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>