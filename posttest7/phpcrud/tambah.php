<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  session_start();
if($_SESSION['role']== ""){
    echo "<script>alert('Login Dulu.');
    document.location.href ='./../index.php?pesan=gagal';</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css">
    <title>CRUD </title>

</head>

<body>
    <div class="center">
        <h1>Tambah Produk</h1>
        <div class="link">
            <a href="index.php">Kembali</a>
        </div>
    </div>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
        <section class="base">
            <div>
                <label>Nama</label>
                <input type="text" name="nama" autofocus="" required="" />
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" />
            </div>
            <div>
                <label>No Hp</label>
                <input type="number" name="notelp" required="" />
            </div>
            <div>
                <label>Alamat</label>
                <input type="text" name="alamat" required="" />
            </div>
            <div>
                <label>Gambar Produk</label>
                <input type="file" name="gambar_produk" required="" />
            </div>
            <div>
                <button class="kirim" type="submit">Kirim</button>
            </div>
        </section>
    </form>
</body>

</html>