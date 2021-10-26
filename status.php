<?php

session_start();
include 'koneksi.php';
$tgl=date('Y-m-d');


if(isset($_SESSION['sesi'])){
    include 'header.php';

?>

<div class="container">    
    <div class="card my-2 o-hidden border-0 shadow-lg">
        <h3 class="card-header text-center">Status Calon Siswa</h3>
        <div class="card-body container ">
            
            <!-- Tabel Calon Siswa  -->
            <table class="table table-bordered nowrap" id="dataTable">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Asal Sekolah</th>
                        <th>Status Penerimaan</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php  

                    // mengambil data tabel pendaftaran
                    $query = mysqli_query($db, "SELECT * FROM pendaftaran");
                    $data = mysqli_fetch_array($query);

                    // cek kolom dari pendaftaran
                    if(mysqli_num_rows($query) >0) {
                        $no = 1;
                        
                        // loop data tabel pendaftaran
                        do{

                ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data['nama'];?></td>
                        <td><?=$data['nisn'];?></td>
                        <td><?=$data['asal_sekolah'];?></td>
                        <td><?=$data['status'];?></td>
                    </tr>
                <?php 
                        }while($data = mysqli_fetch_assoc($query));
                    }else{

                        // jika false
                        echo "<tr><td colspan='7'><center>Belum ada data!</center></td></tr>";
                    }
                ?>
                </tbody>
            </table>
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