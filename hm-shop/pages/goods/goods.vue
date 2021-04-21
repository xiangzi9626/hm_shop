<template>
	<view class="goods_list">
		<goods-list :goods="goods" @goodsItemClick="goGoodsDetail"></goods-list>
		<view class="isOver" v-if="flag">-----我是有底线的-----</view>
	</view>
</template>

<script>
	import goodsList from "../../components/goods-list/goods-list.vue"
	export default {
		data() {
			return {
				page:1,
				goods:[],
				flag:false
			}
		},
		components:{"goods-list":goodsList},
		methods: {
			goGoodsDetail(id){
				 uni.navigateTo({
					url:"/pages/goods-detail/goods-detail?id="+id
				})
			},
			async getGoodsList(callBack){
				const res=await this.$myRequest({
					url:"/goods.php?page="+this.page
				})
				 this.goods=[...this.goods,...res.data]
				 callBack && callBack()
			}
		},
		onPullDownRefresh() {
			this.page=1
			this.goods=[]
			this.flag=false
			setTimeout(()=>{
						  this.getGoodsList(()=>{
								uni.stopPullDownRefresh()
							})	
						},1000)
		},
		onLoad(){
			this.getGoodsList()
		},
		onReachBottom() {
			if(this.goods.length<this.page*10){
				return this.flag=true
			}
			 this.page++
			 this.getGoodsList()
		}
	}
</script>

<style>
.goods_item{
	background: #eee;
}
.isOver{
	width: 100%;
	height: 50px;
	line-height: 50px;
	text-align: center;
	font-size: 28rpx;
}
</style>
