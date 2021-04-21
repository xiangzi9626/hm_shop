<?php
  header('Content-Type: text/html;charset=utf-8');
  header('Access-Control-Allow-Origin:*'); // *���������κ���ַ����
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // �������������
    header('Access-Control-Allow-Credentials: true'); // �����Ƿ������� cookies
    header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin'); // ���������Զ�������ͷ���ֶ�
$arr=[];
$arr[]=array("id"=>1,"title"=>"摄影设计");
$arr[]=array("id"=>2,"title"=>"明星美女");
$arr[]=array("id"=>3,"title"=>"空间设计");
$arr[]=array("id"=>4,"title"=>"户型装饰");
$arr[]=array("id"=>5,"title"=>"广告摄影");
$arr[]=array("id"=>6,"title"=>"摄影学习");
$arr[]=array("id"=>7,"title"=>"摄影器材");
$arr[]=array("id"=>8,"title"=>"明星写真");
$arr[]=array("id"=>9,"title"=>"清纯甜美");
$arr[]=array("id"=>10,"title"=>"家居生活");
  echo json_encode($arr,JSON_UNESCAPED_UNICODE);
?>