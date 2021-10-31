<?php

// import file koneksi
include '../koneksi.php';

// fungsi ketika tombol Simpan ditekan
if(isset($_POST['simpan'])){
    extract($_POST);

    // menginisialisasi variabel dengan data yang diinputkan
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $kelamin = $_POST['kelamin'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $asal = $_POST['asal'];
    $alamat = $_POST['alamat'];
    $status = "Masih Seleksi";

    // memasukkan data inputan ke tabel pendaftaran
    $query = mysqli_query($db, "INSERT INTO pendaftaran(id, nama, nisn, jenis_kelamin, tempat_lahir, tanggal_lahir, asal_sekolah, alamat, status) VALUE ('$id', '$nama', '$nisn', '$kelamin', '$tempat', '$tanggal', '$asal', '$alamat', '$status')");

    // fungsi pengecekan $query
    if($query){

        // jika berhasil tampilkan alert berhasil dan load ke halaman status.php
        echo "<script>alert('berhasil')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../status.php'>";
    } else {

        // jika gagal tampilkan alert Gagal
        echo "<script>alert('Gagal')</script>";
    }
}

?>
