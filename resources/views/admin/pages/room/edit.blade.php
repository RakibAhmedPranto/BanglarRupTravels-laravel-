@extends('admin.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Room
        </div>
        <div class="card-body">

          <form action="{{ route('admin.room.update', $room->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.partials.messages')
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->title}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea name="discription" rows="8" cols="80" class="form-control">{{ $room->discription }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Price</label>
              <input type="number" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->price}}>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Number of Rooms</label>
              <input type="number" class="form-control" name="numbers_room" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->numbers_room}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Status</label>
              <input type="number" class="form-control" name="status" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->status}}">
            </div>

            <div class="form-group">
        <label for="room_image">Room Image</label>
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

            <button type="submit" class="btn btn-primary">Update Room</button>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection
