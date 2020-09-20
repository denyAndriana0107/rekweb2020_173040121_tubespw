<?php 
  if(isset($_POST["login"])){
    if($_POST["username"]=="admin" && $_POST["password"]==123){
      header("Location:index.php");
      exit;
    }else{
      $error = true;
    }
  }
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="..\assets/css/bootstrap.min.css">
  <style type="text/css">
    .container{
      width: 50%;
      height: 380px;
      background-color: white;
      border: 1px solid white;
      border:1px solid ;
      box-shadow: 0 0  10px black;
      margin-bottom: 40px;
      margin-top: 40px;
    }
    form{
      margin-top: 20px;
    }
    a{
      float: right;
      margin-top: -10px;
      margin-right: 20px;
    }
  </style>
</head>
<body>

<div class="container">
<h1 class="text-center">Login</h1>
  <form method="post">
    <div class="form form-group">  
      <label for="username">Username</label>
      <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username"></input><br>
      <label>Password</label>
      <input class="form-control" type="password" name="password" id="password" for="password" placeholder="Password"></input>
      <small id="username" class="form-text text-muted">We'll never share your Account with anyone else.</small>
      
    </div>
    <button type="submit" name="login" class="btn btn-primary">Login</button>
    <small id="username" class="form-text text-muted">Username : admin / Password : 123</small>
    <?php if(isset($error)) : ?>
  <p class="text-center" style="color: red; font-style: italic;">Username / Password salah!</p>
<?php endif; ?>
    </form>

</form>
</div>
</body>
</html>