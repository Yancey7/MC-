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
	   height: 800px;
       background-size:contain;
}
.bg img{
	width:100%;
	height: auto;
}
.newsbt{ 
     background:url() ;
     height:40px;
 
 }
    </style>
</head>
 <?php 
	                    include_once("conn/conn.php");
						$id=$_GET["id"];
						//echo $id;
						$sql="SELECT *FROM news where id='$id'";
						$result=mysqli_query($con,$sql);
						// 数字数组
						//$row=mysqli_fetch_array($result,MYSQLI_NUM);
						//计算出表中的总记录数
						$sql8="SELECT *FROM news";
						$result8=mysqli_query($con,$sql8);
						$num=mysqli_num_rows($result8);
						
						//保存被点击文章的次数，先读出原来的点击次数，再加上1，再更新原来的值
						$sql46="SELECT *FROM news where id='$id'";
						$result46=mysqli_query($con,$sql46);
						$row4=mysqli_fetch_array($result46,MYSQLI_NUM);
						$djcs=$row4[6]+1;
						//echo $djcs;
                        $sqlt="update news set djcs='$djcs' where id='$id'";
						$result9=mysqli_query($con,$sqlt);
                         //显示下一篇
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

						while($row=mysqli_fetch_array($result,MYSQLI_NUM)){ ?>
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
<div class="container">
  <div class="row">
    <div class="col-sm-12">

      <div class="bg" ><table width=100%  height=100% border="0"  style="background-color:#FFF">
          <tr>
            <td width=18% height="50" align="center" style="background-color:#CCC"><h3>新闻标题</h3></td>
            <td width=2% height="50" background="image/bj1.png" >&nbsp;</td>
            <td width=80% height="50" align="center" ><h2>新闻内容<?php echo $_GET["djtj"];?></h2></td>
          </tr>
          <tr>
            <td width=18% rowspan="6" align="left" style="background-image:url(image/bj12.png); background-size:100% 100%; font-size:18px"><?php
	                    //include_once("conn/conn.php");
						//$id=$_GET["id"];
						//echo $id;
						$sql1="SELECT *FROM news order by id desc limit 0,22";
						$result1=mysqli_query($con,$sql1);
						// 数字数组
						//$row=mysqli_fetch_array($result,MYSQLI_NUM);
						while($row1=mysqli_fetch_array($result1,MYSQLI_NUM)){ ?><div class="newsbt"><a href="index_news.php?id=<?php echo $row1[0];?>&a=s&b=t"><?php if(strlen($row1[1])>=16){
							 echo $row1[0].".".mb_substr($row1[1],0,6,"utf8")."...";
						  }else{
							 echo $row1[0].".".$row1[1];  
						  }?></a></div><?php }?></td>
            <td width=2% rowspan="6" background="image/bj1.png" >&nbsp; </td>
            <td width=80%></td>
          </tr>
          <tr>
            <td align="center">发布人：陈老师&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 发布时间：2022-09-13</br><hr  style="height:8px"></td>
          </tr>
          <tr>
            <td><p style="text-indent:2em;"><?php echo $row[2];?></p></td>
          </tr>
          <tr width="369" height="97">
            <td><img src="<?php echo "image/".$row[3];?>" style="width:100%; height:407px;"></td>
          </tr>
          <tr height="50">
            <td align="center" style="font-size:18px">&nbsp;上一篇：<a href="index_news.php?id=<?php echo $row6[0];?>&a=s&b=t"><?php 
						echo $row6[1];
						?></a>&nbsp;&nbsp;&nbsp;&nbsp;下一篇：<a href="index_news.php?id=<?php echo $row66[0];?>&a=s&b=t"><?php 
						echo $row66[1];?></a></td>
          </tr>
      </table><?php }?>
      </div>
    </div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0;background-color:#CCC">
  <p style="font-size:18px;"></br>Copyright&copy; 2006-2013 汕尾职业技术学院 联系电话：0660-3362144 招生电话:(0660)3386864 3396865 传真：0660-3371568</br>
地址：广东省汕尾市城区文德路 邮编：516600 管理员邮箱：admin@swvtc.cn 粤ICP备05084359</p>
</div>
</body>
</html>
