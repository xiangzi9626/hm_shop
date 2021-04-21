<template>
	<view class="home">
		<swiper indicator-dots autoplay circular interval="3000">
			<swiper-item v-for="item in swipers" :key="item.id">
				<image :src="item.img_url"></image>
			</swiper-item>
		</swiper>
		<!--导航区域-->
		<view class="nav">
			<view class="nav_item" v-for="(item,index) in navs" :key="index" @click="navItemClick(item.path)">
				<view :class="item.icon"></view>
				<text>{{item.title}}</text>
			</view>
		</view>
		<!--推荐商品区域-->
		<view class="hot_goods">
			<view class="tit">推荐商品</view>
			 <goods-list :goods="goods" @goodsItemClick="goGoodsDetail"></goods-list>
		</view>
	</view>
</template>

<script>
	import goodsList from "../../components/goods-list/goods-list.vue"
	export default {
		data() {
			return {
				swipers: [],
				goods: [],
				navs:[
					{
						icon:"iconfont icon-ziyuan",
						title:"百货超市",
						path:"/pages/goods/goods"
					},
					{
						icon:"iconfont icon-guanyuwomen",
						title:"联系我们",
						path:"/pages/contact/contact"
					},
					{
						icon:"iconfont icon-tupian",
						title:"社区图片",
						path:"/pages/pics/pics"
					},
					{
						icon:"iconfont icon-shipin",
						title:"精彩视频",
						path:"/pages/video/video"
					}
				]
			}
		},
		onLoad() {
			this.getSwipers()
			this.getHotGoods()
		},
		components:{"goods-list":goodsList},
		methods: {
			async getSwipers() {
				/*uni.request({
					url:"http://www.123.com/swiper.php",
					success:res=>{
						if(res.statusCode!==200){
							 return uni.showToast({
								title:"获取数据失败"
							})
						}
						 this.swipers=res.data
					}
				})*/
				const res = await this.$myRequest({
					url: "/swiper.php",
					method: "POST"
				})
				this.swipers = res.data
			},
			//获取商品列表
			async getHotGoods() {
				const res = await this.$myRequest({
					url: "/goods.php?page=1",
					method: "POST"
				})
				this.goods = res.data
			},
			//导航点击的处理
			navItemClick(url){
				uni.navigateTo({
					url:url
				})
			},
			goGoodsDetail(id){
				 uni.navigateTo({
					url:"/pages/goods-detail/goods-detail?id="+id
				})
			}
		}
	}
</script>

<style>
	.home swiper {
		width: 750rpx;
		height: 380rpx;
	}

	.home swiper image {
		width: 100%;
		height: 100%;
	}

	.nav {
		display: flex;
	}

	.nav .nav_item {
		width: 25%;
		text-align: center;
	}

	.nav .nav_item view {
		width: 120rpx;
		height: 120rpx;
		background: #b50e03;
		border-radius: 60rpx;
		margin: 10px auto;
		line-height: 120rpx;
		color: #fff;
		font-size: 50rpx;
	}

	.icon-tupian {
		font-size: 45rpx;
	}

	.nav text {
		font-size: 30rpx;
	}

	.hot_goods {
		background: #eee;
		overflow: hidden;
		margin-top: 10px;
	}

	.hot_goods .tit {
		height: 50px;
		line-height: 50px;
		color: #b50e03;
		text-align: center;
		letter-spacing: 20px;
		background: #fff;
		margin: 7rpx 0;
	}

	/*.goods_list {
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
	}*/
</style>
