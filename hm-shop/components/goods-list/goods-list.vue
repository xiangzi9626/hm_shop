<template>
	 		<view class="goods_list">
	 			<view class="goods_item" v-for="item in goods" :key="item.id" @click="navigator(item.id)">
	 				<view class="img_box"><image :src="item.img_url" mode="widthFix"></image></view>
	 				<view class="price">
	 					<text>￥{{item.sell_price}}</text>
	 					<text>￥{{item.market_price}}</text>
	 				</view>
	 				<view class="name">
	 					 {{item.title}}
	 				</view>
	 			</view>
				</view>
</template>

<script>
	export default {
		props: ['goods'],
		methods: {
			navigator (id) {
				this.$emit('goodsItemClick',id)
			}
		}
	}
</script>

<style>
	 .goods_list {
	 	padding: 0 15rpx;
	 	display: flex;
	 	flex-wrap: wrap;
	 	justify-content: space-between;
	 }
	 
	 .goods_list .goods_item {
	 	background: #fff;
	 	width: 355rpx;
	 	margin: 10rpx 0;
	 	padding: 5rpx;
	 	box-sizing: border-box;
	 }
	 .goods_list .goods_item .img_box{
	 	width: 100%;
	 	height: 150px;
	 }
	 .goods_list .goods_item image {
	 	 max-width:95%;
	 	 max-height: 150px;
	 	display: block;
	 	margin: auto;
	 }
	 
	 .goods_list .goods_item .price {
	 	color: #b50e03;
	 	font-size: 36rpx;
	 	margin: 20rpx 0 5rpx 0;
	 }
	 
	 .goods_list .goods_item .price text:nth-child(2) {
	 	color: #ccc;
	 	font-size: 28rpx;
	 	margin-left: 17rpx;
	 	text-decoration: line-through;
	 }
	 
	 .goods_list .goods_item .name {
	 	font-size: 28rpx;
	 	line-height: 50rpx;
	 	padding-bottom: 15rpx;
	 	padding-top: 10rpx;
	 }
</style>
