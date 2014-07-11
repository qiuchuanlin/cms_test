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
            <div class="row-fluid status">
                <p class="p1">管理分类</p>

                <div class="span6">
                    <div style="margin-bottom: 20px;">
                        <ul id="myTab" class="nav nav-tabs pattern" style="width:1125px !important">
                            <li id="categoryList3"><a  href="#list" data-toggle="tab" >分类列表</a></li>
                            <li mark=""><a href="#home" data-toggle="tab">添加顶级分类</a></li>
                            <li><a href="#profile" data-toggle="tab">说明</a></li>
                            <li><a href="#adddata" data-toggle="tab">添加数据库模板</a></li>
                            <li><a href="#addhtml" data-toggle="tab">添加html模板</a></li>
                        </ul>

                        <div class="tab-content" style="width:1095px !important">
                            <div class="tab-pane fade in active" id="list">
                                <table class="categoryList">
                                    <tr>
                                       <td colspan="10">
                                           <strong>注意：</strong>
                                           带文件夹图标的表示下面还有分类，文件图标的则没有子类
                                       </td> 
                                    </tr>
                                    <tr>
                                        <th>编号</th>
                                        <th>类名</th>
                                        <th>创建时间</th>
                                        <th>最后更新时间</th>
                                        <th>别名</th>
                                        <th>导航栏显示</th>
                                        <th>数据库模板</th>
                                        <th colspan="3">操作</th>
                                    </tr>
                                    @foreach($list as $k=>$v)
                                        <tr>
                                            <td>{{$v->id}}</td>
                                            <td>
                                                <!-- 这里主要作用就是将上下级分类用样式区分开来 -->
                                                {{str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',preg_match_all('/,/',$v->path))}}
                                                @if(!$v->final)
                                                    <img src="{{asset('images/folder.jpg')}}" alt="" width="40px"/>
                                                @else
                                                    <img src="{{asset('images/file.png')}}" alt="" width="40px" />
                                                @endif
                                                @if($v->pid==0)
                                                    <span style="color:red">{{$v->category_name}}</span>
                                                @else
                                                    {{$v->category_name}}
                                                @endif
                                            </td>
                                            <td>{{$v->created_at}}</td>
                                            <td>{{$v->updated_at}}</td>
                                            <td>{{$v->alias}}</td>
                                            <td>{{$v->nav?'是':'否'}}</td>
                                            <td>{{$v->model_readable}}</td>
                                            <td class="list_last_td">
                                                <!-- 注明：只有最终的分类才有内容可写．如果下面还有分类，那么它自己也就只是个类名而已，没有什么好写 -->
                                                @if($v->final)
                                                    <button class="btn btn-success" href="javascript:;">管理内容</button>
                                                @else
                                                    <button categoryId="{{$v->id}}" class="btn btn-primary addc" href="#">添加子类</button>
                                                @endif
                                                    <!-- 添加一个私有属性让js来获得当前类的final属性,作为后面判断是否有子类的依据,另外获得当前的类名,和当前的id,以及内容表名,删除子类是需要删除内容的 -->
                                                    <!-- 属性上的php别忘了echo -->
                                                    <button class="btn btn-inverse editbtn" href="#" data-final="<?php echo $v->child?$v->child:0?>" data-name="{{$v->category_name}}" data-id="{{$v->id}}" data-contentTable="{{$v->relation}}">修改</button>
                                                    <button class="btn btn-danger delbtn" href="#" data-final="<?php echo $v->child?$v->child:0?>" data-id="{{$v->id}}" data-contentTable="{{$v->relation}}">删除</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="tab-pane fade" id="home">
                                <!-- 判断错误 -->
                                @if(Session::has('msg'))
                                    <script>alert("{{Session::get('msg')}}")</script>
                                @endif

                                <!-- var变量属于占位符 -->
                                <?php $var='' ?>
                                {{Form::model($var,array('method'=>'post','url'=>'admin/category/add-top-category','id'=>'atc'))}}
                                      <ul>  
                                            <li>
                                                {{Form::label('category_name','*类名：')}}
                                                {{Form::text('category_name')}}
                                            </li>
                                            <li>
                                                {{Form::label('model','*数据库模板：')}}
                                                <select name="model" id="table">
                                                    <option value="default">请选择</option>
                                                    @foreach($contentTable as $k=>$v)
                                                        <option value="{{$k}}">{{$v}}</option>
                                                    @endforeach
                                                </select>
                                            </li>
                                            <li>
                                                {{Form::label('position','栏目位置：')}}
                                                {{Form::select('positon',array('0'=>'to do','1'=>'热点','2'=>'评论'))}}
                                            </li>
                                            <li>
                                                {{Form::label('nav','添加到首页导航：')}}
                                                 <span>是</span>
                                                {{Form::radio('nav','1',array('checked'=>'checked'))}} 
                                                <span>&nbsp;&nbsp;否</span>
                                                {{Form::radio('nav','0')}}
                                            </li>
                                            <li>
                                                {{Form::label('final','最终分类')}}
                                                <span>是</span>
                                                {{Form::radio('final',1)}}
                                                <span>&nbsp;&nbsp;否</span>
                                                {{Form::radio('final',0,array('checked','checked'))}}
                                            </li>
                                            <li>
                                                {{Form::label('alias','导航栏别名：')}}
                                                {{Form::text('alias','',array('placeholder'=>'不填则和类名相同'))}}
                                            </li>
                                            <li>
                                                <button class="btn btn-large btn-block btn-primary" type="submit" style="width:385px !important">提&nbsp;&nbsp;交</button>
                                            </li>
                                        </ul>
                                {{Form::close()}}
                            </div>
                            <div class="tab-pane fade" id="profile">
                               <ol>
                                    <li>
                                        <p>
                                            <strong>数据库模板:</strong>
                                            也就是对应的数据库表，可用默认提供的数据库表，也可以自己添加.
                                        </p>
                                        <p>
                                            如需要添加模板，请点击"添加数据库模板"进行操作.
                                        </p>
                                   </li>
                                   <li>
                                        <p>
                                            <strong>栏目位置：</strong>
                                            指的是该类的内容在首页的位置,显示在哪个栏目里面.
                                        </p>
                                        <p>
                                            这个首页本身已经写好html样式,所以默认是选择该html文件的某个栏目.
                                        </p>
                                        <p>
                                            如需更改，可点击"添加html模板"，进行操作.
                                        </p>
                                    </li> 
                                    <li>
                                        <p>
                                            <strong>添加导航栏：</strong>
                                            只有顶级分类出现在首页导航栏.
                                        </p>
                                        <p>
                                            二级及以下为添加到分页导航栏
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong>最终分类：</strong>
                                            所谓最终分类，就是下面已经没有分类的类．这样的类才是最终要写入内容的分类．
                                            比如创建了一个"新闻"类,然后往这个分类加入内容．
                                            <p>如果此时再到它下面创建一个"国际新闻"类，</p>
                                            <p>那么在"新闻"类下面，"国际新闻"里面的内容是有明确分类的</p>
                                            <p>而原先添加到"新闻"里的内容，则成为了没有明确分类的内容</p>
                                            <p>为了避免这样的结果，所以请预先选择好最终分类</p>
                                        </p>
                                    </li>
                               </ol>
                            </div>
                           
                            <!-- 添加子类 js调用显示-->
                            <div id="addChild">
                                <form action="javascript:;">
                                    <input id="listadd" type="text" name="category_name" placeholder="请填写类名"/><br/>
                                    <label for="final">最终分类：</label>
                                    <input type="checkbox" name="final" id="" />
                                    <label for="nav">添加到导航栏:</label>
                                    是
                                    <input  id="nav" type="radio" name="nav" value="2"/>
                                    否
                                    <input type="radio" name="nav" value="0" />
                                    <button id="addChildSubmit" class="btn btn-info" >提交</button>
                                    <button id="cancle" class="btn btn-warning">取消</button>
                                </form>
                            </div>

                            <!-- 2012/6/27修改分类:涉及到简单改类名,或者复杂的,得移动子类,或者删除子类 -->
                            <!-- 这个同样是通过js调用来显示 -->
                            <div id="editCotegory" class="myhidden">
                                <form action="javascript:;" method="post">
                                    <label for="cname">修改类名:</label>
                                    <input type="text" name="cname" id="cname"/>
                                    
                                    <div style="overflow:hidden">    
                                        <label for="changeCategory" class="fl" style="margin-right:25px">是否改变所属分类</label>
                                        <!-- 点击这个按钮,将触发下面的js判断 -->
                                        <input type="checkbox" name="startChange"  id="startChange"  value="1" class="fl"/>
                                    </div>
                                    
                                     <!--这个是选定的类本身的移动,如果没有子类也是移动本身,因为不一定会有移动分类的选择,所以这个也先隐藏.
                                        点击上面的radio之后才控制显示-->
                                    <!-- 显示所有类名 -->
                                    <div id="moveSelf" class="myhidden">
                                        <label for="selfCategory">移动该类自身到</label>
                                        <div>
                                             <select name="selfCategory" id="selfCategory">
                                                    <option value="0">请选择</option>
                                                    <!-- 后添加一个移动成顶级分类的选项 -->
                                                    <option value="top" style="font-weight:bold">顶级分类</option>
                                                    @foreach($listNotFinal as $v)
                                                        <option value="{{$v->id}}">{{$v->category_name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- 特殊情况,如果选择的是顶级分类的话,还得添加一个下拉框让其选择对应的模板.这里所谓的模板是对应的内容表
                                        因为所有子类会根据父类的对应内容表来找它的内容表.而顶级分类必须标明这项. 
                                        内容表的话不是随即生成的,自己有哪些内容表,要在配置文件中写好.
                                        目前对应的配置文件位置在config/CategoryRelationType.php,查找配置文件是后台的事-->
                                        <!-- 这个div的显示与否就在于上面的选项框有没有选中顶级分类这项 -->
                                    <div id="relationTable" class="myhidden">
                                        <label for="relationTable">顶级分类需要选择对应的内容表</label>
                                        <select name="relationSel" id="relationSel">
                                            <option value="default">请选择</option>
                                            @foreach($contentTable as $k=>$v)
                                                <option value="{{$k}}">{{$v}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <!-- 如果该类有子类的话应该让用户选择是否删除子类或者一起移动又或者子类移动到别的类下面 -->
                                    <!-- 这个同样通过js来判断,决定显示与否,默认让这个div隐藏 -->
                                    <div class="ifFinal myhidden">
                                        <p style="color:#3DA4C2;text-align:left;"><span style="font-weight:bold;display:inline-block;margin-left:-105px">＊</span>当前类拥有子类,选择对子类的操作:</p>
                                        <div>
                                            <span>删除:</span>
                                            <input type="radio" name="doChild" value="1"/>
                                        </div>
                                        <div>
                                            <span>跟父类一起移动:</span>
                                            <input type="radio" name="doChild" value="2"/>
                                        </div>
                                        <div>
                                            <span class="fl">子类移动到:</span>
                                                <!--显示所有类名供其选择-->
                                                <div class="fl" style="margin-left:10px;">
                                                    <select name="childCategory" id="childCategory" style="width:96px">
                                                        <option value="0">请选择</option>
                                                        @foreach($listNotFinal as $v)
                                                            <option value="{{$v->id}}">{{$v->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="clear"></div>
                                        </div>
                                    <!-- 清除浮动 -->
                                    <div class="clear"></div>
                                    </div>
                                   
                                    <button id="chcategory" class="btn btn-info" style="margin:50px 30px 0px 30px">提交</button>
                                    <button id="canclechange" class="btn btn-warning" style="margin-top:50px">取消</button>
                                </form>
                            </div>

                            <!-- ＊删除分类操作＊,该div也是js控制显示,默认隐藏.主要是删除的类有子类的时候才显示.主要就是子类应该怎么操作-->
                            <div id="deleteCategory" class="myhidden" style="padding-top:50px">
                                <form action="javascript:;">
                                    <p style="color:#3DA4C2;text-align:left;"><span style="font-weight:bold;display:inline-block;">＊</span>当前类拥有子类,选择对子类的操作:</p>
                                    <div style="margin-left:70px">
                                        <label for="childdel" class="fl">删除所有子类:</label>
                                        <input type="checkbox" name="childdel" value="1" class="fl"/>
                                        <div class="clear"></div>
                                    </div>
                                    <div style="margin-left:70px">
                                        <label for="childmov" class="fl">移动到某个分类下:</label>
                                        <select name="childmov" id="childmov" style="width:100px;margin:22px 0 0 -42px " class="fl">
                                            <option value="0">请选择</option>
                                            @foreach($listNotFinal as $v)
                                                <option value="{{$v->id}}">{{$v->category_name}}</option> 
                                            @endforeach
                                        </select>
                                        <div class="clear"></div>
                                    </div>
                                    <button id="submitDelete" class="btn btn-info" style="margin:50px 30px 0px 50px">提交</button>
                                    <button id="cancleDelete" class="btn btn-warning" style="margin-top:50px">取消</button>
                                </form>
                            </div>


                            <!-- tab切换的内容 -->
                            <div class="tab-pane fade" id="adddata">
                                <p>to do</p>
                            </div>
                            <div class="tab-pane fade" id="addhtml">
                                <p>to do</p>
                            </div>

                            <div class="tab-pane fade" id="dropdown1">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. </p>
                            </div>
                            <div class="tab-pane fade" id="dropdown2">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master.</p>
                            </div>
                        </div>
                    </div>

                </div><!-- End .span6 --> 
            </div>
        <!-- </div> -->
<body>


	


    <!-- Le javascript
    ================================================== -->
    <!-- Important plugins put in all pages -->
    <script type="text/javascript" src="{{asset('theme/html/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/js/jquery-ui.min.js')}}"></script>
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
    
    <!-- Init plugins -->
    <script type="text/javascript" src="{{asset('theme/html/js/main.js')}}"></script><!-- Core js functions -->
    <script type="text/javascript" src="{{asset('theme/html/js/dashboard.js')}}"></script><!-- Init plugins only for page -->
    <script type="text/javascript" src="{{asset('theme/html/plugins/timeentry/jquery.timeentry.min.js')}}"></script>
    </body>
</html>
