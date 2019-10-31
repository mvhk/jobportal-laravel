@extends('layouts.app')
@section("content")
<h2>Edit Job</h2>
{!! Form::open(["action" => ["PostController@update",$post->id],"method"=>"POST"]) !!}
<div class="form-group">
    {{Form::label("title","Title")}}
    {{Form::text("title",$post->title,['class' => 'form-control','placeholder' => 'Title',"autofocus"])}}
    <br>
    {{Form::label("body","About Job")}}
    {{Form::textarea("body",$post->body,["id"=>"editor1","class" => "form-control","placeholder" => "Details about the Job"])}}
    <br>
    {{Form::hidden("_method","PUT")}}
    {{Form::submit("Submit",["class" => "btn btn-primary"])}}
</div>
{!! Form::close() !!}
@endsection
