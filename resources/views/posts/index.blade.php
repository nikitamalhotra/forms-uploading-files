@extends('layouts.app')
@section('content')

    <table id="table" class="table table-bordered table-condensed table-hover">
        <thead>
        <tr>
            <th class="col-md-3">Id</th>
            <th class="col-md-1">User Id</th>
            <th class="col-md-1">Title</th>
            <th class="col-md-1">Content</th>
            <th class="col-md-1">Created At</th>
            <th class="col-md-1">Updated At</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{$post->user_id}}</td>
                <td>{{ $post->title }}</td>
                <td>{{$post->content }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{$post->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection