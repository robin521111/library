@extends('layouts.app')
@section('content')
<el-row :gutter="20" class="tac" id="navigation_panel">
<el-col :span="8">
    <h5>不带 icon</h5>
    <el-menu default-active="2" class="el-menu-vertical-demo" @open="handleOpen" @close="handleClose" theme="dark">
      <el-submenu index="1">
        <template slot="title">导航一</template>
        <el-menu-item-group title="分组一">
          <el-menu-item index="1-1">选项1</el-menu-item>
          <el-menu-item index="1-2">选项2</el-menu-item>
        </el-menu-item-group>
        <el-menu-item-group title="分组2">
          <el-menu-item index="1-3">选项3</el-menu-item>
        </el-menu-item-group>
        <el-submenu index="1-4">
          <template slot="title">选项4</template>
          <el-menu-item index="1-4-1">选项1</el-menu-item>
        </el-submenu>
      </el-submenu>
      <el-menu-item index="2">导航二</el-menu-item>
      <el-menu-item index="3">导航三</el-menu-item>
    </el-menu>
  </el-col>
<el-col :span="16" id="carousel">
	
	<template>
  <el-carousel indicator-position="outside">
    <el-carousel-item v-for="item in 4" :key="item">
     <span class="span5"> <h3>@{{ item }} Blog Banner</h3> </span> 
    </el-carousel-item>
  </el-carousel>
</template>
</el-col>

</el-row>

  <el-row >
		<el-col :span="6">
			<div class="grid-content bg-purple">
{{-- 				<div id="carousel">
					<template>
						<el-carousel indicator-position="outside">
							<el-carousel-item  v-for="item in 4" :key="item" >
							<span class="span5">	<h3>@{{item}}      Blog Banner</h3></span>
						</el-carousel-item>
						</el-carousel>
					</template>
				<p class="lead">
					Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
								lorem quis bibendum auctor,nisi elit consequat ipsum,nec sagittis sem nibh id elit.Duis.

				</p>
				<br/>
				<p class="lead">
								Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
										lorem quis bibendum auctor,nisi elit consequat ipsum,nec sagittis sem nibh id elit.Duis.
										sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec teltus				
				</p>
				</div> --}}
				<div id="tag" class="center-block" >
					<el-tag>标签一</el-tag>
					<el-tag type="gray">标签二</el-tag>
					<el-tag type="primary">标签三</el-tag>
					<el-tag type="success">标签四</el-tag>
					<el-tag type="warning">标签五</el-tag>
					<el-tag type="danger">标签六</el-tag>
				</div>
			</div>
			<div class="container">
				<div id="paging">
					<template>
						<div class="block" >
							<span class="demonstration">调整每页显示条数</span>
							<el-pagination @size-change="handleSizeChange" @current-change="handleCurrentChange" :current-page.sync="currentPage2" :page-sizes="[100, 200, 300, 400]" :page-size="100" layout="sizes, prev, pager, next" :total="1000">
							</el-pagination>
						</div>
					</template>
				</div>
				<div id="rate">
					<el-rate v-model="value3" show-text></el-rate>
				</div>
			</div>
		</el-col >
	</div>
	

</el-row>




<link rel="stylesheet" type="text/css" href="{{mix('css/index.css')}}">
<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
<script src="{{mix('js/app.js')}}"></script>
<script src="{{mix('js/index.js')}}"></script>
<script src="{{mix('js/vue.js')}}"></script>
<script>
	new Vue({
		el:'#navigation_panel',
		methods:{
			handleOpen(key, keyPath) {
				console.log(key, keyPath);
			},
			handleClose(key, keyPath) {
				console.log(key, keyPath);
			}
		}
		
	})

	new Vue({
		el:'#paging',
		methods:{
			handleSizeChange(val) {
				console.log(`每页 ${val} 条`);
			},
			handleCurrentChange(val) {
				console.log(`当前页: ${val}`);
			}
		},
		data:function () {
			return {
				currentPage1: 5,
				currentPage2: 5,
				currentPage3: 5,
				currentPage4: 4
			};
		}
	})

	new Vue({
		el:'#carousel',
	})


	var Main = {
    	data() {
	      return {
	        value3: null
	      }
    }
  }
	var Ctor = Vue.extend(Main)
	new Ctor().$mount('#rate')


 new Vue({
 	el:'#tag',

 })

</script>
@endsection