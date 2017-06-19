@extends('layouts.app')
@section('content')
@push('scripts')

@endpush

<div class="container-fluid">
	<div class="row">

			  <div class="col-md-4 col-md-offset-4">
			    <div class="input-group">
			    
			      <input type="text" class="form-control" placeholder="Search for...">
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
			<div id="BorrowCard">
				<borrowcard :data="gridData" :columns="gridColumns" :filter-key="searchQuery"></borrowcard>
			</div>
				
			
			</ul>
			<blockquote class="pull-right">
				<p>
				Select the book what you want!
				</p> <small>Keyword <cite>Opensource</cite></small>
			</blockquote>
		</div>

	</div>
</div>

 <script src=" {{mix('/js/manifest.js')}} "></script>
    <script src=" {{mix('/js/vendor.js')}} "></script>
    <script src=" {{mix('/js/app.js')}} "></script>
    <script src=" {{mix('/js/vue.js')}} "></script>
    <script src="http://cdn.jsdelivr.net/vue/1.0.16/vue.js"></script> 
@endsection