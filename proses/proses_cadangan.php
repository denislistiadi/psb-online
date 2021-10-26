<?php

// import file koneksi
include '../koneksi.php';

// inisialisasi variabel id dan status
$id = $_GET['id'];
$status = "Cadangan";

// mengubah data status pendaftaran menjadi Cadangan
$query = mysqli_query ($db, "UPDATE pendaftaran SET status = '$status' WHERE id ='$id'");

//  fungsi pengecekan $query 
if($query){

    // jika berhasil load ke halaman index.php
    echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}else{

    // jika gagal tampilkan alert Gagal
    echo "<script type='text/javascript'>
    onload =function(){
        alert('Gagal');
    }
    </script>";
}

?>