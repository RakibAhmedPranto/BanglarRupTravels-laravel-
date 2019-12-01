@extends('layouts.master')

@section('content')


<div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          <h1>Book Your Room</h1>
        </div>
        <div class="card-body">

          <form action="{{ route('book') }}" method="post" >
            {{ csrf_field() }}
            @include('admin.partials.messages')
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Phone Number</label>
              <input type="text" class="form-control" name="phone_number" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Address</label>
              <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Check in Date</label>
              <input type="text" class="form-control" name="checkin" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Check out Date</label>
              <input type="text" class="form-control" name="checkout" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>





            <div class="form-group">
              <label for="exampleInputEmail1">Select Room</label>
              <select class="form-control" name="room_id">
                <option value="">Please select the Room</option>
                @foreach (App\Room::orderBy('title', 'asc')->get() as $parent)
                  <option value="{{ $parent->id }}">{{ $parent->title }}</option>

                @endforeach
              </select>
            </div>


            <button type="submit" class="btn btn-primary">Confirm Booking</button>
          </form>
        </div>
      </div>

    </div>
  </div>

@endsection
