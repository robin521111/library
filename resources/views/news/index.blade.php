@extends('layouts.app')
@section('content')
<div id="container">
	<el-row :gutter="20">
		<div id="navigation_panel">
			<el-col :span="3">
				<el-menu default-active="2" class="el-menu-vertical-demo" @open="handleOpen" @close="handleClose">
					<el-submenu index="1">
						<template slot="title"><i class="el-icon-message"></i>导航一</template>
						<el-menu-item-group>
							<template slot="title">分组一</template>
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
					<el-menu-item index="2"><i class="el-icon-menu"></i>导航二</el-menu-item>
					<el-menu-item index="3"><i class="el-icon-setting"></i>导航三</el-menu-item>
				</el-menu>
			</el-col>
			<el-col :span="8">

			</el-col>
		</div>
	</div>
	<el-col :span="18">
		<div class="container">
			<div id="carousel">
				<template>
					<el-carousel indicator-position="outside">
						<el-carousel-item  v-for="item in 4" :key="item" >
							<span class="span5">	<h3>@{{item}}      Blog Banner</h3></span>
						</el-carousel-item>
					</el-carousel>
				</template>
			</div>
		</div>
		
	</el-col >
</el-row>
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
</div>


<div id="notification">
	
	<template>
		<el-button
		plain
		@click="open7">
		偏移的消息
	</el-button>
</template>
</div>


</div>

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

	new Vue({
		el:'#notification',
		methods:{
		open7:function (){
			this.$notify.success({
				title: '成功',
				message: '这是一条成功的提示消息',
				offset: 100
			});
			}
		}
	});
</script>
@endsection