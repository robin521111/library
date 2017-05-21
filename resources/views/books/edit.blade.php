@extends('layouts.app')
@section('content')


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
{{-- <form role='form' method="Post" action=" {{url('books/update')}} ">
	 {!! csrf_field() !!}
>>>>>>> 623a0127e51e853e69176731566f1726b52cb314
<div>

	 <div class="thumbnail">
      <img data-src="holder.js/300x300" alt="...">
      <div class="caption">
        <h3><input type="text" name="book[title]"  class="form-control" value =" {{$book -> title}} ">  </h3>
        <p> <input type="text" name="book[tech_field]" class="form-control" value =" {{$book -> tech_field}} ">  </p>
        <p> <input type="text" name="book[imgs]" class="form-control" value =" {{$book -> imgs}} ">  </p>
        <p><button type="submit" class="btn btn-success">update</button></p>
	</div>
<<<<<<< HEAD
=======

>>>>>>> 623a0127e51e853e69176731566f1726b52cb314
	</div>
   

</div>	
</form> --}}

@stop