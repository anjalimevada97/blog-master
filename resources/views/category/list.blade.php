@extends('layout')
@section('content')
<h1>Category List</h1>

<form action="/category" method="GET"> 
    @csrf
    <label>Select Date:</label>
    <input type="date" id="start_date" name="start_date">
    <input type="date" id="end_date" name="end_date">

    <label>select category</label>
    <select name="category" id="category">

        @foreach ($data as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach

    </select>
    <input type="submit" value="Filtter">
</form>

<a href="/category/create" class="btn btn-primary float-right">Category Create</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Operation</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td><a href="/category/{{$item->id}}/edit"><i class="fa fa-edit"></i></a></td>
            <form action="category/{{$item->id}}" method="POST">
                @csrf
                @method('DELETE')
                <td><button type="submit"><i class="fa fa-trash"></i></td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection