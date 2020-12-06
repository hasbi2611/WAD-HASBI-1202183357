<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .bars{
        background-color: rgb(48, 111, 228);
        margin: auto;
        text-align: center;
        letter-spacing: 0.9px;
        padding-top: 10px;    
        padding-bottom: 10px;
        font-size: 20px;
        
        }
        </style>
</head>
<body>
    
    $nama = $_POST['name'];
    $tanggal = $_POST['date'];
    $durasi = $_POST['duration'];
    $tipe = $_POST['typeroom'];
    $nohp = $_POST['numbphone'];
    

        
    $chkout=  date('yy/m/d', strtotime($tanggal.'+'.$_POST['duration'].'days'));
    
   

    if (isset($_POST['submit'])){
      $mt_rand = mt_rand(1000, 9999);
    }



    ?>
    <div class="bars">
        <a class="home" href="home.php" style="color: black;">Home</a>
        <a class="home" href="booking.php"style="color: black;">Booking</a>
    </div><br>
    <table class="tab" width="1000px" align="center" style="text-align:center;">
        <thead>
          <tr>
            <th scope="col" style="background-color:rgba(240, 240, 240, 0.74);" >Booking Number</th>
            <th scope="col" style="background-color:rgba(240, 240, 240, 0.74);" >Name</th>
            <th scope="col" style="background-color:rgba(240, 240, 240, 0.74);" >Check-in</th>
            <th scope="col" style="background-color:rgba(240, 240, 240, 0.74);" >Check-out</th>
            <th scope="col" style="background-color:rgba(240, 240, 240, 0.74);" >Room Type</th>
            <th scope="col" style="background-color:rgba(240, 240, 240, 0.74);" >Phone Number</th>
            <th scope="col" style="background-color:rgba(240, 240, 240, 0.74);" >Service</th>
            <th scope="col" style="background-color:rgba(240, 240, 240, 0.74);" >Total Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><?= $mt_rand?></th>
            <th scope="row"><?= $nama ?></th>
            <th scope="row"><?php echo date("yy/m/d", strtotime($tanggal)); ?></th>
            <th scope="row"><?= $chkout ?></th>
            <th scope="row"><?= $tipe ?></th>
            <th scope="row"><?= $nohp ?></th>
            <th scope="row"><?php if (isset($_POST['check1'])) echo $_POST['check1']."<br />";
                                  if (isset($_POST['check2'])) echo $_POST['check2']."<br />";?></th>
            <th scope="row"><?php if(isset($_POST))
                                  if($tipe == 'Standard'){
                                  $roompr =90*$durasi;
                                  }elseif($tipe == 'Superior'){
                                    $roompr=150;
                                  }else{
                                    $roompr =200;
                                  }
                                  $total = ($roompr * $durasi);
                                  echo $total; ?>
                                  </th>
          </tr>
        </tbody>
    </table>
    
    
</body>
</html>