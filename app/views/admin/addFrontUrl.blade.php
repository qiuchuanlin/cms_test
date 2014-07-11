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
    
    <!-- 到处找css太费时间了,就在这里写 -->
    <style>
        table th,table td{
            border:1px solid #ccc;
        }
        table td{
            text-align: center;
        }
        table td.whichpage{
            text-align:left;
        }
        table td input{
            margin-top:12px;
        }
    </style>

    </head>
    <!-- 这个页面的主要功能,就是给各个导航栏添加url,所有设置了nav字段的分类都有可能出现在导航栏
        这里用一个table列表将所有导航栏分类项列出来,批量更改或者设置url
    -->
    <div class="status">
    <p class="p1">导航栏设置url页面</p>   
        <form action="{{url('admin/front/add-nav-url')}}" method="post">
            <table style="border:1px solid #ccc;margin-left:200px;width:750px">
                <tr style="background:#ddd;height:20px">
                    <!-- 纯粹做点背景装饰的行 -->
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <th>类名<span style="font-size:10px">(导航栏上的都是分类名)</span></th>
                    <th>url</th>
                    <th>说明</th>
                </tr>
                <tr> 
                   <td colspan="2" class="whichpage">
                       <strong  style="color:#7DA8D6">首页<span style="font-size:10px">(对应顶级分类)</span></strong>
                   </td>
                   <!-- $num是数据总条数,4的话,是三条文本加上1个提交按钮,可以根据实际情况来看.
                        这个写法有点较真了....
                    -->
                   <td rowspan="{{$num+4}}" style="text-align:left">
                       <p style="width:310px;margin-top:-130px">这个项目中的所有url都是以'http://cms/'开头的.</p>
                       <p>为了简化输入,可以只输入'http://cms/'之后的部分</p>
                       <p style="margin-left:28px">如:'http://cms/index',可以写成'index'就行了</p>
                   </td> 
                </tr>
                <!-- 循环顶级分类 
                    这里想用文本输入框的name跟类id产生联系.
                    因为后面要插入数据库更新的话,需要这个id
                -->
                @foreach($top as $v)
                    <tr>
                        <td>
                            <span>{{$v->category_name}}</span>
                        </td>
                        <td>
                            <input type="text" name="{{$v->id}}" value="{{$v->navurl}}"/>
                        </td>
                    </tr>
                @endforeach
                
                <!-- 同样循环二级分类 但是这个就要判断一下了,上面顶级分类如果没有的话会直接返回报错
                    二三级分类的话,模板上来判断.
                -->
                <tr>
                   <td colspan="2" class="whichpage">
                       <strong  style="color:#7DA8D6">二级分页<span style="font-size:10px">(对应二级分类)</span></strong>
                   </td> 
                </tr>
                    @if($second)
                        @foreach($second as $v)
                            <tr>
                                <td>
                                    <span>{{$v->category_name}}</span>
                                </td>
                                <td>
                                    <input type="text" name="{{$v->id}}" value="{{$v->navurl}}"/>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                <!-- 三级分类 -->
                <tr>
                   <td colspan="2" class="whichpage">
                       <strong  style="color:#7DA8D6">三级分页<span style="font-size:10px">(对应三级分类)</span></strong>
                   </td> 
                </tr>
                    @if($third)
                        @foreach($third as $v)
                            <tr>
                                <td>
                                    <span>{{$v->category_name}}</span>
                                </td>
                                <td>
                                    <input type="text" name="{{$v->id}}" value="{{$v->navurl}}"/>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                <tr>
                    <td colspan="2">
                        <!-- 提交按钮 -->
                        <button class="btn btn-info" style="margin:15px 0 15px 65px;width:475px;" type="submit">提交</button>
                    </td>
                </tr>
            </table>
        </form>

        <!-- 报错 -->
        @if(Session::has('msg'))
            <script>alert("{{Session::get('msg')}}")</script>
        @endif
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