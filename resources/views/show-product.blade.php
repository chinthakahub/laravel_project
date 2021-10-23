@extends('layouts.frontnavbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>
<body>

    <div class="container">

    
            <div class="carousel-item active">
            <table class="table col-md-6">
      <thead class="thead-dark">
        <tr>
         <th>Featurers</th>
         <th>Description</th>
       </tr>
  </thead>

  <tbody>
    <tr>   
      <td><b>Brand</td>
      <td>{{$item->brand}}</td>
    </tr>

    <tr>   
      <td><b>Model</td>
      <td>{{$item->model}}</td>
    </tr>

    <tr>
      <td><b>Ram</td>
      <td>{{$item->ram}}</td>
    </tr>

    <tr>   
      <td><b>Memory</td>
      <td>{{$item->memory}}</td>
    </tr>

    <tr>
      <td><b>Display</td>
      <td>{{$item->display}}</td>
    </tr>

    <tr>   
      <td><b>Warranty</td>
      <td>{{$item->warranty}}</td>
    </tr>

    <tr>
      <td><b>Weight</td>
      <td>{{$item->weight}}</td>
    </tr>

    <tr>   
      <td><b>Available more (Qty)</td>
      <td>{{$item->qty}}</td>
    </tr>

    <tr>   
      <td><b>Price</td>
      <td>{{$item->price}}</td>
    </tr>
    
  </tbody>
</table>

           </div> 
  <div class="row">
    <div class="col">
    </div>
    <div class="col"> <img class="d-block" src="{{url('storage/images/'.$item->image)}}" width = "600" height = "600" alt="First"></div>
    <div class="w-100"></div>
  </div>
    </div>

    <br><br>
    @include('layouts.fotter')
</body>
</html>

@endsection