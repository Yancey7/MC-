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
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="#">退出</a></li>
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
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="design_news.php"><i class="icon-font">&#xe008;</i>新闻管理</a></li>
                        <li><a href="admin_user.php"><i class="icon-font">&#xe005;</i>用户管理</a></li>                        <li><a href="admin_index.php"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="admin_index.php"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="admin_index.php"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="admin_index.php"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="admin_index.php"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <?php 
    include_once("conn/conn.php"); 
    ?>
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="search-wrap">
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
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="insert_news.php"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>标题</th>
                            <th>审核状态</th>
                            <th>点击</th>
                            <th>发布人</th>
                            <th>更新时间</th>
                            <th>评论</th>
                            <th>操作</th>
                        </tr>
                    <!-- php链接数据库 -->
                    <?php 
                            $sqld="SELECT * FROM news "; 
                            $result=mysqli_query($con,$sqld);
                            while($rows=mysqli_fetch_array($result))
                            
						    // $sql="SELECT *FROM news order by id";
						    // $result=mysqli_query($con,$sql);
                            // // 数字数组
                            // //$row=mysqli_fetch_array($result,MYSQLI_NUM);
                            // $num=mysqli_num_rows($result);//数据总条数
                            // $pagesize=8;//每页显示条数
                            // @$page=$_GET['page'];//当前页数
                            // //$page=1;
                            // if (empty($page)) {
                            //     $page=1;
                            // }
                            // $totalpage=ceil($num/$pagesize);//总页数
                            // $begin=($page-1)*$pagesize;
                            // $sql=$sql." limit $begin,$pagesize";
                            // $result=mysqli_query($con,$sql); 
                            // while($row=mysqli_fetch_array($result,MYSQLI_NUM))

                            {?>
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="59" type="hidden"><?php echo $rows['id']?>
                                <!-- <input class="common-input sort-input" name="ord[]" value="0" type="text"> -->
                            </td>
                            <td><a target="_blank" href="#" title="发哥经典"><?php echo $rows['title']?></a> …
                            </td>
                            <td>0</td>
                            <td><?php echo $rows['djcs']?></td>
                            <td><?php echo $rows['auther']?></td>
                            <td>2021-09-29 21:11:01</td>
                            <td></td>
                            <td>
                                <a class="link-update" href="edit_news.php">修改</a>
                                <a class="link-del" href="del_ok.php?id=<?php echo $row[0];?>&table=news">删除</a>
                            </td>
                        </tr>

                        <?php } mysqli_close($con);?>
						
                        <!-- 框架 -->
                        <!-- <tr>
                            <td class="tc"><input name="id[]" value="58" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="58" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="0" type="text">
                            </td>
                            <td>58</td>
                            <td title="黑色经典"><a target="_blank" href="#" title="黑色经典">黑色经典</a> …
                            </td>
                            <td>0</td>
                            <td>35</td>
                            <td>admin</td>
                            <td>2013-12-30 22:34:00</td>
                            <td></td>
                            <td>
                                <a class="link-update" href="#">修改</a>
                                <a class="link-del" href="#">删除</a>
                            </td>
                        </tr> -->

                    </table>
                    <!-- <div class="list-page"> 2 条 1/1 页</div> -->
                    
                    
						<!-- <tr><td colspan="12"></td></tr>
                        <tr><?php 
						if ($page==1) {
						?>
						
						首 页 | 上 页
						<?php 
						}else {
						?>
						<a href="design_news.php?page=1">首 页</a> | <a href="design_news.php?page=<?php echo $page-1;?>">上 页</a>
						<?php }?>
						
						<?php 
						if ($page==$totalpage) {
						?>
						下 页 | 尾 页
						<?php 
						}else {
						?>
						<a href="design_news.php?page=<?php echo $page+1;?>">下 页</a> | <a href="design_news.php?page=<?php echo $totalpage;?>">尾 页</a>
						<?php }?></tr> -->

                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>