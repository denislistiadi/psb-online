<?php

session_start();

include 'koneksi.php';

if(isset($_SESSION['sesi'])) {

    $header = "- Dashboard";
    include_once 'header.php';


    $query_seleksi = mysqli_query($db, "SELECT id FROM pendaftaran WHERE status='Masih Seleksi'");
    $num_seleksi = mysqli_num_rows($query_seleksi);

    $query_diterima = mysqli_query($db, "SELECT id FROM pendaftaran WHERE status='Diterima'");
    $num_diterima = mysqli_num_rows($query_diterima);

    $query_cadangan = mysqli_query($db, "SELECT id FROM pendaftaran WHERE status='Cadangan'");
    $num_cadangan = mysqli_num_rows($query_cadangan);

    $query_ditolak = mysqli_query($db, "SELECT id FROM pendaftaran WHERE status='Tidak Diterima'");
    $num_ditolak = mysqli_num_rows($query_ditolak);

?>

<div class="container-fluid px-4">
    <h2 class="mt-4 text-secondary">Dashboard Admin</h2>
    <hr>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4 shadow-lg">
                <div class="card-body font-weight-bolder d-flex align-items-center justify-content-between">
                    <div>Siswa Seleksi</div>
                    <div><?php echo $num_seleksi ?></div>
                    <div><i class="fas fa-user-graduate fa-2x"></i></div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/siswa_seleksi.php">Lihat Detail Siswa</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4 shadow-lg">
                <div class="card-body font-weight-bolder d-flex align-items-center justify-content-between">
                    <div>Siswa Cadangan</div>
                    <div><?php echo $num_cadangan ?></div>
                    <div><i class="fas fa-user-graduate fa-2x"></i></div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/siswa_cadangan.php">Lihat Detail Siswa</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4 shadow-lg">
                <div class="card-body font-weight-bolder d-flex align-items-center justify-content-between">
                    <div>Siswa Diterima</div>
                    <div><?php echo $num_diterima ?></div>
                    <div><i class="fas fa-user-graduate fa-2x"></i></div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/siswa_diterima.php">Lihat Detail Siswa</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4 shadow-lg">
                <div class="card-body font-weight-bolder d-flex align-items-center justify-content-between">
                    <div>Siswa Ditolak</div>
                    <div><?php echo $num_ditolak ?></div>
                    <div><i class="fas fa-user-graduate fa-2x"></i></div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/siswa_ditolak.php">Lihat Detail Siswa</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include_once 'footer.php';

} else {
    echo "<script>
        alert('Silahkan Login Terlebih Dahulu!');
        window.location = 'login.php';
    </script>";
};

?>