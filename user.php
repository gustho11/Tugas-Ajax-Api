<?php 
require 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }
  $tampil = query ("SELECT * FROM blog");
  
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">

</head>
<body>
<div class="blog-masthead">
   <form id="form-container" class="form-container">
      <div class="container">
        <a class="blog-nav-item" href="logout.php" onclick =" return confirm ('Yakin ingin keluar?');">Keluar</a>
        <input type="text" id="input" placeholder="search wikipedia">
      <button id="submit-btn" class="">submit</button>
      </div>
  </form>
</div>
<center>
  <div id="kanan">
  <br><br> 
   <form id="form-container" class="form-container">

    <div class="wikipedia-container">
          <h3 id="wikipedia-header">Wikipedia Links :</h3>
          <ul id="wikipedia-links">Hasil pencarian akan tampil disini</ul>
      </div>
      </center>
</div>   
<br><br>
<div class="container">
    <h2>HALAMAN USER</h2>
  <br><br>
    <table border="5" cellpadding="5" cellspacing="3">
  <tr>
    <h2>
    <th>No</th>
    <th>Nama Organisasi</th>
    <th>Jabatan</th>
    <th>Tahun Jabatan</th>
    <th>Ket. Tambahan</th>
    <th>update</th>
    </h2>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["nama"] ?></td>
    <td><?= $x["jabatan"];  ?></td>
    <td><?= $x["tahun"];  ?></td>
    <td><?= $x["keterangan"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</div>
<br>
<style type="text/css">
  #kanan {width: 30%; height: 100%; float: right; background-color: lightgrey}
  #kiri {width: 70%; height: 100%; float: left; background-color: darkgrey}
</style>
    <script src="C://xampp/htdocs/Ahay/dist/js/bootstrap.min.js"></script>
    <script src="C://xampp/htdocs/Ahay/assets/js/docs.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
  </body>
</html>
