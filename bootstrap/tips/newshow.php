<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>阿猫万事屋</title>
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
  <h1>阿猫万事屋</h1>
</div>
<nav class="navbar navbar-inverse" style=" background-color:#1FADC5; font-size:24px;">
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
<?php include_once("conn/conn.php");
						$id=$_GET["id"];
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

            $sql2="SELECT *FROM news order by id desc";
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
            while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
						?>
<div class="container">
  <div class="row">
  <div class="col-sm-12">

<div class="bg" ><table width=100%  height=100% border="0"  style="background-color:#FFF">
    <tr>
      <td width=18% height="50" align="center" style="background-color:#CCC"><h3>新闻标题</h3></td>
      <td width=2% height="50" background="image/bj1.png" >&nbsp;</td>
      <td width=80% height="50" align="center" ><h2><?php echo $row[1];?></h2></td>
    </tr>
    <tr>
      <td width=18% rowspan="6" align="left" style="background-size:100% 100%; font-size:24px"><?php
                //include_once("conn/conn.php");
      //$id=$_GET["id"];
      //echo $id;
      $sql1="SELECT *FROM news order by id desc limit 0,22";
      $result1=mysqli_query($con,$sql1);
      // 数字数组
      //$row=mysqli_fetch_array($result,MYSQLI_NUM);
      while($row1=mysqli_fetch_array($result1,MYSQLI_NUM)){ ?><div class="newsbt"><a href="newshow.php?id=<?php echo $row1[0];?>&a=s&b=t"><?php if(strlen($row1[1])>=14){
         echo $row1[0].".".mb_substr($row1[1],0,6,"utf8")."...";
        }else{
         echo $row1[0].".".$row1[1];  
        }?></a></div><?php }?></td>
      <td width=2% rowspan="6" background="image/no1.png" >&nbsp; </td>
      <td width=80%></td>
    </tr>
    <tr>
      <td align="center">发布人：<?php echo $row[5];?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 发布时间：<?php echo $row[4];?></br><hr  style="height:8px"></td>
    </tr>
    <tr>
      <td><p style="text-indent:2em;"><?php echo $row[2];?></p></td>
    </tr>
    <tr width="369" height="97">
      <td><img src="<?php echo "image/".$row[3];?>" style="width:100%; height:407px;"></td>
    </tr>
    <tr height="50">
      <td align="center" style="font-size:18px">&nbsp;上一篇：<a href="newshow.php?id=<?php echo $row6[0];?>&a=s&b=t"><?php 
      echo $row6[1];
      ?></a>&nbsp;&nbsp;&nbsp;&nbsp;下一篇：<a href="newshow.php?id=<?php echo $row66[0];?>&a=s&b=t"><?php 
      echo $row66[1];?></a></td>
    </tr>
</table><?php }?>
</div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>底部内容</p>
</div>
</body>
</html>