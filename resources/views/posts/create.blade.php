@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
    {{--<form method="post" action='{{ route('posts.store') }}'>--}}
    {!! Form::open(['method'=>'post', 'action'=>'PostsController@store']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title : ') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Content : ') !!}
            {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Post', ['name'=>'submit', 'class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
@yield('footer')

