<?php

session_start();

if(!isset($_SESSION["login"])) {
  $_SESSION['nama'] = "hasbi";
  header("Location: login.php");
  exit;
}
 
$conn = mysqli_connect("localhost","root","","wad_modul4");
$dbid = mysqli_query($conn,"SELECT id FROM user ");
$rows = mysqli_num_rows($dbid);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link">WAD BEAUTY <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <a class="nav-link" href="cart.php" style="color:black; padding-bottom:11px;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg><span class="sr-only">(current)</span></a>
          <label for="" style="padding-top: 8px;">Selamat Datang</label>
          <form class="form-inline my-2 my-lg-0">
          <div class="form-group col-md-9">
            <div class="btn-group">
            
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="left:10%; background-color: transparent; color: skyblue; border-color: transparent;">
                  user
                </button>
                <form action="" method="POST">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" name="logout" href="destroy.php" >Logout</a>
                </div>
                </form>
             
              </div>
          </div>  
          </form>
        </div>
      </nav>
      <?php
     
  
      if(isset($_POST['submit1']) ) {
       
      function add(){ 

       $namabrg = "ERTOS FOR MEN TONER ESSENCE SERUM" ;
       $harga = 95000 ;
       $id = 20 ;
       global $conn;
 
       //query insert data
       $query ="INSERT INTO cart
       VALUES
       
       ('','$id', '$namabrg', '$harga')";
       mysqli_query($conn,$query);
       return mysqli_affected_rows($conn);
          }
        if(add($_POST) > 0 ) {
          echo "
          <div class='alert alert-warning' role='alert'>
          Berhasil Ditambahkan!
          </div>
          ";
          header("Refresh:1;url=index.php");
      }else{
          echo"
          <div class='alert alert-warning' role='alert'>
          Gagal Ditambahkan!
          </div>
          ";
      }
     }

     if(isset($_POST['submit2']) ) {
       
      function add(){ 
  
         $namabrg = "ERTOS BEARD GO SERUM" ;
         $harga = 70000 ;
         $id = 30 ;
         global $conn;
   
         //query insert data
         $query ="INSERT INTO cart
         VALUES
         
         ('','$id', '$namabrg', '$harga')";
         mysqli_query($conn,$query);
         return mysqli_affected_rows($conn);
            }
          if(add($_POST) > 0 ) {
            echo "
            <div class='alert alert-warning' role='alert'>
            Berhasil Ditambahkan!
            </div>
            ";
            header("Refresh:1;url=index.php");
        }else{
            echo"
            <div class='alert alert-warning' role='alert'>
            Gagal Ditambahkan!
            </div>
            ";
        }
       }

       if(isset($_POST['submit3']) ) {
       
        function add(){ 
    
           $namabrg = "ERTOS MEN COFFE SCRUB" ;
           $harga = 80000 ;
           $id = 40 ;
           global $conn;
     
           //query insert data
           $query ="INSERT INTO cart
           VALUES
           
           ('','$id', '$namabrg', '$harga')";
           mysqli_query($conn,$query);
           return mysqli_affected_rows($conn);
              }
            if(add($_POST) > 0 ) {
              echo "
              <div class='alert alert-warning' role='alert'>
              Berhasil Ditambahkan!
              </div>
              ";
              header("Refresh:1;url=index.php");
          }else{
              echo"
              <div class='alert alert-warning' role='alert'>
              Gagal Ditambahkan!
              </div>
              ";
          }
         }
      
    
    


      ?>
      <br> <br>
      <form action="" method="POST">
      <div class="card-group" style="width: 80%; height: 500px; padding-left: 400px;">
        <div class="card">
          <img src="https://cf.shopee.co.id/file/275f971b6aa3c31e1795d57cf2c0f0fc" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ERTO'S FOR MEN TONER ESSENCE SERUM</h5>
            <p class="card-text">Membersihkan wajah dan membuat wajah tampak cerah setelah 7 hari pemakaian. </p>
          </div>
          <div class="card-body">
            <p class="card-text" >Rp 95.000</p>
          </div>
          <div class="card-footer" style="text-align: center;">
          <button href="" name="submit1" class="btn btn-primary">Tambah ke Keranjang</button>
          </div>
        </div>
        <div class="card">
          <img src="https://ecs7.tokopedia.net/img/cache/700/VqbcmM/2020/9/14/d01d5ada-966b-4068-b307-88ead3d9515a.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ERTO'S BEARD GO SERUM</h5>
            <p class="card-text">Menumbuhkan janggut bewok dengan cepat dan lebat.</p>
          </div>
          <div class="card-body">
            <p class="card-text" >Rp 70.000</p>
          </div>
          <div class="card-footer" style="text-align: center;">
          <button href="" name="submit2" class="btn btn-primary">Tambah ke Keranjang</button>
          </div>
        </div>
        <div class="card" >
          <img src="https://ecs7.tokopedia.net/img/cache/700/VqbcmM/2020/10/31/0c07c617-c5a6-4bc2-8314-b4578eb97737.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ERTO'S MEN COFFE SCRUB</h5>
            <p class="card-text">Terbuat dari bahan alami kopi. Scrub ini membersihkan wajah yang dari debu dan kotoran, mengangkat sel kulit mati dan mencerahkan kulit wajah</p>
          </div>
          <div class="card-body">
            <p class="card-text" >Rp 80.000</p>
          </div>
          <div class="card-footer" style="text-align: center;">
            <button href="" name="submit3" class="btn btn-primary">Tambah ke Keranjang</button>
          </div>
        </div>
      </div>
    </div>
    </form>
</body>
</html>