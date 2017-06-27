<template >
<div class="container">
  <table>
    <thead>
      <tr>
        <!-- 指令(Directives)是特殊的带有前缀 v- 的特性.
        <!-- 指令的值限定为绑定表达式.因此JavaScript表达式及过滤器规则在这里也适用.-->
        <!-- 指令的职责就是当其表达式的值改变时把某些特殊的行为应用到DOM上.-->
        <!-- v-for用于渲染列表-->
        <!-- v-on的缩写用@表示,它用于监听DOM事件-->
        <!-- v-bind的缩写用:表示,v-bind指令用于响应地更新HTML特性,v-bind:class的缩写是:class,sortKey == key表达式为True时class=active-->
        <!-- 用管道符 | 来表示过滤器,capitalize表示首字母大写-->
        <th v-for="key in columns" @click="sortBy(key)" :class="{active: sortKey == key}">
          {{key | capitalize}}
          <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'"></span>
          <!-- 这里用到js的判断表达式操作,sortOrders[key] > 0为真,class=asc,反之class=dsc-->
          <!-- v-bind:class 指令可以与普通的 class 特性共存 -->
        </th>
      </tr>
    </thead>
    <tbody>
      <!-- filterBy 返回过滤后的数组,第一个参数可以是字符串或函数,filterBy filterKey 输出满足条件的结果-->
      <!-- orderBy sortKey为关键字 sortOrders[sortKey]升序或者降序 -->
       <tr v-for="entry in data | filterBy filterKey | orderBy sortKey sortOrders[sortKey]">
        <td v-for="key in columns">{{entry[key]}}</td>单元格
      </tr> 
    </tbody>
  </table> 
  <!--使用v-model来进行表单控件的双向绑定,用户在输入框输入,v-model="searchQuery"动态绑定到 :filter-key="searchQuery" － filterKey为用户输入值  -->
  <form id="search">Search <input name="query" v-model="searchQuery">  
  </form>
  <demo-grid :data="gridData" :columns="gridColumns" :filter-key="searchQuery">
  </demo-grid>
        <li class="span4">
          <div class="thumbnail">
            <img alt="300x200" src="" />
            <div class="caption">
              <h3>
                冯诺尔曼结构
              </h3>
              <p>
                也称普林斯顿结构，是一种将程序指令存储器和数据存储器合并在一起的存储器结构。程序指令存储地址和数据存储地址指向同一个存储器的不同物理位置。
              </p>
              <p>
                <a class="btn btn-primary" href="#">浏览</a> <a class="btn" href="#">分享</a>
              </p>
            </div>
          </div>
          </li>
</div> 

</template>

<script>
    export default {
        mounted() {
       console.log('Component be mounted!')
        },
        props:{
            books: Array,
        }
      }
    
</script>
