<html>
    <head>
        <title>Meisya Resti Garsari | Add Form</title>
        <link rel="stylesheet" type="text/css" href="..\bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <form method="post" action="tambah.php" class="mt-5">
         <div class="form-group">
           <label>Nama Lengkap</label>
           <input type="text" name="nama_lengkap" class="form-control">
         </div>
         <div class="form-group">
           <label>NIM</label>
           <input type="number" name="nim" class="form-control">
         </div>
         <div class="form-group">
           <label>Jurusan</label>
           <input type="text" name="jurusan" class="form-control">
         </div>
         <div class="form-group">
           <label>email</label>
           <input type="text" name="email" class="form-control">
         </div>
         <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
         </div>
        </form>
    </div>
    <body>
</html>