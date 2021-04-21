<template>
	<view class="news-detail">
		<view class="title"><text>{{detail.title}}</text></view>
		<view class="info">
			<text>发表时间:{{detail.release_time}}</text>
			<text>浏览:{{detail.browse}}</text>
		</view>
		<view class="content">
			<rich-text :nodes="detail.content"></rich-text>
		</view>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				id:0,
				detail:{}
			}
		},
		methods: {
			async getNewsDetail(){
				const res=await this.$myRequest({
					url:"/news_detail.php?id="+this.id,
					method:"POST"
				})
				this.detail=res.data[0]
			}
		},
		onLoad(options){
			this.id=options.id
			this.getNewsDetail()
		}
	}
</script>

<style>
.news-detail{
	font-size: 30rpx;
	padding: 0 20rpx 20px 20rpx;
}
.news-detail .title{
	width: 710rpx;
	text-align: center;
	margin: 20rpx 0;
}
.news-detail .info{
	display: flex;
	justify-content: space-between;
}
.news-detail .title text{
	display: inline-block;
	text-align: left;
}
</style>
