@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create New Job</a>
                    <hr>
                    @if (count($posts) > 0)
                        <h3>Your Jobs</h3>
                        <table class="table table-striped">

                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning btn-sm">Edit Job</a></td>
                                <td>
                                    {!!Form::open(["action"=>["PostController@destroy",$post->id],"class"=>"float-right"])!!}
                                        {{Form::hidden("_method","DELETE")}}
                                        {{Form::submit("Delete",["class"=>"btn btn-danger"])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    @else
                        <p>You didn't Post any Jobs</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
