<!DOCTYPE html>
<html lang="id">

<!-- head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">

    <!-- Css Login -->
    <link rel="stylesheet" href="styles/login.css">

</head>

<!-- body -->
<body>

    <!-- container -->
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="row justify-content-center p-5">
                <div class="col-md-6 d-none d-md-block login-image p-5"></div>
                <div class="col-md-6 p-5">
                    
                    <!-- form login -->
                    <form method="POST" action="cek_login.php" class="user">
                        <h1 class="text-center mb-5">Halaman Login</h1>
                        
                        <!-- input username -->
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-user" id="name" name="name"
                                placeholder="Username">
                        </div>

                        <!-- input password -->
                        <div class="mb-3">
                            <input type="password" class="form-control form-control-user" id="pass" name="pass"
                                placeholder="Password">
                        </div>

                        <!-- tombol login -->
                        <div class="mb-3 text-center d-grid gap-md-2 mx-auto">
                            <button type="submit" class="btn btn-dark btn-user" name="submit">Log In</button>
                        </div>
                        <hr/>

                        <!-- register -->
                        <p class=" text-center ">Belum punya akun? <a class="text-decoration-none" href="register.php">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php

include 'footer.php';

?>
