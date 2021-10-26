<?php

// sesi
session_start();

// import koneksi.php
include 'koneksi.php';

// fungsi pengecekan sesi
if(isset($_SESSION['sesi'])){

    // import header.php
    include 'header.php';

    // mengambil data id
    $id = $_GET['id'];

    // ambil data tabel pendaftaran
    $query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$id'");
    $data = mysqli_fetch_array($query);

    // fungsi konversi tanggal 
    function tanggal_indo($tanggal){
    	$bulan = [  'bulan',
                    'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                ];

        // memecah tanggal bulan tahun
        $split = explode('-', $tanggal);
        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    }
?>

<!-- Container -->
<div class="container py-3">
    <div class="card">

        <!-- Card Header -->
        <h3 class="card-header text-center">
            Detail Data Siswa
        </h3>

        <!-- Card Body -->
        <div class="card-body o-hidden border-0 shadow-lg ">

            <!-- Card Data Siswa -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama Lengkap</h6>
                        </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['nama']; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">NISN</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['nisn']; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Jenis Kelamin</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['jenis_kelamin']; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Tempat Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['tempat_lahir']; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo tanggal_indo($data['tanggal_lahir']); ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['alamat']; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Status Pendaftaran</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['status']; ?>
                    </div>
                </div>
                <hr>
                <div class="row  justify-content-center">
                    <a target="_blank" onclick="window.print()" class="btn btn-sm btn-primary">Cetak</a>      
                    <a role="button" name="submit" href="proses/proses_diterima.php?id=<?=$data['id'];?>" class="btn btn-sm mx-2 btn-success">Diterima</a>
                    <a role="button" name="submit" href="proses/proses_cadangan.php?id=<?=$data['id'];?>" class="btn btn-sm mx-2 btn-warning">Cadangan</a>
                    <a role="button" name="submit" href="proses/proses_ditolak.php?id=<?=$data['id'];?>" class="btn btn-sm mx-2 btn-danger">Tidak Diterima</a>
                </div>
            </div>
        </div>
    </div>
</div>

                    


<?php

    include 'footer.php';

} else {
    echo "<script>
            alert('Silahkan Login Terlebih Dahulu!');
            window.location = 'login.php';
        </script>";
}

?>