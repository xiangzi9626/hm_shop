<?php
  header('Content-Type: text/html;charset=utf-8');
  header('Access-Control-Allow-Origin:*'); // *���������κ���ַ����
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // �������������
    header('Access-Control-Allow-Credentials: true'); // �����Ƿ������� cookies
    header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin'); // ���������Զ�������ͷ���ֶ�
require_once "config.php";
$page=$_REQUEST["page"];
$arr=[];
if ($page==1) {
    $arr[] = array("id"=>1,"img_url" =>BASE_URL."/image/goods/1.jpg", "sell_price" => "6999", "market_price" => "7599",
        "title" => "华为Mate40 Pro（8GB/256GB/全网通/5G版/玻璃版） 麒麟9000，88°超曲");
    $arr[] = array("id"=>2,"img_url" =>BASE_URL."/image/goods/2.jpg", "sell_price" => "4999", "market_price" => "5299",
        "title" => "华为Mate40（8GB/128GB/全网通/5G版/玻璃版） 90Hz刷新率，240Hz触控");
    $arr[] = array("id"=>3,"img_url" =>BASE_URL."/image/goods/3.jpg", "sell_price" => "3299", "market_price" => "3699",
        "title" => "华为nova 8（8GB/128GB/全网通/5G版） 66W超级快充，麒麟985，6400");
    $arr[] = array("id"=>4,"img_url" =>BASE_URL."/image/goods/4.jpg", "sell_price" => "3699", "market_price" => "3999",
        "title" => "华为nova 7 Pro（8GB/128GB/5G版/全网通） 前置3200万追焦双摄 ，50倍");
    $arr[] = array("id"=>5,"img_url" =>BASE_URL."/image/goods/5.jpg", "sell_price" => "2999", "market_price" => "3299",
        "title" => "华为nova 7（8GB/128GB/5G版/全网通） OLED极点全面屏，全网通5G");
    $arr[] = array("id"=>6,"img_url" =>BASE_URL."/image/goods/6.jpg", "sell_price" => "3999", "market_price" => "4599",
        "title" => "华为nova 8 Pro（8GB/128GB/全网通/5G版） 麒麟985，通信5G四网协同");
    $arr[] = array("id"=>7,"img_url" =>BASE_URL."/image/goods/7.jpg", "sell_price" => "4188", "market_price" => "4599",
        "title" => "华为P40（6GB/128GB/全网通/5G版） 徕卡三摄，麒麟990 5G，WiFi 6");
    $arr[] = array("id"=>8,"img_url" =>BASE_URL."/image/goods/8.jpg", "sell_price" => "5988", "market_price" => "6299",
        "title" => "华为P40 Pro（8GB/128GB/全网通/5G版） 徕卡四摄，麒麟990 5G，40W快");
    $arr[] = array("id"=>9,"img_url" =>BASE_URL."/image/goods/9.jpg", "sell_price" => "4499", "market_price" => "4899",
        "title" => "华为Mate30（8GB/128GB/全网通/5G版/玻璃版） IP53防水防尘，磁悬浮发");
    $arr[] = array("id"=>10,"img_url" =>BASE_URL."/image/goods/10.jpg", "sell_price" => "3188", "market_price" => "3599",
        "title" => "华为P30（8GB RAM/全网通） 超感光徕卡三摄，5倍混合，双景录像");
    echo json_encode($arr,JSON_UNESCAPED_UNICODE);
}else if($page==2){
    $arr[]=array("id"=>11,"img_url"=>BASE_URL."/image/goods/11.jpg","sell_price"=>"2288","market_price"=>"2599",
        "title"=>"华为nova 5 Pro（8GB/128GB/全网通） 3200万超高清自拍,人像超级夜景");
$arr[]=array("id"=>12,"img_url"=>BASE_URL."/image/goods/12.jpg","sell_price"=>"17999","market_price"=>"19999",
    "title"=>"华为Mate X2（8GB/256GB/全网通/5G版） 麒麟9000旗舰芯片，无缝鹰翼折");
    echo json_encode($arr,JSON_UNESCAPED_UNICODE);
}
?>