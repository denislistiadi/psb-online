# PSB Online | Pendaftaran Siswa Baru Online

PSB Online adalah aplikasi Pendaftaran Siswa Baru berbasis web menggunakan PHP dan MySQL.

## Petunjuk Instalasi

1. Aktifkan xampp atau laragon
2. Buka phpMyAdmin di localhost
3. Buat database dengan nama **psb**
4. Import file _psb.sql_
5. Setting file _koneksi.php_
   ```php
    <?php

    // inisialisasi variabel 
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $nama_database = 'psb';

    // fungsi menghubungkan ke database
    $db = mysqli_connect($server, $user, $password, $nama_database);

    // fungsi pengkondisian database
    if (!$db) {

        // jika tidak terhubung 
        die('Gagal terhubung dengan database: ' . mysqli_connect_error());
    }

    ?>
   ```
6. Buka web browser ketik _localhost/psb/_

#### Akun Login

* Admin
    username: admin
    password: admin

## Struktur Folder

``` 
_PSB
    ├── _images
    │   ├── login.svg
    │   └── register.svg
    ├── _proses
    │   ├── proses_cadangan.php
    │   ├── proses_diterima.php
    │   ├── proses_ditolak.php
    │   ├── proses_pendaftaran.php
    │   └── proses_register.php
    ├── _styles
    │   ├── _bootstrap
    │   │   ├── _css
    │   │   └── _js
    │   ├── DataTables
    │   │   ├── _DataTables-1.11.2
    │   │   └── _Responsive-2.2.9
    │   ├── _jquery
    │   ├── login.css
    │   └── register.css
    ├── cek_login.php
    ├── detail.php
    ├── footer.php
    ├── header.php
    ├── index.php
    ├── koneksi.php
    ├── login.php
    ├── logout.php
    ├── pendaftaran.php
    ├── pengguna.php
    ├── psb.sql
    ├── README.md
    ├── register.php
    ├── siswa_cadangan.php
    ├── siswa_diterima.php
    ├── siswa_ditolak.php
    └── status.php
```

## Lisensi

PSB Online menggunakan lisensi [MIT](https://en.wikipedia.org/wiki/MIT_License)