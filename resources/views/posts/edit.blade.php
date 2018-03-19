@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1>
    <form action='{{route('posts.update', $post->id)}}' method="post"> <!-- It will go to posts.update -->
            <!-- /posts/{{$post->id}} -->
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT"><!-- Sending PUT/PATCH in hard coded way -in our case 'put' request-->
        <input type="text"   name="title" value="{{$post->title}}" placeholder="Enter Title"><br/>
        <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
        <input type="submit" name="submit">
    </form>
@endsection
@yield('footer')