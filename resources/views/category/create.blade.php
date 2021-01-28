@extends('layout')

@section('content')
<h1>Create Categoery</h1>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name"  class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control" placeholder="Enter Description">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
