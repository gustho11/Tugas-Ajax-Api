<?php 
	require 'koneksi.php';
	session_start();
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$result = mysqli_query($conn,"SELECT * FROM user where username='$username' and password ='$password'");

	$data	= mysqli_fetch_assoc($result);

 	if (mysqli_num_rows($result)>0){
 		//login
 		$_SESSION['login'] = true;
 		$_SESSION['username'] = $username;
 		$_SESSION['id'] = $data['id'];
 		$_SESSION['level'] = $data['level'];
 		if($data['level']=="admin"){
            header("location:admin.php");
        }
    	else if($data['level']=="user"){
            header("location:user.php");
        }
 	}
 	
 	else {
 		echo "Login Gagal. Silahkan ";
 		echo "<a href='formregister.php'>registrasi<a>";
 		echo " terlebih dahulu";
 		echo "<br>";
 		echo "<br>";
 		echo "<a href='login.php'> login?<a>";
 	}

?><title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
</title>
<body>
    <script src="C://xampp/htdocs/Ahay/dist/js/bootstrap.min.js"></script>
    <script src="C://xampp/htdocs/Ahay/assets/js/docs.min.js"></script>
</body>