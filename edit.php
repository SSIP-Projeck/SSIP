<html>
    <head>
        <title>Meisya Resti Garsari | Add Form</title>
        <link rel="stylesheet" type="text/css" href="..\bootstrap.min.css">
    </head>
    <body>
    <?php 
    include_once "koneksi.php";
    $id = $_GET['id'];
    $result = mysqli_query($connect, "SELECT * FROM tbl_student WHERE id='$id'");
    while($data = mysqli_fetch_array($result)){
    ?>
    <div class="container">
        <form method="post" action="update.php" class="mt-5">
         <div class="form-group">
           <label>Nama Lengkap</label>
           <input type="hidden" name="id" class="form-control" value="<?php echo $data['id']; ?>">
           <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $data['nama_lengkap']; ?>">
         </div>
         <div class="form-group">
           <label>NIM</label>
           <input type="number" name="nim" class="form-control" value="<?php echo $data['nim']; ?>">
         </div>
         <div class="form-group">
           <label>Jurusan</label>
           <input type="text" name="jurusan" class="form-control" value="<?php echo $data['jurusan']; ?>">
         </div>
         <div class="form-group">
           <label>email</label>
           <input type="text" name="email" class="form-control" value="<?php echo $data['email']; ?>">
         </div>
         <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
         </div>
        </form>
    <?php } ?>
    </div>
    <body>
</html>