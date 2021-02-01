@extends('layout')

@section('content')


    <h1>Edit Post</h1>
    <form action="{{ '/post/' . $data['id'] }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="{{$data->title}}" class="form-control" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" value="{{$data->description}}" class="form-control" placeholder="Enter Description">
        </div>
        <label>select category</label>
        <select name="category_id" >
            @foreach ($category as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>

            @endforeach
        </select><br/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
