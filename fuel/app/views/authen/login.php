<?php echo '<pre>';
var_dump('aaaaaa');
echo '</pre>';die;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo "Login";?></title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
	<div>
	<form action="login/login">
		<span>Username</span><input type="text" name="username" id="username"><br/>
		<span>Password</span><input type="text" name="password" id="password">
		<input type="submit" value="Login"/>
	</form>
	</div>
</body>
</html>