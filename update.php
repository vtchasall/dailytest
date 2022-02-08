<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <?php

    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_anggota
    if (isset($_GET['id_buku'])) {
        $id_buku=input($_GET["id_buku"]);

        $sql="select * from book where id_buku=$id_buku";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);
        //Query input menginput data kedalam tabel anggota
        
        if (mysqli_error($kon)) {
            echo mysqli_error($kon);
        }
    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $kode_buku=input($_POST["kode_buku"]);
        $judul_buku=input($_POST["judul_buku"]);
        $penulis_buku=input($_POST["penulis_buku"]);
        $penerbit_buku=input($_POST["penerbit_buku"]);
        $tahun_penerbit=input($_POST["tahun_penerbit"]);
        $stok=input($_POST["stok"]);
        $halaman=input($_POST["halaman"]);


        //Query update data pada tabel anggota
        $sql="update book set
			kode_buku='$kode_buku',
		    judul_buku='$judul_buku',
            penulis_buku='$penulis_buku',
            penerbit_buku='$penerbit_buku',
            tahun_penerbit='$tahun_penerbit',
            stok='$stok',
            halaman='$halaman'
			where id_buku=$id_buku";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'>Data Gagal diupdate.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>
    <?php $id_buku=input($_GET["id_buku"]); ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id_buku=' . $id_buku; ?>" method="post">
        <div class="form-group">
            <label>Kode Buku :</label>
            <input type="text" name="kode_buku" class="form-control" value="<?php echo $data['kode_buku']; ?>" placeholder="Masukan Kode Buku" required />

        </div>
        <div class="form-group">
            <label>Judul Buku :</label>
            <input type="text" name="judul_buku" class="form-control" value="<?php echo $data['judul_buku']; ?>" placeholder="Masukan Judul Buku" required/>

        </div>
        <div class="form-group">
            <label>Penulis Buku :</label>
            <input type="text" name="penulis_buku" class="form-control" value="<?php echo $data['penulis_buku']; ?>" placeholder="Masukan Penulis Buku" required/> 
        </div>
        <div class="form-group">
            <label>Penerbit Buku :</label>
            <input type="text" name="penerbit_buku" class="form-control" value="<?php echo $data['penerbit_buku']; ?>" placeholder="Masukan Penerbit Buku" required/>

        </div>
        <div class="form-group">
            <label>Tahun Penerbit :</label>
            <input type="text" name="tahun_penerbit" class="form-control" value="<?php echo $data['tahun_penerbit']; ?>" placeholder="Masukan Tahun Penerbit" required/>

        </div>
        <div class="form-group">
            <label>Stok :</label>
            <input type="text" name="stok" class="form-control" value="<?php echo $data['stok']; ?>" placeholder="Masukan Stok" required/>

        </div>
        <div class="form-group">
            <label>Halaman :</label>
            <input type="text" name="halaman" class="form-control" value="<?php echo $data['halaman']; ?>" placeholder="Masukan Halaman" required/>

        </div>
        <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>