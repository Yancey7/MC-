<?php 
session_start();
$arr = $_POST["id"];
$table=$_POST["table"];
$str = implode("','",$arr);//拼接字符，
include_once("../conn/conn.php");
switch($table){//根据需要删除的表来执行批量删除指定表的记录
    case'news':
		$sql = "delete from news WHERE id in('{$str}')";
		$result=mysqli_query($con,$sql);
		echo "<script>alert('数据批量删除成功！');location.href='design_news.php';</script>";
	    break;
	 case'user':
		$sql = "delete from user WHERE id in('{$str}')";
		$result=mysqli_query($con,$sql);
		echo "<script>alert('数据批量删除成功！');location.href='design_user.php';</script>";
	    break;    
	case'pic':
		$sql = "delete from pic WHERE id in('{$str}')";
		$result=mysqli_query($con,$sql);
		echo "<script>alert('数据批量删除成功！');location.href='design_pic.php';</script>";
	    break;
	case'record':
		$sql = "delete from record WHERE id in('{$str}')";
		$result=mysqli_query($con,$sql);
		echo "<script>alert('数据批量删除成功！');location.href='design_record.php';</script>";
	    break;
	}
/*/$db = new mysqli("localhost","root","root","heiheihei");
//foreach($arr as $v)
//{
//    $sql = "delete from contacts WHERE id='{$v}'";
//    $db->query($sql);
//}
$str = implode("','",$arr);//拼接字符，
$sql = "delete from user WHERE id in('{$str}')";
//$result=mysqli_query($con,$sql);
echo $sql;
//
//2','8','4
//if($db->query($sql))//判断是否查询成功，
echo "<script>alert('数据删除成功！');location.href='design_user.php';</script>";
*/
?>


