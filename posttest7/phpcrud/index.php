<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
session_start();
if($_SESSION['role']== ""){
    echo "<script>alert('Login Dulu.');
    document.location.href ='./../index.php?pesan=gagal';</script>";
}
if (isset($_POST['search'])) {
    $search=trim($_POST['search']);
    $sql="select * from message where nama like '%".$search."%' or email like '%".$search."%' order by id asc";
    $result = mysqli_query($koneksi,$sql);
    $user = [];
  while($row = mysqli_fetch_assoc($result)){
    $user[] =$row;
  
  }
  }else {
  $result = mysqli_query($koneksi,"SELECT * FROM message");
  $user = [];
  while($row = mysqli_fetch_assoc($result)){
    $user[] =$row;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <title>CRUD</title>
</head>

<body>
    <div class="back",color="black"><a href="../log_out.php"><i class="fa-solid fa-arrow-left"></i> Logout</a></div>
    <div class="center">
        <h1>Lihat Data</h1>
    </div>
    <div class="link-tbh">
        <a href="tambah.php">+ &nbsp; Tambah</a>
    </div>
    <div class="search">
        <form action="" method="post">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"  ><i class="fa fa-search"></i></button>
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Hp</th>
                <th>Alamat</th>
                <th>Gambar</th>
                <th>Terakhir Dilihat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_POST['search'])) {
                $sql="select * from message where nama like '%".$search."%' or email like '%".$search."%' order by id asc";
                $result = mysqli_query($koneksi,$sql);
     
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
              }else {
      $query = "SELECT * FROM message ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
    }
      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <?php echo $row['notelp']; ?>
                </td>
                <td><?php echo $row['alamat']; ?></td>
                <td style="text-align: center">
                    <img src="img/<?php echo $row['gambar_produk']; ?>" style="width: 100px; height: 120px;" />
                </td>
                <td>
                    <?php date_default_timezone_set("Asia/Makassar"); echo  date("Y.m.d"). " " . "<br>"
            . date("h:i:sa"); ?>
                </td>
                <td>
                    <a class="blue" href="edit_produk.php?id=<?php echo $row['id']; ?>"><i
                            class="fa-solid fa-pen-to-square"></i> EDIT</a> |
                    <a class="red" href="proses_hapus.php?id=<?php echo $row['id']; ?>"
                        onclick="return confirm('Anda yakin akan menghapus data ini?')"><i
                            class="fa-sharp fa-solid fa-trash"> Delete</i></a>
                </td>
            </tr>

            <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
        </tbody>
    </table>

</body>

</html>