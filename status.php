<?php

// sesi
session_start();

// import koneksi.php
include 'koneksi.php';

// fungsi pengecekan sesi
if(isset($_SESSION['sesi'])){

    
    $header = "- Status";
    // import header.php
    include 'header.php';

    // ambil data tabel pendaftaran
    $query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$_SESSION[sesi]'");
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
            Status Pendaftaran Siswa
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
                        <h6 class="mb-0">Tempat / Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo  $data['tempat_lahir'] .  ", " . tanggal_indo($data['tanggal_lahir']); ?>
                    </div>
                </div>
                <hr> 
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Asal Sekolah</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['asal_sekolah']; ?>
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
                    <div class="col-sm-9 text-secondary font-weight-bold">
                        <?php echo $data['status']; ?>
                    </div>
                </div>
                <hr>
                <div class="row  justify-content-center">
                    <a target="_blank" href="cetak_status.php" class="btn btn-primary">Cetak Status Pendaftaran</a>      
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