<?php 

/*********************************还原李雷博客数据库start******数据库大小100G以下**********************/
$db_user="root";//数据库账号
$db_pwd="root123";//数据库密码
$db_name="yancey1";//数据库名

//drop table 表名称//删除表
//$sql="DROP TABLE ` news `";

//$filename=date("Y-m-d")."-".time();
$name="d:/ComputerApplication/php/phpstudy_pro2023-05-26-1685106218.sql";//数据库文件存储路径
$exec="D:/ComputerApplication/php/phpstudy_pro/Extensions/MySQL5.7.26/bin/mysql -u".$db_user." -p".$db_pwd." ".$db_name." < ".$name;
$result=exec($exec);
//print_r($result);
/*********************************还原数据库end****************************/

?>