
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
        background: #FFF;
    }
	 #myCarousel  .carousel-inner > .item > img {//设置轮播图片的自适应
		display: block;
		width:100%;
		height:220px;
    }
	.nva11{background: #aaa;}
	.news{ width:370px; height:30px; font-size:22px; color:#00F;}
	.news11{ width:30px; height:30px; float:left;}
	.news12{ width:260px; height:30px;float:left;}
	.news13{ width:80px; height:30px; float:left;}
	  
	.newslist{width:100%; height:9px; font-size:22px; color:#00F; background-color:#aaa;} 
	
	.news2{ width:100%; height:90px; font-size:22px; color:#00F; background-color:#FFF;}
	.news21{ width:20%; height:90px; float:left;}
	.news22{ width:80%; height:90px;float:left; background-color:#FFF;}
	.news221{ margin-left:8px;width:97%; height:30px; }
	.news21 img{cursor: pointer;transition: all 0.6s;//设置图片鼠标移动变大
	}
	.news21 img:hover{transform: scale(1.05);}
  </style>
</head>
<?php 

						include_once("conn/conn.php");
						$sql="SELECT *FROM news order by id desc limit 0,7";
						$result=mysqli_query($con,$sql);
						
						$sql1="SELECT *FROM link limit 0,7";
						$result1=mysqli_query($con,$sql1);
						
						
						$sql2="SELECT *FROM  pic limit 0,4";
						$result2=mysqli_query($con,$sql2);
						
						$sql3="SELECT *FROM  news_pic  order by id desc limit 0,6";//读取动态图片
						$result3=mysqli_query($con,$sql3);
						$xx=0;
						$yy=array();
						while($row3=mysqli_fetch_array($result3,MYSQLI_NUM)){
							$xx=$xx+1;
							$yy[$xx]=$row3[1];
						}
						
						$sql4="SELECT *FROM news order by djcs desc limit 0,17";//设置热点次数排行
						$result4=mysqli_query($con,$sql4);
						
					
?>
<body style="background-image:url(image/bj1.png);">
<div class="jumbotron text-center" style="margin-bottom:0; background-image:url(image/bt.png); background-size:100% 100%;" >
  <h1 style="font-size:72px; color:#0F0;">网站开发实训</h1>
   <p style="font-size:12px;"><iframe scrolling="no" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=36&icon=5&num=5" width="540" height="70" marginwidth="0" marginheight="0"></iframe></p> 
</div>

<nav class="navbar navbar-default" role="navigation" style="background-color:#A0C0BA; font-size:22px;">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">我的bootstarp框架网站</a>
    </div>
    <div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">主页</a></li>
            <li><a href="index_pic.php">图片页面</a></li>
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


<div class="container" >
  <div class="row">
    <div class="col-sm-4">
      <h2>动态新闻</h2>
      <h5>2022年新闻图片:</h5>
      <div class="fakeimg" >
                  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators" >
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol>   
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner" style="height: 220px;" >
                <div class="item active">
                    <img src="<?php echo "pic/".$yy[1];?>" alt="First slide">
                </div>
                <div class="item">
                    <img src="<?php echo "pic/".$yy[2];?>" alt="Second slide">
                </div>
                <div class="item">
                    <img src="<?php echo "pic/".$yy[3];?>" alt="Third slide">
                </div>
                <div class="item">
                    <img src="<?php echo "pic/".$yy[4];?>" alt="Third slide">
                </div>
                <div class="item">
                    <img src="<?php echo "pic/".$yy[5];?>" alt="Third slide">
                </div>
                <div class="item">
                    <img src="<?php echo "pic/".$yy[6];?>" alt="Third slide">
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
    </div>
    <div class="col-sm-8">
      <h2>203计算机网络技术</h2>
      <h5>2022年网站开发</h5>
      <div class="fakeimg"><div id="myCarousel1" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner" style="height: 220px;">
        <div class="item active">
            <img src="image/w4.png" alt="First slide" style=" width:100%;">
        </div>
        <div class="item">
            <img src="image/w5.png" alt="Second slide" style=" width:100%;">
        </div>
        <div class="item">
            <img src="image/w6.png" alt="Third slide" style=" width:100%;">
        </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="carousel-control left" href="#myCarousel1" 
       data-slide="prev"> <span _ngcontent-c3="" aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span></a>
    <a class="carousel-control right" href="#myCarousel1" 
       data-slide="next">&rsaquo;</a>
</div></div>
      <p>一些文本..</p>
      <p></p>
      <br>
    </div>
  </div>
  
   <div class="row">
       <div class="col-sm-4" style=" background-color:#666" >
              <h2>动态新闻</h2>
              <div class="fakeimg" >
                 <?php  while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
                  <div class="news">
                    <a href="index_news.php?id=<?php echo $row[0];?>&djtj=<?php echo $row[1];?>">
                     <div class="news11">●</div>
                     <div class="news12"><?php 
						  if(strlen($row[1])>=20){
							echo mb_substr($row[1],0,10,"utf8")."...";echo"<br>";
						  }else{
							 echo $row[1];echo"<br>";  
						  }
						  ?></div>
                     <div class="news13">09-22</div>
                   </a>
                  </div>
               <?php $x2=$x2+1;}?>              
              </div>
              <p>一些文本..</p>
       </div>
       <div class="col-sm-4" style=" background-color:#646" >
              <h2>热门新闻</h2>
              <div class="fakeimg">
              <?php  while($x<7){?>
                  <div class="news">
                    <a href="">
                     <div class="news11">●</div>
                     <div class="news12">计算机网络技术网站开发</div>
                     <div class="news13">09-22</div>
                   </a>
                  </div>
               <?php $x=$x+1;}?>
              </div>
              <p>一些文本..</p>
       </div>
      <div class="col-sm-4" style=" background-color:#626" >
              <h2>友情链接</h2>
              <div class="fakeimg">
               <?php  $x3=1;while($row1=mysqli_fetch_array($result1,MYSQLI_NUM)){?>
                  <div class="news">
                    <a href="">
                     <div class="news11"></div>
                     <div class="news12"><a href=""><?php echo "第".$x3."条、".$row1[2];?></a></div>
                     <div class="news13"></div>
                   </a>
                  </div>
               <?php $x3=$x3+1;}?>     
              </div>
              <p>一些文本..</p>
       </div>
   </div>
         <p></p>
      <div class="row" style="height:600px;">
       <div class="col-sm-8" style=" background-color:#666" >
              <h2>动态新闻第二种形式</h2>
              <div class="fakeimg" style="height:600px;">
               <?php  while($x1<6){?>
                  <div class="news2">
                     <div class="news21">
                         <a href="index_pic_show.php?id=w2"><img src="image/w2.png" alt="First slide" style=" width:140px;height:90px;"></a>
                     </div>
                     <div class="news22">
                        <a href="">
                        <div class="news221">汕尾职业技术学院工程学院计算机网络技术网站开发实训课程2022年电教505教室</div>
                        <div class="news221"></div>
                        </a>
                        <div class="news221">发布部门：123  | 多少条评论。时间</div>
                     </div>
                  </div> 
                  <div class="newslist"></div>
                  <?php $x1=$x1+1;}?>
              </div>
              <p>一些文本..</p>
       </div>
       <div class="col-sm-4" style=" background-color:#646" >
              <h2>热门新闻</h2>
              <div class="fakeimg" style="height:600px;">
                 <?php  while($row4=mysqli_fetch_array($result4,MYSQLI_NUM)){?>
                  <div class="news" style="font-size:24px">
                    <a href="">
                     <div class="news11" style="<?php if($x4<3){echo "color:#F00";}else { echo "color:#000";}?>;">★</div>
                     <div class="news12"><?php 
						  if(strlen($row4[1])>=20){
							echo mb_substr($row4[1],0,10,"utf8")."...";echo"<br>";
						  }else{
							 echo $row4[1];echo"<br>";  
						  }
						  ?></div>
                     <div class="news13">09-22</div>
                   </a>
                  </div>
               <?php $x4=$x4+1;}?>
              
              </div>
              <p>一些文本..</p>
       </div>
   </div>
         <p></p>
         
    <div class="row">
    <?php  while($row2=mysqli_fetch_array($result2,MYSQLI_NUM)){?>
    <a href="">
    <div class="col-sm-3">
                   <h2>热门图片<?php echo $row2[0];?></h2>
        <div class="fakeimg" style="background-image:url('<?php echo "image/".$row2[2];?>')"><?php echo $row2[3];?></div>
              <p>一些文本..</p>
    </div>
    </a>
  <?php $x44=$x44+1;} ?>


  </div>
</div>


<div class="jumbotron text-center" style="margin-bottom:0;background-color:#CCC">
  <p></br>Copyright &copy; 2006-2013 汕尾职业技术学院 联系电话：0660-3362144 招生电话:(0660)3386864 3396865 传真：0660-3371568</br>
地址：广东省汕尾市城区文德路 邮编：516600 管理员邮箱：admin@swvtc.cn 粤ICP备05084359</p>
</div>
</body>
</html>
