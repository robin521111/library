<template>
	<el-button plain @click="open7">
		偏移的消息
	</el-button>
</template>

<script>
	export default {
		methods: {
			open7() {
				console.log('clicked open7');
				this.$notify.success({
					title: '成功',
					message: '这是一条成功的提示消息',
					offset: 100
				});
			}
		}

	}
</script>

