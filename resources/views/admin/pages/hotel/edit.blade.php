@extends('admin.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit place
        </div>
        <div class="card-body">

          <form action="{{ route('admin.hotel.update',$hotel->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.partials.messages')
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $hotel->name }}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea name="discription" rows="8" cols="80" class="form-control">{{ $hotel->discription }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Address</label>
              <textarea name="address" rows="8" cols="80" class="form-control">{{ $hotel->address }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update hotel</button>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection
