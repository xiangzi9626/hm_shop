<?php
  header('Content-Type: text/html;charset=utf-8');
  header('Access-Control-Allow-Origin:*'); // *���������κ���ַ����
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // �������������
    header('Access-Control-Allow-Credentials: true'); // �����Ƿ������� cookies
    header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin'); // ���������Զ�������ͷ���ֶ�
require_once "config.php";
$base_url=BASE_URL;
$id=$_REQUEST["id"];
$arr["swiper"]=[
    ["id"=>1,"img_url"=>BASE_URL."/image/goods_detail/1.jpg"],
    ["id"=>2,"img_url"=>BASE_URL."/image/goods_detail/2.jpg"]
];
$arr["detail"]=[
    "title"=>"荣耀V40轻奢版 5G 超级快充 6400万超清四摄 8GB+128GB蓝水翡翠 移动联通电信5G 双卡双待手机",
    "sell_price" => "2999",
    "market_price" => "3399",
    "shop_number"=>"100010637563",
    "stock"=>"200",
    "content"=>"<div><img style='max-width:100%;max-height:2000px' src='{$base_url}/image/goods_detail/content/1.jpg'></div>
<br><p><span class=\"bjh-p\">3月23日，在荣耀V40发布两个月之后，在ID设计上践行极致创新，采用前后3D双曲面设计的荣耀V40轻奢版终于也来了。作为同属荣耀V系列下的全新产品，荣耀V40轻奢版延续了荣耀V40兼具颜值、手感的设计理念，成为3000元内首款也是目前唯一一款采用超曲屏设计的5G手机。那么荣耀V40轻奢版实际体验究竟如何？下面燕山派就为大家详细介绍一番。</span></p>
<br><p><span class=\"bjh-p\"><span class=\"bjh-strong\">轻薄时尚，5G手机中难得的好手感</span></span></p><br>
<div><img style='max-width:100%;max-height:2000px' class='imgs' src='{$base_url}/image/goods_detail/content/2.jpg'></div><br>
<p><span class=\"bjh-p\">再放一张实拍图大家感受下，优秀的屏幕素质结合极窄的上下边框，颜值在线，无可挑剔。</span></p><br>
<div><img style='max-width:100%;max-height:2000px' src='{$base_url}/image/goods_detail/content/3.jpg'></div><br>
<p><span class=\"bjh-p\">来张局部，屏幕边缘的大曲面，还让屏幕显示颇具立体感，整体视觉体验非常优秀。另外荣耀V40轻奢版不仅支持人脸识别，而且还支持屏幕指纹，戴口罩时解锁更加方便。</span></p><br>
<div><img style='max-width:100%;max-height:2000px' src='{$base_url}/image/goods_detail/content/4.jpg'></div><br>
<p><span class=\"bjh-p\">值得一提的是，荣耀V40轻奢版还是荣耀旗下首款前置摄像头居中设计的机型，并且还采用创新架构设计，让屏幕开孔上移0.7mm，整体更加简洁和谐。</span></p>"
];
echo json_encode($arr,JSON_UNESCAPED_UNICODE);
?>