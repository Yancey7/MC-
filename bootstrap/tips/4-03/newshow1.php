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
						
						
						$sql2="SELECT *FROM news order by id asc";
						$result2=mysqli_query($con,$sql2);
						$num=mysqli_num_rows($result2);
						
						$idaa=$id; 
						if ($idaa>=$num){ 
						    $idaa=$num;
						}else{
							$idaa=$id+1;
						}						
			            $sql6="SELECT *FROM news where id='$idaa'";
						$result6=mysqli_query($con,$sql6);
						$row6=mysqli_fetch_array($result6,MYSQLI_NUM);

                         //显示上一篇
			            $idaa2=$id; 
						if ($idaa2<=1){ 
						    $idaa2=1;
						}else{
							$idaa2=$id-1;
						}						
			            $sql66="SELECT *FROM news where id='$idaa2'";
						$result66=mysqli_query($con,$sql66);
						$row66=mysqli_fetch_array($result66,MYSQLI_NUM);
						?>
<div class="container">
  <div class="row">
    <div class="col-sm-4" style="background:#CCC; font-size:24px; height:100%">
      <h1>新闻列表</h1>
      <?php while($row2=mysqli_fetch_array($result2,MYSQLI_NUM)){ ?>
          <a href="newshow1.php?aaaid=<?php echo $row2[0];?>">
	     <?php echo "第".$row2[0]."条".$row2[1];echo "<br>";?>
         </a>
	 <?php }
	  ?>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">
      <h2 align="center">新闻内容标题</h2>
      <h5 align="center">发布时间：<?php echo $id;?>   发布人：</h5>
      <div class="fakeimg"><?php while($row1=mysqli_fetch_array($result,MYSQLI_NUM)){ 
	     echo $row1[2];
	  ?></div>
      <?php $str =$row1[3];
		$arr=explode("$$",$str);
		foreach($arr as $value){ echo "<br>";?>
      <img src="image/<?php echo $value;?>" style=" width:80%; height:20%; margin-left:60px;" >
      	<?php echo '<br />'; }?>
      <h2>&nbsp;上一篇：<a href="newshow1.php?aaaid=<?php echo $row6[0];?>&a=s&b=t"><?php 
						echo $row6[0];
						?></a>&nbsp;&nbsp;&nbsp;&nbsp;下一篇：<a href="newshow1.php?aaaid=<?php echo $row66[0];?>&a=s&b=t"><?php 
						echo $row66[0];?></a></h2>
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