@extends('admin.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add New Room
        </div>
        <div class="card-body">

          <form action="{{ route('admin.room.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ csrf_field() }}
            @include('admin.partials.messages')
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea name="discription" rows="8" cols="80" class="form-control"></textarea>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Price</label>
              <input type="number" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Number of Rooms</label>
              <input type="number" class="form-control" name="numbers_room" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>


            <div class="form-group">
              <label for="exampleInputEmail1">Select Place</label>
              <select class="form-control" name="catagory_id">
                <option value="">Please select a Place for the Room</option>
                @foreach (App\Catagory::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
                  <option value="{{ $parent->id }}">{{ $parent->name }}</option>

                  @foreach (App\Catagory::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
                    <option value="{{ $child->id }}"> ------> {{ $child->name }}</option>

                  @endforeach

                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Select Hotel</label>
              <select class="form-control" name="hotel_id">
                <option value="">Please select a Hotel for the Room</option>
                @foreach (App\Hotel::orderBy('name', 'asc')->get() as $hotel)
                  <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
        <label for="room_image">Product Image</label>
        <div class="row">
         <div class="col-md-4">
           <input type="file" class="form-control" name="room_image[]" id="room_image" >
         </div>
         <div class="col-md-4">
           <input type="file" class="form-control" name="room_image[]" id="room_image" >
         </div>
         <div class="col-md-4">
           <input type="file" class="form-control" name="room_image[]" id="room_image" >
         </div>
         <div class="col-md-4">
           <input type="file" class="form-control" name="room_image[]" id="room_image" >
         </div>
         <div class="col-md-4">
           <input type="file" class="form-control" name="room_image[]" id="room_image" >
         </div>
       </div>
       </div>

            <button type="submit" class="btn btn-primary">Ad Room</button>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection
