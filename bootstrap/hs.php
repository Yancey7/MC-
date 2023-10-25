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
						$sql="SELECT *FROM hs where id='$id'";
						$result=mysqli_query($con,$sql);
						
					   //保存被点击文章的次数，先读出原来的点击次数，再加上1，再更新原来的值
						$sql23="SELECT *FROM hs where id='$id'";
						$result23=mysqli_query($con,$sql23);
						$row4=mysqli_fetch_array($result23,MYSQLI_NUM);
						$djcs=$row4[6]+1;
            //echo $djcs;
            $sqlt="update hs set djcs='$djcs' where id='$id'";
						$result6=mysqli_query($con,$sqlt);
            ?>

  <div class="row">
    <div class="col-sm-4">
      <h3>热门点击排行</h3>
      <ul class="nav nav-pills nav-stacked">
        <?php
              include_once("conn/conn.php");
              $sql="SELECT *FROM hs order by djcs desc limit 0,6";
              $result=mysqli_query($con,$sql);
        ?>
        <li>
          <?php while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
              <a href="hsnew.php?id=<?php echo $row[0];?>">
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

      <h3>红石电路</h3><br>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;红石电路（Redstone circuits）为玩家建造的，可以用于控制或激活其他机械的结构。</h4><br>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;电路本身既可以被设计为用于响应玩家的手动激活，也可以让其自动工作——或是反复输出信号，或是响应非玩家引发的变化，例如生物移动、物品掉落、植物生长、日夜更替等等。Minecraft中能够被红石控制的机械类别几乎覆盖了你能够想象到的极限，小到最简单的机械（如自动门与光开关），大到占地巨大的电梯、自动农场、小游戏平台，甚至游戏内建造的计算机。了解如何构建和使用红石电路及其可控制的机制能极大地增加Minecraft中可游玩的深度。</h4>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;红石电路的主题非常广泛，本条目只是红石电路的一个概述。点击各章节的主条目可以查看详细信息。</h4><br>
      <ul class="nav nav-pills nav-stacked">
        <?php
              include_once("conn/conn.php");
              $sql="SELECT *FROM hs";
              $result=mysqli_query($con,$sql);
        ?>
        <li>
          <?php while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
              <a href="hsnew.php?id=<?php echo $row[0];?>">
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