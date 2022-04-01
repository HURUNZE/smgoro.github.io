<?php
$json = file_get_contents("config.json");
$jsoncf = json_decode($json);
$servername = $jsoncf->servername;
$serverip = $jsoncf->ip;
$serverport = $jsoncf->port;
$introduced = $jsoncf->introduced;
$logourl = $jsoncf->logourl;
$qqgrouplink = $jsoncf->qqgrouplink;
$email = $jsoncf->email;

$motdpe = file_get_contents("http://smgoro.top/motd/api.php?ip=".$jsoncf->ip."&port=".$jsoncf->port);
$motd = json_decode($motdpe);
$status = $motd->status;//服务器状态
if ($status == "online"){
    $status = "在线";
} else {
    $status = "不在线";
}
$serverip = $jsoncf->ip;//服务器IP
$serverport = $jsoncf->port;//服务器端口
$version = $motd->version;//服务器游戏版本
$online = $motd->online;//服务器在线人数
$max = $motd->max;//服务器最大在线人数
$delay = $motd->delay;//服务器延迟
?>