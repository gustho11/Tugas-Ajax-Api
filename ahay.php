<?php 
require 'koneksi.php';

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <title>CRUD</title>

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <div class="blog-masthead">
      <form id="form-container" class="form-container">
      <div class="container"><a class="blog-nav-item" href="ahay.php">CRUD</a>
          <a class="blog-nav-item" href="logo.php">Logo</a>  
      <input type="text" id="input" placeholder="search wikipedia">
      <button id="submit-btn" class="">submit</button>
      </div>
      </form>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="blog-nav-item" href="login.php">Login</a></li>
            <li><a class="blog-nav-item" href="formregister.php">Daftar</a></li>
          </ul>
        </div>
      </div>
    </div>
<div id="kanan">
  <br><br> 
   <form id="form-container" class="form-container">

      <center>
    <div class="wikipedia-container">
          <h3 id="wikipedia-header">Wikipedia Links :</h3>
          <ul id="wikipedia-links">Hasil pencarian akan tampil disini</ul>
      </div>
      </center>
</div>   

    <div class="container">

      <div class="blog-header" >
        <h3 class="">Welcome to Web Kita</h3>
        <p class="lead blog-description">Project by Gustho</p>
      </div>
<br>

    </div>

    <div class="blog-footer">
      <h3 align="center">Welcome Boss!!!</h3>
    </div>
<style type="text/css">
  #kanan {width: 30%; height: 100%; float: right; background-color: lightgrey}
  #kiri {width: 70%; height: 100%; float: left; background-color: darkgrey}
</style>
<script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
    <script src="C://xampp/htdocs/Ahay/dist/js/bootstrap.min.js"></script>
    <script src="C://xampp/htdocs/Ahay/assets/js/docs.min.js"></script>
  </body>
</html>
