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



<script src="{{mix('js/app.js')}}"></script>
<script src="{{mix('js/vue.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{mix('/css/index.css')}}">
<script src="{{mix('/js/index.js')}}" ></script>

<script type="text/javascript">



</script>

@endsection