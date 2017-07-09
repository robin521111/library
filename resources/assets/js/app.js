
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 
require('./bootstrap');

window.Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('bookcard',require('./components/BookCard.vue'));
//Vue.component('borrowcard',require('./components/BorrowCard.vue'));

new Vue({
  el:'#BookCard',
  props:{
    books:Array, 
    auth: String
  }
})

Vue.component('demo-grid', {
  props: {
    data: Array,
    columns: Array,
    filterKey: String
  },
  // computed:{
  //   textFilter:function () {
  //     filterKey.toLowerCase();
  //   }
  // },
  // 页面加载就执行
  data: function () { 
    var sortOrders = {}; //定义sortOrders为空字典
    //forEach为columns的每一个元素执行函数内部操作
    this.columns.forEach(function (key) {
      //将columns的元素设定为key值,value值都为1
      sortOrders[key] = 1;
    });
    return {
      sortKey: '',
      sortOrders: sortOrders
    };
  },
  methods: {
    //sortBy[key]理解: 当click时执行该函数,sortBy为一个函数方法,接受key参数
    sortBy: function (key) {
      //并将参数赋值给内部变量
      this.sortKey = key; 
      //更新排序序列,调用sortOrders将key代表的列反序
      console.log(this.sortOrders[key]); // 1
      this.sortOrders[key] = this.sortOrders[key] * -1;
      console.log(this.sortOrders[key]); // -1
    }
  }
});

var demo = new Vue({
  el: '#bookborrow',
  data: {
    searchQuery: '',
    gridColumns: ['name', 'power'],
    gridData: [
      { name: 'Bruce Lee', power: 9000 },
      { name: 'Jackie Chan', power: 7000 },
      { name: 'Jet Li', power: 8000 },
    ]

  }
});

new Vue({
  el:'#app'

})


