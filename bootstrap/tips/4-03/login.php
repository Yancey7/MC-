<!DOCTYPE html>
<html>
<head>
<?PHP 
session_start();
$_SESSION['dlpd']="no";
$seedarray =microtime(); 
$seedstr =explode(" ",$seedarray,5); 
$seed =$seedstr[0]*10000; 
//第二步:使用种子初始化随机数发生器 
srand($seed); 
$xx=0;
//第三步:生成指定范围内的随机数 
$xx =rand(1000,9999); 
$_SESSION['yzm']=$xx;
?>
	<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap框架的网站模拟</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">  
	<script src="jquery-2.1.1/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="icon" href="image/favicon-16x16.png" sizes="16x16" type="image/png">
	<style>
    .fakeimg {
        height: 220px;
        background: #aaa;
    }
    body{background: url(image/3.jpg) no-repeat;background-size:cover;font-size: 16px;}
      .form{background: rgba(255,255,255,0.2);width:400px;margin:100px auto;}
      #login_form{display: block;}
      #register_form{display: none;}
      .fa{display: inline-block;top: 27px;left: 6px;position: relative;color: #ccc;}
      input[type="text"],input[type="password"]{padding-left:26px;}
      .checkbox{padding-left:21px;}
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0; background-image:url(image/title.png)" >
  <h1>后台登录页面---2022年制作</h1>
  <p><iframe scrolling="no" frameborder="0" src="http://i.tianqi.com/index.php?c=code&id=36&icon=5&num=3" width="540" height="70" marginwidth="0" marginheight="0"></iframe></p>
</div>
<div class="container">
            <div class="form row">
              <form class="form-horizontal col-sm-offset-3 col-md-offset-3" id="login_form" action="logincheck.php">
                <h3 class="form-title">后台登录</h3>
                <div class="col-sm-9 col-md-9">
                  <div class="form-group">
                    <i class="fa fa-user fa-lg"></i>
                    <input class="form-control required" type="text" placeholder="Username" name="username" autofocus="autofocus" maxlength="20"/>
                  </div>
                  <div class="form-group">
                      <i class="fa fa-lock fa-lg"></i>
                      <input class="form-control required" type="password" placeholder="Password" name="password" maxlength="8"/>
                  </div>
                  <div class="form-group">
                      <i class="fa fa-lock fa-lg"></i>
                      <input class="form-control required" type="text" placeholder="yzm" name="captcha" maxlength="8"/>
                  </div>
                  <div class="form-group" style="color:#00F; font-size:24px;">
                      <i class="fa fa-lock fa-lg"></i>
                      <?php echo $xx; ?>
                      <img src="image_captcha.php"  onclick="this.src='image_captcha.php?'+new Date().getTime();" width="220" height="70">
                  </div>
                  <div class="form-group">
                    <label class="checkbox">
                      <input type="checkbox" name="remember" value="1"/> 是否记住密码？
                    </label>
                    <hr />
                    <a href="javascript:;" id="register_btn" class="">Create an account</a>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-default" style="float:left;margin-left:10px;">登录</button>
                      <span>  </span>
                      <button type="reset" class="btn btn-default" style="float:left;margin-left:70px;">重置</button>
                  </div>
                </div>
              </form>
            </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0; background-image:url(image/title.png)">
  <p></br>Copyright &copy; 2006-2013 汕尾职业技术学院 联系电话：0660-3362144 招生电话:(0660)3386864 3396865 传真：0660-3371568</br>
地址：广东省汕尾市城区文德路 邮编：516600 管理员邮箱：admin@swvtc.cn 粤ICP备05084359</p>
</div>
</body>
</html>
