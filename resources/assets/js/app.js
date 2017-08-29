/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 
require('./bootstrap.js');
window.Vue =require('vue');
>>>>>>> 17750bb7994fefdfec8e0af5ff24a99b28036c49
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.component('bookcard',require('./components/BookCard.vue'));
 //Vue.component('carouselcard', require('./components/CarouselCard.vue'));
//Vue.component('borrowcard',require('./components/BorrowCard.vue'));



new Vue({
  el:'#BookCard',
});
// new Vue({
//   el:'#CarouselCard',
// });



Vue.component('canvasComponent',{
  template:'#canvasChart',
  
  data:function () {
     var sortOrders = {}; //定义sortOrders为空字典
    //forEach为columns的每一个元素执行函数内部操作
    this.columns.forEach(function (key) {
      //将columns的元素设定为key值,value值都为1
      sortOrders[key] = 1;
    });
    return {
      sortKey: '',
      sortOrders: sortOrders,
      items:{}
    };


  },
  props:{
    canvasData:Array,
    columns:Array,
    filterKey:String
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
    },
  },
  computed: {
    filterI: function () {
      return this.canvasData.filter((item) => {
        return item.name.match(this.filterKey);
      })
    },

  },
  // mounted() {
  //     $.getJSON('/api/book/getJson',function (data) {
  //       $.each(data,function (key,val) {
  //         this.item[key]=key;
  //         this.item[val]=val; 

  //       })
  //     });
  //   }

});


// Vue.component('',{
//   template:'#filterTest',
//  data:{
//     'keywords':[{"id":"9","name":"missy","phone":"21324234532"},   
//     {"id":"3","name":"Mahama","phone":"345604542"},
//     {"id":"2","name":"Bernard","phone":"241242542"}],

//     canvasData:{"空间":34,"微博":30,"指导":29,"小明":28 , "图书馆": 27 , "PHP":26 , "项目" :25 ,"健康":24 , "JS" :23 ,'html' :22,'各镇': 22 ,'勋章' :21 ,'信息':20,'开发':19 , '设计':18 , '开幕式' :17 , '浏览器' :16 ,'身份':15,'图片': 14 , '中国' :13 , '伟大' :12 ,'地方':11 ,'噩梦' :10 ,'回复' :9 ,'空间' :8 , '请问' : 7 , '类库' : 6 , '激活' : 5 ,'规范' :4 ,'微软' :3 , '分割': 2 , '不错' :1 , '多个' :1, '斯蒂芬' :1, '分割' :1, '回过头' :1, '慈悲' :1, 'svg' :1, '三个' :1, '十多个' :1, '语句' :1, '写错' :1, '别冲动' :1, '请问' :1, '细长的' :1, '风光' :1, '梵蒂冈' :1, '成办' :1, '这些' :1, '是的' :1, '风格化' :1, '儿童歌' :1, '所得税' :1, '阿斯顿' :1, '斯蒂芬' :1, '电饭锅' :1, '很规范' :1, '车秩序' :1, '上网' :1, '过负荷' :1, '放到' :1, '电饭锅' :1, '东方红' :1, '风格化' :1, '请问' :1, '人头' :1, '让他' :1, '分隔' :1, '大概' :1, '福利' :1, '激活' :1, '断食' :1, '风格' :1, '瓦尔特' :1, '对方' :1,  '请问' :1, '而' :1, '人头' :1, '统一' :1, '一份' :1, '放到' :1, '放到' :1, '放到' :1, '放到' :1, '上网' :1, '我是' :1, '的' :1, '耳朵' :1, '发热' :1, '乳房' :1, '跟他' :1, '通过' :1, '还好用' :1, '雅黑' :1, '聚聚' :1, '看过' :1, '似的' :1, '独' :1, '明年' :1, '手头紧' :1, '换个' :1, '数据' :1, '导入' :1, '回归' :1},
//     gridColumns:['id','name','phone'],
//     searchQuery:''
//   },
// });

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