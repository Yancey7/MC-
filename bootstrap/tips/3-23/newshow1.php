<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 一个简单的网页</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">  
	<script src="jquery-2.1.1/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<style>
    .fakeimg {
        height: 200px;
         background: #aaa;
    }
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0; background-image: url(image/bt1.jpg);background-size:100% 100%;">
  <h1>我的第一个 Bootstrap 页面</h1>
  <p>重置浏览器窗口大小查看效果！</p> 
</div>

<nav class="navbar navbar-inverse" style=" background-color:#3FC; font-size:24px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">网站名</a>
    </div>
     <div>
        <ul class="nav navbar-nav">
            <li ><a href="index.php">主页</a></li>
            <li class="dropdown"><a href="index_pic.php" class="dropdown-toggle" data-toggle="dropdown">图片页面</a>
                <ul class="dropdown-menu">
                    <li><a href="help.html">系统帮助</a></li>
                    <li class="divider"></li>
                    <li><a href="about.html">系统关于</a></li>
                </ul>
            </li>
            <li><a href="index_news.php">新闻页面</a></li>
            <li><a href="index_news.php">留言页面</a></li>
            <li><a href="index_news.php">问卷调查</a></li>
            <li><a href="index_qw.php">趣味编程</a></li>
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
<?php 	                include_once("conn/conn.php");
						$id=$_GET["aaaid"];
						//echo $id;
						$sql="SELECT *FROM news where id='$id'";
						$result=mysqli_query($con,$sql);
						
					   //保存被点击文章的次数，先读出原来的点击次数，再加上1，再更新原来的值
						$sql46="SELECT *FROM news where id='$id'";
						$result46=mysqli_query($con,$sql46);
						$row4=mysqli_fetch_array($result46,MYSQLI_NUM);
						$djcs=$row4[6]+1;
						//echo $djcs;
                        $sqlt="update news set djcs='$djcs' where id='$id'";
						$result9=mysqli_query($con,$sqlt);
						?>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h1>关于我</h1>
      <h5>我的照片:</h5>
      <div class="fakeimg">这边插入图像</div>
      <p>关于我的介绍..</p>
      <h3>链接</h3>
      <p>描述文本。</p>

      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">
      <h2>新闻内容标题</h2>
      <h5><?php echo $id;?></h5>
      <div class="fakeimg"><?php while($row1=mysqli_fetch_array($result,MYSQLI_NUM)){ 
	     echo $row1[2];
	  ?></div>
      <img src="image/<?php echo $row1[3];?>" style=" width:80%; height:20%;">
      <p>菜鸟教程，学的不仅是技术，更是梦想！！！菜鸟教程，学的不仅是技术，更是梦想！！！菜鸟教程，学的不仅是技术，更是梦想！！！</p>
      <br>
      <?php }?>
    </div>
  </div>
    <div class="row">
        <div class="col-sm-3" >
            <img src="image/1.jpg" style=" width:100%; height:100%;">
        </div>
        <div class="col-sm-3">
               <img src="image/1.jpg" class="img-rounded" style=" width:100%; height:100%;">
        </div>
         <div class="col-sm-3">
                 <img src="image/1.jpg" class="img-rounded" style=" width:100%; height:100%;">
        </div>
         <div class="col-sm-3">
                <img src="image/1.jpg" class="img-rounded" style=" width:100%; height:100%;">
        </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>底部内容</p>
</div>
</body>
</html>