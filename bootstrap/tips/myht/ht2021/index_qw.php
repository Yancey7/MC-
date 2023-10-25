<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<table>
 <?php
 	$n = 1;
 	$row = 36;
 	for ($i = 0; $i <= 5; ++$i) {
 	    for ($j = 0; $j <= 5; ++$j) {
 	        for ($k = 0; $k <= 5; ++$k) {
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