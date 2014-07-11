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
        <!--uploadify的css  -->
    <link rel="stylesheet" href="{{asset('uploadify/uploadify.css')}}" />
    <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
    <meta name="application-name" content="Supr"/> 
    <meta name="msapplication-TileColor" content="#3399cc"/> 

    <!-- Load modernizr first -->
    <script type="text/javascript" src="{{asset('theme/html/js/libs/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/html/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-1.10.1.min.js')}}"></script>
    <script type="text/javascript" src="http://cms/js/my.js"></script>
    
    <!-- 批量上传图片插件 -->
    <script type="text/javascript" src="{{asset('uploadify/jquery.uploadify.js')}}"></script>
    <!-- ckEditor编辑器 -->
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <style>
        #postToutiao tr:hover{
            background:#D5D1D1;
            cursor:pointer;
        }
        #postToutiao tr.pglist:hover,#postToutiao tr.nohover:hover{background:#fff;}
        #tttj{overflow: hidden;zoom:1;}
        #tttj form{
            float:left;
            margin-bottom: 0;
        }
    </style>

    </head>
	   <div class="row-fluid status">
            <p class="p1">{{$title}}内容管理</p>
            <div class="span6 contentspan6">
                <div style="margin-bottom: 20px;width:1108px">
                    <ul id="myTab" class="nav nav-tabs pattern">
                        <li class="active">
                            <a href="#home" data-toggle="tab">内容列表</a>
                        </li>
                        <li><a href="#addContent{{$relation}}" data-toggle="tab">添加内容</a></li>
                    </ul>

                    <div class="tab-content" style="width:1076px">
                        <!-- 说明：下面div的id，'addContent'末尾的数字是与顶级分类的relation字段相对应，在上面js调用的时候动态生成．以减少页面 -->

                        <!-- 内容列表,这个是所有内容通用的部分,比如新闻的内容列表,或者商场的内容列表都是在这显示,根据后台的查询结果来决定是哪一块的内容 -->
                        <div id="home" class="tab-pane fade in active">
                            <!-- 有种情况是没有内容的,此时让这个div显示说明信息就好了 -->
                            @if(@$msg && $msg!=2)
                                <p style="font-weight:bold;color:red">{{$msg}}</p>
                            @else
                            <!-- 这一行用来做一下排序和搜索 -->
                            <div style="background:#DBDBDB;padding-top:20px;padding-left:10px">
                                <!-- 这两个select选框,是通过js来操作,不放到form里面 -->

                                <div class="fl" style="">
                                    <label for="timeorder" class="fl" >按时间排序:</label>
                                    <div class="fl" style="margin-left:17px;width:92px;margin-top:-6px">
                                        <!-- 这个select如果选择的话,将会通过js获得,然后ajax传回显示这个内容页面的方法重新调整内容输出 
                                        而那个方法开始是有一个参数的.即左边栏点击时传过去的顶级分类id,
                                        那么现在ajax到这个方法也还是需要用到这个id.所以用一个私有属性来设置这个值-->
                                        <select name="timeorder" id="timeorder" data-id="{{$id}}">
                                            <!-- 默认项 -->
                                            <option value="0">请选择</option>
                                            <option value="1">最新</option>
                                            <option value="2">最早</option>
                                        </select>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!-- 做一个select下拉框,可以选择只显示某一子类的内容.
                                这里其实都是顶级分类的子类,比如新闻包括本地新闻,国际新闻等.
                                而通过select选框可只显示本地新闻这一种-->
                                <div class="fl" style="margin-left:20px;">
                                    <label for="chooseCategory" class="fl">单独显示一类:</label>
                                    <div style="width:99px;margin:-7px 0 0 10px" class="fl">
                                        <select name="chooseCategory" id="chooseCategory" data-id="{{$id}}">
                                            <option value="0">请选择</option>
                                            <!-- 循环所有子类 
                                                    注意,这个$find_name是在后台拼接过的,
                                                    键就是类id,值就是类名-->
                                            @foreach($find_name as $k=>$v)
                                                <option value="{{$k}}">{{$v}}</option>
                                            @endforeach
                                            <!-- [后加]当用户切换到只显示某一个子类之后,也许还想选择再显示全部.那么还给个选项,返回显示全部的内容 -->
                                            <option value="all">全部</option>
                                        </select>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!-- laravel默认的表单方法是post,现在要去首页getIndex方法,所以写明get -->
                                <form action="http://cms/admin/content/index/{{$id}}" method="get">
                                    <!-- 搜索的话是各个顶级分类是不同的,比如新闻可能搜索标题,作者,内容.而商城可能搜索的是商品和价格
                                        所以搜索必须判断显示是哪一类的.
                                        还是用relation来判断,表名字段不会轻易改,而id经常变化

                                        搜索直接用纯php来做,直接form表单传后台-->

                                    <!-- 这个是新闻的搜索 -->
                                    @if($relation=='news')
                                        <div class="fl" style="margin-left:135px">
                                            <label for="newsSearch" class="fl">搜索:</label>
                                            <input type="text" name="newsSearch" class="fl" style="margin-top:-5px"/>
                                            <!-- 这里给个条件 -->
                                            <!-- 时间,多少时间内的数据 -->
                                            <div class="fl" style="width:105px;margin-top:-6px;margin-left:2px">
                                                <select name="range" id="">
                                                    <option value="0">不限时间</option>
                                                    <option value="1">1天内</option>
                                                    <option value="2">2天内</option>
                                                    <option value="7">1周内</option>
                                                    <option value="30">1月内</option>
                                                    <option value="180">半年内</option>
                                                </select>
                                            </div>
                                            <!-- 其他属性,如title,author,content-->
                                            <div class="fl" style="width:105px;margin-top:-6px;margin-left:2px">
                                                <select name="newProperty" id="">
                                                    <option value="0">不限字段</option>
                                                    <option value="title">标题</option>
                                                    <option value="author">作者</option>
                                                    <option value="content">内容</option>
                                                </select>
                                            </div>
                                            <button class="fl" style="font-weight:bold;margin-top:-4px;margin-left:15px" type="submit">GO</button>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                        <!-- 各个版块的搜索条件是不一样的,所以需要传一个标识给后台,让后台知道是处理哪个版块的搜索 
                                        其实是哪个版块并不需要这样判断,因为form的action调用方法的url必须得给参数,那个参数本来就是顶级分类id
                                        根据那个就可以知道当前是哪个版块.当然,这样的话,form提交调用方法,和最初显示页面的调用方法是一样的,
                                                                        -------------------------------------------------
                                        所以后台必须判断,是搜索来的,还是初始化页面,而这个隐藏标识就是判断是否搜索.
                                        ------------------------------------------------------------
                                        因为普通的初始化页面id是方法参数,而这个隐藏的id是通过Input::get()来得到的-->
                                        <input type="hidden" name="category_id" value="{{$id}}"/>
                                    @endif
                                </form>
                            </div>
  
                                <!--有内容的话就输出内容  -->
                                <!-- 下面就是用个table来显示内容列表了 -->
                                <!-- [后加] 增加一个复选框设置新闻头条.
                                     现在的设想是根据页面来设置,如果列表页面中有两个小版块是显示国内新闻,那么国内新闻可以有两个头条.
                                     一个是一级头条.另一个是二级头条,分别放在那两个小版块的第一条.
                                     重复设置其他的新闻为头条将覆盖原来的.
                                    用form来提交数据.

                                     另外作者这一项可以去掉了,新闻很少看到署名作者.   
                                -->
                                <form id="postToutiao" action="http://cms/admin/content/news-toutiao/{{$id}}" method="post" style="margin-bottom:0">
                                    <table id="contentTable" style="border:1px solid #CCCCCC;width:1110px;margin-top:0px">
                                        <!-- 说明 -->
                                        <tr class="nohover">
                                            <td colspan="7" style="text-align:left">
                                                <p style="margin:0"><span style="color:red;font-size:13px;">[注意]</span>:新闻的头条这里是用在列表页,通常每一类在列表页也有两个小版块,可以设置两个头条.
                                                如果选择多个,后面的将覆盖前面的成为头条.</p>
                                                <p style="padding-left:40px;margin-bottom:0">而推荐是指放到整个网站的首页,没有推荐时使用最新数据</p>
                                            </td>
                                        </tr>
                                        <tr style="background:#DBDBDB"><td colspan="7"></td></tr>
                                        <tr class="nohover">
                                            <td colspan="7" style="text-align:left;margin-bottom:0">
                                                <!-- 添加头条:这里后添加了两个功能,一个是头条,一个是推荐,推荐想做成是推荐上整个网站的首页
                                                    本来考虑用两个form,但是那个多选框是在整个table里面的,两个form都要包裹整个table才能取到多选框的值.
                                                    所以还是用一个来做,通过参数来决定是哪个操作.
                                                 -->
                                                <div id="tttj">
                                                        <div style="margin-left:10px;width:104px;display:inline-block">
                                                            <select name="toutiaoLevel" id="">
                                                                <option value="0">头条</option>
                                                                <option value="2">一级头条</option>
                                                                <option value="1">二级头条</option>
                                                            </select>
                                                        </div>
                                                        <!-- 头条或者推荐操作完或者失败都还需要返回显示页面,显示页面需要一个分类id参数,
                                                        这里已经传过来了,应该放到button上做私有属性,让js可以获取 
                                                        -->
                                                        <button type="submit" class="btn btn1 toutiaoBtn" data-id="{{$id}}" style="display:inline-block">执行头条</button>
                                                    <!-- 推荐 注意这里option的值用倒序排,一边以后输出,一次排序就实现所有内容输出-->
                                                        <div style="margin-left:10px;width:104px;display:inline-block">
                                                            <select name="tuijianLevel" id="">
                                                                <option value="0">推荐</option>
                                                                <option value="8">一级推荐</option>
                                                                <option value="7">二级推荐</option>
                                                                <option value="6">三级推荐</option>
                                                                <option value="5">四级推荐</option>
                                                                <option value="4">五级推荐</option>
                                                                <option value="3">六级推荐</option>
                                                                <option value="2">七级推荐</option>
                                                                <option value="1">八级推荐</option>
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn1 tuijianBtn" data-id="{{$id}}" style="display:inline-block">执行推荐</button>
                                                 
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="background:#DBDBDB"><td colspan="7"></td></tr>
                                        <tr class="nohover">
                                            <th>选择头条/推荐</th>
                                            <th>编号</th>
                                            <th>分类</th>
                                            <th style="width:415px;">标题</th>
                                            {{--<th style="width:400px;">内容</th>--}}
                                            <th>创建时间</th>
                                            <th>修改时间</th>
                                            <th colspan="2">操作</th>
                                        </tr>
                                        <!-- 循环创建表格 -->
                                        @foreach($content as $c)
                                            <tr>
                                                <td><input type="checkbox" name="content_id[]" id="toutiao" value="{{$c->id}}"/></td>
                                                <td>{{$c->id}}</td>
                                                <!-- 内容表的外键和这个数组的索引是一样的,值是类名.后台可以拼接成这样的 -->
                                                <td>{{$find_name[$c->category_id]}}</td>
                                                <td style="text-align:left;text-indent:2em" id="toutui">
                                                    <!-- 这里把有头条或者推荐的数据在标题这标明 -->
                                                    @if($c->toutiao==1)
                                                        <!-- 这些span都加一个私有属性,保存内容id,以便js获取取消头条/推荐,以及顶级分类id,流程循环回显示方法时要用到 
                                                            因为头条/推荐准备放在同一个方法里做,所以,要区分是头条还是推荐,需要一个标识符
                                                        -->
                                                        <span style="color:red" data-id="{{$c->id}}" data-top="{{$id}}" data-type="toutiao">[二级头条]</span>
                                                    @elseif($c->toutiao==2)
                                                        <span style="color:red" data-id="{{$c->id}}" data-top="{{$id}}" data-type="toutiao">[一级头条]</span>
                                                    @endif

                                                    @if($c->tuijian==1)
                                                        <span style="color:red" data-id="{{$c->id}}" data-top="{{$id}}" data-type="tuijian">[八级推荐]</span>
                                                    @elseif($c->tuijian==2)
                                                        <span style="color:red" data-id="{{$c->id}}" data-top="{{$id}}" data-type="tuijian">[七级推荐]</span>
                                                    @elseif($c->tuijian==3)
                                                        <span style="color:red" data-id="{{$c->id}}" data-top="{{$id}}" data-type="tuijian">[六级推荐]</span>  
                                                    @elseif($c->tuijian==4)
                                                        <span style="color:red" data-id="{{$c->id}}" data-top="{{$id}}" data-type="tuijian">[五级推荐]</span>
                                                    @elseif($c->tuijian==5)
                                                        <span style="color:red" data-id="{{$c->id}}" data-top="{{$id}}" data-type="tuijian">[四级推荐]</span>
                                                    @elseif($c->tuijian==6)
                                                        <span style="color:red" data-id="{{$c->id}}" data-top="{{$id}}" data-type="tuijian">[三级推荐]</span>
                                                    @elseif($c->tuijian==7)
                                                        <span style="color:red" data-id="{{$c->id}}" data-top="{{$id}}" data-type="tuijian">[二级推荐]</span>
                                                    @elseif($c->tuijian==8)
                                                        <span style="color:red" data-id="{{$c->id}}" data-top="{{$id}}" data-type="tuijian">[一级推荐]</span>
                                                    @endif
                                                        {{$c->title}}
                                                </td>
                                                <!-- 文章内容的话,是用ckeditor上传的,里面有很多标签,写入数据库时转义了.
                                                    此时反转义,去掉斜杠,让内容复原.
                                                    但是还有个问题,就是有很多换行标签如\r\n,去掉\之后成为rn,这个用''换掉. 
                                                    这个内容的话还是考虑不输出,因为如果有图片太占地方,一个表格也没法输出一篇文章
                                                    到前台完成之后,给标题一个链接过去看内容.-->
                                                {{--<td style="text-align:left">{{str_replace('rnrn','',stripslashes($c->content))}}</td>--}}
                                                <td>{{$c->created_at}}</td>
                                                <td>{{$c->updated_at}}</td>
                                                <td colspan="2">
                                                    <!-- 把对应该条数据的id,和对应的版块relation放到按钮上当作私有属性,以供js获取,主要是映射url,不同的relation也就是不同的表,去不同的方法操作.
                                                        -------------------------------------------------------------------------------------------------------------------
                                                        其实,不管是用js还是php,修改内容,删除内容,都是在这个位置得保存一下id.这应该作为常识记住.
                                                        --------------------------------------------------------------------------
                                                     -->
                                                    <button class="btn btn-inverse editContent" href="#"  data-id="{{$c->id}}" data-relation="{{$relation}}">修改</button>
                                                    <button class="btn btn-danger deleteContent" href="#" data-id="{{$c->id}}" data-relation="{{$relation}}" data-parentId="{{$id}}" type="aaa">删除</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <!-- 分页 -->
                                        <tr class="pglist">
                                            <!-- 分页的话需要判断下,如果是搜索的,得保持它搜索的条件来分页 -->
                                            <!-- 有时间排序限制 -->
                                            @if(@$timeOrder)
                                               <td colspan="7" id="pageList" style="text-align:right">{{$content->appends(array('timeOrder'=>$timeOrder))->links()}}</td> 
                                            <!-- 有指定一类显示 -->
                                            @elseif(@$cid)
                                                <td colspan="7" id="pageList" style="text-align:right">{{$content->appends(array('cid'=>$cid))->links()}}</td>
                                            <!-- 有标识表示要搜索,注意搜索的条件可不只一个,所以应该在这拼接一下数组-->
                                            @elseif(@$category_id)
                                                <?php 
                                                    $appends['category_id']=$category_id;
                                                 ?>
                                                @if(@$newsSearch)
                                                    <?php $appends['newsSearch']=$newsSearch ?>
                                                @endif
                                                @if(@$newProperty)
                                                    <?php $appends['newProperty']=$newProperty ?>
                                                @endif
                                                @if(@$range)
                                                    <?php $appends['range']=$range ?>
                                                @endif
                                                <td colspan="7" id="pageList" style="text-align:right">{{$content->appends($appends)->links()}}</td>
                                            @else    
                                                <td colspan="7" id="pageList" style="text-align:right">{{$content->links()}}</td>
                                            @endif
                                        </tr>
                                    </table>
                                </form>
                            @endif


                        </div>
                        
                        <!-- 添加新闻内容,这个id是类id-->
                        <div class="tab-pane fade newsContent" id="addContentnews">
                            {{Form::open(array('url'=>"admin/content/add/$id",'files'=>true))}}
                                <label for="category" id="label1">请选择需要添加内容的分类：</label>
                                <div id="selectContener">
                                    <select name="category" id="category" style="width:100px">
                                        @foreach(@$child as $c)
                                        <option value="{{$c->id}}">{{$c->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    {{Form::label('title','＊标题:')}}
                                    {{Form::text('title')}}
                                </div>
                                <div>
                                    {{Form::label('author','作者:')}}
                                    {{Form::text('author')}}
                                </div>
                                <div> 
                                    {{Form::label('photo','图片:')}}
                                    

                                    <!--关于图片的设想是：
                                            如果上传一张，则会经过缩放成几种格式，分别对应内容图片，首页标题小图片，以及其他需要的格式．
                                            也可以上传多图，这些图片会放在文章内容里面，而标题图片取第一张．
                                            因为用了ckeditor编辑器,图片上传不做处理了.
                                      -->
                                    <!-- 多图上传 -->
                                    <sapn id="file_upload">
                                </div> 
                                 <script type="text/javascript">
                                        $("#file_upload").uploadify({
                                            'formData':{'{{session_name()}}':'{{session_id()}}'},
                                            'swf':'{{asset("uploadify/uploadify.swf")}}',
                                            'width':'165px',
                                            'height':'57px',
                                            'uploader':'{{url("newsphotos")}}',
                                            'buttonText':'选择图片',
                                            'onUploadSuccess':function(file,data,response){
                                                if(data==1){
                                                    //成功
                                                    return;
                                                }else{
                                                    //错误信息
                                                    alert(data);
                                                }
                                            }
                                        });
                                </script>
                            
                            <div>
                                {{Form::label('content','＊内容:')}}   
                                <textarea name="content" id="content"  class="ckeditor"></textarea>   
                                 <!--用ckeditor替换普通的textarea  -->
                                 <script>
                                        CKEDITOR.replace("content");
                                 </script>
                            </div>
                            {{Form::token()}}
                            <button type="submit" style="margin-top:25px" class="btn btn-info center"><span class="icon16 icomoon-icon-enter white"></span>提交</button>
                            {{Form::close()}}

                        </div> 

                        <!-- 添加商城内容 -->
                        <div class="tab-pane fade" id="addContentmalls">
                            <?php $identify='' ?>
                            {{Form::model('$identify',array('url'=>''))}}
                                <label for="category">请选择需要添加的分类：</label>
                                <select name="category" id="category">
                                    @foreach($child as $c)
                                    <option value="">{{$c->category_name}}</option>
                                    @endforeach
                                </select>

                            {{Form::close()}}

                        </div>
                        

                        <!-- 处理上传失败后的错误信息 -->
                        @if(Session::has('errors'))
                            <script>alert("{{$errors->all()[0]}}")</script>
                        @endif

                        <!--判断头条和推荐的错误信息  -->
                        @if(Session::has('ttmsg'))
                            <script>alert("{{Session::get('ttmsg')}}")</script>
                        @endif
                    </div>
                </div>

            </div><!-- End .span6 --> 
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