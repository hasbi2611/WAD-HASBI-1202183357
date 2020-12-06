<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="text-align:center; padding-left:42%;">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/') }}">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/product') }}">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/order') }}">Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/history') }}">History</a>
      </li>
    </ul>
  </div>
</nav><br>
<h1 style="text-align:center;">Input Product</h1>
<div style="margin-left:25%;"> 

<form action="{{ url('products') }}" method="POST">
@csrf
<div class="form-row">
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Product name</label>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="" required>
    </div>
  </div>
  <div class="form-row">
  <div class="col-md-6 mb-3">
  <label for="validatedInputGroupPrepend">Price</label>
    <div class="input-group ">
    
      <div class="input-group-prepend">
        <span class="input-group-text" id="validatedInputGroupPrepend">$USD</span>
      </div>
      <input type="text" name="price" class="form-control " aria-describedby="validatedInputGroupPrepend" >
    </div>
  </div>
   
  </div>
    <div class="form-row">
    <div class="col-md-6 mb-3">
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Stock</label>
      <input type="text" class="form-control" name="stock" id="validationCustom01" value="" >
    </div>
  </div> 
  <label for="myfile">Image file input:</label>
  <div class="col-md-4 mb-3">
    <input type="file" id="myfile" name="file">
  </div>

  <button class="btn btn-secondary" type="submit">Submit</button>
 </form>
</div>



</body>
</html>