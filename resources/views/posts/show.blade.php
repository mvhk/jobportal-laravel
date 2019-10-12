@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default btn-sm">Go Back</a>
<h2>{{$post->title}}</h2>
<div>
    {{$post->body}}
</div>
<hr>
<small>Posted on  {{$post->created_at}}</small>

@endsection