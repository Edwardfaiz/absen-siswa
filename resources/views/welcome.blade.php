<!DOCTYPE html>
<html>
<head>

    <title>Sistem Dispen Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(135deg, #4e73df, #224abe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .card{
            border-radius: 20px;
            border: none;
        }
    </style>

</head>

<body>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card shadow text-center p-5">

                <h1 class="mb-3 text-dark">
                    Selamat Datang
                </h1>

                <h3 class="mb-4 text-primary">
                    Sistem Pengajuan Dispensasi Siswa
                    <br>
                    SMK 1 Citeureup Bogor
                </h3>

                <p class="text-muted mb-4">
                    Silakan pilih menu di bawah untuk melanjutkan
                </p>

                <div class="d-flex justify-content-center gap-3">

                    <a href="/pengajuan" class="btn btn-primary btn-lg">
                        Masuk Sebagai Siswa
                    </a>

                    <a href="/login" class="btn btn-dark btn-lg">
                        Login Admin
                    </a>
                    

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>