@extends('layouts.app')


@section('content')
    <form method="post" action="‌{{ route('posts.store') }}">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Enter Title"><br>
        <textarea name="content" id="content" cols="30" rows="8"></textarea><br>

        <input type="submit" name="submit">

    </form>


@endsection

@yield('footer')

