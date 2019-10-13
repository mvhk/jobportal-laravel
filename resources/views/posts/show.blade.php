@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-default btn-sm">Go Back</a>
    <h2>{{$post->title}}</h2>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Posted on  {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning btn-sm">Edit Job Details</a>

    {!!Form::open(["action"=>["PostController@destroy",$post->id],"class"=>"float-right"])!!}
        {{Form::hidden("_method","DELETE")}}
        {{Form::submit("Delete",["class"=>"btn btn-danger"])}}
    {!!Form::close()!!}
@endsection
