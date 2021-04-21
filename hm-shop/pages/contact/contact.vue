<template>
	<view class="contact">
		<image src="/static/image/contact/contact.jpg"></image>
		<view class="info">
			 <view @click="phone">联系电话：400-888-8888 ( 点击拨打 )</view>
			  <view>公司地址：江苏省盐城市下沙经济开发区4号大街187号盛泰时代山</view>
		</view>
		<map class="map" :longitude="longitude" :scale="scale" :latitude="latitude" :markers="markers"></map>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				longitude:120.152248,
				latitude:33.40326,
				scale:13,
				markers:[
					{
						longitude:120.152248,
						latitude:33.40326,
						/*iconPath:"",
						width:30,
						height:30*/
					}
				]
			}
		},
		methods: {
			phone(){
				uni.makePhoneCall({
					phoneNumber:'400-888-8888'
				})
			}
		}
	}
</script>

<style>
.contact image{
	width: 750rpx;
	height: 320rpx;
}
.info{
	padding: 10rpx 20rpx;
	font-size: 30rpx;
}
.info view{
	line-height: 80rpx;
	border-bottom: 1px solid #eee;
}
.map{
	width: 750rpx;
	height: 750rpx;
}
</style>
