@extends('layouts.frontnavbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
</head>
<body>
    <div class="container">

    <form method = "POST" action = "saveProduct" enctype="multipart/form-data">
        @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Brand</label>
<select name = "brand" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="Apple">Apple</option>
  <option value="Samsung">Samsung</option>
  <option value="Redmi">Redmi</option>
</select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Model</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="model" name = "model">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Ram</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="ram" name = "ram">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Memory</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="memory" name = "memory">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Display (inch) </label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="display" name = "display">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Warranty</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="warranty" name = "warranty"> 
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Weight (g) </label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="weight" name = "weight">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Available more (Qty)</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="qty" name = "qty">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputPassword4">Price (Rs.) </label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="price" name = "price">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4"> Upload file </label>
      <input type="file" class="form-control" id="inputEmail4" name = "image">
    </div>
   
  </div>

  <div class="form-group row">
<button type="submit" class="btn btn-primary">Upload</button>
</form>
            
    <form>

 
  
 
</form>
             
    </div>
    <br><br>
    @include('layouts.fotter')
</body>
</html>

@endsection


