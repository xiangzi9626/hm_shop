<?php
header('Content-Type: text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*'); // *���������κ���ַ����
header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // �������������
header('Access-Control-Allow-Credentials: true'); // �����Ƿ������� cookies
header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin'); // ���������Զ�������ͷ���ֶ�
require_once "config.php";
$base_url=BASE_URL;
$id=$_REQUEST["id"];
$arr=[];
  $arr[]=array("id"=>1,"release_time" => "2021-01-02", "browse"=>"2599",
        "title"=>"涨价城市四连增！房价要“起飞”？年内楼市调控已超150次",
      "content"=>
          "<p><span class=\"bjh-p\">中新经纬客户端4月17日电 (王永乐)3月“小阳春”，多地房价上涨！</span></p><br>
<p><span class=\"bjh-p\"><span class=\"bjh-strong\">新房涨价城市四连增，热度向二线城市过渡</span></span></p><br>
<p><span class=\"bjh-p\">4月16日，国家统计局公布3月70个大中城市商品住宅销售价格变动数据。新房方面，62城环比上涨，较上月增加6个；2城持平，与上月相同；6城下跌，较上月减少6个。其中，广州、福州涨幅1%领跑。</span></p><br>
<p><span class=\"bjh-p\">二手房方面，58城环比上涨，比上月增加3个；3城持平，较上月增加2个；9城下跌，比上月减少5个。</span></p><br>
<div><img style='max-width: 100%;max-height:2000px' src='{$base_url}/image/news/1.jpg'></div><br>
<p><span class=\"bjh-p\">中新经纬客户端注意到，新房价格环比上涨城市数量“四连增”。自2020年11月以来，各月环比上涨城市数量为36、42、53、56和62。</span></p><br>
<p><span class=\"bjh-p\">对于3月楼市行情，诸葛找房数据研究中心分析师陈霄指出，3月，随着楼市进入传统的“小阳春”，市场热度提升，新房、二手房价格上涨城市数量持续增加。</span></p><br>
<p><span class=\"bjh-p\">中原地产首席分析师张大伟表示，一二线城市房价上涨依然是主流现象，简单计算全国70个大城市中有86%的城市房价在3月出现上涨，这是70城市统计数据中的普涨纪录。</span></p><br>
<div><img style='max-width: 100%;max-height: 2000px' src='{$base_url}/image/news/2.jpg'></div>"
  );
  echo json_encode($arr,JSON_UNESCAPED_UNICODE);
?>