@extends('layouts.app')
@section('content')
@push('scripts')
 
@endpush

<div id="bookborrow">

<div class="container-fluid">
	<div class="row">
			  <div class="col-md-4 col-md-offset-4">
			    <div class="input-group">
			      <input type="text" name="query" v-model="searchQuery" class="form-control" placeholder="Search for...">

			        <span class="input-group-btn">
			        <button class="btn btn-default" type="button">Go!</button>
			      </span>
			    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
 	<div class="row">
	  <br>
		<div class="span10">
			<ul class="thumbnails">
			<div id="demo">
			</div>
			
			</ul>
			<blockquote class="pull-right">
				<p>
				Select the book what you want!
			</blockquote>
		</div>

	</div>
</div>

</div>
<div id="img">
  
</div>
<!-- 演示根元素 -->
    <script src=" {{mix('/js/app.js')}} "></script>
    <script src=" {{mix('/js/chart.js')}} "></script>
   <script type="text/javascript">
   </script>
@endsection