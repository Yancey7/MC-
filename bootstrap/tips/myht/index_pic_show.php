<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap框架的网站模拟</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">  
	<script src="jquery-2.1.1/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="icon" href="image/favicon-16x16.png" sizes="16x16" type="image/png">
	<style>
    .fakeimg {
        height: 220px;
        background: #aaa;
    }
	 #myCarousel  .carousel-inner > .item > img {//设置轮播图片的自适应
		display: block;
		width:100%;
		height:220px;
    }
  </style>
</head>
<body style="background-image:url(image/bj1.png);">
<div class="jumbotron text-center" style="margin-bottom:0; background-image:url(image/title.png)" >
  <h1>显示新闻图片内容</h1>
  <p>重置浏览器窗口大小查看效果！</p> 
</div>
<nav class="navbar navbar-inverse" style="background-color:#09F; font-size:18px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"  style="color:#000" href="#">我的bootstarp框架网站</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index_pic.php">返回</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" >
  <div class="row">
    <div class="col-sm-12">
         <img src="image/<?php echo $_GET["id"];?>.png" alt="First slide" width=100% height=100%>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0;background-color:#CCC">
  <p></br>Copyright &copy; 2006-2013 汕尾职业技术学院 联系电话：0660-3362144 招生电话:(0660)3386864 3396865 传真：0660-3371568</br>
地址：广东省汕尾市城区文德路 邮编：516600 管理员邮箱：admin@swvtc.cn 粤ICP备05084359</p>
</div>
</body>
</html>
