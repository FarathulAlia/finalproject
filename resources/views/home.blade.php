@extends('layouts.template')
@section('main')

<h2 class="text-center">Welcome to Rural Library</h2>

<div id="myCarousel" class="carousel slide mt-3" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('https://sc0.blr1.cdn.digitaloceanspaces.com/article/122512-bqwmmaopyl-1561363484.jpg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('https://literacyinplace.com/wp-content/uploads/2022/03/pexels-photo-256431.jpeg?w=1568')}}" alt="Second slide">
      </div>
      <div class="carousel-item ">
        <img class="d-block w-100" src="{{asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkysYRShLTOU6dFtgZeJ2DaPG7mA0L58lgCQ&s')}}" alt="Third slide">
      </div>
    </div>
    
  </div>

@endsection