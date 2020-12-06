<?php
session_start();
$conn = mysqli_connect("localhost","root","","wad_modul4");
function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows= [];
  while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
  }
  return $rows;
}



$carts = query("SELECT * FROM cart ");

$i=1;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link">WAD BEAUTY <span class="sr-only">(current)</span></a>
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
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="destroy.php">Logout</a>
                </div>
              </div>
          </div>  
          </form>
    </div>
  </nav>
  <br> <br>
  
   <form action="" method="POST">
      <table class="table table-striped" style="width: 80%; margin-left: 12%; ">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach( $carts as $row) :?> 
   
       <tr>
       <td><?=$i++ ?></td>
       <td><?= $row["nama_barang"] ?></td>
       <td><?= $row['harga'] ?></td>
       <td><button type="button" name="hapus" class="btn btn-danger">Hapus</button></td>
       </tr>
         <?php endforeach; ?>
         <?php
         if(isset($_POST['hapus']) ) {
          function hapus($id){
            global $conn;
             
            query($conn,"DELETE FROM cart where id = $id");
          
            return mysqli_affected_rows($conn);
          }
         }
       
         
         ?>
        </tbody>
      </table>
      </form>
</body>
</html>