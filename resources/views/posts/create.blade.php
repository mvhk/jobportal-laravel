@extends('layouts.app')
@section("content")
    <h2>Create Job</h2>
    {!! Form::open(["action" => "PostController@store"]) !!}
        <div class="form-group">
            {{-- Form::text(name,value,[attributes]) --}}
            {{Form::label("title","Title")}}
            {{Form::text("title",'',['class' => 'form-control','placeholder' => 'Title',"autofocus"])}}
            <br>
            {{Form::label("about","About Job")}}
            {{Form::textarea("about","",["class" => "form-control","placeholder" => "Details about the Job"])}}
            <br>
            {{Form::submit("Submit",["class" => "btn btn-primary"])}}
        </div>
    {!! Form::close() !!}
@endsection