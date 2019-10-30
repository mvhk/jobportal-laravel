@extends('layouts.app')
@section("content")
    <h2>Create Job</h2>
    {!! Form::open(["action" => "PostController@store","enctype"=>"multipart/form-data"]) !!}
        <div class="form-group">
            {{-- Form::text(name,value,[attributes]) --}}
            {{Form::label("title","Title")}}
            {{Form::text("title",'',['class' => 'form-control','placeholder' => 'Title',"autofocus"])}}
        </div>
        <div class="form-group">
            {{Form::label("body","About Job")}}
            {{Form::textarea("body","",["id"=>"editor1","class" => "form-control","placeholder" => "Details about the Job"])}}
        </div>
        <div class="form-group">
            {{Form::label("cover_image","Need to Add any Images then ")}}
            <br>
            {{ Form::file("cover_image") }}
        </div>
        <div class="form-group">
            {{Form::submit("Submit",["class" => "btn btn-primary"])}}
        </div>

    {!! Form::close() !!}
@endsection
