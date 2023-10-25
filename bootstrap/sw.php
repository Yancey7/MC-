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
						$sql="SELECT *FROM sw where id='$id'";
						$result=mysqli_query($con,$sql);
						
					   //保存被点击文章的次数，先读出原来的点击次数，再加上1，再更新原来的值
						$sql23="SELECT *FROM sw where id='$id'";
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
              $sql="SELECT *FROM sw order by djcs desc limit 0,6";
              $result=mysqli_query($con,$sql);
        ?>
        <li>
          <?php while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
              <a href="swnew.php?id=<?php echo $row[0];?>">
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

      <h3>生物简介</h3><br>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;本文章介绍的是原版Minecraft中的生物。关于Minecraft Earth中的生物，请见“Minecraft Earth:生物”。</h4><br>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;生物（Mob）是指游戏世界中有生命的、可自主移动的一类实体。术语“Mob”是“Mobile Entity（可移动的实体）”的简写。</h4>


      <ul class="nav nav-pills nav-stacked">
        <?php
              include_once("conn/conn.php");
              $sql="SELECT *FROM sw";
              $result=mysqli_query($con,$sql);
        ?>
        <li>
          <?php while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
              <a href="swnew.php?id=<?php echo $row[0];?>">
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