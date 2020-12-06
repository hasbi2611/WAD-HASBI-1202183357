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
          form{
            padding-top: 40px;
              width: 400px;
          }
           
           .col{
               padding-top: 20px;
               
               
           }
           .col2{
             padding-top: 60px;
             
           }

    </style>
</head>
<body>
     <div class="bars">
        <a class="a" href="home.php" style="color: black;">Home</a>
        <a class="a" href="booking.php"style="color: black;">Booking</a>
    </div>
        <div class="container">
            <div class="row">
              <div class="col">
    
                <form action="mybooking.php" method="GET">
                    <div class="form-group">
                      <label for="formGroupExampleInput">Name</label>
                      <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Check-in</label><br>
                      <input type="date" name="date" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Duration</label>
                      <input type="text" name="duration" class="form-control" id="formGroupExampleInput" placeholder="">
                      <small id="passwordHelpBlock" class="form-text text-muted">Day(s)</small>
                    </div>
                    <label for="formGroupExampleInput2">Room Type</label>
                    <select class="form-control" name="typeroom">
                      <?php 
                      $typee = $_POST['typeroom'];
                      if($typee == 'Standard'){
                        echo        '<select class="form-control" name="type" selected disabled>
                                    <option>Standard</option>
                                    <input type = "hidden" name="type" value="Standard">
                                    </select>';
                      } 
                      ?>
                        <option value="Standard" name="Standard">Standard</option>
                        <option value="Superior" name="Superior">Superior</option>
                        <option value="Luxury" name="Luxury">Luxury</option>
                      </select><p></p>
                      <label for="formGroupExampleInput2">Add Service(s)</label>
                      <small id="passwordHelpBlock" class="form-text text-muted">$20/Service(s)</small>
                      <div class="form-check">
                        <input class="form-check-input" name="check1" type="checkbox" value="RoomService" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          Room Service
                        </label> 
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="check2" type="checkbox" value="Breakfast" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                          Breakfast
                        </label>
                      </div><p></p>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Phone Number</label>
                        <input type="text" name="numbphone"class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <p>
                        <button type="reset" name="submit" id="btn1" class="btn btn-primary btn-sm" style="width: 400px;">Book</button>
                    </p>
                        
                </form>
              </div>


              <div class="col2">
                  <div class="row">
                      <img src="images/spr.jpg" class="card" alt="..." height="420" width="480">
              </div>
            
     </div>
        
     
   </div>
   </div>


</body>
</html>