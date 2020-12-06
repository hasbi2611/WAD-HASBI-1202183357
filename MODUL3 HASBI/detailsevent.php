<?php

$conn = mysqli_connect("localhost","root","","modul3_crud");
$result= mysqli_query($conn,"SELECT*FROM event");

 $evn = mysqli_fetch_row($result);
 if(!$result){
   echo mysqli_error($conn);
 
 
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
   
    
    h3{
      margin-top:10px;
      color: rgb(0, 81, 255);
      text-align: center;
    }  
    .card{
      text-align:center;
      margin-left: 40%;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">ESD Event</a>
  <form class="form-inline">
  <a id="satu" class="btn btn-outline-success my-2 my-sm-0" href="home.php">Home</a>
    <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="buatevent.php">Buat Event</a>
  </form>
</nav>
<h3>Detail Event</h3>
<?php

while ($add = mysqli_fetch_assoc($result)): ?>
  <div class='card' style='width: 18rem;'>
  <img src=<?=$add["gambar"]; ?>class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'><?=$add["name"]; ?></h5>
    <p>Deskripsi</p>
    <p class="card-text"><?php echo $add["deskripsi"]; ?></p>
    <p>Informasi Event</b>
    <p class="card-text"><?php echo $add["tanggal"]; ?></p>
    <p class="card-text"><?php echo $add["tempat"]; ?></p>
    <p class="card-text"><?php echo $add["mulai"]; ?></p>
    <p class="card-text">Kategori : <?php echo $add["kategori"]; ?></p>
    <br>
    <br>
    <p class="card-text">Harga : <?php echo $add["harga"]; ?></b>
    <br>
    <br>
    <p>Benefit :</p>
    <p class="card-text"><?php echo $add["benefit"]; ?></p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">Edit</button>

    <a class="btn btn-danger">Delete</a>
</div> 
</div>
<?php endwhile;  ?>
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>