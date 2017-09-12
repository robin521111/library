@extends('layouts.app')
@section('content')

<div class="row">
  @foreach($books as $book)
  <el-row :gutter="20">
    <el-col :span="4"><div class="grid-content ">
     <div id="BookCard">
       <bookcard v-bind:books="{{json_encode($books)}}" auth="{{Auth::user()}}"></bookcard>
     </div> 
   </div></el-col>
 </el-row>
 @endforeach
 <div class="container">
  @include('workshops.schedule')
</div>
<<<<<<< HEAD

=======
<<<<<<< HEAD

<script src="{{mix('js/vue.js')}}"></script>
<script src="{{mix('js/app.js')}}"></script>

<script src="{{mix('/js/vue.js')}}" ></script>
=======
>>>>>>> dd55add1161e886ed8c764a32aed434940fd44dd
<link rel="stylesheet" type="text/css" href="{{mix('/css/index.css')}}">
>>>>>>> 1a86cb642f1a526e7135eef3ee33fa2c126d8b19
<script src="{{mix('/js/app.js')}}" ></script>
<script src="{{mix('/js/vue.js')}}" ></script>
<script src="{{mix('/js/index.js')}}" ></script>

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