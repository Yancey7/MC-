<?php 
session_start();
$table=$_GET["table"];
//echo $_GET["table"];
$id=$_POST["id"];
$title=$_POST["title"];
$new=$_POST["$table"];
$pic=$_POST["pic"];
$time=$_POST["time"];
$author=$_POST["author"];
$djcs=$_POST["djcs"];
$sh=$_POST["sh"];
include_once("../conn/conn.php");

switch($table){

    case 'ml':
        $sql1="update yancey.ml set id='$id',title='$title',new='$new',picture='$pic',time='$time',author='$author',djcs='$djcs', shzt='$sh' where id='$id'";
        $result=mysqli_query($con,$sql1);
        echo "<script>alert('数据修改成功！');location.href='design_rqml.php';</script>";
        break;
    
    case 'fm':
        $sql1="update yancey.fm set id='$id',title='$title',new='$new',picture='$pic',time='$time',author='$author',djcs='$djcs', shzt='$sh' where id='$id'";
        $result=mysqli_query($con,$sql1);
        echo "<script>alert('数据修改成功！');location.href='design_fm.php';</script>";
        break;

    case 'hs':
        $sql1="update yancey.hs set id='$id',title='$title',new='$new',picture='$pic',time='$time',author='$author',djcs='$djcs', shzt='$sh' where id='$id'";
        $result=mysqli_query($con,$sql1);
        echo "<script>alert('数据修改成功！');location.href='design_hs.php';</script>";
        break;
    
    case 'xs':
        $sql1="update yancey.xs set id='$id',title='$title',new='$new',picture='$pic',time='$time',author='$author',djcs='$djcs', shzt='$sh' where id='$id'";
        $result=mysqli_query($con,$sql1);
        echo "<script>alert('数据修改成功！');location.href='design_xs.php';</script>";
        break;

    case 'wp':
        $sql1="update yancey.wp set id='$id',title='$title',new='$new',picture='$pic',time='$time',author='$author',djcs='$djcs', shzt='$sh' where id='$id'";
        $result=mysqli_query($con,$sql1);
        echo "<script>alert('数据修改成功！');location.href='design_wp.php';</script>";
        break;
    
    case 'sw':
        $sql1="update yancey.sw set id='$id',title='$title',new='$new',picture='$pic',time='$time',author='$author',djcs='$djcs', shzt='$sh' where id='$id'";
        $result=mysqli_query($con,$sql1);
        echo "<script>alert('数据修改成功！');location.href='design_sw.php';</script>";
        break;
}

// //"更新修改的数据
// $sql1="update yancey.ml set id='$id',title='$title',new='$new',picture='$pic',time='$time',author='$author',djcs='$djcs', shzt='$sh' where id='$id'";
// $result=mysqli_query($con,$sql1);
// //echo $sql1;
// echo "<script>alert('数据修改成功！');location.href='design_rqml.php';</script>";

?>