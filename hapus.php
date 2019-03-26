<?php 
require 'koneksi.php';
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }

$id = $_GET["id"];

if (hapus($id)>0) {
			header("location: admin.php");
		}
	else
	{
			echo "data gagal dihapus";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk kembali";
		}
	


 ?><title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
</title>
 <body style="background-color: whitesmoke;">
 	<div class="blog-masthead">
      <div class="container"><a class="blog-nav-item" href="admin.php">Index</a>
       
      </div>
    </div>
 </body>