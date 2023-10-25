<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php

if($_POST['cb']){

	//$like = $_POST['cb'];
	$arr = $_POST["cb"];
	//echo '你的选择:'.implode(',',$like );

}
        include_once("../conn/conn.php");
	     $str = implode("','",$arr);//拼接字符，
          $sql1= "delete from record WHERE id in('{$str}')";
		$result=mysqli_query($con,$sql1);
		//echo $sql1;
	echo "<script>alert('数据批量删除成功！');location.href='design_record.php';</script>";
	
?>

</body>
</html>

