<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- title -->
    <title>Halaman Registrasi</title>

    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">

    <!-- css register -->
    <link rel="stylesheet" href="styles/register.css">
</head>

<body>

<!-- container -->
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="row justify-content-center p-5">
                <div class="col-md-6 d-none d-md-block register-image"></div>
                <div class="col-md-6 p-5">
                    <form class="user" method="post" action="proses/proses_register.php" enctype="multipart/form-data" >
                        <h1 class="text-center mb-5">Daftar Akun</h1>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-user" id="name" name="name"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control form-control-user" id="pass" name="pass"
                                placeholder="Password">
                        </div>
                        <div class="mb-3 text-center d-grid gap-md-2 mx-auto">
                            <button type="submit" class="btn btn-dark btn-user" name="submit">Register</button>
                        </div>
                        <hr>

                        <!-- login -->
                        <p class=" text-center ">Sudah punya akun? <a class="text-decoration-none" href="login.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<?php

include 'footer.php';

?>
