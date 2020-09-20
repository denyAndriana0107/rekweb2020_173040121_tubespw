<?php 
    require 'helper/functions.php';
    $budaya_indonesia = query("SELECT * FROM budaya_indonesia");

    if(isset($_GET["cari"])){
	$keyword = $_GET["keyword"];
	$query="SELECT * FROM budaya_indonesia WHERE Nama LIKE '%$keyword%'
	OR Berasal LIKE'%$keyword%'
  OR Tujuan LIKE '%$keyword%'
  OR Deskripsi LIKE '%$keyword%'";
	$budaya_indonesia = query($query);
	
}else {
	$query="SELECT * FROM budaya_indonesia";
	$budaya_indonesia = query($query);
}


   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Budaya Indonesia</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">


	<style type="text/css">
		.container{
			margin-top: 40px;
			margin-bottom: 40px;
			height: 20px;
		}
		h1{ 
			font-family: timenewroman;
			font-size: 80px;
		}

		#a{
			padding-top: 80px;
		}
		body{
			background-color: rgba(192,192,192,0.8);
		}
		section	{
			border: 1px solid black;
			width: 1250px;
			height: auto;
			background-color: white;
			border: 1px solid white;
			border:1px solid ;
			box-shadow: 0 0  10px black;
			margin-bottom: 30px;

		}
		h2{
			font-style: italic;
		}
		
		#b{
			margin-left: 40px;
			margin-top: 20px;
			background-color: white;
			box-shadow: 0 0  1px silver;
		}
		img{
			float: left;
			
		}
		img:hover {
          -webkit-transform: scaleX(-1);
          transform: scaleX(-1);
         }
		.table{
			margin-left: 50px;
			width: 90%;
		}
		p,h5{
			color: w
		}
	</style>
		
		
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    <ul class="navbar-nav mr-auto offset-lg-9" style="float: right;">
    	<li class="nav-item">
    		<a href="admin/login.php" class="nav-link">Login as Admin</a>
    	</li>
    </ul>
  </div>
</nav>
<!-- end navbar -->

<!-- container -->
<div class="container">
	
</div>
<!-- endcontainer -->


<!-- section -->
<section class="col-md-10 offset-md-1">

<div>
	<form class="form-inline my-2 my-lg-0 offset-md-3" action="" method="get">
	  <div class="card-body">
			<h2 class="card-title text-center">Daftar Budaya</h2><hr>
	  </div>
      <input class="form-control mr-sm-4" type="search" placeholder="Search" aria-label="Search" name="keyword" id="s">
     <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="cari">Search</button>  
</div>

    </form>
<div id="section2">
<?php if (empty($budaya_indonesia)):?>
	<tr>
	<td colspan="12"><h1 class="text-center">Data tidak ditemukan.</h1></td>
	
	</tr>
<?php else: ?>
    <?php foreach ($budaya_indonesia as $key):?>
<div class="card text-center col-md-10 offset-md-1" id="search">
  <div class="card-header">
    <?php echo $key["Id"]; ?>
  </div>
  <div class="card-body">
    <a href="#"><img style="width:400px;height:198px;"src="assets/img/<?php echo $key['Gambar']; ?>"></a>
    <h5 class="card-title"><?php echo $key["Nama"]; ?></h5>
    <p class="card-text">Berasal dari daerah <?php echo $key['Berasal']; ?></p>
    <br><br>
    <a href="php/profil.php?Id=<?php echo $key['Id']; ?>" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
<br>
<?php endforeach; ?>
<?php endif; ?>
</div>
</section>


	
</body>
</html>