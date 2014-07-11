<!doctype html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 注意，这个页面是用来在iframe中包含，编辑个人信息页面 -->
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

    </head>
    <body>
            <div class="contentwrapper"><!--Content wrapper-->
                            <div class="resBtnSearch">
                                <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
                            </div>

                            <div class="search">

                                <form id="searchform" action="search.html">
                                    <input type="text" id="tipue_search_input" class="top-search" placeholder="Search here ..." />
                                    <input type="submit" id="tipue_search_button" class="search-btn" value=""/>
                                </form>
                        
                            </div><!-- End search -->
                            
                            <ul class="breadcrumb">
                                <li>您现在的位置:</li>
                                <li>
                                    <a href="#" class="tip" title="返回首页">
                                        <span class="icon16 icomoon-icon-screen-2"></span>
                                    </a> 
                                    <span class="divider">
                                        <span class="icon16 icomoon-icon-arrow-right-3"></span>
                                    </span>
                                </li>
                                <li class="active">个人资料页面</li>
                            </ul>

                        </div><!-- End .heading-->

                        <!-- Build page from here: -->
                        <div class="row-fluid">

                            <div class="span12">

                                <div class="page-header">
                                    <h4>个人资料</h4>
                                </div>
                                <ol id="validateMsg">
                                    @if(Session::has('errors'))
                                        <p>您填写的内容不符合要求：</p>
                                    @elseif(Session::has('msg'))
                                        <p>上传文件错误：<span style="color:red;">{{Session::get('msg')}}</span></p>
                                    @elseif(Session::has('suc'))
                                        <!-- 成功 -->
                                        <script>alert("{{Session::get('suc')}}")</script>    
                                    @endif
                                    @foreach($errors->all('<li>:message</li>') as $message)
                                        {{$message}}
                                    @endforeach
                                </ol>
                                {{Form::open(array('url'=>'admin/profile','method'=>'post','files'=>true,'class'=>'form-horizontal seperator'))}}
                                <!-- <form class="form-horizontal seperator"> -->
                                    <div class="form-row row-fluid">
                                        <div class="span12">
                                            <div class="row-fluid">
                                                <label class="form-label span3" for="username">用户名:</label>
                                                <input class="span4" id="username" type="text" disabled="disabled" name="name" value="{{$name}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row row-fluid">
                                        <div class="span12">
                                            <div class="row-fluid">
                                                <label class="form-label span3" for="username">头像:</label>
                                                <img src="{{$photo?$photo:asset('theme/html/images/60x60.gif')}}" alt="" class="image marginR10"/>
                                                <input type="file" name="file" id="file"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row row-fluid">
                                        <div class="span12">
                                            <div class="row-fluid">
                                                <label class="form-label span3" for="name">真实姓名:</label>
                                                <input class="span4" id="name" type="text" name="full_name" value="{{Input::old('full_name')?Input::old('full_name'):$full_name}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row row-fluid">
                                        <div class="span12">
                                            <div class="row-fluid">
                                                <label class="form-label span3" for="email">Email:</label>
                                                <input class="span4" id="email" type="text" name="email" value="{{Input::old('email')?Input::old('email'):$email}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row row-fluid">
                                        <div class="span12">
                                            <div class="row-fluid">
                                                <label class="form-label span3" for="normal">密码:</label>
                                                <div class="span4 controls">
                                                    <input class="span12" id="password" name="password" type="password" value="somepassword" />
                                                    <input class="span12" id="password_confirmation" name="password_confirmation" type="password" placeholder="确认密码" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 确定是用用户自己的性别选项还是改动过的 -->
                                    @if(Input::old('gender')!==false)
                                    <?php $g=Input::old('gender') ?>
                                    @else
                                    <?php $g=$gender ?>
                                    @endif  
                                    <div class="form-row row-fluid">
                                        <div class="span12">
                                            <div class="row-fluid">
                                                <label class="form-label span3" for="gender">性别:</label>
                                                <div class="left marginT5 marginR10">
                                                    <input type="radio" name="gender" id="optionsRadios1" value="1" checked="{{$g==1?'checked':''}}" />
                                                    男
                                                </div>
                                                <div class="left marginT5 marginR10">
                                                    <input type="radio" name="gender" id="optionsRadios2" value="0" checked="{{$g==0?'checked':''}}" />
                                                    女
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @if(Input::old('more_infomation'))
                                        <?php $j=Input::old('more_infomation') ?>   
                                    @else
                                        <?php $j=$more_infomation ?>
                                    @endif
                                    <div class="form-row row-fluid">
                                        <div class="span12">
                                            <div class="row-fluid">
                                                <label class="form-label span3" for="textarea">更多私人信息</label>
                                                <textarea class="span4 limit elastic" id="textarea2" rows="3" cols="5" name="more_infomation" placeholder="字数不能超过100">{{$j?$j:''}}</textarea>
                                            </div>
                                        </div>  
                                    </div>
                                    @if(Input::old('recieve_new')!==false)
                                    <?php $h=Input::old('recieve_new') ?>
                                    @else
                                    <?php $h=$recieve_new ?>
                                    @endif 
                                     <div class="form-row row-fluid">
                                        <div class="span12">
                                            <div class="row-fluid">
                                                <label class="form-label span3" for="email">是否接收新闻信息:</label>
                                                <div class="span4 controls">       
                                                    <div class="left marginR10">
                                                        <div class="iToggle-button">
                                                            <input type="checkbox" checked="{{$h?'checked':''}}" class="nostyle" name="recieve_new" value="1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="form-row row-fluid">        
                                        <div class="span12">
                                            <div class="row-fluid">
                                                <div class="form-actions">
                                                <div class="span3"></div>
                                                <div class="span4 controls">
                                                    <button type="submit" class="btn btn-info marginR10">保存更改</button>
                                                    <button class="btn btn-danger" type="reset">取消</button>
                                                    <script type="text/javascript" src="{{asset('theme/html/js/jquery.min.js')}}"></script>
                                                    <script>
                                                        //表单提交，ajax
                                                        $(function(){
                                                            $(".marginR10").click(function(){
                                                                //提取表单数据
                                                                

                                                                $.ajax({


                                                                })
                                                            })
                                                        })
                                                    </script>
                                                </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>


                                </form>
                              
                            </div><!-- End .span12 -->

                        </div><!-- End .row-fluid -->

                        <div class="modal fade hide" id="myModal1">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span class="icon12 minia-icon-close"></span></button>
                                <h3>Chat layout</h3>
                            </div>
                            <div class="modal-body">
                                <ul class="messages">
                                    <li class="user clearfix">
                                        <a href="#" class="avatar">
                                            <img src="images/avatar2.jpeg" alt="" />
                                        </a>
                                        <div class="message">
                                            <div class="head clearfix">
                                                <span class="name"><strong>Lazar</strong> says:</span>
                                                <span class="time">25 seconds ago</span>
                                            </div>
                                            <p>
                                                Time to go i call you tomorrow.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="admin clearfix">
                                        <a href="#" class="avatar">
                                            <img src="images/avatar3.jpeg" alt="" />
                                        </a>
                                        <div class="message">
                                            <div class="head clearfix">
                                                <span class="name"><strong>Sugge</strong> says:</span>
                                                <span class="time">just now</span>
                                            </div>
                                            <p>
                                                OK, have a nice day.
                                            </p>
                                        </div>
                                    </li>

                                    <li class="sendMsg">
                                        <form class="form-horizontal" action="#">
                                            <textarea class="elastic" id="textarea1" rows="1" placeholder="Enter your message ..." style="width:98%;"></textarea>
                                            <button type="submit" class="btn btn-info marginT10">Send message</button>
                                        </form>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn" data-dismiss="modal">Close</a>
                            </div>
                        </div>
                        
                    </div><!-- End contentwrapper -->
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
	




