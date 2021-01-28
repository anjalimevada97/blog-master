@extends('layout')

@section('content')
<h1>Post Categoery</h1>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title"  class="form-control" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control" placeholder="Enter Description">
        </div>
        <label>select category</label>
        <select name="category_id" >
            @foreach ($data as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>

            @endforeach
        </select><br/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
