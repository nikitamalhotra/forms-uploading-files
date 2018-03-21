@extends('layouts.app')
@section('content')

    <table id="table" class="table table-bordered table-condensed table-hover">
        <thead>
        <tr>
            <th class="col-md-3">Id</th>
            <th class="col-md-1">User Id</th>
            <th class="col-md-1">Title</th>
            <th class="col-md-1">Content</th>
            <th class="col-md-1">Image</th>
            <th class="col-md-1">Created At</th>
            <th class="col-md-1">Updated At</th>
            <th class="col-md-1">Edit</th>
            <th class="col-md-1">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td></td>
                <td><a href="{{route('posts.show', $post->id)}}">{{ $post->title }}</a></td>
                <td>{{ $post->content }}</td>
                <td><img src="{{ $post->path }}" alt="" height="100px"></td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td><a href="{{route('posts.edit', $post->id)}}"><strong>Edit</strong></a></td>
                <td>
                    {!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id]]) !!}
                        {!! Form::submit('Delete', ['class'=> 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection