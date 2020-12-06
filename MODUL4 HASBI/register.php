<?php
session_start();
$conn = mysqli_connect("localhost","root","","wad_modul4");


function regis($reg){
    global $conn;
 
   $nama = $reg['nama'] ;
   $email = $reg['email'] ;
   $nohp = $reg['nohp'] ;
   $password = $reg['password'] ;
   $kpassword = $reg['kpassword'] ;

   
     $query ="INSERT INTO user
     VALUES
     ('', '$nama', '$email', '$nohp', '$password')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
    


}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" >WAD BEAUTY <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>
          </form>
        </div>
      </nav>
    <?php    
    
if(isset($_POST['submit']) ) {

 if(regis($_POST) > 0 ) {
     echo "
     <div class='alert alert-warning' role='alert'>
     Berhasil Registrasi!
     </div>
     ";
     header("Refresh:1;url=login.php");
}else{
     echo"
     <div class='alert alert-warning' role='alert'>
     Gagal Registrasi!
     </div>
     ";
 }

}

?>
<br> <br>
    <div class="card" style="width: 35%; left:35%; ">
        <h5 class="card-header" style="text-align: center; background-color: white;">Registrasi</h5>
        <div class="card-body">
         <form action="register.php" method="POST">
              <div class="form-group col-md-9" style="left: 10%;">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
              <div class="form-group col-md-9" style="left: 10%;">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group col-md-9" style="left: 10%;">
                <label for="nohp">No. Handphone</label>
                <input type="text" class="form-control" id="nohp" name="nohp">
              </div>
              <div class="form-group col-md-9"style="left: 10%;">
                <label for="password">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="form-group col-md-9"style="left: 10%;">
                <label for="kpassword">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="kpassword" name="kpassword">
              </div>
           
            <div class="form-group row">
              <div class="col-sm-10" style="left: 40%;">
                <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
              </div>
            </div>
          </form>
          <p style="text-align: center;">Sudah punya akun? <a href="login.php">Login</a></p>
        </div>
      </div>
</body>
</html>