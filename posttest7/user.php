<?php
session_start();
if($_SESSION['role']== ""){
    echo "<script>alert('Login Dulu.');
    document.location.href ='index.php?pesan=gagal';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Posstest 2 Pemrograman Web </title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      
      <div class="logo"><img src="foto/logo seafood.jpeg" alt="" width="120px" /></div>

      <input type="checkbox" id="check" />
      <div class="search">
      <form class="cari">
          <input type="text" name="search" placeholder="Search..">
        </form>
      </div>
      <ul class="nav-links">
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="iklan">&#9776;</label>
        <div class="menu">
          <h4><li><a href="#home">Home</a></li></h4>
          <h4><li><a href="#aboutme">About Me</a></li></h4>
          <h4><li><a href="#product"><i class="fa-solid fa-bag-shopping"></i></a></li></h4>
          <h5><li><a class="#dark-mode" onclick = myFunction()>Mode</a></li></h5>
          <h4><li><a href="log_out.php">Logout</a></li></h4>
        </div>
       
      </ul>
    </nav>

    <!-- main content -->
    <!-- iklan -->
    <div class="row">
      <div class="col-2">
        <img src="foto/home.jpg"pict1 height="750px" />
      </div>
    </div>

    <!-- produk -->
    <div id="product" class="container">
      <h2>Product</h2>
        <div class="card">
          <img src="foto/seafood1.png" class="content" />
          <div class="deskrip">
            <span>PAKET HEMAT</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
            </div>
            <h4>Rp. 59.999</h5>
            <h5>Samarinda</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
        <div class="card">
          <img src="foto/seafood2.jpg" class="content" />
          <div class="deskrip">
            <span>PAKET SEDANG</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
            </div>
            <h4>Rp 129.999</h5>
            <h5>Samarinda</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
        <div class="card">
          <img src="foto/seafood3.jpg" class="content" />
          <div class="deskrip">
            <span>PAKET JUMBO</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
            </div>
            <h4>Rp 249.999</h5>
            <h5>Samarinda</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
      </div>
    </div>

    <!-- About me -->
    <section id="aboutme">
      <div class = "image">
          <img src="foto/DIMAS.jpg" id="geeks" class="newspaper"> 
      </div>

      <div class = "content">
          <h2>About Me</h2>
          <span><!-- line here --></span>
          <p>Nama : Dimas Pandu Winata<br>Nim : 2109106141 <br> Prodi : Informatika C'21 <br> Follow My Social Media :
          </p>
          <ul class = "icons">
              <li><a href="https://www.instagram.com/dimaspanduw030/">
                <i class="fa-brands fa-instagram"></i>
              </li></a>
              <li><a href="https://github.com/Dimaspanduw">
                <i class="fa-brands fa-github"></i>
              </li></a>
          </ul>
      </div>
      
  </section><br><br>

    <!-- footer -->
    <div id="footerr" class="footer">
      <p>copyright &copy;2022 <a href="#aboutme">by Dimas Pandu Winata</a>  </p>
   </div>

   <!-- js-->
   <script src="java.js"></script>
  </body>
</html>