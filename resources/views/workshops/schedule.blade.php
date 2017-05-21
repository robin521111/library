

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
			<div  class="carousel slide" id="carousel-613857">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-613857">
					</li>
					<li data-slide-to="1" data-target="#carousel-613857" class="active">
					</li>
					<li data-slide-to="2" data-target="#carousel-613857">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<img alt="" src="img/1.jpg" />
						<div class="carousel-caption">
							<h4>
								棒球
							</h4>
							<p>
								棒球运动是一种以棒打球为主要特点，集体性、对抗性很强的球类运动项目，在美国、日本尤为盛行。
							</p>
						</div>
					</div>
					<div class="item active">
						<img alt="" src="img/2.jpg" />
						<div class="carousel-caption">
							<h4>
								冲浪
							</h4>
							<p>
								冲浪是以海浪为动力，利用自身的高超技巧和平衡能力，搏击海浪的一项运动。运动员站立在冲浪板上，或利用腹板、跪板、充气的橡皮垫、划艇、皮艇等驾驭海浪的一项水上运动。
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="img/3.jpg" />
						<div class="carousel-caption">
							<h4>
								自行车
							</h4>
							<p>
								以自行车为工具比赛骑行速度的体育运动。1896年第一届奥林匹克运动会上被列为正式比赛项目。环法赛为最著名的世界自行车锦标赛。
							</p>
						</div>
					</div>
				</div> <a data-slide="prev" href="#carousel-613857" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-613857" class="right carousel-control">›</a>
			</div>
		</div>

		
	</div>
	