@extends('layouts.app')


@section('content')
    <form method="post" action="/posts">
        <input type="text" name="title" placeholder="Enter Title">
        <input type="submit" name="submit">

    </form>


@endsection

@yield('footer')
