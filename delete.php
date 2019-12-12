<?php 

include_once "koneksi.php";

$id = $_GET['id'];

mysqli_query($connect, "DELETE from tbl_student where id='$id'");

header("location: index.php");