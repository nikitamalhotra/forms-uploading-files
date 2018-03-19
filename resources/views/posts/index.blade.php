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
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td><a href="{{route('posts.edit', $post->id)}}"><strong>Edit</strong></a></td>
                <td>
                    <!-- <a href="{{route('posts.destroy', $post->id)}}"><strong>Delete</strong></a>  -->
                    <!-- Above Method wont work as it is -->
                        <form method="post" action="{{route('posts.destroy', $post->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="Delete">
                        </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection