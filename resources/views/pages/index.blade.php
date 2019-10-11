@extends("layouts.app")
@section("content")
    <div class="jumbotron text-center">
        <h2>{{$title}}</h2>
        <p>{{$Content}}</p>
        <p> <a href="/login" class="btn btn-primary">Login</a> <a href="/signup" class="btn btn-info    ">Register</a></p>
    </div>
@endsection
