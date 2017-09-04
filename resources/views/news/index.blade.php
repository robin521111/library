@extends('layouts.app')
@section('content')
<div id="container">
<el-row>
  <el-col :span="24"><div class="grid-content bg-purple-dark"> <span class="el-icon-caret-right"></span></div></el-col>
</el-row>
<el-row>
  <el-col :span="12"><div class="grid-content bg-purple">


<div id="navigation_panel">
<el-row class="tac">
  <el-col :span="8">
    <h5>带 icon</h5>
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
</el-row>
</div>

  </div></el-col>
  <el-col :span="4"><div class="grid-content bg-purple-light">this is another test</div></el-col>
</el-row>
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
</script>
@endsection