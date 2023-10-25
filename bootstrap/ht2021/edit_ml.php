<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="admin_index.php">首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="../login.php">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>数据管理</a>
                    <ul class="sub-menu">
                        <li><a href="design_rqml.php"><i class="icon-font">&#xe008;</i>命令</a></li>
                        <li><a href="design_fm.php"><i class="icon-font">&#xe006;</i>附魔</a></li>
                        <li><a href="design_hs.php"><i class="icon-font">&#xe005;</i>红石电路</a></li>
                        <li><a href="design_xs.php"><i class="icon-font">&#xe006;</i>新手手册</a></li>
                        <li><a href="design_wp.php"><i class="icon-font">&#xe004;</i>物品一览</a></li>
                        <li><a href="design_sw.php"><i class="icon-font">&#xe012;</i>生物简介</a></li>
                        <li><a href="admin_user.php"><i class="icon-font">&#xe052;</i>用户管理</a></li>
                        <!-- <li><a href="admin_index.php"><i class="icon-font">&#xe033;</i>广告管理</a></li> -->
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="beifen.php"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="huanyuan.php"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
<?php 
    include_once("../conn/conn.php");
    $id=$_GET['id'];//接收修改的记录好号
	$sql="select * from ml where id='$id'";
	 $result=mysqli_query($con,$sql);
	 $num=mysqli_num_rows($result);
	 $row=mysqli_fetch_array($result,MYSQLI_NUM);
?>
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="admin_index.php">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="design_rqml.php?table=ml">命令</a><span class="crumb-step">&gt;</span><span>修改</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="editok.php?table=ml" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120">ID：</th>
                            <td><input class="common-text" name="id" size="80" value="<?php echo $row[0];?>" type="text"></td>
                        </tr>
                            <tr>
                                <th>标题：</th>
                                <td>
                                    <input class="common-text" name="title" size="80" value="<?php echo $row[1];?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td><textarea name="ml" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10" ><?php echo $row[2];?></textarea></td>
                            </tr>
                            <tr>
                                <th>图片：</th>
                                <td><input class="common-text" name="pic" size="80" value="<?php echo $row[3];?>" type="text"></td>
                            </tr>
                            <tr>
                                <th>时间：</th>
                                <td><input class="common-text" name="time" size="80" value="<?php echo $row[4];?>" type="text"></td>
                            </tr>
                            <tr>
                                <th>发布人：</th>
                                <td><input class="common-text" name="author" size="80" value="<?php echo $row[5];?>" type="text"></td>
                            </tr>
                            <tr>
                                <th>点击次数：</th>
                                <td><input class="common-text" name="djcs" size="80" value="<?php echo $row[6];?>" type="text"></td>
                            </tr>
                            <tr>
                                <th>审核状态：</th>
                                <td><input class="common-text" name="sh" size="80" value="<?php echo $row[7];?>" type="text"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="确认" type="submit">
                                    <input class="btn btn6" onClick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>


<?


?>