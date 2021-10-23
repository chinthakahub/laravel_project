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
      @include('layouts.slider')
            
<a href = "AddNewProduct" class = "btn btn-info mt-2 mb-2"> Add a product </a>

<div>
                @if($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                <div>{{$message}}</div>
                </div>

                @endif
           </div>
           <div>
                @if($message = Session::get('error'))
                <div class="alert alert-danger" role="alert">
                <div>{{$message}}</div>
                </div>

                @endif
           </div>

     
<div class="row mt-5">
@foreach ($itemlist as $key => $item)
<h5 class="mt-4"><b> {{$key}} products </b> </h5>
@foreach ($item as $product)
<div class="col-md-3 mt-3">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{url('storage/images/'.$product->image)}}" alt="Card image cap" style="height: 250px">
  <div class="card-body">
    <h4> </h4>
    <h5 class="card-title">{{$product->model}} {{$product->price}}</h5>
    <p class="card-text">only {{$product->qty}} mobile phones availabe. click for more details</p>
    <a href="showProduct?id={{$product->id}}" class="btn btn-primary">more details</a>
    <a href="editProduct?id={{$product->id}}" class="btn btn-dark">edit</a>
    <a href="deleteProduct?id={{$product->id}}" class="btn btn-danger">delete</a>
    <!-- <a href ="{{route('deleteProduct',['id' => $product->id])}}" onclick = "return confirm('delete entry')" class = "btn btn-danger">Delete </a> -->
  
  </div>
</div>
</div>
@endforeach
@endforeach

</div>

    </div>

    <!-- <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/25.jpg')}}" alt="First">
    </div> -->
<br><br>
    @include('layouts.fotter')
</body>
</html>

@endsection




