<?php

include_once "koneksi.php";

$id         = $_POST['id'];
$name       = $_POST['nama_lengkap'];
$nim        = $_POST['nim'];
$jurusan    = $_POST['jurusan'];
$email      = $_POST['email'];


mysqli_query($connect, "UPDATE tbl_student set nama_lengkap='$name', nim='$nim', jurusan='$jurusan', email='$email' WHERE id='$id'");

header("location:index.php");
