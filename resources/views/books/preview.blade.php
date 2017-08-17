@extends('layouts.app')
@section('content')


<div class="row">
@foreach($books as $book)
   <div id="BookCard">
       <bookcard v-bind:books="{{json_encode($books)}}" auth="{{Auth::user()}}"></bookcard>
</div>
@endforeach
    @include('workshops.schedule')
</div>
<script src="{{mix('/js/vue.js')}}"></script>
<script src="{{mix('/js/app.js')}}"></script>

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