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
	<div class="row-fluid status">
        <p class="p1">{{Config::get('common.htmlmodel')[$data[0]->page]}}&nbsp;&nbsp;栏目管理</p>
		<div class="span6">
            <div style="margin-bottom: 20px;">
                <ul id="myTab" class="nav nav-tabs pattern">
                    <li class="active">
                        <a href="#home" data-toggle="tab">栏目列表</a>
                    </li>
                    <li><a href="#profile" data-toggle="tab">Profile</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="home">
                        <table>
                            <tr>
                               <th>编号</th> 
                               <th>栏目名称</th> 
                               <th>绑定的分类</th> 
                               <th>section</th> 
                               <th>循环名称</th> 
                            </tr>
                            @foreach($data as $d)                        
                                <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->model_name}}</td>
                                    <td>{{Category::find($d->category_id)->category_name}}</td>
                                    <td>{{$d->section}}</td>
                                    <td>{{$d->loop}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. </p>
                    </div>
                </div>
            </div>

        </div><!-- End .span6 --> 
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