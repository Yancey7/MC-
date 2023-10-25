<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
include_once("conn/conn.php");
echo $_GET["username"];
echo $_GET["password"];
echo $_GET["captcha"];//是登录页面输入的验证码值
echo $_SESSION["captcha"];
echo $_SESSION['yzm'];//电脑随机产生放到静态变量中值
$name=$_GET["username"];
//$pwd=$_GET["password"];
$pwd=md5(strval($_GET["password"]));//md5加密


/**

 * 接受用户登陆时提交的验证码

 */

//session_start();

//1. 获取到用户提交的验证码
/*
$captcha = $_GET["captcha"];

//2. 将session中的验证码和用户提交的验证码进行核对,当成功时提示验证码正确，并销毁之前的session值,不成功则重新提交

if(strtolower($_SESSION["captcha"]) == strtolower($captcha)){
	  	$sql="select * from user1 where name='$name' and password='$pwd'";
	 $result=mysqli_query($con,$sql);
	 $num=mysqli_num_rows($result);
	if($num==0){
		 echo "<script>alert('用户密码错误。。');location.href='index.php';</script>";
		 exit();
	}else{
		echo "<script>alert('正常登陆后台。');location.href='ht2021/index.html';</script>";
		$_SESSION['dlpd']="ok";
		$_SESSION['use']=$name;
	}

    echo "验证码正确!";

    $_SESSION["captcha"] = "";

}else{

    echo "验证码提交不正确!";

}
*/

if($_SESSION['captcha']==$_GET["captcha"]){
		  	$sql="select * from user where name='$name' and pwd='$pwd'";
	 $result=mysqli_query($con,$sql);
	 $num=mysqli_num_rows($result);
	if($num==0){
		 echo "<script>alert('用户密码错误。。');location.href='login.php';</script>";
		 exit();
	}else{
		echo "<script>alert('正常登陆后台。');location.href='ht2021/admin_index.php';</script>";
		$_SESSION['dlpd']="ok";
		$_SESSION['use']=$name;
		$_SESSION['admin']=$name;
		$_SESSION['start_time']=date("Y-m-d H:i:s",time());
	}
	
}else{
	
		echo "<script>alert('验证码错误。。');location.href='login.php';</script>";
		 exit();
}


/*if($_POST['t3']==$_POST['yanzm']){
	$name=$_POST['t1'];
    $pwd=md5($_POST['t2']."cwk");//使用MD5加密
	$sql="select * from user where name='$name' and password='$pwd'";
	 $result=mysqli_query($con,$sql);
	 $num=mysqli_num_rows($result);
	if($num==0){
		 echo "<script>alert('用户密码错误。。');location.href='index.php';</script>";
		 exit();
	}else{
		echo "<script>alert('正常登陆后台。');location.href='admin/index.php';</script>";
		$_SESSION['dlpd']="ok";
		$_SESSION['use']=$name;
	}
}else{
/*echo "<script>location.href='index.php';</script>";
  exit();
  */
  //session_start();
//}
?>

