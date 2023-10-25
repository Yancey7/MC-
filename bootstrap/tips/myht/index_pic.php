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
	.bg {
       background:url(图片地址) no-repeat center;
	   height: 200px;
       background-size:contain;
}
.bg img{ width:100%;height: 200px;}
 
  </style>
</head>
<body style="background-image:url(image/bj1.png);">
<div class="jumbotron text-center" style="margin-bottom:0; background-image:url(image/title.png)" >
  <h1>子页面设计</h1>
  <p>子页面设计</p> 
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
        <li class="active"><a href="index.php">主页</a></li>
        <li><a href="help.html">帮助</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" >
  <div class="row">
    <div class="col-sm-4">
      <h3>203网络技术班第一组:</h3>
      <div class="bg" ><a href="index_pic_show.php?id=w1"><img src="image/w1.png" alt="First slide"></a></div>
    </div>
    <div class="col-sm-4">
      <h3>203网络技术班第二组:</h3>
      <div class="bg"><a href="index_pic_show.php?id=w2"><img src="image/w2.png" alt="First slide"></a></div>
    </div>
    <div class="col-sm-4">
      <h3>203网络技术班第三组:</h3>
      <div class="bg"><a href="index_pic_show.php?id=w3"><img src="image/w3.png" alt="First slide"></a></div>
    </div>
  </div>
    <div class="row">
    <div class="col-sm-4">
      <h3>203网络技术班第四组:</h3>
      <div class="bg" >
            <a href="index_pic_show.php?id=w4"><img src="image/w4.png" alt="First slide"> </a>    
      </div>
    </div>
    <div class="col-sm-4">
      <h3>203网络技术班第五组:</h3>
      <div class="bg"><a href="index_pic_show.php?id=w5"><img src="image/w5.png" alt="First slide"></a></div>
    </div>
    <div class="col-sm-4">
      <h3>203网络技术班第六组:</h3>
      <div class="bg"><a href="index_pic_show.php?id=w6"><img src="image/w6.png" alt="First slide"></a></div>
    </div>
  </div>
   <div class="row">
    <div class="col-sm-4">
      <h3>203网络技术班第七组:</h3>
      <div class="bg" ><a href="index_pic_show.php?id=w7"><img src="image/w7.png" alt="First slide"></a></div>
    </div>
    <div class="col-sm-4">
      <h3>203网络技术班第八组:</h3>
      <div class="bg"><a href=index_pic_show.php?id=w8"><img src="image/w8.png" alt="First slide"></a></div>
    </div>
    <div class="col-sm-4">
      <h3>203网络技术班第九组:</h3>
      <div class="bg"><a href="index_pic_show.php?id=w9"><img src="image/w9.png" alt="First slide"></a></div>
    </div>
  </div>
        <h2></h2>
</div>

<div class="jumbotron text-center" style="margin-bottom:0;background-color:#CCC">
  <p></br>Copyright &copy; 2006-2013 汕尾职业技术学院 联系电话：0660-3362144 招生电话:(0660)3386864 3396865 传真：0660-3371568</br>
地址：广东省汕尾市城区文德路 邮编：516600 管理员邮箱：admin@swvtc.cn 粤ICP备05084359</p>
</div>
</body>
</html>
