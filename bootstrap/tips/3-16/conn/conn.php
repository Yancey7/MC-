<?php
$host="127.0.0.1";
$userName="root";
$password="root123";
$dbname="my2023";
$con=mysqli_connect($host,$userName,$password,$dbname);
mysqli_query($con,"SET NAMES utf8");
if (!mysqli_set_charset($con, "utf8")) {
   ///// printf("Error loading character set utf8: %s\n", mysqli_error($con));
} else {
   // printf("Current character set: %s\n", mysqli_character_set_name($con));
}
// 检查连接
if (!$con)
{
    die("连接错误: " . mysqli_connect_error());
}else{
	 //echo"数据库连接成功！";
} 


?>