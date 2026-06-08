<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Kelas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f5f5f5;">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Tambah Data Kelas Siswa</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('kelas.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label>Nama Kelas</label>

                    <input type="text"
                           name="nama_kelas"
                           class="form-control"
                           placeholder="Contoh: XI RPL 1">
                </div>

                <div class="mb-3">
                    <label>Jurusan</label>

                    <select name="jurusan" class="form-control">

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
                    <label>Wali Kelas</label>

                    <select name="wali_kelas" class="form-control">

                        <option>Pak Budi</option>
                        <option>Bu Sinta</option>
                        <option>Pak Agus</option>
                        <option>Bu Rina</option>
                        <option>Pak Dedi</option>
                        <option>Bu Maya</option>
                        <option>Pak Joko</option>
                        <option>Bu Fitri</option>
                        <option>Pak Rahmat</option>
                        <option>Bu Lisa</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-success">
                    Simpan
                </button>

                <a href="/kelas" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>