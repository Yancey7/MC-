<?php 
session_start();
//echo $_GET["table"];
$title=$_POST["title"];
$author=$_POST["author"];
$new=$_POST["content"];
//$picture=$_POST["smallimg"];
//echo $_POST["smallimg"];
$picture=$_FILES["upfile"]["name"];
//echo $picture;
//echo $title;

// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["upfile"]["name"]);
//echo $_FILES["upfile"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["upfile"]["type"] == "image/gif")
|| ($_FILES["upfile"]["type"] == "image/jpeg")
|| ($_FILES["upfile"]["type"] == "image/jpg")
|| ($_FILES["upfile"]["type"] == "image/pjpeg")
|| ($_FILES["upfile"]["type"] == "image/x-png")
|| ($_FILES["upfile"]["type"] == "image/png"))
&& ($_FILES["upfile"]["size"] < 904800)   // 小于 200 kb
&& in_array($extension, $allowedExts))
{
    if ($_FILES["upfile"]["error"] > 0)
    {
       // echo "错误：: " . $_FILES["upfile"]["error"] . "<br>";
    }
    else
    {
        //echo "上传文件名: " . $_FILES["upfile"]["name"] . "<br>";
       // echo "文件类型: " . $_FILES["upfile"]["type"] . "<br>";
       // echo "文件大小: " . ($_FILES["upfile"]["size"] / 1024) . " kB<br>";
       // echo "文件临时存储的位置: " . $_FILES["upfile"]["tmp_name"] . "<br>";
        
        // 判断当前目录下的 upload 目录是否存在该文件
        // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
        if (file_exists("../pic/fm/" . $_FILES["upfile"]["name"]))
        {
            echo $_FILES["upfile"]["name"] . " 文件已经存在。 ";
        }
        else
        {
            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
            move_uploaded_file($_FILES["upfile"]["tmp_name"], "../pic/fm/" . $_FILES["upfile"]["name"]);
            echo "文件存储在: " . "../pic/fm/" . $_FILES["upfile"]["name"];
        }
    }
}
else
{
    echo "非法的文件格式";
}

$time=date("Y-m-d H:i:s",time());
$djcs=0;
 
include_once("../conn/conn.php");
$sql="SELECT *FROM fm order by id desc limit 1";//找出最后一条记录的id
$result=mysqli_query($con,$sql);


$row=mysqli_fetch_array($result,MYSQLI_NUM);//数据总条数
$id=$row[0]+1;

$sh=0;
//$row=mysqli_fetch_array($result,MYSQLI_NUM);
$sql1="insert into yancey.fm(id,title,new,picture,time,author,djcs,shzt) values('$id','$title','$new','$picture','$time','$author','$djcs','$sh')";
$result=mysqli_query($con,$sql1);
//echo $sql1;
echo "<script>alert('数据成功添加！');location.href='design_fm.php';</script>";

?>