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
            <h1 class="topbar-logo none"><a href="index.php" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.php">首页</a></li>
                <li><a href="admin_index.php" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="exit.php">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<?php 

						include_once("../conn/conn.php");
						$sql="SELECT *FROM news_pic";
						$result=mysqli_query($con,$sql);
						
					
?>
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
                        <li><a href="design_user.php"><i class="icon-font">&#xe005;</i>用户管理</a></li>
                        <li><a href="design_record.php"><i class="icon-font">&#xe006;</i>记录管理</a></li>
                        <li><a href="design_pic.php"><i class="icon-font">&#xe004;</i>图片管理</a></li>
                        <li><a href="design_link.php"><i class="icon-font">&#xe012;</i>友情链接</a></li>
                        <li><a href="design.php"><i class="icon-font">&#xe052;</i>评论管理</a></li>
                        <li><a href="design_pic1.php"><i class="icon-font">&#xe052;</i>图片管理2</a></li>
                        <li><a href="design_pic2.php"><i class="icon-font">&#xe033;</i>图片管理3</a></li>
                        <li><a href="design.php"><i class="icon-font">&#xe023;</i>广告管理3</a></li>
                        <li><a href="design.php"><i class="icon-font">&#xe013;</i>广告管理4</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.php"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.php"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.php"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.php"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.php">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">图片管理</span></div>
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
            <form name="myform" id="myform" method="post" action="delall_ok.php">
                <div class="result-title">
                    <div class="result-list">
                        <a href="insert_news.php"><i class="icon-font"></i>新增图片</a>
                        <input name="Submit" type="submit" value="批量删除">
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="all" type="checkbox" id="all" onClick="checkAll()"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>图片名称</th>
                            <th>图片文件名</th>
                            <th>添加者</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr><?php  while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
                        <tr>
                            <td class="tc"><input name="id[]" value="<?php echo $row[0];?>" type="checkbox"></td>
                            <td>
                                <input name="table" value="pic" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="<?php echo $row[0];?>" type="text">
                            </td>
                            <td><?php echo $row[0];?></td>
                            <td title="发哥经典"><a target="_blank" href="#" title="发哥经典"><?php echo $row[1];?></a> …
                            </td>
                            <td width="300"><?php echo $row[2];?></td>
                            <td><?php echo $row[3];?></td>
                            <td><?php echo $row[4];?></td>
                            <td>
                                <a class="link-update" href="#">修改</a>
                                <a class="link-del" href="#">删除</a>
                            </td>
                        </tr>
                                                    <?php $x2=$x2+1;}?>   

                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
<script>

    function checkAll() {

        var all=document.getElementById('all');//获取到点击全选的那个复选框的id

        var one=document.getElementsByName('id[]');//获取到复选框的名称

        if(all.checked==true){//因为获得的是数组，所以要循环 为每一个checked赋值

            for(var i=0;i<one.length;i++){

                one[i].checked=true;

            }

 

        }else{

            for(var j=0;j<one.length;j++){

                one[j].checked=false;

            }

        }

    }

</script>