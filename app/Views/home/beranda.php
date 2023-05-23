<!DOCTYPE html>
<html>
<head>
    <title>Halaman Beranda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #D8BFD8;
        }
        .navbar-dark {
            background-color: #9370DB !important;
        }
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container d-flex justify-content-end">
        <a class="navbar-brand" href="<?= base_url('/') ?>">Beranda</a>
        <a class="navbar-brand" href="<?= base_url('profil') ?>">Profil</a>
    </div>
</nav>
    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Hello!</h1>
            <h2 class="display-4">Selamat Datang di Halaman Beranda!</h2>
            <p class="lead">Nama: <?= $nama ?></p>
            <p class="lead">NIM: <?= $nim ?></p>
        </div>
    </div>
</body>
</html>