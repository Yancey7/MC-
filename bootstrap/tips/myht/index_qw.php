<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>td{width:15px;height:15px}</style>
<title>无标题文档</title>
</head>

<body>

<table style="font-size:24px" align="center">
 <?php
 	$n = 1;
 	$row = 86;
 	for ($i = 0; $i <= 35; ++$i) {
 	    for ($j = 0; $j <= 35; ++$j) {
 	        for ($k = 0; $k <= 35; ++$k) {
 	            $red = str_pad(dechex($i * 51), 2, '0', STR_PAD_LEFT);
 	            $green = str_pad(dechex($j * 51), 2, '0', STR_PAD_LEFT);
 	            $blue = str_pad(dechex($k * 51), 2, '0', STR_PAD_LEFT);
 	            echo "<td style=\"background:#$red$green$blue;\"></td>";
             echo $n++ % $row ? '' : '</tr><tr>';
         }
     }
 	}
?>
 </table>

</body>
</html>
<script>
function() {
    var height = document.body.clientHeight;
    var number = 0; //控制结束累加器
    var length = 0; //控制每次翻滚长度
    var frequency = 5; //控制总时间
    var time = setInterval(function(){
    number += 1;
    if(number == frequency + 1){
        clearInterval(time);
    } else {
        length += height / frequency;
        document.documentElement.scrollTop = length;
    }
    },500); //每隔500MS翻滚一次
}       
</script>
