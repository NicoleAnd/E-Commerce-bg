<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>登录</title>
<link rel="stylesheet" type="text/css" href="../styles/reset.css">
<link rel="stylesheet" type="text/css" href="../styles/main.css">
<!--[if IE 6]>
    <script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript" src="js/ie6Fixpng.js"></script>
    <![endif]-->
</head>

<body>
	<div class="headerBar">
		<div class="logoBar login_logo">
			<div class="comWidth">
				<div class="logo fl">
					<a href="#"><img src="../images/NIC-Logo1.PNG" alt="NIC"></a>
				</div>
				<h3 class="welcome_title">欢迎登录</h3>
			</div>
		</div>
	</div>
	<div class="loginBox">
		<div class="login_cont">
			<form action="doLogin.php" method="post">
				<ul class="login">
					<li class="l_tit">管理员账号</li>
					<li class="mb_10"><input type="text" class="login_input user_icon">
					</li>
					<li class="l_tit">密码</li>
					<li class="mb_10"><input type="text"
						class="login_input password_icon"></li>
					<li class="l_tit">验证码</li>
					<li class="mb_10"><input type="text"
						class="login_input password_icon"></li>
					<img src="getVerify.php" alt="" />
					<li class="autoLogin"><input type="checkbox" id="a1"
						class="checked"> <label id="a1">自动登录</label></li>
					<li><input type="submit" class="login_btn" value="登  录"></li>
				</ul>
			</form>
			<div class="login_partners">
				<p class="l_tit">使用合作网站账号登录：</p>
				<ul class="login_list clearfix">
					<li><a href="#">QQ</a></li>
					<li><span>|</span></li>
					<li><a href="#">网易</a></li>
					<li><span>|</span></li>
					<li><a href="#">人人</a></li>
					<li><span>|</span></li>
					<li><a href="#">奇虎360</a></li>
					<li><span>|</span></li>
					<li><a href="#">开心</a></li>
					<li><span>|</span></li>
					<li><a href="#">豆瓣</a></li>
					<li><span>|</span></li>
					<li><a href="#">搜狐</a></li>
					<li><span>|</span></li>
					<li><a href="#">更多</a></li>
				</ul>
			</div>
		</div>
		<a href="#" class="reg_link">免费注册&gt;&gt;</a>
	</div>
	<div class="hr_25"></div>
	<div class="footer">
		<p>
			<a href="#">NIC简介</a><i>|</i><a href="#">NIC公告</a><i>|</i><a href="#">招贤纳士</a><i>|</i><a
				href="#">联系我们</a><i>|</i>服务热线： 400-123-1234
		</p>
		<p>Copyright &copy; 2017 nic.com All Rights
			Reserved&nbsp;&nbsp;&nbsp;京ICP备&nbsp;&nbsp;&nbsp;12345678号-0</p>
		<p class="web">
			<a href="#"><img src="../images/icon/sina.png" alt="logo"></a> <a
				href="#"><img src="../images/icon/wechat.png" alt="logo"></a> <a
				href="#"><img src="../images/icon/qq.png" alt="logo"></a> <a
				href="#"><img src="../images/icon/github.png" alt="logo"></a>
		</p>
	</div>
</body>

</html>
