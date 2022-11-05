<?php 

session_start();
 
include './phpcrud/koneksi.php';
 
$email = $_POST['email'];
$password = $_POST['pass'];

$login = mysqli_query($koneksi,"SELECT * from user where email='$email'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	if(password_verify($password, $data['password'])) {
		if($data['role']=="admin"){
			$_SESSION['email'] = $email;
			$_SESSION['role'] = "admin";
			header("location:./phpcrud/index.php");
	
		}else if($data['role']=="user"){
			$_SESSION['email'] = $email;
			$_SESSION['role'] = "user";
			header("location:user.php");

		}else{
			header("location:index.php?pesan=gagal1");
		}
	}else{
		header("location:index.php?pesan=wrongpass");
	}	
}else{
	header("location:index.php?pesan=gagal2");
}
 
?>