@extends("layouts.app")
@section('content')
    <h2>Jobs</h2>
    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
            <h5><a href="/posts/{{$post->id}}"> {{$post->title}} </a></h5>
            <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach

    {{$posts->links()}}
    @else
        <p>No posts</p>
    @endif
@endsection
