<?php 
	require 'koneksi.php';


	session_start();
	$nama = $_POST['nama'];
	$jabatan = $_POST['jabatan'];
	$tahun = $_POST['tahun'];
	$keterangan = $_POST['keterangan'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$nama','$jabatan','$tahun','$keterangan',NULL)");

		if ($tambah>0) {
			header("location: admin.php");
		}
		else {
			echo "data gagal ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";
			echo " kembali";

		}
	

 ?><title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
</title>
 <body>
    </div>
    <script src="C://xampp/htdocs/Ahay/dist/js/bootstrap.min.js"></script>
    <script src="C://xampp/htdocs/Ahay/assets/js/docs.min.js"></script>
</body>