<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>我的网站后台管理</title>
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
<?php 

						include_once("../conn/conn.php");
						$sql="SELECT *FROM sw";
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

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="admin_index.php">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">生物简介</span></div>
        </div>
        <!-- <div class="search-wrap">
            <div class="search-content">
                <form action="select_ok.php" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">数据管理</option>
                                    <option value="20">用户管理</option>
                                    <option value="21">投票管理</option>
                                    <option value="22">留言管理</option>
                                    <option value="23">记录管理</option>
                                    <option value="24">友情链接</option>
                                    <option value="25">广告管理</option>
                                    <option value="26">轮播管理</option>
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
                        <a href="insert_sw.php"><i class="icon-font"></i>新增数据</a>
                        <input type=submit value="批量删除"/>
                        <!-- <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a> -->
                    </div>
                </div>
                <div class="result-content">
                  <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="all" type="checkbox" id="all" onClick="checkAll()"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>标题</th>
                            <th>数据内容</th>
                            <th>审核状态</th>
                            <th>点击</th>
                            <th>发布人</th>
                            <th>更新时间</th>
                            <th>图片</th>
                            <th>评论</th>
                            <th>操作</th>
                        </tr><?php
						include_once("../conn/conn.php");
						$sql="SELECT *FROM sw order by id";
						$result=mysqli_query($con,$sql);
						// 数字数组
						//$row=mysqli_fetch_array($result,MYSQLI_NUM);
						$num=mysqli_num_rows($result);//数据总条数
						$pagesize=4;//每页显示条数
						@$page=$_GET['page'];//当前页数
						//$page=1;
						if (empty($page)) {
							$page=1;
						}
						$totalpage=ceil($num/$pagesize);//总页数
						$begin=($page-1)*$pagesize;
						$sql=$sql." limit $begin,$pagesize";
						$result=mysqli_query($con,$sql); 
						while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
                        <tr>
                            <td class="tc"><input name="id[]" value="<?php echo $row[0];?>" type="checkbox"></td>
                            <td>
                                <input name="table" value="sw" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="<?php echo $row[0];?>" type="text">
                            </td>
                            <td><?php echo $row[0];?></td>
                            <td title="发哥经典"><a target="_blank" href="#" title="发哥经典"><?php echo $row[1];?></a>
                            </td>

                            <td>
                            <?php
						    if(strlen($row[2])>=20){
							    echo mb_substr($row[2],0,30,"utf8")."...";echo"<br>";
						    }else{
							    echo $row[2];echo"<br>";  
						    }
                            ?>
                            </td>

                            <td><?php echo $row[7];?></td>
                            <td><?php echo $row[6];?></td>
                            <td><?php echo $row[5];?></td>
                            <td><?php echo $row[4];?></td>
                            <td><?php echo $row[3];?></td>
                            <td></td>
                            <td>
                                <a class="link-update" href="edit_sw.php?id=<?php echo $row[0];?>">修改</a>
                                <a class="link-del" href="del_ok.php?id=<?php echo $row[0];?>&table=sw">删除</a>
                            </td>
                        </tr>
                        <?php }?>
						
                    </table>
                    <!-- <div class="list-page"> 2 条 1/1 页</div> -->

                    <tr><td colspan="12"></td></tr>
                        <tr><?php 
						if ($page==1) {
						?>
						
						首 页 | 上 页
						<?php 
						}else {
						?>
						<a href="design_sw.php?page=1">首 页</a> | <a href="design_sw.php?page=<?php echo $page-1;?>">上 页</a>
						<?php }?>
						
						<?php 
						if ($page==$totalpage) {
						?>
						下 页 | 尾 页
						<?php 
						}else {
						?>
						<a href="design_sw.php?page=<?php echo $page+1;?>">下 页</a> | <a href="design_sw.php?page=<?php echo $totalpage;?>">尾 页</a>
						<?php }?></tr>

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