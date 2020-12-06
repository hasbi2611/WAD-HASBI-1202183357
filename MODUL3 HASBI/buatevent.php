<?php

$conn = mysqli_connect("localhost","root","","modul3_crud");

if(isset($_POST["submit"])){
  //ambil data dari tiap elemen dalam form
  $name = $_POST["nama"];
  $deskripsi = $_POST["deskripsi"];
  $gambar = $_POST["gambar"];
  $kategori = $_POST["kategori"];
  $tanggal = $_POST["date"];
  $mulai = $_POST["mulai"];
  $berakhir = $_POST["berakhir"];
  $tempat = $_POST["lokasi"];
  $harga = $_POST["harga"];
  $benefit = $_POST["benefit"];

  //query insert data
  $query = "INSERT INTO event VALUES ('','$name','$deskripsi','$gambar','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')";

  mysqli_query($conn,$query);



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
   #satu{
      margin: 20px;
    }
    h3{
      margin-top:10px;
      color: rgb(0, 81, 255);
      text-align: center;
    }
    .container{
     margin-right: 200px;
    }
    .col{
      background-color: aquamarine;
    }
    .col2{
      background-color: bisque;
    }
    .button{
      color:white;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">ESD EVENT</a>
  <form class="form-inline">
    <a id="satu" class="btn btn-outline-success my-2 my-sm-0" href="home.php">Home</a>
    <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="buatevent.php">Buat Event</a>
   </form>
</nav>
<h3>Buat Event</h3>

<div class="container px-lg-8">
  <div class="row mx-lg-n5" >
    <div class="col py-3 px-lg-5 border bg-light">
    <form action="" method="POST" name="submit">
        <div class="form-row">
            <label for="inputName">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <input type="text" class="form-control" id="inputAddress" name="deskripsi">
        </div>
        <div class="form-group">
          <div class="form-group">
            <label for="inputCity">Upload Gambar</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" name="gambar">
              <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
            </div>
          </div>
          <p><label>Kategori</label></p>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="kategori" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Online</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="kategori" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">Offline</label>
          </div>
          
        </div>
      
         </div>
         <div class="col py-3 px-lg-5 border bg-light" style="margin-left: 20px;">
    
          <div class="form-row">
            <label for="">Tanggal</label>
            <input type="date" name="date"class="form-control" id="inputtanggal">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Jam Mulai</label>
            <input name="mulai" type="time" class="form-control" id="jammulai" placeholder="">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Jam Berakhir</label>
            <input name="berakhir" type="time" class="form-control" id="jamberakhir" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <div class="form-group">
            <label for="">Tempat</label>
            <input type="text" name="lokasi" class="form-control" id="inputtempat" value="Zoom Meeting">
          </div>
          <div class="form-group">
            <label for="">Harga</label>
            <input type="text" name="harga" class="form-control" id="inputtanggal" value="">
          </div>
          <div class="form-group">
            <label for="benefit">Benefit</label>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="benefit" id="inlineCheckbox1" value="Snack">
              <label name="benefit" class="form-check-label" for="inlineCheckbox1">Snack</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="benefit" id="inlineCheckbox2" value="Sertifikat">
              <label name="benefit" class="form-check-label" for="inlineCheckbox2">Sertifikat</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="benefit" id="inlineCheckbox3" value="Souvenir" >
              <label name="benefit"class="form-check-label" for="inlineCheckbox3">Souvenir</label>
            </div>
          </div>
          
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
        <button type="button" class="btn btn-danger"><a href="home.php" style="color:white">Cancel</a></button>
      </form>
    </div>
  </div>
</div>

</body>
</html>