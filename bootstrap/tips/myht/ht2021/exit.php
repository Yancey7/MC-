<?php 


	session_start();
	include_once("../conn/conn.php");
	$sql="SELECT *FROM record order by id desc limit 1";//读取记录表中的最后一条记录
	$result=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($result,MYSQLI_NUM);
	//$num=mysqli_num_rows($result);//使用SQL查询记录表中有多少条记录

	$id=intval($row[0])+1;
    $name=$_SESSION['admin'];
	$start_time=$_SESSION['start_time'];
	$end_time=date("Y-m-d H:i:s",time());
	$ip=$_SERVER['REMOTE_ADDR'];//获取客户机的IP
	//$row=mysqli_fetch_array($result,MYSQLI_NUM);
	$sql1="insert into my2022.record(id,name,start_time,end_time,ip) values('$id','$name','$start_time','$end_time','$ip')";
	$result=mysqli_query($con,$sql1);
    $_SESSION['dlpd']=="no";

	echo "<script>location.href='../login.php';</script>";
	exit();

	$_SESSION=array(); 
	session_destroy();
?>