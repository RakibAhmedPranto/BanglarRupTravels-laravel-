@extends('admin.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add New place
        </div>
        <div class="card-body">

          <form action="{{ route('admin.place.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.partials.messages')
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control"></textarea>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Parent</label>
              <input type="text" class="form-control" name="parent_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <button type="submit" class="btn btn-primary">Ad Places</button>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection
