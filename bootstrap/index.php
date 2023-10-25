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
        border: #000 solid 1px;
        margin:5px auto;
        overflow:hidden;
    }
    h4{
      letter-spacing:3px;
      line-height:2em;
    }
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0; background-image:url(pic/head.png); background-size:100% 300%;" >
  <h1>MC中文网</h1>
  <p>Creeper?!!!</p> 
</div>

<nav class="navbar navbar-inverse" >
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
  <div class="row">
    <div class="col-sm-4">
      <h3>热门点击排行</h3>

      <!-- <ul class="nav nav-pills nav-stacked">
        <?php
              include_once("conn/conn.php");
              $sql="SELECT * FROM fm union all select * from ml union all select * from hs union all select * from sw union all select * from wp union all select * from xs order by djcs desc limit 0,24";
              $result=mysqli_query($con,$sql);
        ?>
        <li><a href="#">链接 1</a></li>
        <li><a href="#">链接 2</a></li>
        <li>
          <?php while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
              <a href="#=<?php echo $row[0];?>">
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
      </ul> -->

      <h4>命令：</h4>
      <ul class="nav nav-pills nav-stacked">
        <?php
              include_once("conn/conn.php");
              $sql="SELECT *FROM ml order by djcs desc limit 0,4";
              $result=mysqli_query($con,$sql);
        ?>
        <li>
          <?php while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
              <a href="mlnew.php?id=<?php echo $row[0];?>">
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


      <h4>附魔：</h4>
      <ul class="nav nav-pills nav-stacked">
        <?php
              include_once("conn/conn.php");
              $sql="SELECT *FROM fm order by djcs desc limit 0,4";
              $result=mysqli_query($con,$sql);
        ?>
        <li>
          <?php while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
              <a href="fmnew.php?id=<?php echo $row[0];?>">
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

      <h4>红石电路：</h4>
      <ul class="nav nav-pills nav-stacked">
        <?php
              include_once("conn/conn.php");
              $sql="SELECT *FROM hs order by djcs desc limit 0,4";
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

      <h4>新手手册：</h4>
      <ul class="nav nav-pills nav-stacked">
        <?php
              include_once("conn/conn.php");
              $sql="SELECT *FROM xs order by djcs desc limit 0,4";
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

      <h4>物品一览：</h4>
      <ul class="nav nav-pills nav-stacked">
        <?php
              include_once("conn/conn.php");
              $sql="SELECT *FROM wp order by djcs desc limit 0,4";
              $result=mysqli_query($con,$sql);
        ?>
        <li>
          <?php while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
              <a href="wpnew.php?id=<?php echo $row[0];?>">
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

      <h3>生物简介：</h3>
      <ul class="nav nav-pills nav-stacked">
        <?php
              include_once("conn/conn.php");
              $sql="SELECT *FROM sw order by djcs desc limit 0,4";
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
      
      <h2>Minecraft简介</h2>
      <div class="//fakeimg">
        <img decoding="async" src="pic/body1.png" class="fakeimg">
      </div>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;Minecraft（《我的世界》）是一款3D沙盒电子游戏，由Mojang Studios开发。玩家可无拘无束地与由方块、实体构成的3个维度环境互动。多种玩法供玩家选择，带来无限可能。目前Minecraft可分为Java版、基岩版和教育版。</h4>
      <br>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;Minecraft Dungeons（《我的世界：地下城》）是一款动作冒险类游戏，玩家可在这款游戏中进行战斗：独自勇闯地下城，或与最多四名朋友组队，在动感十足、充满宝藏、由程序生成的元素各不相同的关卡中一起战斗——拯救村民，打倒邪恶的奇厄教主。</h4>
      <br>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;Minecraft Dungeons Arcade（《我的世界：地下城》街机版）是前者的街机移植版，需要4位玩家共同通过关卡并击败接连不断的怪物，还可以通过扫描收藏卡获得装备、皮肤和宠物。</h4>
      
      <h3>即将到来</h3>
      <div class="//fakeimg">
        <img decoding="async" src="pic/body2.PNG" class="fakeimg">
      </div>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;Minecraft Legends（《我的世界：传奇》）是一款即时动作战略游戏，预计于2023年4月18日发布，玩家需要抵挡猪灵的入侵，守护主世界。</h4>
      <br>

      <h3>终止支持</h3>
      <br>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;Minecraft: Story Mode（《我的世界：故事模式》）是一款基于Minecraft制作的游戏，具有可点选性、叙事性、章节性。其由Mojang Studios与Telltale Games合作开发。玩家需要完成一个又一个的章节推动进程，每次选择行动都会对故事产生影响。</h4>
      <br>
      <h4>&nbsp; &nbsp; &nbsp; &nbsp;Minecraft: Story Mode - Season Two（《我的世界：故事模式 - 第二季》）是前者的续作，在原游戏的剧情基础上加入了新的故事内容，包含一些来自更新版本Minecraft的内容。</h4>
      <br>
      <!-- 左对齐 盒子内容连接数据库 部分图片未创建-->

      <!-- <?php
                $sql="SELECT *FROM sw order by id asc limit 0,3";
                $result=mysqli_query($con,$sql);
      ?>
        
        <?php while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>

          <div class="media">
            <div class="media-left">
              <img decoding="async" src="pic/sw/<?php echo $row[0];?>.PNG" class="media-object" style="width:120px">
            </div>
          <div class="media-body">
            <h4 class="media-heading">
             <a href="swnew.php?id=<?php echo $row[0];?>">
                <?php 
						     if(strlen($row[1])>=20){
						  	    echo mb_substr($row[1],0,10,"utf8")."...";echo"<br>";
						     }else{
						  	    echo $row[1];echo"<br>";  
						     }
						   ?>  
               </a>
            </h4>
          <p>
            <?php 
						    if(strlen($row[2])>=20){
							    echo mb_substr($row[2],0,60,"utf8")."...";echo"<br>";
						    }else{
							    echo $row[2];echo"<br>";  
						    }
						  ?>
          </p>

        </div>
      </div>
              
        <?php }?>

      <div class="media">
        <div class="media-left">
          <img decoding="async" src="pic/1.PNG" class="media-object" style="width:120px">
        </div>
        <div class="media-body">
          <h4 class="media-heading">
            test
          </h4>
          <p>这是一些示例文本...</p>
        </div>
      </div> -->

      <!-- 左对齐 -->
      <!-- <div class="media">
        <div class="media-left">
          <img decoding="async" src="pic/1.PNG" class="media-object" style="width:120px">
        </div>
        <div class="media-body">
          <h4 class="media-heading">左对齐test</h4>
          <p>这是一些示例文本...</p>
        </div>
      </div> 

      <h2>标题</h2>
      <h5>副标题</h5>
      <div class="fakeimg">图像</div>
      <p>一些文本..</p>
      <p>菜鸟教程，学的不仅是技术，更是梦想！！！菜鸟教程，学的不仅是技术，更是梦想！！！菜鸟教程，学的不仅是技术，更是梦想！！！</p> -->

      <!-- 左对齐 -->
      <!-- <div class="media">
        <div class="media-left">
          <img decoding="async" src="pic/1.PNG" class="media-object" style="width:120px">
        </div>
        <div class="media-body">
          <h4 class="media-heading">左对齐</h4>
          <p>这是一些示例文本...</p>
        </div>
      </div> -->

    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>U2FsdGVkX1/NvqS6qj2xEQSIcxxxphmCxTAnk9Tuonw=</p>
</div>
</body>
</html>