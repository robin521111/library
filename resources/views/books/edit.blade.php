@extends('layouts.app')
@section('content')

<div class="container">
{!!Form::model($book,array('route' => array('update', $book->id)))!!}
   <div class="form-group">
       {{ Form::label('book[title]','Book Title:') }}
       {!! Form::text('title',$book->title,['class'=>'form-control']) !!}
   </div>
   <div class="form-group">
       {!! Form::label('tech_field','Book Tech Field:') !!}
       {{{ Form::text('tech_field', $book->tech_field,['class'=>'form-control']) }}}
   </div>
   <div class="form-group">
       {!! Form::label('imgs','Book Image:') !!}
       {{ Form::textarea('imgs',$book->imgs  ,['class'=>'form-control']) }}
   </div>
  <div class="form-group">
       {!! Form::label('introduction','Book intro:') !!}
       {{ Form::textarea('introduction',$book->introduction  ,['class'=>'form-control']) }}
   </div>
     <div class="form-group">
         {!! Form::text('status', $book->status) !!}
   </div>

   <div class="form-group">
       {!! Form::submit('submit',['class'=>'btn btn-success form-control']) !!}
   </div>

{!! Form::close() !!}
  
</div>


@stop