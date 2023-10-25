<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>MC中文网</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">  
	<script src="jquery-2.1.1/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<style>
    .fakeimg {
        height: 200px;
        background: #aaa;
    }
    h4{
      letter-spacing:3px;
      line-height:2em;
    }
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0; background-image:url(pic/head.png); background-size:100% 300%; " >
  <h1>MC中文网</h1>
  <p>Creeper?!!!</p> 
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">首页</a></li>
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    人气页面
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="ml.php">命令</a></li>
                    <li class="divider"></li>
                    <li><a href="fm.php">附魔</a></li>
                    <li class="divider"></li>
                    <li><a href="hs.php">红石电路</a></li>
                </ul>
        </li>
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    入门教程
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="xs.php">新手手册</a></li>
                    <li class="divider"></li>
                    <li><a href="wp.php">物品一览</a></li>
                    <li class="divider"></li>
                    <li><a href="sw.php">生物简介</a></li>
                </ul>
        </li>
        <li><a href="zyb.php">资源包</a></li>
        <li><a href="login.php">后台登录</a></li>
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    系统
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="help.html">系统帮助</a></li>
                    <li class="divider"></li>
                    <li><a href="about.html">系统关于</a></li>
                </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">

<?php
 	          include_once("conn/conn.php");
						$id=$_GET["id"];
						//echo $id;
						$sql="SELECT *FROM xs where id='$id'";
						$result=mysqli_query($con,$sql);
						
					   //保存被点击文章的次数，先读出原来的点击次数，再加上1，再更新原来的值
						$sql23="SELECT *FROM xs where id='$id'";
						$result23=mysqli_query($con,$sql23);
						$row4=mysqli_fetch_array($result23,MYSQLI_NUM);
						$djcs=$row4[6]+1;
            //echo $djcs;
            $sqlt="update ml set djcs='$djcs' where id='$id'";
						$result6=mysqli_query($con,$sqlt);
            ?>

  <div class="row">
    <div class="col-sm-4">
      <h3>热门点击排行</h3>
      <ul class="nav nav-pills nav-stacked">
        <?php
              include_once("conn/conn.php");
              $sql="SELECT *FROM xs order by djcs desc limit 0,6";
              $result=mysqli_query($con,$sql);
        ?>
        <li>
          <?php while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
              <a href="xsnew.php?id=<?php echo $row[0];?>">
              <?php 
						    if(strlen($row[1])>=30){
							    echo mb_substr($row[1],0,10,"utf8")."...";echo"<br>";
						    }else{
							    echo $row[1];echo"<br>";  
						    }
						  ?>  
              </a>
          <?php }?>
        </li>
      
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">

        <div id="myCarousel" class="carousel slide">
          <!-- 轮播（Carousel）指标 -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>   
          <!-- 轮播（Carousel）项目 -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="pic/title.png" alt="First slide">
              <div class="carousel-caption">标题 1</div>
            </div>
            <div class="item">
              <img src="pic/title1.png" alt="Second slide">
              <div class="carousel-caption">标题 2</div>
           </div>
            <div class="item">
             <img src="pic/title2.png" alt="Third slide">
              <div class="carousel-caption">标题 3</div>
             </div>
          </div>
         <!-- 轮播（Carousel）导航 -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>
           </div> 

    </div>
    <div class="col-sm-8">
      <!-- 子页内容，文字加图片 -->

      <h3>新手手册</h3><br>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;这份新手手册为不知道如何开始自己Minecraft生存之旅的玩家提供了一些建议，它主要指导你在游戏的生存模式中的第一天应该做的事情，这样你就可以安全地度过第一个晚上。</h4><br>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;在阅读本教程之前，你应该已经购买、下载并安装了游戏。在开始本教程之前，你应该先创建一个新的世界。</h4><br>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;Minecraft是一款沙盒游戏，你的游戏角色可以处在一个世界进行探索，收集资源并利用收集到的资源制作出对自己有利的物品。你需要了解游戏的控制系统的所有不同方面技巧和能力，如果你遇到了困难，那你应该创建一个和平模式的难度世界进行练习。如有需要，请更改按键绑定。你的世界是由方块组成的，大部分是立方体和不同的形状，一切都显得那么方块化与像素化。这些方块代表游戏中的物体。但它们的大小都有标准度量距离。在这个页面和其他许多页面（比如教程/测量单位）都有讨论，例如，“五格方块远”（官方地，每格方块是一个一米的立方体）。你的游戏角色可以站在一格方块空间内，而且站立的高度不足两格方块。这个游戏世界的时间是会流逝的；一个游戏日相当于现实世界的20分钟。夜晚要比白天危险得多：游戏是从黎明开始，在夜晚降临之前你有10分钟的游戏时间。本教程主要目的是让你在夜晚降临前立足并获得到基本装备和庇护所，夜晚降临时，敌对或中立的生物会生成。大多数晚上出来的怪物都很危险，它们会试图攻击你的。请确保你合成了一张床，如果你躺在了床上，那么夜晚会很快的过渡到白天。</h4><br>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;你的角色有可能在游戏中死亡，但是如果你不是处于极限模式，这并不会结束游戏，如果你受到了足够的伤害而死亡，你的物品会掉落在死亡的地方，而你会在别处重生。最初，你会在世界出生点的附近重生，但可使用床选择重生地点。</h4><br>

      <ul class="nav nav-pills nav-stacked">
        <?php
              include_once("conn/conn.php");
              $sql="SELECT *FROM xs";
              $result=mysqli_query($con,$sql);
        ?>
        <li>
          <?php while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
              <a href="xsnew.php?id=<?php echo $row[0];?>">
              <?php 
						    if(strlen($row[1])>=30){
							    echo mb_substr($row[1],0,10,"utf8")."...";echo"<br>";
						    }else{
							    echo $row[1];echo"<br>";  
						    }
						  ?>  
              </a>
          <?php }?>
        </li>
      
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>U2FsdGVkX1/NvqS6qj2xEQSIcxxxphmCxTAnk9Tuonw=</p>
</div>
</body>
</html>