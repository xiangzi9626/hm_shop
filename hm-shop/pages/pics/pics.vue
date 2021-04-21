<template>
	<view class="pics">
		<scroll-view class="left" scroll-y>
			<view @click="leftClickHandle(index,item.id)" :class="active===index?'active':''" v-for="(item,index) in cates" :key="item.id">{{item.title}}</view>
		</scroll-view>
		<scroll-view class="right" scroll-y>
			<view class="item" v-for="(item,index) in secondData" :key="index">
				<image @click="previewImg(item.img_url)" :src="item.img_url" mode="widthFix"></image>
			</view>
		</scroll-view>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				cates:[],
				active:0,
				secondData:[]
			}
		},
		methods: {
			async getPicCate(){
				const res=await this.$myRequest({
					url:"/cate.php",
					method:"POST"
				})
				this.cates=res.data
				this.leftClickHandle(0,this.cates[0].id)
			},
			async leftClickHandle(index,id){
				this.active=index
				const res=await this.$myRequest({
					url:"/image.php?id="+id,
					method:"POST"
				})
				this.secondData=res.data
			},
			previewImg(current){
				const urls=this.secondData.map(item=>{
					return item.img_url
				})
				uni.previewImage({
					current,
					urls
				})
			}
		},
		onLoad(){
			this.getPicCate()
		}
	}
</script>

<style>
	page{
		height: 100%;
	}
.pics{
	height: 100%;
	display: flex;
}
.pics .left{
	width: 200rpx;
	height: 100%;
	border-right: 1px solid #eee;
}
.pics .left view{
	height: 60px;
	line-height: 60px;
	color: #333;
	text-align: center;
	font-size: 30rpx;
	border-top: 1px solid #eee;
}
.active{
	background: #b50e03;
	color: #fff !important;
}
.right{
	width: 530rpx;
	height: 100%;
	margin: 0 auto;
}
.right .item image{
	max-width: 530rpx;
	max-height: 100%;
	margin-bottom: 20rpx;
}
</style>
