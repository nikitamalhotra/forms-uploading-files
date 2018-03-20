@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1>
    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}
        {{csrf_field()}}
        <div class="form-grop">
            {!! Form::label('title', 'Title : ') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-grop">
            {!! Form::label('content', 'Content : ') !!}
            {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-grop">
            {!! Form::submit('Update Post', ['name'=>'submit', 'class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
@yield('footer')




{{--

@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1>

    {!! Form::open(['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}
        {{csrf_field()}}
        <div class="form-grop">
            {!! Form::label('title', 'Title : ') !!}
            {!! Form::text('title', $post->title , ['class'=>'form-control']) !!}
        </div>
        <div class="form-grop">
            {!! Form::label('content', 'Content : ') !!}
            {!! Form::textarea('content', $post->content, ['class'=>'form-control']) !!}
        </div>
        <div class="form-grop">
            {!! Form::submit('Update Post', ['name'=>'submit', 'class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
@yield('footer')

--}}