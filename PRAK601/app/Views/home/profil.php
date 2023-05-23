<!DOCTYPE html>
<html>
<head>
    <title>Halaman Profil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .kotakProfil {
            width: 400px;
            margin-left: 0 auto;
        }
         .container {
        margin-left: 0 auto;
        margin-right: 0 auto;
        text-align: left;
        }
        .img-thumbnail {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border: none;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        body {
            background-color: #D8BFD8;
        }
        .navbar-dark {
            background-color: #9370DB !important;
        }

        p {
            text-align: left;
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
    <div  class="container text-center">
        <div class="kotakProfil mx-auto">
        <h1>Profil Saya</h1>
        <p class="text-center">Nama Lengkap: <?php echo $namaLengkap; ?></p>
        <img src="/images/kamania.jpg" alt="Gambar Profil" class="img-thumbnail text-center">
        <p class="text-center">NIM: <?php echo $nim; ?></p>
        <p class = "text-center">Asal Prodi: <?php echo $asalProdi; ?></p>
        <p class="text-center">Hobi 1: <?php echo $hobi1; ?></p>
        <p class="text-center">Hobi 2: <?php echo $hobi2; ?></p>
        <p class="text-center">Skill: <?php echo $skill; ?></p>
        </div>
    </div>
</body>
</html>