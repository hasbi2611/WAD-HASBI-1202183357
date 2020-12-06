<?php
session_start();

if(isset($_SESSION["login"])){
  $query = mysqli_query($conn,"SELECT * FROM user WHERE email='$email'");
	$users = $query->fetch_array();
  $_SESSION['email'] = $email;
	$_SESSION['password'] = $users['password'];
	$_SESSION['nama'] = $users['nama'];
	$_SESSION['user_id'] = $users['id'];
	$_SESSION['is_login'] = TRUE;
  header("Location: index.php");
  exit;
}

$conn = mysqli_connect("localhost","root","","wad_modul4");
  



if(isset($_SESSION['logintime'])){
  header("location:index.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link">WAD BEAUTY <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>
          </form>
        </div>
      </nav>
      <?php
      
      if(isset($_POST["login"]) ) {
        global $conn;
        $email = $_POST["email"];
        $password = $_POST["password"];
        $remember ;
        
        $dbid = mysqli_query($conn,"SELECT id FROM user");
        $_SESSION["id"] = $dbid;
         $result = mysqli_query($conn, "SELECT * FROM user where email = '$email' and password ='$password' ");
         $rows = mysqli_num_rows($result);
         
         if($rows!=0){
          $_SESSION["login"] = true;
           if(isset($_POST['remember'])){
           
             setcookie('email', $email);
             setcookie('password', $password);
             setcookie('login','true');
             
           }
           
           echo"<div class='alert alert-warning' role='alert'>
           Berhasil Login!
           </div>
           ";
           header("Refresh:1;url=index.php");
           }else{
            echo"<div class='alert alert-warning' role='alert'>
            Gagal Login!
            </div>
            ";
            header("Refresh:1;url=login.php");
           } 
     
     }
       
       
       ?>
      <br> <br>
    <div class="card" style="width: 35%; left:35%; ">
        <h5 class="card-header" style="text-align: center; background-color: white;">Login</h5>
        <div class="card-body">
         <form action="" method="POST">
              <div class="form-group col-md-9" style="left: 10%;">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group col-md-9"style="left: 10%;">
                <label for="password">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="form-check" style="left:13%;">
                <input class="form-check-input" name="remember" type="checkbox" id="gridCheck" >
                <label class="form-check-label" for="gridCheck" style="padding-bottom:10px;">
                  Remember me
                </label>
              </div>
              <div class="form-group row">
              <div class="col-sm-10" style="left: 40%;">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
              </div>
            </div>
          </form>
          <p style="text-align: center;">Belum punya akun? <a href="register.php">Registrasi</a></p>
        </div>
      </div>
</body>
</html>