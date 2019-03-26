<?php 
	require 'koneksi.php';
	session_start();
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nim = $_POST['nim'];
	$jurusan = $_POST['jurusan'];
	$gender=$_POST['gender'];
	$email = $_POST['email'];
    $level=$_POST['level'];

	$sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $conn->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! Coba lagi!!!<a href='formregister.php'>Back</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='formregister.php'>Back</a>";
     }else if($_POST["kode"] != $_SESSION["kode_cap"] OR $_POST["kode"] == "")
{ 
//bila captcha yang dimasukkan salah
echo"<div align='center'>CAPTCHA salah, coba kembali! <a href='formregister.php'>Back</a></div>";
}

      else {
       $data = "INSERT INTO user VALUES (NULL, '$username', '$password', '$nim', '$jurusan', '$gender', '$email', '$level')";
       $simpan = $conn->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }


?>
<title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
</title>
<body style="background-color: whitesmoke;">
</body>