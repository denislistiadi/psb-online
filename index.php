<?php

session_start();

include_once 'koneksi.php';

if(isset($_SESSION['sesi'])) {

    $header = "";
    include_once 'header.php';

?>

<div class="container my-4">
    <h3 class="text-secondary text-center">Halo, <?php echo $_SESSION['nama'];?></h3>
    <hr class="mx-2">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-dark">PENERIMAAN SISWA BARU ONLINE</h4>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="https://img.freepik.com/free-vector/group-students-school_52683-43231.jpg?size=626&ext=jpg" alt="...">
            </div>
            <p class="text-secondary">Dalam era informasi dan komunikasi yang semakin maju saat ini maka kami melakukan sebuah langkah maju dalam rangka memberikan pelayanan yang lebih baik dan lebih mudah kepada seluruh masyarakat dengan membuka pendaftaran secara Online. Dengan cara ini orang tua / wali calon siswa dapat dengan mudah mendaftarkan anak-anaknya ke sekolah, tanpa harus datang secara langsung melainkan dengan cara mengisi data pendaftaran dari rumah dengan menggunakan fasilitas internet, baik itu menggunakan komputer maupun gadget.</p>
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
}

?>