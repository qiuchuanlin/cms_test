
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		ul{list-style:none;}
		ul label{display:inline-block;width:85px;margin-bottom:10px;}
	</style>
</head>
<body>
	@if(Session::has('error'))
		<h4 style="color:red">{{trans(Session::get('reason'))}}</h4>
	@endif

	<h1>密码重置页面</h1>
	<ul>
		{{Form::open(array('admin/handleReset',))}}
		<input type="hidden" name="token" value="{{$token}}">
		<li>
			{{Form::label('name','请输入帐号:')}}
			{{Form::text('name')}}
		</li>
		<li>
			{{Form::label('password','请输入密码:')}}
			{{Form::password('password')}}
		</li>
		<li>		
			{{Form::label('password_confirmation','确认密码:')}}
			{{Form::password('password_confirmation')}}
		</li>
		<li>
			{{Form::submit('提交')}}
		</li>
		{{Form::close()}}
	</ul>

</body>
</html>