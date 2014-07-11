<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cms admin</title>
    <meta name="author" content="SuggeElson" />
    <meta name="description" content="Supr admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
    <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, masonry, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
    <meta name="application-name" content="Supr admin template" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Force IE9 to render in normla mode -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Le styles -->
    <!-- Use new way for google web fonts 
    http://www.smashingmagazine.com/2012/07/11/avoiding-faux-weights-styles-google-web-fonts -->
    <!-- Headings -->
    <link href="{{asset('theme/html/css/custom.css')}}" rel='stylesheet' type='text/css' />
    <!-- Text -->
    <link href="{{asset('theme/html/css/custom.css')}}" rel='stylesheet' type='text/css' /> 

    <!-- Core stylesheets do not remove -->
    <link id="bootstrap" href="{{asset('theme/html/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-responsive" href="{{asset('theme/html/css/bootstrap/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/html/css/supr-theme/jquery.ui.supr.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('theme/html/css/icons.css" rel="stylesheet')}}" type="text/css" />

    <!-- Plugins stylesheets -->
    <link href="{{asset('theme/html/plugins/misc/qtip/jquery.qtip.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/html/plugins/misc/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/html/plugins/misc/search/tipuesearch.css')}}" type="text/css" rel="stylesheet" />

    <link href="{{asset('theme/html/plugins/forms/uniform/uniform.default.css')}}" type="text/css" rel="stylesheet" />

    <!-- Main stylesheets -->
    <link href="{{asset('theme/html/css/main.css')}}" rel="stylesheet" type="text/css" /> 

    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="{{asset('theme/html/css/custom.css')}}" rel="stylesheet" type="text/css" /> 

    
    
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('theme/html/images/favicon.ico')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('theme/html/images/apple-touch-icon-144-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('theme/html/images/apple-touch-icon-114-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('theme/html/images/apple-touch-icon-72-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('theme/html/images/apple-touch-icon-57-precomposed.png')}}" />
    
    <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
    <meta name="application-name" content="Supr"/> 
    <meta name="msapplication-TileColor" content="#3399cc"/> 

    <!-- Load modernizr first -->
    <script type="text/javascript" src="{{asset('theme/html/js/libs/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/js/jquery.min.js')}}"></script>

    </head>
	<div class="status">
		<ol>
			<!-- 没有通过验证，显示错误信息 -->
			@if(Session::has('errors'))
				<h4 style="margin-left:250px;">操作错误：</h4>
				@foreach($errors->all('<li style="margin-left:250px;color:red;border:none">:message</li>') as $message)
					{{$message}}
				@endforeach
			@endif

			<!-- 上传的图片不符合要求 -->
			@if(Session::has('msg'))
				<script>alert("{{Session::get('msg')}}")</script>
			@endif
		</ol>
		<p class="p1">添加管理员</p>
		<div style="margin-left:250px;font-size:18px">[带<strong>*</strong>号的为必填项]</div>
		
		<!-- 这个$old只是做个占位符，没有什么作用，却不能没有 -->
		<?php $old=array(); ?>

	    {{Form::model($old,array('url'=>'admin/users','method'=>'post','files'=>'true'))}}
	    <ul class="userUl"> 
	    	<li>
			    {{Form::label('name','*用户名：',array('style','margin-top:50px'))}}
			    {{Form::text('name','',array('placeholder'=>'只允许字母,数字,下划线,长度大于6'))}}
			</li>
			<li>
			    {{Form::label('password','*密码：')}}
			    {{Form::password('password')}}
			</li>
			<li>
			    {{Form::label('password_confirmation','*确认密码：')}}
			    {{Form::password('password_confirmation')}}
			</li>
			<li>
			    {{Form::label('email','*邮箱：')}}
			    {{Form::text('email','',array('placeholder'=>'lin@yeah.net'))}}
			</li>
			<li>
			    {{Form::label('full_name','真实姓名：')}}
			    {{Form::text('full_name')}}
			</li>
			<li>
			    {{Form::label('photo','头像：')}}
			    {{Form::file('photo')}}
			</li>
			<li>
			    {{Form::label('gender','性别：')}}
			    <span>男</span>
			    {{Form::radio('gender',1)}}
			    <span>女</span>
			    {{Form::radio('gender',0)}}
			</li>
			<li>
				{{Form::label('more_infomation','个人简介:')}}
				{{Form::textarea('more_infomation','',array('placeholder'=>'字数限制：100'))}}
			</li>
			<li>
				<div class="span4 controls">
					<button class="btn btn-info marginR10" type="submit">保存更改</button>
					<button class="btn btn-danger" type="reset">重置</button>
				</div>
			</li>
	    </ul>  
	    {{Form::close()}}
	</div>
    <!-- Le javascript
    ================================================== -->
    <!-- Important plugins put in all pages -->
    <script type="text/javascript" src="{{asset('theme/html/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/js/jqueryui/1.10.2/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/js/bootstrap/bootstrap.js')}}"></script>  
    <script type="text/javascript" src="{{asset('theme/html/js/jquery.mousewheel.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/js/libs/jRespond.min.js')}}"></script>

    <!-- Charts plugins -->
    <script type="text/javascript" src="{{asset('theme/html/plugins/charts/flot/jquery.flot.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/plugins/charts/flot/jquery.flot.grow.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/plugins/charts/flot/jquery.flot.pie.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/plugins/charts/flot/jquery.flot.resize.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/plugins/charts/flot/jquery.flot.tooltip_0.4.4.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/plugins/charts/flot/jquery.flot.orderBars.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/plugins/charts/sparkline/jquery.sparkline.min.js')}}"></script><!-- Sparkline plugin -->
    <script type="text/javascript" src="{{asset('theme/html/plugins/charts/knob/jquery.knob.js')}}"></script><!-- Circular sliders and stats -->

    <!-- Misc plugins -->
    <script type="text/javascript" src="{{asset('theme/html/plugins/misc/fullcalendar/fullcalendar.min.js')}}"></script><!-- Calendar plugin -->
    <script type="text/javascript" src="{{asset('theme/html/plugins/misc/qtip/jquery.qtip.min.js')}}"></script><!-- Custom tooltip plugin -->
    <script type="text/javascript" src="{{asset('theme/html/plugins/misc/totop/jquery.ui.totop.min.js')}}"></script> <!-- Back to top plugin -->
    
    <!-- Search plugin -->
    <script type="text/javascript" src="{{asset('theme/html/plugins/misc/search/tipuesearch_set.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/plugins/misc/search/tipuesearch_data.js')}}"></script><!-- JSON for searched results -->
    <script type="text/javascript" src="{{asset('theme/html/plugins/misc/search/tipuesearch.js')}}"></script>

    <!-- Form plugins -->
    <script type="text/javascript" src="{{asset('theme/html/plugins/forms/uniform/jquery.uniform.min.js')}}"></script>
    
    <!-- Init plugins -->
    <script type="text/javascript" src="{{asset('theme/html/js/main.js')}}"></script><!-- Core js functions -->
    <script type="text/javascript" src="{{asset('theme/html/js/dashboard.js')}}"></script><!-- Init plugins only for page -->
    <script type="text/javascript" src="{{asset('theme/html/plugins/timeentry/jquery.timeentry.min.js')}}"></script>
    </body>
</html>