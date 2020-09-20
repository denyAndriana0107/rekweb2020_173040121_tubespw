<?php 
function koneksi()
{
	$scann = mysqli_connect("localhost","root","") or die("koneksi Ke DB gagal!");
    mysqli_select_db($scann,"pw_173040121") or die("Database Salah");
return $scann;
}

function query($sql)
{
	$scann = koneksi();
	$results = mysqli_query($scann,"$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($results)) {
		$rows[]= $row;
	};
	return $rows;
}

function Tambah($data)
{
	$scann = koneksi();
	$Gambar_File=$_FILES['fname']['name'];
	$Nama = htmlspecialchars($data['Nama']);
	$Berasal = htmlspecialchars($data["Berasal"]);
	$Tujuan = htmlspecialchars($data["Tujuan"]);
	$Deskripsi = htmlspecialchars($data["Deskripsi"]);
	$Gambar = $Gambar_File;
        // echo ($Gambar_File);
        move_uploaded_file($_FILES ['fname']['tmp_name'],"../assets/img/".$Gambar_File);
	$queryTambah = "INSERT INTO budaya_indonesia VALUES('','$Nama','$Berasal','$Tujuan','$Deskripsi','$Gambar')";
	mysqli_query($scann, $queryTambah);
	return mysqli_affected_rows($scann);
}
function Hapus($id)
{
	$scann = koneksi();
	mysqli_query($scann,"DELETE FROM budaya_indonesia WHERE id = $id");
	return mysqli_affected_rows($scann);
}
function ubah($data)
	{	$scann =koneksi();
		$Gambar;
		$Gambar_File=$_FILES['Gambar']['name'];
		$id = $data["Id"];
		$Nama = htmlspecialchars($data["Nama"]);
		$Berasal= $data["Berasal"];
		$Tujuan = htmlspecialchars($data["Tujuan"]);
		$Deskripsi = htmlspecialchars($data["Deskripsi"]);
		if ($Gambar_File!="") {
			$Gambar=$Gambar_File;
		}else{
			$Gambar=$_POST['old'];
		}
		

		$query= "UPDATE budaya_indonesia SET Nama = '$Nama',
				 Berasal = '$Berasal',
				 Tujuan = '$Tujuan',
				 Deskripsi = '$Deskripsi',
				 Gambar = '$Gambar'
				
		 WHERE Id = $id;";
		 var_dump($Gambar_File);
		mysqli_query($scann, $query);
		return mysqli_affected_rows($scann);
	}
 ?>