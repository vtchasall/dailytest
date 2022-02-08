<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
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
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_buku=input($_POST["id_buku"]);
        $kode_buku=input($_POST["kode_buku"]);
        $judul_buku=input($_POST["judul_buku"]);
        $penulis_buku=input($_POST["penulis_buku"]);
        $penerbit_buku=input($_POST["penerbit_buku"]);
        $tahun_penerbit=input($_POST["tahun_penerbit"]);
        $stok=input($_POST["stok"]);
        $halaman=input($_POST["halaman"]);


          //Query input menginput data kedalam tabel anggota
          $sql="insert into book (id_buku, kode_buku, judul_buku, penulis_buku, penerbit_buku, tahun_penerbit, stok, halaman) values
          ('$id_buku','$kode_buku','$judul_buku','$penulis_buku','$penerbit_buku','$tahun_penerbit','$stok','$halaman')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>id_buku:</label>
            <input type="text" name="id_buku" class="form-control" placeholder="Masukan Username" required />

        </div>
        <div class="form-group">
            <label>kode_buku:</label>
            <input type="text" name="kode_buku" class="form-control" placeholder="Masukan Nama" required/>

        </div>
        <div class="form-group">
            <label>judul_buku:</label>
            <input type="text" name="judul_buku" class="form-control" placeholder="Masukan Alamat" required></input>

        </div>
        <div class="form-group">
            <label>penulis_buku:</label>
            <input type="text"name="penulis_buku" class="form-control" placeholder="Masukan Email" required/>
        </div>
        <div class="form-group">
            <label>penerbit_buku:</label>
            <input type="text" name="penerbit_buku" class="form-control" placeholder="Masukan No HP" required/>
        </div>
        <div class="form-group">
            <label>Tahun Penerbit :</label>
            <input type="text" name="tahun_penerbit" class="form-control" placeholder="Masukan Tahun Penerbit" required/>
        </div>
        <div class="form-group">
            <label>stok:</label>
            <input type="text" name="stok" class="form-control" placeholder="Masukan No HP" required/>
        </div>

        <div class="form-group">
            <label>halaman:</label>
            <input type="text" name="halaman" class="form-control" placeholder="Masukan No HP" required/>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>