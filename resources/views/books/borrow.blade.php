@extends('layouts.app')
@section('content')
@push('scripts')
 
@endpush

<style type="text/css">
	
	body {
    font-family: Helvetica Neue, Arial, sans-serif;
    font-size: 14px;
    color: #444;
  }

  table {
    border: 2px solid #42b983;
    border-radius: 3px;
    background-color: #fff;
  }

  th {
    background-color: #42b983;
    color: rgba(255,255,255,0.66);
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -user-select: none;
  }

  td {
    background-color: #f9f9f9;
  }

  th, td {
    min-width: 120px;
    padding: 10px 20px;
  }

  th.active {
    color: #fff;
  }

  th.active .arrow {
    opacity: 1;
  }

  .arrow {
    display: inline-block;
    vertical-align: middle;
    width: 0;
    height: 0;
    margin-left: 5px;
    opacity: 0.66;
  }

  .arrow.asc {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-bottom: 4px solid #fff;
  }

  .arrow.dsc {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 4px solid #fff;
  }

  #search {
    margin-bottom: 10px;
  }
</style>
<!-- 组件模版 -->

<script type="text/x-template" id="grid-template">
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
        <th v-for="key in columns" @click="sortBy(key)" :class="{active: sortKey == key}">
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
     <tr v-for="entry in data "> 
       <td v-for="key in columns">
         @{{entry[key] | seqence }}
       </td>
     </tr>
    </tbody>
  </table>
</script>

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
				</p> @{{searchQuery |seqence}}<small>Keyword <cite>Opensource </cite></small>
			</blockquote>
		</div>

	</div>
</div>
  <demo-grid :data="gridData" :columns="gridColumns" :filter-key="searchQuery"></demo-grid>

</div>
<div id="img">
  
</div>
<!-- 演示根元素 -->
    <script src=" {{mix('/js/chart.js')}} "></script>
    <script src=" {{mix('/js/app.js')}} "></script>
   <script type="text/javascript">
   </script>
@endsection