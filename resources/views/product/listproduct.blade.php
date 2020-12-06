
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
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left:42%;">
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
<h1 style="text-align:center;">List Product</h1>
<br>
<div style="margin-left:10%; margin-right:10%;"> 
<a type="button" href="{{ url('product.inputproduct') }}" class="btn btn-dark">Add Product</a>
<br>
<table class="table" style="width:'600px'">
<br>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col" width="350px">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $no = 1;
  ?>
    <tr>
    @foreach( $products as $prod)
      <th scope="row">{{$no++}}</th>
      <td>{{ $prod->name }}</td>
      <td>{{ $prod->price }}</td>
      <td>
      <form action="{{$products->id">
      <button type="button" class="btn btn-primary">Edit</button>
      </form>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


</div> 
</body>
</html>