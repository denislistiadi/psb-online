<?php

//  buka sesi
session_start();

// import koneksi
include 'koneksi.php';


// fungsi set sesi jika true
if(isset($_SESSION['sesi'])){

    // import header
    include 'header.php';

?>

<!-- container -->
<div class="container">    
    <div class="card my-4 o-hidden border-0 shadow-lg">
        
        <!-- heading -->
        <h3 class="card-header text-center">Daftar Akun Terdaftar</h3>
        <div class="card-body container">

            <!-- Tabel daftar pengguna -->
            <table class="table table-bordered nowrap" id="dataTable">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Akun</th>
                        <th>Level Akun</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php 
                
                    //mengambil data dari tabel user 
                    $query = mysqli_query($db, "SELECT * FROM user");
                    $data = mysqli_fetch_array($query);

                    // fungsi cek kolom data tabel
                    if(mysqli_num_rows($query) >0) {
                        $no = 1;

                        // loop semua data tabel user
                        do{

                ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data['name'];?></td>
                        <td><?=$data['type'];?></td>
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