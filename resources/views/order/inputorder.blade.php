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
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/product') }}">Product</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/order') }}">Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/history') }}">History</a>
      </li>
    </ul>
  </div>
</nav><br>
<h1 style="text-align:center;">Order</h1>
<br>
<br>
@foreach( $products as $or)
<div class="card" style="width: 18rem; margin-left:20%;">
  <img src="{{ url('/images/'.$or->img_path) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ ->name }}</h5>
    <p class="card-text">{{ ->description }}</p>
    <h5 class="card-title">${{ ->price }}</h5>
    <a type="submit" class="btn btn-success">Order Now</a>
  </div>
</div>
<br>
@endforeach


</body>
</html>