<?php 
  if (!isset($_GET['Id'])) {
    header("Location:..\index.php");

    exit;
  }
  require '..\helper\functions.php';
  $id = $_GET['Id'];

  $key = query("SELECT * FROM budaya_indonesia WHERE Id = $id")[0];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profil</title>
 	<link href="..\assets\css\bootstrap.min.css" rel="stylesheet">
 	<style type="">
a{
 		margin-left: 630px;
}#container {
    position: relative; 
    max-width: 900px;
    margin-top:10px; 
}.container .content {
    position: absolute;
    bottom:0px; 
    background: rgba(0, 0, 0, 0.5); 
    color: #f1f1f1; 
    width: 400px; 
    padding: 2px; 
}.content p{
  margin-top: 5px;
}
.container{
      margin-top: 40px;
      border: 1px solid black;
      width: 900px;
      height: auto;
      background-color: white;
      border: 1px solid white;
      border:1px solid ;
      box-shadow: 0 0  10px black;
      margin-bottom: 30px;

}img{
 width: auto;
 box-shadow: 0 0  10px black;
}h5{
  font-style: italic;
  margin-top: 20px;
}h3{
  margin-top: 20px;
}

 	</style>
 </head>
 <body>
  <H2 class="text-center">Info <?php echo $key["Nama"]; ?></H2>
  <div class="container">
    <div class="row">
      <div class="col-lg-6" id="container">
        <img style="width:400px;height:198px; "src="..\assets\img\<?php echo $key["Gambar"]; ?>" >
        <div class="content">
          <p class="text-center"><?php echo $key["Nama"] ?></p>
        </div>
      </div>

      <div class="col-lg-6" >
        <div class="card-body" style="box-shadow: 0 0  10px black; margin-top: 10px;">
        <h3 class="text-center card-title"><?php echo $key["Nama"] ?></h3><hr>
          <h5 class="card-title text-center"><?php echo $key["Berasal"]; ?></h5>
           <h5 class="text-center">Bertujuan untuk <?php echo $key["Tujuan"]; ?></h5>
        </div>
      </div>
    </div>
   
    <div class="col-lg-12 text-justify">
      <h5 class="text-center">Deskripsi :</h5>
      <p><?php echo $key["Deskripsi"]; ?></p>
    </div>
 </div>

 <a href="..\index.php"><button type="button" class="btn btn-primary">-->Back<--</button></a>
 </body>
 </html>