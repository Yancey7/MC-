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
    h5{
      letter-spacing:3px;
      line-height:1.8em;
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
						$sql46="SELECT *FROM xs where id='$id'";
						$result46=mysqli_query($con,$sql46);
						$row4=mysqli_fetch_array($result46,MYSQLI_NUM);
						$djcs=$row4[6]+1;
            //echo $djcs;
            $sqlt="update xs set djcs='$djcs' where id='$id'";
						$result9=mysqli_query($con,$sqlt);
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

    <?php include_once("conn/conn.php");

          $id=$_GET["id"];
          //echo $id;
          $sql="SELECT *FROM xs where id='$id'";
          $result=mysqli_query($con,$sql);

          $sql2="SELECT *FROM xs order by id desc";
          $result2=mysqli_query($con,$sql2);
          $num=mysqli_num_rows($result2);

          $idaa=$id; 
          if ($idaa>=$num){ 
              $idaa=$num;
          }else{
            $idaa=$id+1;
          }						
                $sql6="SELECT *FROM xs where id='$idaa'";
          $result6=mysqli_query($con,$sql6);
          $row6=mysqli_fetch_array($result6,MYSQLI_NUM);

                      //显示上一篇
                $idaa2=$id; 
          if ($idaa2<=1){ 
              $idaa2=1;
          }else{
            $idaa2=$id-1;
          }						
          $sql66="SELECT *FROM xs where id='$idaa2'";
          $result66=mysqli_query($con,$sql66);
          $row66=mysqli_fetch_array($result66,MYSQLI_NUM);
          while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
          ?>

    <div class="col-sm-8">
      <!-- 子页内容，文字加图片 -->
      
      <h3><?php echo $row[1] ?></h3>
    <hr  style="height:2px">
    <tr>
      <td>
        <h5 style="text-indent:2em;"><?php echo $row[2];?></h5>
      </td>
    </tr>
    <tr width="369" height="97">
      <td><img src="<?php echo "pic/xs/".$row[3];?>" style="width:100%; height:100%;"></td>
    </tr>
    <tr>
      <td>
        发布人：<?php echo $row[5];?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 发布时间：<?php echo $row[4];?></br><hr  style="height:2px">
      </td>
    </tr>
    <tr height="50">
      <td style="font-size:18px">&nbsp;上一篇：<a href="xsnew.php?id=<?php echo $row66[0];?>&a=s&b=t"><?php 
      echo $row66[1];
      ?></a>&nbsp;&nbsp;&nbsp;&nbsp;下一篇：<a href="xsnew.php?id=<?php echo $row6[0];?>&a=s&b=t"><?php 
      echo $row6[1];?></a></td>
    </tr>
    <?php }?>

    </div>
      
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>U2FsdGVkX1/NvqS6qj2xEQSIcxxxphmCxTAnk9Tuonw=</p>
</div>
</body>
</html>