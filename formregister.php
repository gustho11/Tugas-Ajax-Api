<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php

$genderErr = $jurusanErr = $levelErr = "";
$gender = $jurusan = $level = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["jurusan"])) {
    $jurusanErr = "Wajib diisi";
  } else {
    $jurusan = test_input($_POST["jurusan"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Wajib diisi";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["level"])) {
    $levelErr = "Wajib diisi";
  } else {
    $level = test_input($_POST["level"]);
  }
}


?>
	<div class="blog-masthead">
      <div class="container"><a class="blog-nav-item" href="ahay.php">CRUD</a>
          <a class="blog-nav-item" href="logo.php">Logo</a>
       
      </div>
    </div>
 <div class="box">
 	<h2>Halaman Registrasi</h2>
 	<form method="POST" action="actionregister.php">
 		<div class="inputBox">
		<input type="text" name="username" required=""> 
		<label> Username</label>
		</div>
		<div class="inputBox">
		<input type="password" name="password" required=""> 
		<label>Password</label>
		</div>
		<div class="inputBox">
		<input type="text" name="nim" required=""> 
		<label>Nim</label>
		</div>
		<div class="inputBox">
		<input type="text" name="email" required=""> 
		<label>E-mail</label>
		</div>
		<div class="inputBox">
		<select name="gender">
    		<option value="">-Jenis Kelamin Anda-</option>
     		<option value="Laki-laki">Laki-Laki</option>
     		<option value="Perempuan">Perempuan</option>
  			</select>
  			<span class="error">* <?php echo $genderErr;?></span>
		</div>
		<br>
		<div class="inputBox">
			<select name="jurusan">
    		<option value="">-Pilih Jurusan-</option>
     		<option value="Sistem Informasi">Sistem Informasi</option>
     		<option value="Sistem Komputer">Sistem Komputer</option>
     		<option value="Teknik Informatika">Teknik Informatika</option>
  			</select>
  			<span class="error">* <?php echo $jurusanErr;?></span>
		</div>
		<br>
		<div class="inputBox">
			<form action="/action_page.php">
  			<select name="level">
    		<option value="">-Pilih level anda-</option>
     		<option value="admin">admin</option>
     		<option value="user">user</option>
  			</select>
  			<span class="error">* <?php echo $levelErr;?></span>
		</div>
		<br>
		<div class="inputBox">
			<td><img src="capcay.php"/> <input type="text" placeholder="Captcha" name="kode" required="" />
  		</div>
		<input type="submit" name="SIGNUP">

 </div>
 
    <script src="C://xampp/htdocs/Ahay/dist/js/bootstrap.min.js"></script>
    <script src="C://xampp/htdocs/Ahay/assets/js/docs.min.js"></script>
</body>
</html>