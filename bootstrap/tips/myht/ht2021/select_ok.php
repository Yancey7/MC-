<?php 
session_start();
//echo $_GET["table"];
$search=$_POST["search-sort"];//选择那张 表
$keywords=$_POST["keywords"];//查询的内容
include_once("../conn/conn.php");
switch($search){
    case 19:
        include_once("select_news_ok.php");
	    break;
	 case 20:
        include_once("select_user_ok.php");
	    break;    
	case 21:
        include_once("select_vote_ok.php");
	    break;
	case 22:
        include_once("select_liuyuan_ok.php");
	    break;
	case 23:
        include_once("select_record_ok.php");
	    break;
	case 24:
        include_once("select_link_ok.php");
	    break;
	case 25:
        include_once("select_pic_ok.php");
	    break;
	case 26:
        include_once("select_lppic_ok.php");
	    break;
	default: 
        include_once("select_default_ok.php");	 
	break;
	}
?>

