<?php 	

		require '..\helper\functions.php';
		$budaya_indonesia = query("SELECT * FROM budaya_indonesia");

  if(isset($_GET["cari"])){
  $keyword = $_GET["keyword"];
  $query="SELECT * FROM budaya_indonesia WHERE 
  Nama LIKE '%$keyword%'
  OR Berasal LIKE'%$keyword%'
  OR Tujuan LIKE '%$keyword%'
  OR Deskripsi LIKE '%$keyword%'";
  $budaya_indonesia = query($query);
  
}else{
  
  $query="SELECT * FROM budaya_indonesia";
  $budaya_indonesia = query($query);

}
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <link href="..\assets\css\bootstrap.min.css" rel="stylesheet">

  
  <style type="text/css">
  body{
  	font-size: 14px;
  }
  
    h2{
      margin-top: 20px;
      margin-bottom: 20px;
    }
    h3  {
      text-align: center;
    }
    .container{
    		border: 1px solid black;
			height: auto;
			margin-top: 80px;
			background-color: white;
			border: 1px solid white;
			border:1px solid ;
			box-shadow: 0 0  10px black;
			margin-bottom: 30px;
    }
    
    
    p {
      font-size: 18px;
      text-align: center;
    }
    img {
      float: left;
      margin-right: 10px;
      width: auto;
      height: auto;
    }
    h5  {
      float: right;
      margin-bottom:  5px;
    }
    a{
      color: gray;
    }
    .out{
    	float: right;
    	margin-top: 30px;
    	margin-right: 20px;
    }
    h2{
    	margin-top: 10px;
    	font-style: italic;
    }table{
    	margin-top: 20px;
    }
    .tambah{
    	margin-top: -20px;
    }
  </style>
</head>
<body>
<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Admin</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <span class="navbar-text">
      <a href="logout.php" style="text-decoration: none;">Logout</a>
    </span>
  </div>
</nav>
<!-- end navbar -->

<div class="container col-lg-12">

<div>
	<form class="form-inline my-2 my-lg-0 offset-md-3">
	  <div class="card-body">
			<h2 class="card-title text-center">Daftar Budaya</h2><hr>
	  </div>
      <input class="form-control mr-sm-4" type="search" placeholder="Search" aria-label="Search" name="keyword">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="cari">Search</button>
      
</div>
<div class="tambah offset-lg-1">
          <a href="tambah.php" class="btn btn-success">Tambah Data Budaya </a>
</div>
   <table class="table table-striped table-bordered">
   <tr class="text-center">	
   		<th>#</th>
   		<th>Opsi</th>
   		<th>Potret Budaya</th>
   		<th>Nama</th>
   		<th>Berasal</th>
   		<th>Tujuan</th>
   		<th>Deskripsi</th>
   	</tr>
<?php if (empty($budaya_indonesia)):?>
  <tr>
  <td colspan="12"><h1 class="text-center">Data tidak ditemukan.</h1></td>
  
  </tr>
<?php else: ?>
<?php 	$i=1; ?>   	
<?php 	foreach ($budaya_indonesia as $key ) :?>

   	<tr class="text-justify">
   			<td><?= $i ?></td>
   			<div class="row">
   			<td>
   			<div class="row col-lg-12" style="margin-left: 5px;">
   				<a href="ubah.php?Id=<?= $key['Id']; ?>" class="btn btn-primary" style="margin-top: 50px;width: 80px; ">Ubah</a>
   				<a href="hapus.php?Id=<?= $key['Id']; ?>" class="btn btn-danger" style="margin-top: 20px; margin-left: -40;"onclick="confirm('Apakah anda ingin menghapus data ini?');">Hapus</a></div>
   			</td>
        </div>
   			<td><img style="width:400px;height:198px;"src="..\assets\img\<?= $key['Gambar']; ?>"></td>
   			<td><?php 	echo $key["Nama"]; ?></td>
   			<td><?php 	echo $key["Berasal"]; ?></td>
   			<td><?php 	echo $key["Tujuan"]; ?></td>
   			<td><?php 	echo $key["Deskripsi"]; ?></td>
   			
   	</tr>
   	<?php 	$i++; ?>
   <?php 	endforeach; ?>
 <?php endif; ?>
  </table>
</div>
</body>
</html>