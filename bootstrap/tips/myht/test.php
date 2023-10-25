<!DOCTYPE html> 
<html> 
<head> 
 <title>Bootstrap 实例 - 基本的按钮下拉菜单</title> 
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">  
	<script src="jquery-2.1.1/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
 <style type="text/css"> 
 .dropdown-submenu { 
  position: relative; 
 } 
 .dropdown-submenu > .dropdown-menu { 
  top: 0; 
  left: 100%; 
  margin-top: -6px; 
  margin-left: -1px; 
  -webkit-border-radius: 0 6px 6px 6px; 
  -moz-border-radius: 0 6px 6px; 
  border-radius: 0 6px 6px 6px; 
 } 
 .dropdown-submenu:hover > .dropdown-menu { 
  display: block; 
 } 
 .dropdown-submenu > a:after { 
  display: block; 
  content: " "; 
  float: right; 
  width: 0; 
  height: 0; 
  border-color: transparent; 
  border-style: solid; 
  border-width: 5px 0 5px 5px; 
  border-left-color: #ccc; 
  margin-top: 5px; 
  margin-right: -10px; 
 } 
 .dropdown-submenu:hover > a:after { 
  border-left-color: #fff; 
 } 
 .dropdown-submenu.pull-left { 
  float: none; 
 } 
 .dropdown-submenu.pull-left > .dropdown-menu { 
  left: -100%; 
  margin-left: 10px; 
  -webkit-border-radius: 6px 0 6px 6px; 
  -moz-border-radius: 6px 0 6px 6px; 
  border-radius: 6px 0 6px 6px; 
 } 
 </style> 
</head> 
<body> 
  
  
<div class="btn-group"> 
 <button type="button" class="btn btn-default">原始</button> 
 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> 
 <span class="caret"></span> 
 </button> 
 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"> 
 <li><a href="#">另一个功能</a></li> 
 <li><a href="#">其他</a></li> 
 <li class="divider"></li> 
 <li class="dropdown-submenu"> 
  <a href="#">More options </a> 
  <ul class="dropdown-menu"> 
  <li> 
   <a href="#">另一个功能1</a> 
  </li> 
  </ul> 
 </li> 
 </ul> 
</div> 
  
  
</body> 
</html> 