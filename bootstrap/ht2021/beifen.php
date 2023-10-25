<?php 
//设置时区
date_default_timezone_set("Asia/Shanghai");
/*********************************备份数据库start*********数据库大小100G以下*******************/
$db_user="root";//数据库账号
$db_pwd="root123";//数据库密码
$db_name="yancey";//数据库名
$filename=date("Y-m-d")."-".time();
$name="d:/ComputerApplication/php/phpstudy_pro".$filename.".sql";//数据库文件存储路径
$exec="D:/ComputerApplication/php/phpstudy_pro/Extensions/MySQL5.7.26/bin/mysqldump -u".$db_user." -p".$db_pwd." ".$db_name." > ".$name;
$result=exec($exec);
//前面要设置mysql执行文件的路径。
/*********************************备份李雷博客数据库end****************************/
 
/*********************************还原李雷博客数据库start******数据库大小100G以下**********************/
// $db_user="***";//数据库账号
// $db_pwd="****";//数据库密码
// $db_name="second";//数据库名
// $filename=date("Y-m-d")."-".time();
// $name="d:/dataBackup/second_bear".$filename.".sql";//数据库文件存储路径
// $exec="d:/MySQL/bin/mysql -u".$db_user." -p".$db_pwd." ".$db_name." < ".$name;
// $result=exec($exec);
//print_r($result);
/*********************************还原数据库end****************************/

?>