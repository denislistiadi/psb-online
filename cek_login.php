<?php

// membuat session
session_start();
$_SESSION['sesi'] = null;

// import file koneksi
include 'Koneksi.php';

// fungsi ketika ditekan tombol login
if (isset($_POST['submit'])) {

    // pengecekan inputan user dan pass login
    $user = isset($_POST['name']) ? addslashes($_POST['name']) : "";
    $pass = isset($_POST['pass']) ? $_POST['pass'] : "";
    $qry = mysqli_query($db, "SELECT * FROM user WHERE name = '$user' and pass = '$pass'");
    $sesi = mysqli_num_rows($qry);

    // pengecekan sesi
    if ($sesi === 1) {
        $data_user = mysqli_fetch_array($qry);
        $_SESSION['id'] = $data_user['id'];

        // pengecekan level akun login
        if($data_user['type'] =="siswa"){
            $_SESSION['sesi'] = $data_user['id'];
            $_SESSION['type'] = "siswa";

            // jika siswa akan dibawa kehalaman status.php
            echo "<meta http-equiv='refresh' content='0; url=status.php'>";
        }else{
            $_SESSION['sesi'] = $data_user['id'];
            $_SESSION['type'] = "admin";
            
            // jika admin akan dibawa ke halaman index
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";   
        };
    } else {

        // jika salah akan ditampilkan alert gagal
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
        echo "<script>alert('Maaf, Anda Gagal Log in');</script>";
    }
} else {

    // import file login.php
    include 'login.php';
}

?>