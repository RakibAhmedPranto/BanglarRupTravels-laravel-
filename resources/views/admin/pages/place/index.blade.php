@extends('admin.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add New Place
        </div>
        <div class="card-body">
          <table class="table table-hover table-striped">
            <tr>
              <th>#</th>
              <th>Place Name</th>
              <th>Description</th>
              <th>Parent Place</th>
              <th>Action</th>
            </tr>
            @foreach ($catagorys as $catagory)
            <tr>
              <td>#</td>
              <td>{{ $catagory->name }}</td>
              <td>{{ $catagory->description }}</td>
              <td>{{ $catagory->parent_id }}</td>
              <td><a href="{{ route('admin.place.edit', $catagory->id) }}" class="btn btn-success">Edit</a>
              <a href="#deleteModal{{ $catagory->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>
              <div class="modal fade" id="deleteModal{{ $catagory->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{!! route('admin.place.delete', $catagory->id) !!}"  method="post">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Permanent Delete</button>
                      </form>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            </tr>
            @endforeach
          </table>


        </div>
      </div>

    </div>
  </div>
@endsection
