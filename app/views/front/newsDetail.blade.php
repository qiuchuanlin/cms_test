<!DOCTYPE html>
<html lang="en" style="background:#c1bfbf">
<head>
	<meta charset="UTF-8">
	<title>{{$news->title}}</title>
	<!-- 自己的css文件,主要是登陆 -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<!-- 自己的js -->
	<script src="{{asset('js/jquery-1.10.1.min.js')}}"></script>
	<script src="{{asset('js/my.js')}}"></script>
	<style>
		/*自己添加的样式*/
		#channel-all .menu-list ul li a{
		    color:white;
		    border-bottom:0;
		}
		#channel-all .menu-list ul li a:hover{
		    color:black;
		}
		.menu-list ul{
			overflow:hidden;zoom:1;
		}
		.menu-list ul li{
			float:left;
			line-height: 19px;
			padding-top:7px;
			margin-right:20px;
		}
		.menu-list ul li a{
			color:#fff;
		}
	</style>
</head>
<body style="width:980px;margin-left:250px;box-shadow:1px 1px 5px 3px #808080;background:#fff;margin-top:0px;padding-bottom:200px;min-height:900px">
	  <!--登录 -->
	  <!-- 查看登录状态，来确定需要那些选项 -->
	  <div style="border-bottom:1px solid #ccc;width:971px;padding:5px 0px 5px 9px;margin-bottom:8px;font-size:14px;">
	      @if(!Auth::check())
	          <a href="javascript:;" id="regester">注册</a>    
	          <a href="javascript:;" id="frontLogin">登录</a> 
	      @else
	          欢迎回来:<span id="uname">{{Auth::user()->name}}</span>  
	          <a href="{{url('logout')}}">注销</a>    
	      @endif

	      <!-- 注册框,注意：默认隐藏，js触发显示-->
	      <ul>
	        {{Form::open(array(null,'method'=>"post","onclick"=>'return false','id'=>'regesterBox'))}}
	        <h1>注册</h1>
	        <img id="close" src="{{asset('images/close.jpg')}}" alt="" width="20"/>
	        <li>
	          {{Form::label('name','帐号：')}}
	          {{Form::text('name','',array('placeholder'=>'字母,数字,下划线,最少6位'))}}
	        </li>
	        <li>
	          {{Form::label('password','密码：')}}
	          {{Form::password('password')}}
	        </li>
	        <li>
	          {{Form::label('email','邮箱：')}} 
	          {{Form::text('email','',array('placeholder'=>'lin@yeah.net'))}}
	        </li>
	        <li>
	            {{Form::label('verify','验证码:')}}
	            {{Form::text('verify')}}
	            <img id="verifyImage" src="{{url('verify')}}" alt="" onclick="this.src='{{url('verify')}}/?r='+Math.random()"/>
	        </li>
	        <li id="regsub">      
	            {{Form::submit('登录')}}
	            {{Form::close()}}
	        </li>
	     </ul>

	     <!-- 登陆框-->
	      <ul>
	        {{Form::open(array(null,'method'=>"post","onsubmit"=>'return false','id'=>'loginBox'))}}
	        <h1>登录</h1>
	        <img id="close2" src="{{asset('images/close.jpg')}}" alt="" width="20"/>
	        <li>
	          {{Form::label('name','帐号：')}}
	          {{Form::text('name','',array('placeholder'=>'字母,数字,下划线,最少6位'))}}
	        </li>
	        <li>
	          {{Form::label('password','密码：')}}
	          {{Form::password('password')}}
	        </li>
	        <li>
	            {{Form::label('verify','验证码:')}}
	            {{Form::text('verify')}}
	            <img id="logverifyImage" src="{{url('verify')}}" alt="" onclick="this.src='{{url('verify')}}/?r='+Math.random()"/>
	        </li>
	        <li>
	            {{Form::label('remember','记住密码：',array('id'=>'rmlabel'))}}
	            {{Form::checkbox('remember',1)}}        
	            <!-- <input type="checkbox" name="remember" value="1" /> -->
	        </li>
	        <li id="logsub">      
	            {{Form::submit('登录')}}
	            {{Form::close()}}
	        </li>
	     </ul>
	    </div>

	<!-- 遮罩层 -->
	<div id="cover"></div>
	
	<!-- 导航条 -->
	<!--默认首页导航-->
	<div id="menu" alog-group="focustop-menu" style="background:url('http://cms/images/nav_bg.jpg');width:980px;height:34px">
	    <div id="channel-shanghai">
	        <div class="menu-list" style="width:996px;">
	            <ul>
	                <li style="margin-left:20px"><a href="http://cms/" style="border-bottom:0;">CMS首页</a></li>
	                <!-- 循环顶级分类生成导航 -->
	                @foreach($top as $v)
	                	<li><a href="{{$v->navurl}}">{{$v->category_name}}</a></li>
	                @endforeach
	            </ul>
	        </div>
	    </div>
	</div>

	<!--新闻标题,发布时间,作者等  -->
	<div style="border-bottom:1px dashed #ccc;padding-bottom:15px">
		<h2 style="font-weight:normal;text-align:center;">{{$news->title}}</h2>
		<span style="color:#BCBABA;margin-left:390px">2012-3-4</span><span style="color:#BCBABA;margin-left:50px">作者:</span>
	</div>
	<!-- 新闻内容 -->
	<style>
		#content p{
			text-indent:2em;
			color:#222222;
			word-spacing:5px;
			padding:0 50px;
			margin-top:20px;
		}
		#content img{
			margin-left: 165px;
		}
	</style>
	<div id="content">
		{{preg_replace('/rn/','',stripslashes($news->content))}}
	</div>
</body>
</html>