@extends('layouts.app')
@section('content')
<script type="text/x-template" id="canvasChart">
	<div id="container">
		<slot></slot>
		<table>
			<thead>
				<tr>
					<!-- 指令(Directives)是特殊的带有前缀 v- 的特性.-->
					<!-- 指令的值限定为绑定表达式.因此JavaScript表达式及过滤器规则在这里也适用.-->
					<!-- 指令的职责就是当其表达式的值改变时把某些特殊的行为应用到DOM上.-->
					<!-- v-for用于渲染列表-->
					<!-- v-on的缩写用@表示,它用于监听DOM事件-->
					<!-- v-bind的缩写用:表示,v-bind指令用于响应地更新HTML特性,v-bind:class的缩写是:class,sortKey == key表达式为True时class=active-->
					<!-- 用管道符 | 来表示过滤器,capitalize表示首字母大写-->
					<th v-for="key in columns"  :class="{active: sortKey == key}">
						@{{key}}
						<span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'"></span>
						<!-- 这里用到js的判断表达式操作,sortOrders[key] > 0为真,class=asc,反之class=dsc-->
						<!-- v-bind:class 指令可以与普通的 class 特性共存 -->
					</th>
				</tr>
			</thead>
			<tbody>
				<!-- filterBy 返回过滤后的数组,第一个参数可以是字符串或函数,filterBy filterKey 输出满足条件的结果-->
				<!-- orderBy sortKey为关键字 sortOrders[sortKey]升序或者降序 -->
				<tr v-for="entry in filterI">
					<td v-for="key in columns">@{{entry[key]}}</td><!--单元格-->
				</tr>
			</tbody>
		</table>
	</div>
</script>


</script>
<div class="content">
		<div id="about" class="about">
			<div class="container">
				<div class="header-section text-center">

					<h2><span> </span>ABOUT<span> </span></h2>
				</div>
				<span><p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
					lorem quis bibendum auctor,nisi elit consequat ipsum,nec sagittis sem nibh id elit.Duis.</p></span>
					<div class="years">	 
						<h4><b>2009</b></h4>
						<span><h4>Project Manager Web Center</h4></span>
						<p><i>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
							lorem quis bibendum auctor,nisi elit consequat ipsum,nec sagittis sem nibh id elit.Duis.</i></p>
						</div> 

						<div class="years">	 		
							<h4><b>2012</b></h4>
							<span><h4>Manager Delta Coders</h4></span>
							<p><i>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
								lorem quis bibendum auctor,nisi elit consequat ipsum,nec sagittis sem nibh id elit.Duis.</i></p>
							</div> 

							<div class="years">	 	
								<h4><b>2013</b></h4>
								<span><h4>Owner Alternative Labs</h4></span>
								<div class="labs">
									<p><i>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
										lorem quis bibendum auctor,nisi elit consequat ipsum,nec sagittis sem nibh id elit.Duis.
										sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec teltus</i></p>
									</div>
								</div>
								<a class="arrow scroll" href="#skills"><span> </span></a>
							</div>
						</div>

						<div id="skills" class="skills">
							<div class="container">
								<div class="skills-grids">
									<div class="skill-section text-center">
										<h2><span> </span>SKILLS<span> </span></h2>
									</div>
									<div class="services_grids">
										<div id="canvas">
											<div class="skill-grids text-center">
												<div class="col-md-3">	
													<div class="skill-grid">
														<div class="circle" id="circles-1"></div>									
														<h3>MySql</h3>	
													</div>								  
												</div>
												<div class="col-md-3">	
													<div class="skill-grid">
														<div class="circle" id="circles-2"></div>									
														<h3>AJAX</h3>	
													</div>								  
												</div>
												<div class="col-md-3">	
													<div class="skill-grid">
														<div class="circle" id="circles-3"></div>									
														<h3>PHP</h3>	
													</div>								  
												</div>
												<div class="col-md-3">	
													<div class="skill-grid">
														<div class="circle" id="circles-4"></div>									
														<h3>JAVASCRIPT</h3>	
													</div>								  
												</div>
												<div class="clearfix"> </div>
											</div>
										</div>
									</div>
									<!---->

									<!--/-->
								</div>
							</div>
							<a class="down scroll" href="#port"><span> </span></a>
						</div>
					</div>
					<div id="port" class="Portfolio">
						<div class="Portfolio-section text-center">
							<h2><span> </span>PORTFOLIO<span> </span></h2>
						</div>
						<div class="container">
							<div class="portfolio-grids">
								<div class="portfolio-grid col-md-4">
									<a href="#"><img src="../../../imgs/monitr1.png"></a>
									<p>Proin gravida nibh vel velit auctor aliquet.
										Aenean sollicitudin, lorem quis bibendum</p>
										<a class="rightarrow" href="#"><span> </span></a>
									</div>
									<div class="portfolio-grid col-md-4">
										<a href="#"><img src="../../../imgs/monitr2.png"></a>
										<p>Proin gravida nibh vel velit auctor aliquet.
											Aenean sollicitudin, lorem quis bibendum</p>
											<a class="rightarrow" href="#"><span> </span></a>
										</div>
										<div class="portfolio-grid col-md-4">
											<a href="#"><img src="../../imgs/monitr3.png"></a>
											<p>Proin gravida nibh vel velit auctor aliquet.
												Aenean sollicitudin, lorem quis bibendum</p>
												<a class="rightarrow" href="#"><span> </span></a>
											</div>
											<div class="clear"> </div>
										</div>
										<a class="portdown scroll" href="#contact"><span> </span></a>

									</div>
								</div>
							</div>
							<div  id="contact" class="footer">
								<div class="container">

									<div class="contact-section text-center">
										<h2><span> </span>CONTACT<span> </span></h2>
									</div>
									<div class="row">

										<div class="col-md-6">
											<div class="footer-left">
												<div class="social-icons">
													<a href="#"><img src="../../imgs/in.png"></a>
													<a href="#"><img src="../../imgs/twt.png"></a>
													<a href="#"><img src="../../imgs/fb.png"></a>
												</div>
												<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
													quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh
													id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
													Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
													ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
												</div>
											</div>

											<div class="col-md-6">
												<div class="footer-right">
													<div class="form">
														<form>
															<input type="text" class="text" value="Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}">
															<input type="text" class="text" value="E-mail" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'E-mail';}">
															<textarea rows="2" cols="70" onFocus="if(this.value == 'Your Message') this.value='';" onBlur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
															<div class="clear"> </div>
															<input type="submit" value="SEND"> 
														</form>
													</div>
												</div>
												<div class="clear"></div>
												<p class="copy-right">Copyright &copy; 2014.Company name All rights reserved.</p>
											</div>
										</div>
									</div>
									<a class="up scroll" href="#top-top"><span> </span></a>

								</div>


								<!-- 演示根元素 -->
								
<style type="text/css">


</style>

<div class="container">

	<div id="filterTest">
		<div class="container">
			<div class="row">
				<canvas-component :canvas-data=keywords :columns=gridColumns :filter-key=searchQuery>
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="input-group">
								<input type="text" class="form-control" v-model="searchQuery"  placeholder="Search for...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">Go!</button>
								</div>
							</span>
						</div><!-- /input-group -->
					</div>

				</canvas-component>
				
			</div>

		</div>
		
	</div>

@foreach($bookModel as $book)
{{$book}}
@endforeach
	
	<div class="row">
		<br>
		<div class="span10">
			<ul class="thumbnails">
			</ul>
			<blockquote class="pull-right">
				<p>
					Select the book what you want!
				</p> <small>Keyword <cite>Opensource</cite></small>
			</blockquote>
		</div>
	</div>

	
</div>

<script src="{{mix('js/app.js')}}"></script>
<script src="{{mix('js/vue.js')}}"></script>
<script src="{{mix('js/canvasChat.js')}}" ></script>
<script src=" {{mix('/js/app.js')}} "></script>
<script src=" {{mix('/js/chart.js')}} "></script>
<script src=" {{mix('/js/circles.js')}} "></script>
<link rel="stylesheet" type="text/css" href="../../../css/all.css">
<script>
	var colors = [
	['#181115', '#30222A'], ['#181115', '#30222A'], ['#181115', '#30222A'], ['#181115', '#30222A']
	];
	for (var i = 1; i <= 5; i++) {
		var child = document.getElementById('circles-' + i),
		percentage = 50 + (i * 10);

		Circles.create({
			id:         child.id,
			percentage: percentage,
			radius:     80,
			width:      15,
			number:   	percentage / 10,
			text:       '%',
			colors:     colors[i - 1]
		});
	}


new Vue({
  el:'#filterTest',
  data:{
    'keywords':[{"id":"9","name":"missy","phone":"21324234532"},   
    {"id":"3","name":"Mahama","phone":"345604542"},
    {"id":"2","name":"Bernard","phone":"241242542"}],

    canvasData:{"空间":34,"微博":30,"指导":29,"小明":28 , "图书馆": 27 , "PHP":26 , "项目" :25 ,"健康":24 , "JS" :23 ,'html' :22,'各镇': 22 ,'勋章' :21 ,'信息':20,'开发':19 , '设计':18 , '开幕式' :17 , '浏览器' :16 ,'身份':15,'图片': 14 , '中国' :13 , '伟大' :12 ,'地方':11 ,'噩梦' :10 ,'回复' :9 ,'空间' :8 , '请问' : 7 , '类库' : 6 , '激活' : 5 ,'规范' :4 ,'微软' :3 , '分割': 2 , '不错' :1 , '多个' :1, '斯蒂芬' :1, '分割' :1, '回过头' :1, '慈悲' :1, 'svg' :1, '三个' :1, '十多个' :1, '语句' :1, '写错' :1, '别冲动' :1, '请问' :1, '细长的' :1, '风光' :1, '梵蒂冈' :1, '成办' :1, '这些' :1, '是的' :1, '风格化' :1, '儿童歌' :1, '所得税' :1, '阿斯顿' :1, '斯蒂芬' :1, '电饭锅' :1, '很规范' :1, '车秩序' :1, '上网' :1, '过负荷' :1, '放到' :1, '电饭锅' :1, '东方红' :1, '风格化' :1, '请问' :1, '人头' :1, '让他' :1, '分隔' :1, '大概' :1, '福利' :1, '激活' :1, '断食' :1, '风格' :1, '瓦尔特' :1, '对方' :1,  '请问' :1, '而' :1, '人头' :1, '统一' :1, '一份' :1, '放到' :1, '放到' :1, '放到' :1, '放到' :1, '上网' :1, '我是' :1, '的' :1, '耳朵' :1, '发热' :1, '乳房' :1, '跟他' :1, '通过' :1, '还好用' :1, '雅黑' :1, '聚聚' :1, '看过' :1, '似的' :1, '独' :1, '明年' :1, '手头紧' :1, '换个' :1, '数据' :1, '导入' :1, '回归' :1},
    gridColumns:['id','name','phone'],
    searchQuery:''
  },
});
</script>

@endsection
