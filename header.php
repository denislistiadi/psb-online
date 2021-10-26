<!DOCTYPE html>
<html lang="id">

<!-- heading -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- import file css bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    
    <!-- import file css DataTables -->
    <link rel="stylesheet" href="styles/DataTables/datatables.min.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Title -->
    <title>PSB Online</title>
</head>

<!-- body -->
<body>
    
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
        <a class="navbar-brand" href="#"><i class="fas fa-swatchbook"></i> PSB Online</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- menu navigasi -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php

                // fungsi pengecekan level akun login
                if(empty($_SESSION['sesi'])){
                    echo "";
                } elseif($_SESSION['type'] == 'admin') {
                    echo '
                    <li class="nav-item">
                        <a class="nav-link" href="pengguna.php">Pengguna <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Siswa
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/">Siswa Seleksi</a>
                            <a class="dropdown-item" href="siswa_diterima.php">Siswa Diterima</a>
                            <a class="dropdown-item" href="siswa_cadangan.php">Siswa Cadangan</a>
                            <a class="dropdown-item" href="siswa_ditolak.php">Siswa Tidak Diterima</a>
                        </div>
                    </li>';

                } else {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="pendaftaran.php">Pendaftaran <span class="sr-only">(current)</span></a>
                </li>';
                }

                ?>
                
            </ul>

            <!-- tombol logout -->
            <form class="form-inline my-2 my-lg-0">
                <a class="dropdown-item btn btn-white bg-light text-center" href="logout.php">Logout</a>
            </form>
        </div>
    </nav>

    