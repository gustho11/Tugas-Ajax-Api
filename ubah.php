<?php 
	require 'koneksi.php';
	session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }

	$id = $_GET["id"];

	$ubah = query("SELECT * FROM blog WHERE id = $id")[0];


	if (isset($_POST["submit"])) {
		if (ubah ($_POST) > 0){
			header("location: admin.php");
		}
		else{
			echo "data gagal diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";
			echo " bray";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit articel</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">

</head>
<body style="background-color: whitesmoke;">
	<div class="blog-masthead">
      <div class="container"><a class="blog-nav-item" href="admin.php">Index</a>
       
      </div>
    </div>
	<br><br><!-- 
	<?php $waktu = date_default_timezone_set('Asia/Jakarta');  ?> -->
	<h3>Edit :</h3>
 	<form method="POST" action="">
 		<input type="hidden" name="id" value="<?= $ubah["id"]?>">
 		<br>
 		Nama Organisasi	: 
		<input type="text" name="nama" placeholder="nama" value="<?= $ubah["nama"]?>">
		<br><br>
		Jabatan			:
		<input name="jabatan"  value="<?= $ubah["jabatan"]?>">
		<br><br>
		Tahun Jabatan	:
		<input name="tahun"  value="<?= $ubah["tahun"]?>">
		<br><br>
		Ket. Tambahan	:
		<input name="keterangan"  value="<?= $ubah["keterangan"]?>">
		<br><br>
		<input type="submit" name="submit"">
 	</form>
 	
    <script src="C://xampp/htdocs/Ahay/dist/js/bootstrap.min.js"></script>
    <script src="C://xampp/htdocs/Ahay/assets/js/docs.min.js"></script>
</body>
</html>