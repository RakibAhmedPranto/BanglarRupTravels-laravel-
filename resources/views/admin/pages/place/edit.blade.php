@extends('admin.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit place
        </div>
        <div class="card-body">

          <form action="{{ route('admin.place.update',$catagory->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.partials.messages')
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $catagory->name }}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control">{{ $catagory->description }}</textarea>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Parent</label>
              <input type="text" class="form-control" name="parent_id" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $catagory->parent_name }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Places</button>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection
