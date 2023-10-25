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
    
    <?php 

						include_once("../conn/conn.php");
						$sql="SELECT *FROM user";
						$result=mysqli_query($con,$sql);	
    ?>

    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="admin_index.php">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户管理</span></div>
        </div>
        <!-- <div class="search-wrap">
            <div class="search-content">
                <form action="#" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div> -->
        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action="delall_ok.php">
                <div class="result-title">
                    <div class="result-list">
                        <a href="insert.php"><i class="icon-font"></i>新增用户</a>
                        <input type=submit value="批量删除"/>
                        <!-- <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a> -->
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>用户名</th>
                            <th>密码</th>
                            <th>权限</th>
                            <th>操作</th>
                        </tr>
                        
                        <?php  while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
                        <tr>
                            <td class="tc"><input name="id[]" value="<?php echo $row[0];?>" type="checkbox"></td>
                            <td>
                                <input name="table" value="user" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="<?php echo $row[0];?>" type="text">
                            </td>
                            <td><?php echo $row[0];?></td>
                            <td><a target="_blank" href="#"><?php echo $row[1]?></a>
                            </td>
                            <td width="300">
                                <!-- <?php echo $row[2]?> -->
                                <?php
                                    if(strlen($row[2])>=5){
                                        echo mb_substr($row[2],0,30,"utf8")."...";echo"<br>";
                                    }else{
                                        echo $row[2];echo"<br>";  
                                    }
                                ?>
                            </td>
                            <td><?php echo $row[3];?></td>
                            <td>
                                <!-- <a class="link-update" href="#">修改</a> -->
                                <a class="link-del" href="del_ok.php?id=<?php echo $row[0];?>&table=user">删除</a>
                            </td>
                        </tr>
                        <?php }?>
                        
                    </table>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>