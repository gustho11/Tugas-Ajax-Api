<?php 
	
	$conn = mysqli_connect("localhost","root","","ahay");

	function query ($query){
		global $conn;
		$result = mysqli_query ($conn,$query);
		$rows = [];

		while ($mhs = mysqli_fetch_assoc($result)) {
			$rows[]=$mhs;
		}
		return $rows;
	}

	function hapus ($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM blog WHERE id = $id");
		return mysqli_affected_rows($conn); 
	}


	function ubah($data)
	{
		global $conn;

		$id = $data["id"];
		$nama = htmlspecialchars($data["nama"]);
		$jabatan = htmlspecialchars($data["jabatan"]);
		$tahun = htmlspecialchars($data["tahun"]);
		$keterangan = htmlspecialchars($data["keterangan"]);

		$query = "UPDATE blog SET nama = '$nama', jabatan = '$jabatan', tahun = '$tahun', keterangan = '$keterangan' WHERE id = $id";

		mysqli_query ($conn, $query);
		return mysqli_affected_rows ($conn);
	}

	// function creat ($data){
	// 	global $conn;

	// 	$judul = $data["judul"];
	// 	$isi = $data["isi"];

	// 	$query = "INSERT INTO blog VALUES ('','$judul', '$isi')";

	// 	mysql_query($conn, $query);

	// 	return mysqli_affected_rows($conn);



	
 ?>