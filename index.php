<?php 
     include_once "koneksi.php";
     $result = mysqli_query($connect, "SELECT * FROM tbl_student ORDER BY id DESC");
?>
<html>
    <head>
        <title>Meisya Resti Garsari</title>
        <link rel="stylesheet" type="text/css" href="..\bootstrap.min.css">
    </head>
    <body>
        <a class="btn btn-primary ml-3 mt-2" href="add.php" role="button">Add Data</a>
        <table class="table table-striped mt-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            while($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['jurusan']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td>
                        <a class="btn btn-primary" href="edit.php?id=<?php echo $data['id']; ?>" role="button">Edit</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']; ?>" role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>  
    <body>
</html>