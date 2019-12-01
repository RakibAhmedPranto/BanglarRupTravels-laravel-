@extends('admin.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add New Room
        </div>
        <div class="card-body">

          <form action="{{ route('admin.hotel.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.partials.messages')
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Address</label>
              <textarea name="address" rows="8" cols="80" class="form-control"></textarea>

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea name="discription" rows="8" cols="80" class="form-control"></textarea>

            </div>


            <button type="submit" class="btn btn-primary">Ad Hotels</button>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection
