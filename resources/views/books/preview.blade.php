@extends('layouts.app')
@section('content')
@push('scripts')
<script type="text/javascript" src="../../assets/js/app.js"></script>
@endpush
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.5/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
<div class="row">
@foreach($books as $book)
  {{-- <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img data-src="holder.js/300x300" alt="...">
      <div class="caption">
   --}}     <div id="BookCard">

       <bookcard :books={{ json_encode($books)}} auth="Auth::user()"></bookcard>
       </div>


{{--         <h3> {{$book->title}} </h3>

        <p> <span class="label label-primary"> {{$book->tech_field}} </span></p>     
   <p><button type="button" class="btn btn-success">Purchase</button></p>--}}
{{-- @if (Auth::user())
        <p><a href=" {{action('BookController@edit',['id'=>$book->id]) }} " class="btn btn-info" role="button">Edit</a>
<a href=" {{action('BookController@delete',['id'=>$book->id]) }} " class="btn btn-info" role="button">Delete</a>
        </p>
@endif --}}
      </div>
       
    </div>
  </div> 
@endforeach
</div>
</div>

<div>
	@include('workshops.schedule')
</div>
<script type="text/javascript">
new Vue({
  el: '#Workshop_item',
  data: {
    show: false
  },
  methods: {
    beforeEnter: function (el) {
      el.style.opacity = 0
      el.style.transformOrigin = 'left'
    },
    enter: function (el, done) {
      Velocity(el, { opacity: 1, fontSize: '1.4em' }, { duration: 300 })
      Velocity(el, { fontSize: '1em' }, { complete: done })
    },
    leave: function (el, done) {
      Velocity(el, { translateX: '15px', rotateZ: '50deg' }, { duration: 600 })
      Velocity(el, { rotateZ: '100deg' }, { loop: 2 })
      Velocity(el, {
        rotateZ: '45deg',
        translateY: '30px',
        translateX: '30px',
        opacity: 0
      }, { complete: done })
    }
  }
})

</script>
@endsection