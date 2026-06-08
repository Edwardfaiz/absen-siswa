<!DOCTYPE html>
<html>
<head>
    <title>Edit Kelas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card">

        <div class="card-header bg-warning text-dark">
            <h3>Edit Data Kelas</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nama Kelas</label>

                    <input type="text"
                           name="nama_kelas"
                           class="form-control"
                           value="{{ $kelas->nama_kelas }}">
                </div>

                <div class="mb-3">
                    <label>Jurusan</label>

                    <input type="text"
                           name="jurusan"
                           class="form-control"
                           value="{{ $kelas->jurusan }}">
                </div>

                <div class="mb-3">
                    <label>Wali Kelas</label>

                    <input type="text"
                           name="wali_kelas"
                           class="form-control"
                           value="{{ $kelas->wali_kelas }}">
                </div>

                <div class="mb-3">
                    <label>Tahun Ajaran</label>

                    <input type="text"
                           name="tahun_ajaran"
                           class="form-control"
                           value="{{ $kelas->tahun_ajaran }}">
                </div>

                <button type="submit" class="btn btn-success">
                    Update
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