<?php

// sesi
session_start();
$_SESSION["sesi"]='';

// fungsi membuang sesi
unset($_SESSION['sesi']);
session_unset();
session_destroy();

// meload ke halaman login
header('Location:login.php');

?>