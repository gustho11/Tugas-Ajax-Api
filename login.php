<?php 
	session_start();
	if (isset($_SESSION['login'])) {
		header("location : admin.php");
		exit;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
	</style>
</head>
<body style="background-color: whitesmoke;">
	<div class="blog-masthead">
      <div class="container"><a class="blog-nav-item" href="ahay.php">CRUD</a>
          <a class="blog-nav-item" href="logo.php">Logo</a>
       
      </div>
	</div>
	<div class="box">

 	<h2>Login</h2>
 	<form method="POST" action="actionlogin.php">
 		<div class="inputBox">
		<input type="text" name="username" required=""> 
		<label> username</label>
		</div>
		<div class="inputBox">
		<input type="password" name="password" required=""> 
		<label>password</label>
		</div>
		<input type="submit" name="submit" value="submit">
		<button> <a href="formregister.php">register</a></button>
	</form>
	</div>
</body>
<script src="C://xampp/htdocs/Ahay/dist/js/bootstrap.min.js"></script>
    <script src="C://xampp/htdocs/Ahay/assets/js/docs.min.js"></script>
</html>