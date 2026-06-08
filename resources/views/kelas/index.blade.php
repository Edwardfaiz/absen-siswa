<!DOCTYPE html>
<html>
<head>
    <title>Data Kelas Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f5f5f5;">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Data Kelas Siswa</h3>
        </div>

        <div class="card-body">

            <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">
                Tambah Kelas
            </a>

            <table class="table table-bordered table-striped">

                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Jurusan</th>
                    <th>Wali Kelas</th>
                    <th>Tahun Ajaran</th>
                    <th>Aksi</th>
                </tr>

                @foreach ($kelas as $item)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_kelas }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->wali_kelas }}</td>
                    <td>{{ $item->tahun_ajaran }}</td>

                    <td>

                        <a href="{{ route('kelas.edit', $item->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('kelas.destroy', $item->id) }}"
                              method="POST"
                              style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </table>

        </div>

    </div>

</div>

</body>
</html>