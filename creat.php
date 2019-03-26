<?php 
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>add new articel</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">

</head>
<body>
	<div class="blog-masthead">
      <div class="container"><a class="blog-nav-item" href="admin.php">Index</a>
       
      </div>
    </div>
	<br><br>
 	<form method="POST" action="actioncreat.php">
 		<input type="hidden" name="waktu">
 		<form method="POST" action="">
    <input type="hidden" name="id">
    <br>
    Nama Organisasi : 
    <input type="text" name="nama" placeholder="nama">
    <br><br>
    Jabatan     :
    <input type="text" name="jabatan" placeholder="jabatan">
    <br><br>
    Tahun Jabatan :
    <input type="text" name="tahun" placeholder="tahun">
    <br><br>
    Ket. Tambahan :
    <input type="text" name="keterangan" placeholder="keterangan">
    <br><br>
    <input type="submit" name="submit"">
  </form>
 	
    <script src="C://xampp/htdocs/Ahay/dist/js/bootstrap.min.js"></script>
    <script src="C://xampp/htdocs/Ahay/assets/js/docs.min.js"></script>
</body>
</html>