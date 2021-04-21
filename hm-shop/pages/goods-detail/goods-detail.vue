<template>
	<view class="goods_detail">
		<swiper indicator-dots>
			<swiper-item v-for="item in swipers" :key="item.id">
				<image :src="item.img_url" mode="widthFix"></image>
			</swiper-item>
		</swiper>
		<view class="box1">
			<view class="price">
				<text>{{detail.sell_price}}</text>
				<text>{{detail.market_price}}</text>
			</view>
			<view class="goods_name">{{detail.title}}</view>
		</view>
		<view class="line"></view>
		<view class="box2">
			<view>货号:{{detail.shop_number}}</view>
			<view>库存:{{detail.stock}}</view>
		</view>
		<view class="line"></view>
		<view class="box3">
			<view class="tit">详情介绍</view>
			<view class="content">
				<rich-text :nodes="detail.content"></rich-text>
			</view>
		</view>
		<view class="goods_nav">
		 <uni-goods-nav :fill="true"  :options="options" :buttonGroup="buttonGroup"  @click="onClick" @buttonClick="buttonClick"/>
	</view>
	</view>
</template>

<script>
	import uniGoodsNav from '@/components/uni-goods-nav/uni-goods-nav.vue'
	export default {
	  data() {
			return {
				id:0,
				swipers:[],
				detail:{},
				 options: [{
				            icon: '/static/uni_goods_nav_icon/headphones.jpg',
				            text: '客服'
				        }, {
				            icon: '/static/uni_goods_nav_icon/shop.jpg',
				            text: '店铺',
				           /* info: 2,
				            infoBackgroundColor:'#007aff',
				            infoColor:"red"*/
				        }, {
				            icon: '/static/uni_goods_nav_icon/cart.jpg',
				            text: '购物车',
				            info: 2
				        }],
						buttonGroup: [{
						          text: '加入购物车',
						          backgroundColor: '#ff0000',
						          color: '#fff'
						        },
						        {
						          text: '立即购买',
						          backgroundColor: '#ffa200',
						          color: '#fff'
						        }]
			}
		},
		methods: {
			onClick (e) {
			       console.log(e.content.text)
			      },
			      buttonClick (e) {
			        console.log(e)
			        this.options[2].info++
			      },
			async getDetail(){
				const res=await this.$myRequest({
					url:"/goods_detail.php?id="+this.id,
					method:"POST"
				})
				this.swipers=res.data.swiper
				this.detail=res.data.detail
			}
		},
		onLoad(options){
			this.id=options.id
			this.getDetail()
		},
		components: {uniGoodsNav}
	}
</script>
<style>
.goods_detail swiper{
	 height: 700rpx;
}
.goods_detail swiper image{
	width: 100%;
	height: 100%;
}
.goods_detail .box1{
	padding: 10px;
}
.goods_detail .box1 .price{
	font-size: 35rpx;
	color: #b50e03;
	line-height: 80rpx;
}
.goods_detail .box1 .price text:nth-child(2){
	color: #ccc;
	font-size: 28rpx;
	text-decoration: line-through;
	margin-left: 20rpx;
}
.goods_detail .box1 .goods_name{
	font-size: 32rpx;
	line-height: 60rpx;
}
.line{
	width: 750rpx;
	height: 10rpx;
	background: #eee;
}
.box2{
	padding: 0 10rpx;
	font-size: 32rpx;
	line-height: 70rpx;
}
.box3{
	padding-bottom: 50px;
}
.box3 .tit{
	font-size: 32rpx;
	padding-left: 10px;
	border-bottom: 1px solid #eee;
	line-height: 70rpx;
}
.box3 .content{
	padding: 10px;
	font-size: 28rpx;
	color: #333;
	line-height: 50rpx;
}
.goods_nav{
	position: fixed;
	bottom: 0;
	width: 100%;
}
</style>
