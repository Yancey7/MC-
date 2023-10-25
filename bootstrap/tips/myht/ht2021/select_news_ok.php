<?php 
session_start();
//echo $_GET["table"];
//$search=$_POST["search-sort"];
//$keywords=$_POST["keywords"];

//include_once("../conn/conn.php");
		$sql1="select * from news where title like '%$keywords%'";
		$result=mysqli_query($con,$sql1);
?>
			  <table class="result-tab" width="100%" border="1">
								 <tr><td colspan="9" align="center"  style="font-size:24px">查询结果 <a class="link-update" href="design_news.php">返回</a></td></tr>
								<tr>
									<th>ID</th>
									<th>标题</th>
									<th>审核状态</th>
									<th>点击次数</th>
									<th>发布人</th>
									<th>更新时间</th>
									<th>图片</th>
									<th>评论</th>
								</tr><?php
								while($row=mysqli_fetch_array($result,MYSQLI_NUM)){?>
								<tr>
									<td align="center"><?php echo $row[0];?></td>
									<td align="center"><?php echo $row[1];?></td>
									<td align="center"><?php echo $row[7];?></td>
									<td align="center"><?php echo $row[6];?></td>
									<td align="center"><?php echo $row[5];?></td>
									<td align="center"><?php echo $row[4];?></td>
									<td align="center"><?php echo $row[3];?></td>
									<td></td>
								</tr></td></tr>
                                <?php }?>
							</table>


