@extends('layout')
@section('content')
    <h1>Post List</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Category_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td><a href="/post/{{$item->id}}/edit"><i class="fa fa-edit"></i></a>
                    <td><a href="/post/{{$item->id}}"><i class="fa fa-trash"></i></a></td>
                </tr>

            @endforeach
        </tbody>
    </table>
@endsection
