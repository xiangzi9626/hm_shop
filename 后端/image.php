<?php
header('Content-Type: text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*'); // *���������κ���ַ����
header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // �������������
header('Access-Control-Allow-Credentials: true'); // �����Ƿ������� cookies
header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin'); // ���������Զ�������ͷ���ֶ�
require_once "config.php";
$id=$_REQUEST["id"];
$arr=[];
for ($i=1;$i<11;$i++){
$arr[]=array("img_url"=>BASE_URL."/image/shequtupian/".$id."/".$i.".jpg");
}
echo json_encode($arr,JSON_UNESCAPED_UNICODE);
?>