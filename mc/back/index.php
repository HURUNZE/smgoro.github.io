<?php
//引入控制文件
include 'controller/config.php';
?>

<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $introduced;?>">
    <meta name="keywords" content="我的世界服务器">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="master" content="SummerGoro">
    <title><?php echo $servername;?></title>
    <meta name="description" content="<?php echo $introduced;?>" />
    <link href="<?php echo $logourl;?>" rel="shortcut icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1, minimum-scale=1, user-scalable=no,uc-fitscreen=yes">
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?42b0078a7c1f387ec2c3aaf1854a1dd1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!--baidu统计-->
</head>

<body style="overflow: visible;">
    <nav style="display: none;">
        <div class="row">
            <div class="container">
                <div class="logo unit">
                    <!-- <img src="" alt="logo"> -->
              <img style="max-width:15%;overflow:hidden;" src="<?php echo $logourl;?>" alt="logo">
                    <span style="font-family: BlackItalic;"><?php echo $servername;?></span>
                </div>
                <div class="mobile-bar">
                    <span></span>
                </div>
                <ul class="nav-menu">
                    <li><a href="http://www.smgoro.com/">主站</a></li>
                    <li><a href="#home">首页</a></li>
                    <li><a href="#about">介绍</a></li>
                    <li><a href="#preview">预览</a></li>
                    <li><a href="#us">我们</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="intro-section" id="home">
        <div class="intro-content unit">
             <div class="msg_desc">
              <a href="http://smgoro.com/"><img style="max-width:80%;overflow:hidden;" src="<?php echo $logourl;?>" alt="logo"></a>
             </div>
            <h1 id="h1" style="font-family: BlackItalic;"><?php echo $servername;?></h1>
            <h2 id="h2" style="font-family: BlackItalic;"><a href="https://skin.smgoro.com/">skin.smgoro.com</a></h2>
        </div>
        <a href="#about" class="down">
            <i class="fa fa-angle-down"></i>
        </a>
    </section>
    <section class="portfolios-section spad" id="about">
        <div class="container">
            <div class="section-title">
             <div class="msg_desc">
              <img style="max-width:70%;overflow:hidden;" src="http://blog.smgoro.top/usr/uploads/2020/02/3285775459.png" alt="">
             </div>
            <h2 id="h2" style="font-family: BlackItalic;"><?php echo $introduced;?></h2>
                <h2><a target="_blank" href='http://iurl.ltd/mcdow' class="btn btn-default"><strong>点击下载游戏客户端</strong></a></h2>
                
                <h2><a href='minecraft://?addExternalServer=SMGoro%20Server%7C<?php echo $serverip;?>:<?php echo $serverport;?>' class="btn btn-default"><strong>点击加入</strong></a></h2>
                <!--<h2>IP：<strong><?php echo $serverip;?></strong></br>PORT：<strong><?php echo $serverport;?></strong></h2>-->
                            
            <div class="subscribe">
                <h3 class="info-text">
                    <?php echo $servername;?>
                </h3>
                <h4>介绍： <?php echo $introduced;?></h4>
                    <p class="info-text">状态:<?php echo $status;?></p>
                    <?php
                    if ($status == "在线") {
                      echo "<p class='info-text'>在线人数:".$online."/".$max."</p>";
                      echo "<!--<p class='info-text'>延迟:".$delay."ms</p>-->";
                      echo "<p class='info-text'>游戏版本:".$version."</p>";
                    } else {
                      echo "<p class='info-text'>请联系<a href=".$qqgrouplink.">管理员</p>";
                    }
                    ?>
            </div>
                
            </div>
        </div>
    </section>
    <section class="services-section spad">
        <div class="container">
            <div class="section-title">
                <h2>服务器介绍</h2>
                <p>一份不失优雅的服务器特色简介</p>
            </div>
            <div class="row">
                <!--修改模板：
                <div class="col-md-3 col-sm-6 service-item">
                    <div class="icon">
                        <img src="./assets/img/gem.png" style="width: 50px;height: 50px;">
                    </div>
                    <h4>介绍模板</h4>
                    <p>介绍模板</p>
                </div>
                -->
                <div class="col-md-3 col-sm-6 service-item">
                    <div class="icon">
                        <img src="./assets/img/gem.png" style="width: 50px;height: 50px;">
                    </div>
                    <h4>高性能</h4>
                    <p>高性能实体机，i9-7940x 酷睿i9至尊处理器。<strong>频率超频至4.5Ghz，配置高达12C28T,128G RAM！</strong>，完虐大部分VPS/虚拟机所开服务器，支持大型群组服的运行！</p>
                </div>
                <div class="col-md-3 col-sm-6 service-item">
                    <div class="icon">
                        <img src="./assets/img/gold.png" style="width: 50px;height: 50px;">
                    </div>
                    <h4>多腐竹</h4>
                    <p>多名拥有开服经验的腐竹共同维护！</p>
                </div>
                <div class="col-md-3 col-sm-6 service-item">
                    <div class="icon">
                        <img src="./assets/img/gold.png" style="width: 50px;height: 50px;">
                    </div>
                    <h4>群组服</h4>
                    <p><strong>大型群组服，完整的游戏体验！</strong>，纯净生存，空岛生存，<strong>窒息地牢</strong>，职业战争，MOD服。。涵盖大部分常见玩法~</p>
                </div>
                <div class="col-md-3 col-sm-6 service-item">
                    <div class="icon">
                        <img src="./assets/img/gem.png" style="width: 50px;height: 50px;">
                    </div>
                    <h4>全平台</h4>
                    <p><strong>真-全平台支持！</strong>本服采用最新<strong>JE-BE互通</strong>技术，支持Java版，基岩版用户<strong>同服游玩！</strong></p>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-section spad" id="preview">
        <div class="container">
            <div class="section-title">
                <h2>介绍</h2>
                <p>服务器介绍.</p>
            </div>
            <div class="row">
                <!--修改模板：
                <div class="col-md-4">
                    <a class="blog-item">
                        <img src="assets/img/OWOSER3.png" alt="预览">
                        <div class="blog-item-text">
                            <h3>预览</h3>
                            <p>服务器各大支服预览.</p>
                        </div>
                    </a>
                </div>
                -->
                
                <div class="col-md-4">
                    <a class="blog-item">
                        <img src="http://pic.smgoro.top/2021/10/24/948b7c28670f7.gif">
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="blog-item">
                        <img src="http://pic.smgoro.top/2021/10/24/20d80a61308b0.png">
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="blog-item">
                        <img src="http://pic.smgoro.top/2021/10/24/7067a333e3d8c.png">
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="blog-item">
                        <img src="http://pic.smgoro.top/2021/10/24/2293dedb036ac.png">
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="blog-item">
                        <img src="http://pic.smgoro.top/2021/10/24/d99e7f661e3aa.png">
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="blog-item">
                        <img src="http://pic.smgoro.top/2021/10/24/54c05e07854f4.png">
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a class="blog-item" href="./doc/pdfjs/web/viewer.html?file=ar3.pdf" target="_blank">
                        <img src="./assets/img/zxdl.jpg" alt="窒息地牢">
                        <div class="blog-item-text">
                            <h3>窒息地牢</h3>
                            <p>简介：马桶实况推荐地牢冒险！<br>点击即可查看详细介绍</p>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    <section class="section1 spad" id="us">
        <div class="container">
            <div class="section-title">
                <h2>服务器团队</h2>
                <p>（其实就是一群划水的鸽子）</p>
            </div>
            <div class="row">
                <!--修改模板：
                <div class="col-md-3">
                    <a class="blog-item">
                        <img src="http://q1.qlogo.cn/g?b=qq&amp;nk=2128336160&amp;s=640" alt="SummerGoro">
                        <div class="blog-item-text section2">
                            <h2 id="lc"><strong>腐竹名称</strong></h2>
                            <p>自我简介：咕咕咕</p>
                        </div>
                    </a>
                </div>
                -->
                <div c
                <div class="col-md-3">
                    <a class="blog-item" href="http://smgoro.top/" target="_blank">
                        <img src="http://q1.qlogo.cn/g?b=qq&amp;nk=2128336160&amp;s=640" alt="SummerGoro">
                        <div class="blog-item-text section2">
                            <h2 id="lc"><strong>SummerGoro</strong></h2>
                            <h3><strong>服务器运维</strong></h3>
                            <p>自我简介：2017年开始进行开服活动，<strong>SMGoro Server的服务器支持运维</strong>，<del>是划水多年的咸鱼鸽子一枚</del>。</p>
                            <p>联系方式：</br>QQ：2128336160</br>邮箱：user@smgoro.top</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="blog-item">
                        <img src="http://q1.qlogo.cn/g?b=qq&amp;nk=1875162740&amp;s=640" alt="zimzaza4">
                        <div class="blog-item-text section2">
                            <h2 id="lc">ZIMZAZA4</h2>
                            <h3>服务器管理</h3>
                            <p>自我简介： 是个鸽子, 会点东西, 喜欢瞎搞。</p>
                            <p>联系方式：</br> QQ：1875162740</br> 邮箱：1875162740@qq.com</p>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    <section class="testinonial-section spad hitokoto">
        <div class="container hitokoto">
            <div class="section-title">
                <h2>一言</h2>
                <p id="hitokoto"></p>
                <blockquote><p>我的世界（Minecraft）**作为世界范围内著名的沙盒游戏，其服务器行业也是蓬勃发展。</p>
<p>我们<strong>SMGoro Server</strong>为营造和谐友好的服务器游戏体验，向各位玩家保证<strong>不设置任何氪金服务！</strong></p>
<p>服务器费用由各位腐竹和各位玩家的自由赞助支持~各位向服务器捐赠的资金将标注在赞助页面内。</br><a href='http://blog.smgoro.top/about.html'><strong>赞助页面</strong></a></p>
</blockquote>
            </div>
            <div class="section-title">
                <h2>联系我们</h2>
                <p id="hitokoto"></p>
                <p>-----</p>
                <p>官方Q群：<a href="<?php echo $qqgrouplink;?>" target="_blank"><strong>607355046</strong></a></p>
                <p>邮箱: <a href="mailto:<?php echo $email;?>"> <strong>user@smgoro.top</strong></a></p>
                <p>哔哩哔哩：<a target="_blank" a href="https://space.bilibili.com/359079394"><strong>359079394</strong></a></p>
            </div>
            <br>
        </div>
    </section>
    </div>
    
    <footer>
        <p>Copyright © 2021 | SummerGoro All Rights Reserved </p>
    </footer>

    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nav.js"></script>

    <script type="text/javascript">
        function nav() {
            if ($("section#home").height() <= $(window).scrollTop()) {
                $("nav").css("display", "block");
            } else {
                $("nav").css("display", "none");
            }
        }
        $(function() {
            $('nav').onePageNav();
            nav();
            $(document).scroll(nav);
            e = $(".mobile-bar").eq(0);
            l = $(".nav-menu").eq(0);
            e.click(function() {
                if (e.hasClass("active")) {
                    e.removeClass("active");
                    l.removeClass("active");
                } else {
                    e.addClass("active");
                    l.addClass("active");
                }
            });
        });
    </script>

</body>

</html>