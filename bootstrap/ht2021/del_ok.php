<?php 
session_start();
//echo $_GET["table"];
/*$title=$_POST["title"];
$author=$_POST["author"];
$new=$_POST["content"];
//echo $_POST["smallimg"];
$picture=$_FILES["upfile"]["name"];
$time=date("Y-m-d H:i:s",time());
$djcs=0;
  
include_once("../conn/conn.php");
$sql="SELECT *FROM news";
$result=mysqli_query($con,$sql);


$num=mysqli_num_rows($result);//数据总条数
$id=$num+1;


//$row=mysqli_fetch_array($result,MYSQLI_NUM);
$sql1="insert into my2022.news(id,title,new,picture,time,author,djcs) values('$id','$title','$new','$picture','$time','$author','$djcs')";
$result=mysqli_query($con,$sql1);
echo "<script>alert('数据成功添加！');location.href='design_news.php';</script>";*/
$id=$_GET["id"];
$table=$_GET["table"];
//echo $id;
//echo $table;
include_once("../conn/conn.php");

switch($table){
	case'ml':
	     $sql1="delete from yancey.ml where id='$id'";
		$result=mysqli_query($con,$sql1);
		echo "<script>alert('数据删除成功！');location.href='design_rqml.php';</script>";
	    break;
	case'fm':
	     $sql1="delete from yancey.fm where id='$id'";
		$result=mysqli_query($con,$sql1);
		echo "<script>alert('数据删除成功！');location.href='design_fm.php';</script>";
	    break;
    case'hs':
	     $sql1="delete from yancey.hs where id='$id'";
		$result=mysqli_query($con,$sql1);
		echo "<script>alert('数据删除成功！');location.href='design_hs.php';</script>";
	    break;
	case'xs':
	     $sql1="delete from yancey.xs where id='$id'";
		$result=mysqli_query($con,$sql1);
		echo "<script>alert('数据删除成功！');location.href='design_xs.php';</script>";
	    break;
	case'wp':
	     $sql1="delete from yancey.wp where id='$id'";
		$result=mysqli_query($con,$sql1);
		echo "<script>alert('数据删除成功！');location.href='design_wp.php';</script>";
	    break;
	case'sw':
	     $sql1="delete from yancey.sw where id='$id'";
		$result=mysqli_query($con,$sql1);
		echo "<script>alert('数据删除成功！');location.href='design_sw.php';</script>";
	    break;
	 case'user':
	     $sql1="delete from yancey.user where id='$id'";
		$result=mysqli_query($con,$sql1);
		echo "<script>alert('数据删除成功！');location.href='admin_user.php';</script>";
	    break;    
	case'pic':
	     $sql1="delete from yancey.pic where id='$id'";
		$result=mysqli_query($con,$sql1);
		echo "<script>alert('数据删除成功！');location.href='admin_pic.php';</script>";
	    break;
	case'record':
	     $sql1="delete from yancey.record where id='$id'";
		$result=mysqli_query($con,$sql1);
		echo "<script>alert('数据删除成功！');location.href='admin_record.php';</script>";
	    break;
	}

?>