require('./bootstrap.js');
window.Vue =require('vue');

Vue.component('notify',require('./components/Notify.vue'));

new Vue({
	el:'#Workshop_item',
	methods:{
		open7:function () {
			this.$notify.success({
				title: '成功',
				message: '这是一条成功的提示消息',
				offset: 100
			});
		}
	}
})