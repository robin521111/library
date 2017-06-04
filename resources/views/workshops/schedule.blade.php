

<div class="row-fluid">
	<div class="span12">
		<table class="table table-striped table-hover table-condensed">
			<thead>
				<tr>
					<th>
						编号
					</th>
					<th>
						Workshop 主题
					</th>
					<th>
						时间
					</th>
					<th>
						技术领域
					</th>
					
				</tr>
			</thead>
			<tbody>

{{-- 			@for($x=0;$x<sizeof($books);$x++)
			<tr class="success">
					<td>
						{{$book['$x']->id}}
					</td>
					<td>
						{{$book->title}}
					</td>
					<td>
						01/04/2012
					</td>
					<td>
						Default
					</td>
				</tr>


			@endfor --}}
			@foreach($books as $book)
			 @if($loop->index%4 ===1)
				<tr class="success" id="">
				@elseif($loop->index%4===2)
				<tr class="error">
				@elseif($loop->index%4 ===3)
				<tr class="info">
				@elseif($loop->index%4===0)
				<tr class="warning">
				@endif

					<td>
						{{$book->id}}
					</td>
					<td>
						{{$book->title}}
					</td>
					<td>
						{{$book->introduction}}
					</td>
					<td>
						{{$book->tech_field}}
					</td>
					<td>
						<div id="Workshop_item">
					  <button type="button" class="btn btn-success" @click="show = !show">
					    Book this workshop
					  </button>
					  <transition
					    v-on:before-enter="beforeEnter"
					    v-on:enter="enter"
					    v-on:leave="leave"
					    v-bind:css="false"
					  >
					    <p v-if="show">
					      Double click for confirm!
					    </p>
					  </transition>
					</div>
										
										</td>
									</tr>
					

				@endforeach
			</tbody>
		</table>
			
		</div>

		
	</div>
	