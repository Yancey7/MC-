<?php 
session_start();
//echo $_GET["table"];
$id=$_POST["id"];
$title=$_POST["title"];
$new=$_POST["new"];
$pic=$_POST["pic"];
$time=$_POST["time"];
$author=$_POST["author"];
$djcs=$_POST["djcs"];
$sh=$_POST["sh"];
include_once("../conn/conn.php");
//"更新修改的数据
$sql1="update my2022.news set id='$id',title='$title',new='$new',picture='$pic',time='$time',author='$author',djcs='$djcs', shzt='$sh' where id='$id'";
$result=mysqli_query($con,$sql1);
//echo $sql1;
echo "<script>alert('数据修改成功！');location.href='design_news.php';</script>";
?>