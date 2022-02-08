<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku colspan dan rowspan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
<div class="container">
    <div class="row mb-5">
        <div class="col text-center">
            <h3>BOOK DATA</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            
        </div>
    </div>
</div>

    <div class="container">
        <br>
        <?php 
        include "koneksi.php";
        //Cek apakah ada nilai dari method GET dengan nama id_siswa
        if (isset($_GET['id_buku'])) {
            $id_buku=htmlspecialchars($_GET["id_buku"]);

            $sql="delete from book where id_buku='$id_buku' ";
            $hasil=mysqli_query($kon,$sql);

            //Kondisi apakah berhasil atau tidak
                if ($hasil) {
                    header("Location:index.php");

                }
                else {
                    echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

                }
            }
        ?>

<table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>id buku</th>
            <th>kode buku</th>
            <th>judul buku</th>
            <th>penulis buku</th>
            <th>penerbit buku</th>
            <th>tahun penerbit</th>
            <th>stok</th>
            <th>halaman</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>
        <?php
        include "koneksi.php";
        $sql="select * from book order by book.judul_buku ASC";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["id_buku"]; ?></td>
                <td><?php echo $data["kode_buku"];   ?></td>
                <td><?php echo $data["judul_buku"];   ?></td>
                <td><?php echo $data["penulis_buku"];   ?></td>
                <td><?php echo $data["penerbit_buku"];   ?></td>
                <td><?php echo $data["tahun_penerbit"];   ?></td>
                <td><?php echo $data["stok"];   ?></td>
                <td><?php echo $data["halaman"];   ?></td>
                <td>
                    <a href="update.php?id_buku=<?php echo htmlspecialchars($data['id_buku']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>