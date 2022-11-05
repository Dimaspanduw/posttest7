<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">  
    <title>Register</title>
</head>
<body>
<body>
<div class="container">
  <div class="form">
    <h2 class="main-text">Daftar</h2>
    <form class="register-form" method="post" action="register_validation.php">
      <input type="text" placeholder="username" name="username"required>
      <input type="text" placeholder="email address" name="email" required>   
      <?php 
	        if(isset($_GET['pesan'])){
		        if($_GET['pesan']=="gagal"){
			          echo "<p style='color : red;'> Email Sudah digunakan!! </p>";
		          }
	        }?>
             <input type="password" placeholder="password"name="pass" required>
      <button class="btn" type="submit" name="daftar">Daftar</button>
      <p class="message">punya akun ? <a href="index.php">Masuk</a></p>
    </form>
  </div>
</div>
</body>
</html>