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
    button{
    margin: 20px;
    }
    h3{
      margin-top:10px;
      color: rgb(0, 81, 255);
      text-align: center;
    }
    #satu{
      margin: 20px;
    }
    .card{
      text-align:center;
      margin-left: 40%;
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
<h3>WELCOME TO ESD EVENTS!</h3>
<br>
<?php

while ($add = mysqli_fetch_assoc($result)): ?>
  <div class='card' style='width: 18rem;'>
  <?="<img src='".$add["gambar"]."'style='width:200px; height:100px;'>"?>
  
  <div class='card-body'>
    <h5 class='card-title'><?=$add["name"]; ?></h5>
    <p><?=$add["tanggal"]; ?></p>
    <p><?=$add["tempat"]; ?></p>
    <p><?=$add["kategori"]; ?></p>
    <a href='detailsevent.php' class='btn btn-primary'>Detail</a>
  </div>
</div>"; 

<?php endwhile;  ?>


</body>
</html>