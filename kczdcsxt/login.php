<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>课程自动检测系统</title>
<link href="style/css/loginstyle.css" rel="stylesheet" type="text/css">

</head>

<body class="login">

<div class="login_m">
	
	<div class="login_logo" style="font-size: 34px;">课程自动检测系统</div>
	<div class="login_boder">
		<div class="login_padding">
		 <form role="form" action="login_submit.php" method="post">
			<label>用户名</label>
			
				<input type="text" id="username" name="user" class="txt_input txt_input2" onfocus="if (value ==&#39;Your name&#39;){value =&#39;&#39;}" onblur="if (value ==&#39;&#39;){value=&#39;Your name&#39;}" value="Your name">
				
		
			<label>密码</label>
			
				<input type="password" name="password" id="userpwd" class="txt_input" onfocus="if (value ==&#39;******&#39;){value =&#39;&#39;}" onblur="if (value ==&#39;&#39;){value=&#39;******&#39;}" value="******">
			
			
			<div class="rem_sub">
				<div class="rem_sub_l">
<<<<<<< HEAD
					<input type="radio" name="radio" id="save_me">
					<label for="radio">管理员</label>
					<input type="radio" name="radio" id="save_me">
					<label for="radio">教师</label>
					<input type="radio" name="radio" id="save_me">
=======
					<input type="radio" name="quanxian" id="save_me" value="admin">
					<label for="radio">管理员</label>
					<input type="radio" name="quanxian" id="save_me" value="teacher">
					<label for="radio">教师</label>
					<input type="radio" name="quanxian" id="save_me" checked value="student">
>>>>>>> c172eefbede826f1b6ea36d108215a6c04dacafa
					<label for="radio">学生</label>
				</div>
				<label>
					<input type="submit" class="sub_button" name="button" id="button" value="登录" style="opacity: 0.7;">
<!--					<button type="submit" class="sub_button" style="opacity: 0.7;">登录</button>-->
				</label>
			</div>
			</form>
		</div>
	</div><!--login_boder end-->
</div><!--login_m end-->

<br />
<br />



</body>
</html>