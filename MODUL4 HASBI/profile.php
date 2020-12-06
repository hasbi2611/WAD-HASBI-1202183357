<?php

$conn = mysqli_connect("localhost","root","","wad_modul4");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link">WAD BEAUTY<span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <label for="" style="padding-top: 8px;">Selamat Datang</label>
          <form class="form-inline my-2 my-lg-0">
          <div class="form-group col-md-9">
            <div class="btn-group">
                
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="left:10%; background-color: transparent; color: skyblue; border-color: transparent;">
                  user
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="">Profile</a>
                    <a class="dropdown-item" href="destroy.php">Logout</a>
                </div>
              </div>
          </div>  
          </form>
        </div>
      </nav><br>
      <h2 style="text-align: center; font-style:bold;">Profile</h2>
      <br>
      <form>
        <div class="form-group col-md-9" style="left: 10%;">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" disabled>
        </div>
        <div class="form-group col-md-9" style="left: 10%;">
            <label for="nohp">Nama</label>
            <input type="text" class="form-control" id="nama">
          </div>
        <div class="form-group col-md-9" style="left: 10%;">
            <label for="nohp">Nomor Handphone</label>
            <input type="text" class="form-control" id="nohp">
          </div>
        <div class="form-group col-md-9"style="left: 10%;">
          <label for="password">Kata Sandi</label>
          <input type="password" class="form-control" id="password">
        </div>
        <div class="form-group col-md-9"style="left: 10%;">
            <label for="kpassword">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" id="password">
          </div>
          <div class="form-group col-md-9"style="left: 10%;">
            <label for="kpassword">Warna Navbar</label>
            <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="left:10%; background-color: transparent; color: black;">
                  Light
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile.html">Light</a>
                    <a class="dropdown-item" href="login.html">Dark</a>
                </div>
              </div>
          </div>  
      <div class="form-group row">
        <div class="col-sm-9" style="left: 10%; length: 800px;">
        <button type="button" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        <button type="button" name="cancel" class="btn btn-secondary btn-lg btn-block">Cancel</button>
        </div>
      </div>
      
    </form>



</body>
</html>