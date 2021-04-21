<?php
  header('Content-Type: text/html;charset=utf-8');
  header('Access-Control-Allow-Origin:*'); // *���������κ���ַ����
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // �������������
    header('Access-Control-Allow-Credentials: true'); // �����Ƿ������� cookies
    header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin'); // ���������Զ�������ͷ���ֶ�
require_once "config.php";
$base_url=BASE_URL;
$arr=[
    ["id"=>1,"img_url"=>$base_url."/image/1.jpg"],
    ["id"=>2,"img_url"=>$base_url."/image/2.jpg"]
];
echo json_encode($arr);
?>