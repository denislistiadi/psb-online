<?php

// import file koneksi
include '../koneksi.php';

// fungsi ketika tombol register ditekan
if(isset($_POST['submit'])){
    extract($_POST);

    // mengambil data id tabel user
    $query1 = mysqli_query($db, "SELECT id FROM user");

    // mengecek banyak kolom id
    $data = mysqli_num_rows($query1);

    // mengambil data id dan ditambah 1 dan menginisialisasikannya
    $id_akk = $data+1;

    // menginisialisasi variabel dengan data yang diinputkan
    $id_akun = $id_akk;
    $nama = $_POST['name'];
    $pass = $_POST['pass'];
    $posisi = "siswa";

    // memasukkan data inputan ke tabel user
    $query = mysqli_query($db, "INSERT INTO user(id, name, pass, type) VALUE ('$id_akun','$nama','$pass', '$posisi')");

    // fungsi pengecekan $query
    if($query) {

        // jika berhasil tampilkan alert berhasil dan load ke halaman pendaftaran.php
        echo "<script>alert('Berhasil Register')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../pendaftaran.php'>";
    }else{

        // jika gagal tampilkan alert gagal 
        echo "<script>alert('Maaf, anda gagal')</script>";
    }
}

?>