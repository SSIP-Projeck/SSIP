<?php 

include_once "koneksi.php";

$nama       = $_POST['nama_lengkap'];
$nim        = $_POST['nim'];
$jurusan    = $_POST['jurusan'];
$email      = $_POST['email'];

mysqli_query($connect, "INSERT INTO tbl_student(nama_lengkap,nim,jurusan,email)VALUES('$nama','$nim','$jurusan','$email')");

header("location:index.php");

?>