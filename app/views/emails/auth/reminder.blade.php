<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>密码重置</h2>

		<div>
			点击下面链接，重置密码: 
			<br>
			<a href="{{URL::to('admin/password/reset', array($token))}}">{{ URL::to('admin/password/reset', array($token)) }}</a>
		</div>
	</body>
</html>