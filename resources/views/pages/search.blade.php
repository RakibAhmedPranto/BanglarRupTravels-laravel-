@extends('layouts.master')

<!-- Start Sidebar + Content -->

@section('content')
<div class='container margin-top-20'>
  <div class="row">
    <div class="col-md-4">
        @include('partials.sidebar')
    </div>


    <div class="col-md-8">
            <div class="widget">
              <h3>searched Rooms for - <span class="badge badge-primary">{{ $search }}</span></h3>
              <div class="row">

                @foreach ($rooms as $room)
                    <div class="col-md-4">
                      <div class="card">
                      @php $i = 1; @endphp

                      @foreach($room->images as $image)
                      @if($i > 0)
                        <a href="{!! route('rooms.show',$room->slug) !!}">
                          <img class="card-img-top feature-img" src="{{ asset('images/hotels/'. $image->image) }}" alt="{{ $room->title }}" >
                        </a>
                        @endif
                        @php $i--; @endphp
                      @endforeach


                        <div class="card-body">
                          <h4 class="card-title">
                            <a href="{!! route('rooms.show',$room->slug) !!}"> {{$room->title}} </a>
                          </h4>
                          <p class="card-text">Taka -{{$room->price}}</p>
                          <a href="#" class="btn btn-outline-warning">DETAILS</a>
                        </div>
                      </div>
                    </div>
                @endforeach


              </div>
            </div>
            <div class="mt-4 pagination">
              {{ $rooms->links() }}
            </div>

          </div>
  </div>
  </div>

@endsection
