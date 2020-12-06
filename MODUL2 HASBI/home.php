<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
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
    .eadhotel{
        text-align: center;
        color: rgb(3, 190, 190);
    }
    .card-group{
        margin: 10px 10px 10px 10px;
        box-shadow: 2px;
        align: center;
        
    }
    .card{
        margin: 10px 20px 10px 20px;
        text-align: center;
        box-shadow: 2px;
        
    }
</style>
<body>
    <div class="bars">
        <a class="a" href="home.php" style="color: black;">Home</a>
        <a class="a" href="booking.php"style="color: black;">Booking</a>
    </div>
    <div class="eadhotel">
        <br>
        <h3>EAD HOTEL</h3>
        <p>Welcome To 5 Star Hotel</p>
    </div>
    <div class="card-group">
        <div class="card">
          <img src="images/std.jpg" class="card-img-top" alt="..." height="240">
          <div class="card-body">
            <h5 class="card-title">Standard</h5>
            <p class="card-text">$ 90/Day</p>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col" style="background-color:rgba(240, 240, 240, 0.74);" >Facilities</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1 Double Bed</th>
                  </tr>
                  <tr>
                    <th scope="row">1 Television and Wi-Fi</th>
                  </tr>
                  <tr>
                    <th scope="row">1 Bathroom with hot water</th>
                  </tr>
                  <tr>
                    <th scope="row" style="background-color:rgba(240, 240, 240, 0.74);">
                
                    <a type="button" href="booking.php" name="Standard" class="btn btn-primary btn-sm">Book Now</a></th>
                </tr>
                </tbody>
            </table>
          </div>
        </div>
        <div class="card">
          <img src="images/spr.jpg" class="card-img-top" alt="..." height="240">
          <div class="card-body">
            <h5 class="card-title">Superior</h5>
            <p class="card-text">$ 150/Day</p>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col" style="background-color:rgba(240, 240, 240, 0.74);" >Facilities</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1 Single Bed</th>
                  </tr>
                  <tr>
                    <th scope="row">1 Bathroom</th>
                  </tr>
                  <tr>
                    <th scope="row" style="background-color:rgba(240, 240, 240, 0.74);">
                    <a type="button" href="booking.php?typeroom=Superior" class="btn btn-primary btn-sm">Book Now</a></th>
                </tr>
                </tbody>
              </table>
          </div>
        </div>
        <div class="card">
          <img src="images/lxr.jpg" class="card-img-top" alt="..." height="240" >
          <div class="card-body">
            <h5 class="card-title">Luxury</h5>
            <p class="card-text">$ 200/Day</p>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col" style="background-color:rgba(240, 240, 240, 0.74);" >Facilities</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">2 Double Bed</th>
                  </tr>
                  <tr>
                    <th scope="row">2 Bathroom with hot water</th>
                  </tr>
                  <tr>
                    <th scope="row">1 Kitchen</th>
                  </tr>
                  <tr>
                    <th scope="row">1 Television and Wi-Fi</th>
                  </tr>
                  <tr>
                    <th scope="row">1 Workroom</th>
                  </tr>
                  <tr>
                      <th scope="row"style="background-color:rgba(240, 240, 240, 0.74);">
                      <a type="button" href="booking.php" class="btn btn-primary btn-sm">Book Now</a></th>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>
</body>
</html>