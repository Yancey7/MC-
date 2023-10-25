<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 一个简单的网页</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"> 
    <link href="css/niaochao.css" rel="stylesheet" type="text/css" /> 
	<script src="jquery-2.1.1/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<style type="text/css">
	 #myCarousel  .carousel-inner > .item > img {//设置轮播图片的自适应
		display: block;
		width:100%;
		height:180px;
    }
	
		#div1{
		  width: 280px;
		  height: 250px;
		  border: #000 solid 1px;
		  margin: 50px auto;
		  overflow: hidden;
		}
		#div1 img{
		  cursor: pointer;
		  transition: all 0.6s;
		}
		#div1 img:hover{
		  transform: scale(1.4);
		}
		#my21:hover{
			background-color:#9CF;}
		#new{
			width:20%;
			}
	.newslist{width:100%; height:9px; font-size:22px; color:#00F; background-color:#aaa;} 
	
	.news2{ width:100%; height:90px; font-size:22px; color:#00F; background-color:#FFF;}
	.news21{ width:20%; height:90px; float:left;}
	.news22{ width:80%; height:90px;float:left; background-color:#FFF;}
	.news221{ margin-left:8px;width:97%; height:30px; }
	.news21 img{cursor: pointer;transition: all 0.6s;//设置图片鼠标移动变大
	}
	.news21 img:hover{transform: scale(1.05);}
	
	.news3{
		width:100%;height:20px; font-size:22px;
		}
	.news31{
		width:80%;height:20px; float:left;
		}
	.news32{
		width:20%;height:20px;float:left;
		}
	.news4{
		width:100%;height:4px;
		}	
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0; background-image: url(image/bt1.png);background-size:100% 100%;">
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

<div class="container">
  <div class="row">
    <div class="col-sm-6" >
            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>   
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner" >
                    <div class="item active">
                        <img src="image/4.jpg" alt="First slide" style="height:320px;">
                        <div class="carousel-caption">标题11</div>
                    </div>
                    <div class="item">
                        <img src="image/5.jpg" alt="Second slide" style="height:320px;">
                        <div class="carousel-caption">标题22</div>
                    </div>
                    <div class="item">
                        <img src="image/6.jpg" alt="Third slide" style="height:320px;">
                        <div class="carousel-caption">标题33</div>
                    </div>
                    <div class="item">
                        <img src="image/7.jpg" alt="Third slide1" style="height:320px;">
                        <div class="carousel-caption">标题44</div>
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
    <div class="col-sm-6">
             <div id="div1" style="width:100%;">
            <img src="image/6.jpg" style="width:100%; height:100%;">
            </div>
    </div>
  </div>
   <div class="row">
        <div class="col-sm-8" >
        <?php  while($x1<6){?>
             <div class="news2">
                     <div class="news21">
                         <a href="index_pic_show.php?id=w2"><img src="image/8.jpg" alt="First slide" style=" width:140px;height:90px;"></a>
                     </div>
                     <div class="news22">
                        <a href="">
                        <div class="news221">汕尾职业技术学院工程学院计算机网络技术网站开发实训课程2023年电教507教室</div>
                        <div class="news221"></div>
                        </a>
                        <div class="news221">发布部门：123  | 多少条评论。时间</div>
                     </div>
                  </div> 
                  <div class="newslist"></div>
                  <?php $x1=$x1+1;}?>
        </div>
        <div class="col-sm-4"  style="font-size:18px;">
               <?php 
			   			include_once("conn/conn.php");
						$sql="SELECT *FROM news order by id desc limit 0,24";
						$result=mysqli_query($con,$sql);
			       while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
                   <a href="newshow1.php?aaaid=<?php echo $row[0];?>">
                   <div class="news3">
                         <div class="news31"><?php 
						  if(strlen($row[1])>=20){
							 echo mb_substr($row[1],0,10,"utf8")."...";echo"<br>";
						  }else{
							 echo $row[1];echo"<br>";  
						  }
						  ?></div>
                         <div class="news32" align="right"><?php echo "03-13";?></div>                    
                   </div>
                   </a>
                   <div class="news4"></div>
				  <?php }?>
        </div>
  </div>
    <div class="row">
        <div class="col-sm-3" >
            <div id="div1">
            <img src="image/3.jpg" style=" width:100%; height:100%;">
            </div>
        </div>
        <div class="col-sm-3">
             <div id="div1">
               <img src="image/4.jpg" class="img-rounded" style=" width:100%; height:100%;">
               </div>
        </div>
        <div class="col-sm-3">
              <div id="div1">
                 <img src="image/5.jpg" class="img-rounded" style=" width:100%; height:100%;">
                 </div>
        </div>
         <div class="col-sm-3">
              <div id="div1">
                <img src="image/6.jpg" class="img-rounded" style=" width:100%; height:100%;">
                </div>
        </div>
  </div>
              <!-- 排行榜代码 -->
      <div class="row">
        <div class="col-sm-12" >
        热门点击排行
             <?php 
			   			
						$sql1="SELECT *FROM news order by djcs desc limit 0,6";
						$result1=mysqli_query($con,$sql1);
			       while($row1=mysqli_fetch_array($result1,MYSQLI_NUM)){?>
                   <a href="newshow1.php?aaaid=<?php echo $row1[0];?>">
                   <div class="news3">
                         <div class="news31"><?php 
						  if(strlen($row1[1])>=20){
							 echo mb_substr($row1[1],0,10,"utf8")."...";echo"<br>";
						  }else{
							 echo $row1[1];echo"<br>";  
						  }
						  ?></div>
                         <div class="news32" align="right"><?php echo "03-13";?></div>                    
                   </div>
                   </a>
                   <div class="news4"></div>
				  <?php }?>
        </div>

  </div>
      <div class="row">
        <div class="col-sm-12" >
            <div id="piczhanshi" style=" width:100%; height:100%;" >
              <div id="tupian" style=" width:100%; height:100%;">
                <div id="demo" style=" width:100%; height:100%;">  
                  <div id="indemo" style="float:left;width:800%;">                 
                    <div id="demo1" style="float:left;">     
                        <img src="images/niaochao1.jpg" alt="鸟巢1" />
                        <img src="images/niaochao2.jpg" alt="鸟巢2" />
                        <img src="images/niaochao3.jpg" alt="鸟巢3" />
                        <img src="images/niaochao4.jpg" alt="鸟巢4" />
                        <img src="images/niaochao5.jpg" alt="鸟巢5" />
                        <img src="images/niaochao6.jpg" alt="鸟巢6" />
                        <img src="images/niaochao7.jpg" alt="鸟巢7" />
                        <img src="images/niaochao8.jpg" alt="鸟巢8" />
                        <img src="images/niaochao9.jpg" alt="鸟巢9" />
                    </div>                   
                    <div id="demo2" style="float:left;"></div>                 
                  </div>                  
                </div> 
              </div>
            </div>
        </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p></br>Copyright &copy; 2006-2013 汕尾职业技术学院 联系电话：0660-3362144 招生电话:(0660)3386864 3396865 传真：0660-3371568</br>
地址：广东省汕尾市城区文德路 邮编：516600 管理员邮箱：admin@swvtc.cn 粤ICP备05084359</p>
</div>
</body>
</html>
<script language="javascript">
  var speed=20; //数字越大速度越慢
  var tab=document.getElementById("demo");
  var tab1=document.getElementById("demo1");
  var tab2=document.getElementById("demo2");
  tab2.innerHTML=tab1.innerHTML;
  function marquee()
  {
	if(tab2.offsetWidth-tab.scrollLeft<=0) 
	tab.scrollLeft-=tab1.offsetWidth  
	else{tab.scrollLeft++;}
  }
  var myMar=setInterval(marquee,speed);
  tab.onmouseover=function() {clearInterval(myMar)};
  tab.onmouseout=function() {myMar=setInterval(marquee,speed)};
</script>  
<script src="jquery-2.1.1/jquery.min.js"></script>
<div id="imgDiv" style="position:absolute;left:50px;top:60px;">
<div id="a" style="width:20px;height:20px;position:absolute;left:160px;background:salmon;text-align: center;">X</div>
<!-- <img src="01.jpg" border="0" /> -->
<div style="width:180px;height:180px;background:red; font-size:36px;">213韩师班</div>
</div>

<script>
var xin = true,
yin = true;
var step = 1;
var delay = 10;
var $obj;
$(function() {
$obj = $("#imgDiv");
var time = window.setInterval("move()", delay);
$obj.mouseover(function() {
clearInterval(time)
});
$obj.mouseout(function() {
time = window.setInterval("move()", delay)
});
});

function move() {
var left = $obj.offset().left;
var top = $obj.offset().top;
var L = T = 0; //左边界和顶部边界
var R = $(window).width() - $obj.width(); // 右边界
var B = $(window).height() - $obj.height(); //下边界

//难点:怎样判断广告的4个边框有没有超出可视化范围!
if (left < L) {
xin = true; // 水平向右移动
}
if (left > R) {
xin = false;
}
if (top < T) {
yin = true;
}
if (top > B) {
yin = false;
}
//根据有没有超出范围来确定广告的移动方向
left += step * (xin == true ? 1 : -1);
top += step * (yin == true ? 1 : -1);
// 给div 元素重新定位
$obj.offset({
top: top,
left: left
})
}
//关闭
$(function() {
$("#a").click(function() {
var b = $("#a").parent();
$(b).remove();
})
})
</script>