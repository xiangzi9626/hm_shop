<template>
	<view class="news">
		<news-item @itemClick="goDetail" :list="news"></news-item>
	</view>
</template>

<script>
	import newsItem from "../../components/news_item/news-item.vue"
	export default {
		data() {
			return {
				news:[]
			}
		},
		components:{"news-item":newsItem},
		methods: {
			goDetail(id){
				 uni.navigateTo({
					url:"/pages/news-detail/news-detail?id="+id
				})
			},
			async getNews(){
				const res=await this.$myRequest({
					url:"/news.php?page=1",
					method:"POST"
				})
				this.news=res.data
			}
		},
		onLoad(){
			this.getNews()
		}
	}
</script>


