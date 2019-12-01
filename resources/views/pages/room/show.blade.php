@extends('layouts.master')

<!-- Start Sidebar + Content -->

@section('content')

<style>

.example4 {
width: 100%;
height: 250px;
}

</style>


<div class='container margin-top-20'>
  <div class="row">
    <div class="col-md-4">


              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @php
              $i=1;
            @endphp
            @foreach($room->images as $image)
            <div class="carousel-item {{ $i==1 ? 'active':''}}">
              <img class="example4" src="{!! asset('images/hotels/'.$image->image) !!}" alt="First slide">
            </div>
            @php
              $i++;
            @endphp
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="mt-3">
          <p>Place <span class="badge badge-info">{{ $room->catagory->name }}</span></p>
          <p>Hotel <span class="badge badge-info">{{ $room->hotel->name }}</span></p>
        </div>



    </div>


    <div class="col-md-8">
            <div class="widget">
              <h3>{{ $room->title }}
                <span class="badge badge-primary">
                  {{$room->status == 0 ? 'Room Available':'Room Not Available'}}
                </span>
              </h3>
              <h3>PRICE: {{ $room->price }} BDT</h3>
              <h3>Number of Rooms:{{ $room->numbers_room }}</h3>
              <hr>
              <p>{{ $room->discription}}</p>
            </div>


          </div>
  </div>
  </div>

@endsection
