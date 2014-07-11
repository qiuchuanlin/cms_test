<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
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
    
    <!--自己的js文件-->
    <script type="text/javascript" src="{{asset('js/my.js')}}"></script>

</head>
      
    <body>
    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>
        
    <div id="header">

        <div class="navbar">
            <div class="navbar-inner">
              <div class="container-fluid">
                <a class="brand" href="{{asset('admin/index')}}">Cms.<span class="slogan">admin</span></a>
                <div class="nav-no-collapse">
                    <ul class="nav">
                        <li id="mainPage"><a href="javascript:;"><span class="icon16 icomoon-icon-screen-2"></span> <span class="txt">后台首页</span></a></li>
                        <li id="homePage">
                            <a href="javascript:;">
                                <span class="icon16 icomoon-icon-home-7"></span> 
                                <span class="txt">前台首页</span>
                            </a>
                            <ul id="backToHome">
                                <li class="first">
                                    <a href="{{url('/')}}" target="_blank">
                                        <span class="icon16 icomoon-icon-redo-2"></span> 
                                        <span class="txt">显示在新窗口</span>
                                    </a>
                                </li> 
                                <li>
                                    <a href="{{url('/')}}" target="_self">
                                        <span class="icon16 icomoon-icon-tab"></span> 
                                        <span class="txt">当前页打开</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="icon16 icomoon-icon-cog"></span><span class="txt"> Settings</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul>
                                        <li>                                                    
                                            <a href="#"><span class="icon16 icomoon-icon-equalizer"></span>Site config</a>
                                        </li>
                                        <li>                                                    
                                            <a href="#"><span class="icon16 icomoon-icon-wrench"></span>Plugins</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon16 icomoon-icon-image-2"></span>Themes</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="icon16 icomoon-icon-envelop"></span><span class="txt">Messages</span><span class="notification">8</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul class="messages">    
                                        <li class="header"><strong>Messages</strong> (10) emails and (2) PM</li>
                                        <li>
                                           <span class="icon"><span class="icon16 icomoon-icon-user-plus"></span></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Sammy Morerira</strong></a><span class="time">35 min ago</span></span>
                                            <span class="msg">I have question about new function ...</span>
                                        </li>
                                        <li>
                                           <span class="icon avatar"><img src="{{Auth::user()->head_photo}}" alt="" /></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>George Michael</strong></a><span class="time">1 hour ago</span></span>
                                            <span class="msg">I need to meet you urgent please call me ...</span>
                                        </li>
                                        <li>
                                            <span class="icon"><span class="icon16 icomoon-icon-envelop"></span></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Ivanovich</strong></a><span class="time">1 day ago</span></span>
                                            <span class="msg">I send you my suggestion, please look and ...</span>
                                        </li>
                                        <li class="view-all"><a href="#">View all messages <span class="icon16 icomoon-icon-arrow-right-8"></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                  
                    <ul class="nav pull-right usernav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="icon16 icomoon-icon-bell"></span><span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul class="notif">
                                        <li class="header"><strong>Notifications</strong> (3) items</li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="icon16 icomoon-icon-user-plus"></span></span>
                                                <span class="event">1 User is registred</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="icon16 icomoon-icon-bubble-3"></span></span>
                                                <span class="event">Jony add 1 comment</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="icon16 icomoon-icon-new"></span></span>
                                                <span class="event">admin Julia added post with a long description</span>
                                            </a>
                                        </li>
                                        <li class="view-all"><a href="#">View all notifications <span class="icon16 icomoon-icon-arrow-right-8"></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <img src="{{Auth::user()->head_photo}}" alt="" class="image" /> 
                                <span class="txt">{{Auth::user()->email}}</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul>
                                        <li id="pro" class="active">
                                            <a href="javascript:;"><span class="icon16 icomoon-icon-user-plus"></span>编辑个人资料</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon16 icomoon-icon-bubble-2"></span>Approve comments</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon16 icomoon-icon-plus"></span>Add user</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{asset('admin/logout')}}"><span class="icon16 icomoon-icon-exit"></span><span class="txt"> 注销</span></a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
              </div>
            </div><!-- /navbar-inner -->
          </div><!-- /navbar --> 

    </div><!-- End #header -->

    <div id="wrapper">

        <!--Responsive navigation button-->  
        <div class="resBtn">
            <a href="#"><span class="icon16 minia-icon-list-3"></span></a>
        </div>
        
        <!--Left Sidebar collapse button-->  
        <div class="collapseBtn leftbar">
             <a href="#" class="tipR" title="隐藏边栏"><span class="icon12 minia-icon-layout"></span></a>
        </div>

        <!--Sidebar background-->
        <div id="sidebarbg"></div>
        <!--Sidebar content-->
        <div id="sidebar">

            <div class="shortcuts">
                <ul>
                    <li><a href="support.html" title="Support section" class="tip"><span class="icon24 icomoon-icon-support"></span></a></li>
                    <li><a href="#" title="Database backup" class="tip"><span class="icon24 icomoon-icon-database"></span></a></li>
                    <li><a href="charts.html" title="Sales statistics" class="tip"><span class="icon24 icomoon-icon-pie-2"></span></a></li>
                    <li><a href="#" title="Write post" class="tip"><span class="icon24 icomoon-icon-pencil"></span></a></li>
                </ul>
            </div><!-- End search -->            

            <div class="sidenav">

                <div class="sidebar-widget" style="margin: -1px 0 0 0;">
                    <h5 class="title" style="margin-bottom:0">导航</h5>
                </div><!-- End .sidenav-widget -->
    
                <div class="mainnav">
                    <ul>
                        <li>
                            <a href="#"><span class="icon16 icomoon-icon-people"></span>用户管理</a>
                            <ul class="sub">
                                <li id="pro">
                                    <a  href="javascript:;"><span class="icon16 icomoon-icon-user-plus"></span>编辑个人资料</a>
                                   
                                </li>

                                <li>
                                    <a href="#"><span class="icon16 icomoon-icon-file"></span>前台用户</a>
                                     <ul class="sub">
                                        <li id="showUser"><a href="javascript:;"><span class="icon16 icomoon-icon-arrow-right-3"></span>显示前台用户列表</a></li>
                                        <li id="addUser"><a href="javascript:;"><span class="icon16 icomoon-icon-arrow-right-3"></span>添加前台用户</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="icon16 icomoon-icon-file"></span>后台管理员</a>
                                     <ul class="sub">
                                        <li id="showAdmin"><a href="javascript:;"><span class="icon16 icomoon-icon-arrow-right-3"></span>显示管理员列表</a></li>
                                        <li id="addAdmin"><a href="javascript:;"><span class="icon16 icomoon-icon-arrow-right-3"></span>添加管理员</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                                            

                            <li>
                                <a href="#"><span class="icon16 icomoon-icon-tree-3"></span>分类管理</a>
                                <ul class="sub">
                                    <li id="addTopCategory">
                                       <a href="javascript:;"><span class="icon16 icomoon-icon-pencil-2"></span>管理分类</a> 
                                    </li>
                                    <!-- 循环输出顶级分类列表 -->
                                    @foreach($top as $t)
                                    <li>
                                        <a href="#"><span class="icon16 icomoon-icon-file"></span>{{$t->category_name}}</a>
                                         <ul class="sub">
                                                
                                            <!-- 循环输出二级分类 -->
                                            @foreach($second as $s)
                                                @if($s->pid == $t->id || (!is_array($second) && ($second->pid==$t->id)))
                                                <li>
                                                    <a href="javascript:;">
                                                         <span class="icon16 icomoon-icon-arrow-right-3"></span>{{$s->category_name}}
                                                    </a>
                                                </li>
                                                @endif
                                            @endforeach
                                            <!-- tableId用于js获取当前点的是哪个分类 -->
                                            <li tableId="{{@$t->id}}">
                                                <a  class="addCategory" href="javascript:;"><span class="icon16 icomoon-icon-pencil"></span>添加{{$t->category_name}}分类</a>
                                                <!--因为添加分类只要一个类名就行了，所以就在下面用js操纵显示 -->
                                                <form action="javascript:;" tableId="{{@$t->id}}" style="display:none;">
                                                    <input class="catName" type="text" name="category_name" placeholder="请填写分类名" style="width:188px;margin-left:8px;text-align:center" />       
                                                    <label for="final" style="display:inline-block;margin-left:11px;margin-bottom:11px;">最终分类：</label>
                                                    <input type="checkbox" name="final" value="1"/>
                                                    <label for="nav" style="display:inline-block;margin-left:11px;margin-bottom:11px;">添加到导航栏：</label>
                                                    <input type="checkbox" name="nav" value="1"/>
                                                   <button class="btn btn-info catSub" type="submit" style="margin-left:65px">提交</button>
                                                </form>    
                                            </li>
                                        </ul>
                                    </li>
                                    @endforeach
                                   
                                </ul>
                            </li>


                        <!-- 栏目管理 -->
                        <li>
                            <a href="#"><span class="icon16   icomoon-icon-menu-2"></span>栏目管理</a>
                            <ul class="sub">
                                <li>
                                    <a href="#"><span class="icon16 icomoon-icon-file"></span>内置模板栏目</a>
                                     <ul class="sub">
                                        @foreach($htmlmodel as $k=>$h)
                                             <li id="model{{$k}}">
                                                <a href="javascript:;"> <span class="icon16 icomoon-icon-arrow-right-3"></span>{{$h}}</a>
                                            </li>
                                        @endforeach
                                     </ul>
                                </li>
                            </ul>   
                            <ul class="sub">
                                <li>
                                    <a href="#"><span class="icon16 icomoon-icon-file"></span>自定义模板栏目</a>
                                     <ul class="sub">
                                             <li>
                                                <a href="javascript:;"> <span class="icon16 icomoon-icon-arrow-right-3"></span>图片缩放</a>
                                            </li>
                                     </ul>
                                </li>
                            </ul>  
                        </li><!--栏目管理结束-->

                        <!-- 内容管理 -->
                        <li>
                            <a href="#"><span class="icon16 icomoon-icon-briefcase"></span>内容管理</a>
                            @foreach($top as $t)    
                                <ul class="sub">
                                    <li id="content{{$t->id}}">
                                        <a href="#"><span class="icon16 icomoon-icon-file"></span>{{$t->category_name}}</a>
                                    </li>
                                </ul> 
                            @endforeach    
                        </li><!--内容管理结束-->
                        
                          <!-- 前台管理 -->
                        <li style="text-indent:4px" id="navigator_url">
                           <a href="javascript:;"><span class="entypo-icon-network "></span>前台导航栏网址管理</a> 
                        </li>

                        <!-- 工具 -->
                        <li>
                            <a href="#"><span class="icon16 icomoon-icon-table-2"></span>小工具</a>
                            <ul class="sub">
                                <li id="mkresizer"><a href="javascript:;"><span class="icon16 icomoon-icon-arrow-right-3"></span>图片缩放</a></li>
                                <!-- js控制显示缩放图片的表格 -->
                            </ul>
                            <iframe id="resizer" class="myhidden" src="{{url('admin/resize')}}" frameborder="0" scrolling="no"></iframe>
                        </li>
                            <!--工具结束  -->

                        </li>
                       
                    </ul>
                </div>
            </div><!-- End sidenav -->

            

            

        </div><!-- End #sidebar -->

        <!--Body content-->
        <div id="content" class="clearfix">
            {{--This is the admin Default layout page,which be extended from other pages--}}
            {{--template will be extended--}}
            {{--@section("con")
                 This is the main content          
            @show--}}    
            <iframe src="{{url('admin/index-content')}}" frameborder="0" width="1165px" style="min-height:1500px" scrolling="no"></iframe>
        </div><!--End #content-->
    </div><!-- End #wrapper -->
    
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
