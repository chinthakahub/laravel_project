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
    
    <form method = "POST" action = "updateProduct" enctype="multipart/form-data">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <input type="hidden" class="form-control"  value ="{{$item->id}}" name="id">
    </div> 
  </div>
        
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputEmail4">Brand name</label>
      <input type="text" class="form-control"  value ="{{$item->brand}}"  name="brand">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Model</label>
      <input type="text" class="form-control"   value = "{{$item->model}}" name = "model">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Ram</label>
      <input type="text" class="form-control"  value ="{{$item->ram}}" name = "ram">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Memory</label>
      <input type="text" class="form-control"  value = "{{$item->memory}}" name = "memory">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Display (inch) </label>
      <input type="text" class="form-control"  value = "{{$item->display}}" name = "display">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Warranty</label>
      <input type="text" class="form-control"  value = "{{$item->warranty}}" name = "warranty"> 
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Weight (g) </label>
      <input type="text" class="form-control" value = "{{$item->weight}}" name = "weight">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Available more (Qty)</label>
      <input type="text" class="form-control"  value = "{{$item->qty}}" name = "qty">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputPassword4">Price (Rs.) </label>
      <input type="text" class="form-control" value = "{{$item->price}}" name = "price">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4"> Upload file </label>
      <input type="file" class="form-control"  name = "image">
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


