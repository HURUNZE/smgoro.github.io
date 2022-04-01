<?php
//引入控制文件
include 'controller/config.php';
?>

<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $servername;?> Join</title>
        <meta http-equiv="refresh" content="1;url= minecraft://?addExternalServer=SMGoro%20Server%7C<?php echo $serverip;?>:<?php echo $serverport;?> ">
<style>
	body{
		background-color:#111;
		font-size:14px;
	}
	h3{
		font-size:50px;
		color:#eee;
		text-align:center;
		padding-top:0px;
		font-weight:normal;
	}
	h4{
		font-size:30px;
		color:#eee;
		text-align:center;
		font-weight:normal;
	}
	h5{
		font-size:20px;
		color:#eee;
		text-align:center;
		font-weight:normal;
	}
</style>
</head>

<body>
<h3><a href="minecraft://?addExternalServer=SMGoro%20Server%7C<?php echo $serverip;?>:<?php echo $serverport;?>">点我自动加入服务器</a></h3>
<h5>如果您的浏览器未自动跳转，请点击上方链接</h5>
<h5>本页面将自动添加<?php echo $servername;?>服务器到您的基岩版服务器列表中</h5>
<h5>手机版请选择国际版MC打开</h5>
<h3>-----</h3>
            <div class="subscribe">
                <h3 class="info-text">
                    <?php echo $servername;?>
                </h3>
                    <h4 class="info-text">介绍:<?php echo $introduced;?></h4>
                    <h4 class="info-text">状态:<?php echo $status;?></h4>
                    <?php
                    if ($status == "在线") {
                      echo "<h4 class='info-text'>在线人数:".$online."/".$max."</h4>";
                      echo "<h4 class='info-text'>延迟:".$delay."ms</h4>";
                      echo "<h4 class='info-text'>游戏版本:".$version."</h4>";
                    } else {
                      echo "<h4 class='info-text'>请联系<a href=".$qqgrouplink.">管理员</h4>";
                    }
                    ?>
            </div>
</body>
</html>