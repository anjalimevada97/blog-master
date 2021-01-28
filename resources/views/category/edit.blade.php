@extends('layout')

@section('content')


    <h1>Edit Category</h1>
    <form action="{{ '/category/' . $data['id'] }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="name" name="name" value="{{$data->name}}" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="description" name="description" value="{{$data->description}}" class="form-control" placeholder="Enter Description">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
