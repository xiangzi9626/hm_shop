<template>
<view>
	<view @click="navigator(item.id)" class="news_item" v-for="(item,index) in list" :key="index">
		<image :src='item.img_url' mode="widthFix"></image>
		<view class="right">
			<view class="tit">
				 {{item.title}}
			</view>
			<view class="info">
				<text>发表时间:{{item.release_time}}</text>
				<text>浏览:{{item.browse}}</text>
			</view>
		</view>
	</view>
</view>
</template>

<script>
	export default {
		props: ['list'],
		methods:{
			navigator (id) {
				this.$emit('itemClick',id)
			}
		}
	}
</script>
<style>
.news .news_item{
		display: flex;
		padding: 10rpx 20rpx;
		border-bottom: 1px solid #b50e03;
	}
	.news .news_item image{
		min-width: 200rpx;
		max-width: 200rpx;
		height: 150rpx;
	}
	.news .news_item .right{
		margin-left: 15rpx;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}
	.news .news_item .tit{
		font-size: 30rpx;
	}
	.news .news_item .info{
		font-size: 24rpx;
	}
	.news .news_item .info text:nth-child(2){
		margin-left: 30rpx;
	} 
</style>