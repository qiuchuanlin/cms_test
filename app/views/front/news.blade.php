<!DOCTYPE html>
<html style="background:#c1bfbf">
<head>
<!--STATUS OK-->
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

<title>CMS新闻页面</title>
<meta name="description" content="百度新闻是包含海量资讯的新闻服务平台，真实反映每时每刻的新闻热点。您可以搜索新闻事件、热点话题、人物动态、产品资讯等，快速了解它们的最新进展。">

<script src="{{asset('js/news/element.js')}}" async=""></script>
<script src="{{asset('js/news/monkey.js')}}" async=""></script>
<script src="{{asset('js/news/alog.js')}}"></script>
<!-- 自己的css文件,主要是登陆 -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<!-- 自己的js -->
<script src="{{asset('js/jquery-1.10.1.min.js')}}"></script>
<script src="{{asset('js/my.js')}}"></script>
<script type="text/javascript" src="{{asset('js/news/usermonitor.js')}}"></script>
<script type="text/javascript">

    void function(e,t,n,a,o,i,m){
          e.alogObjectName=o,e[o]=e[o]||function(){(e[o].q=e[o].q||[]).push(arguments)},e[o].l=e[o].l||+new Date,i=t.createElement(n),i.asyn=1,i.src=a,m=t.getElementsByTagName(n)[0],m.parentNode.insertBefore(i,m)
      }(window,document,"script","http://img.baidu.com/hunter/alog/alog.min.js","alog");

</script>


<script type="text/javascript" src="{{asset('js/news/base_js_include_07d218e7.js')}}"></script>
<script type="text/javascript">
F._fileMap({'http://ns0.bdstatic.com/static/widget/common/framework_static_include/framework_static_include_7256f561.js' : ['/static/common/lib/magic/Background/Background.js',
'/static/common/lib/magic/Base/Base.js',
'/static/common/lib/magic/magic.js',
'/static/common/lib/tangram/base/base.js',
'/static/common/lib/magic/control/Dialog/Dialog.js',
'/static/common/lib/magic/control/Layer/Layer.js',
'/static/common/lib/magic/control/control.js',
'/static/common/lib/magic/Dialog/Dialog.js',
'/static/common/lib/magic/Mask/Mask.js',
'/static/common/lib/magic/control/Tab/Tab.js',
'/static/common/lib/magic/_query/_query.js',
'/static/common/lib/magic/setup/setup.js',
'/static/common/lib/magic/setup/tab/tab.js']});
</script>

<script type="text/javascript">
F._fileMap({'http://ns0.bdstatic.com/static/widget/common/module_static_include/module_static_include_7e287de6.js' : ['/static/widget/common/searchbox/searchbox.js',
'/static/common/ui/vs/ContentPlayer/ContentPlayer.js',
'/static/common/ui/vs/DynamicList/DynamicList.js',
'/static/common/ui/vs/ScrollView/ScrollView.js',
'/static/common/ui/vs/citylist/citylist.js',
'/static/common/ui/vs/clickMonitor/clickMonitor.js',
'/static/common/ui/vs/delayload/delayload.js',
'/static/common/ui/vs/enterState/enterState.js',
'/static/common/ui/vs/observer/observer.js',
'/static/common/ui/vs/slider/slider.js',
'/static/common/ui/vs/suggestion/suggestion.js',
'/static/common/ui/vs/utils/utils.js',
'/static/common/ui/vs/vs.js']});
</script>
<link type="text/css" rel="stylesheet" href="{{asset('css/news/module_static_include_77ad796e.css')}}">

<script type="text/javascript">F._fileMap({'http://ns0.bdstatic.com/static/channel/focustop/focustop/focustop_afa2af25.js' : ['/static/widget/channel/focustop/scrollnews/scrollnews.js', '/static/widget/channel/focustop/mod_localnews/mod_localnews.js', '/static/widget/channel/focustop/col_civil/col_civil.js', '/static/widget/channel/focustop/hx_stock/hx_stock.js', '/static/widget/channel/focustop/col_houseauto/col_houseauto.js', '/static/widget/channel/focustop/fixedpannel/fixedpannel.js', '__virsul__']});F.use('__virsul__');</script>
<link href="{{asset('css/news/focustop_d83f4ba5.css')}}" rel="stylesheet" type="text/css">



</head>
<body style="width: 980px; margin-left: 226px; padding-right: 9px;box-shadow: 6px 0 17px #808080;padding-left:7px">
<style>#favoriteTips {
    text-align:center;
    background-color:#f8fafc;
    border-top:1px solid #b5d5fd;
    border-bottom:1px solid #b5d5fd;
    padding:9px 0;
    width:100%;
    display:block;
}
#favoriteTips p {
    margin:0;
    padding:0;
    font-family:"宋体","Arial","sans-serif";
    font-size:12px;
    line-height:16px;
    height:16px;
    color:#666;
}
#favoriteTips em {
    font-style:normal;
    text-decoration:underline;
    cursor:pointer;
}
#favoriteTips strong, #favoriteTips em {
    color:#1f5cb5;
    font-weight:bold;
}
#favoriteTips a {
    display:inline-block;
    width:15px;
    height:15px;
    background:url(http://vs0.bdstatic.com/browse_static/widget/index/favoriteTips/shut_cb9686f5.gif) no-repeat  0 0;
    margin-left:22px;
    text-indent:-9999px;
    outline:0;
}

/*自己添加的样式*/
#channel-all .menu-list ul li a{
    color:white;
    border-bottom:0;
}
#channel-all .menu-list ul li a:hover{
    color:black;
}

/*搜索框*/
#mysearch{
    overflow: hidden;zoom:1;
    color:#666666;
    position:absolute;z-index:2;
    top:16px;
}
#mysearch div{
    float:left;
    border:1px solid #C1C1C1;
}
#mysearch input,#mysearch select{
    border:none;
}
#mysearch ul{
    position:relative;
}
#mysearch ul li{
    line-height:34px;
    border-bottom:1px solid #C1C1C1;
    background: #fff;
}
#mysearch input[type=text]{
    width:272px;height:30px;
}
#searchArea li:hover{
    cursor:pointer;
}
ul{
    list-style:none;
}
</style>

<script type="text/javascript">
;(function() {

    //click统计
    function loadImg(src, callback) {
        if(!src)
            return;

        var t = new Date().getTime(),
            //生成一个图片对象
            img = window['V_fix_img'+t] = new Image();

        img.onload = img.onerror = img.onabort = function() {
            callback && callback(img);
            img.onload = img.onerror = img.onabort = null;
            try {
                delete window['V_fix_img'+t];
                img = null;
            } catch(e) {
                //完成后销毁生成的图片对象
                img = null;
            }

        }
        img.src = src+'&r='+t;
    };

    /**
     * 添加收藏提示条，控制句柄
     * interface init {
     *     function init(); // 控制
     * }
     */
    var FavTips = {

        init : function(id){

            //读cookie
            if(this._getCookie(id) != "no"){
                //写cookie
                this._setCookie(id, "ok", 365);

                //浏览器判断 ie通过AddFavorite添加收藏
                var content = "";
                if(navigator.userAgent.indexOf("MSIE") > 0){//ie;
                    content = "<p>温馨提示：把百度新闻<em>设为收藏</em>，全面了解实时资讯，方便快捷！<a href='javascript:void(0);' >&nbsp;</a></p>";
                }else{//other
                    content = "<p>温馨提示：<strong>Ctrl+D</strong>把百度新闻放入收藏夹，全面了解实时资讯，方便快捷！<a href='javascript:void(0);'>&nbsp;</a></p>";
                }
                
                //写内容
                document.getElementById(id).innerHTML = content;

                //显示
                document.getElementById(id).style.display = "block";
                loadImg('http://nsclick.baidu.com/v.gif?pid=107&s=1600&tn=indsa&show=ftipbar_show');
                var that = this;
                //定义点击×事件
                document.getElementById(id).getElementsByTagName("a").item(0).onclick = function(){that._shutTips(id)};
                var fav = document.getElementById(id).getElementsByTagName("em").item(0);
                if(fav){
                    fav.onclick = this._addBookmark;
                }
            }else{
                document.body.removeChild(document.getElementById("favoriteTips"));
            }
        },

        //关闭任务
        _shutTips: function(id) {
            //var id = "favoriteTips";
            document.body.removeChild(document.getElementById(id));
            //记住用户操作了×
            this._setCookie(id, "no", 365);
            //test保留
            loadImg('http://nsclick.baidu.com/v.gif?pid=107&s=1600&tn=indsa&show=ftipbar_shut');                
        },

        //取cookies函数 
        _getCookie: function (name){
            if(navigator.cookieEnabled){
                var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
                if(arr != null) return decodeURIComponent(arr[2]);
            }
        },

        //写cookies函数
        _setCookie: function(name, value, day){
            var exp  = new Date();
            exp.setTime(exp.getTime() + day * 24 * 60 * 60 * 1000);
            if(navigator.cookieEnabled){
                document.cookie = name + "=" + decodeURIComponent(value) + ";expires=" + exp.toGMTString();
            }
        },

        //添加收藏
        _addBookmark: function() {
            if(document.all) {
                window.external.AddFavorite('http://news.baidu.com/?f=favorites', document.title);
            } 
            loadImg('http://nsclick.baidu.com/v.gif?pid=107&s=1600&tn=indsa&show=ftipbar_addfav');
        }   
    };
    
    FavTips.init('favoriteTips');
}());
</script>
    <!--userbar-->
    
    


<script type="text/javascript">
F.use(['/static/common/lib/tangram/base/base.js'],function(baidu){
    baidu.cookie.get('newsworldcup') > 3 && baidu.dom.remove('events');
});
</script>


  <!--登录 -->
  <!-- 查看登录状态，来确定需要那些选项 -->
  <div style="border-bottom:1px solid #ccc;width:986px;margin-left:-8px;padding:5px 0px 5px 9px;margin-bottom:8px;font-size:14px;">
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


        
<!--默认首页导航-->
<div id="menu" alog-group="focustop-menu" style="margin-left:220px;background:url('http://cms/images/nav_bg.jpg');width:996px;margin-left:-7px">

<div id="channel-all">
    <div class="menu-list">
        <ul>
            <li style="margin-left:20px"><a href="http://cms/" style="color:white">CMS首页</a></li>
            <!-- 循环二级分类,生成导航项 -->
            @foreach($second as $v)
                <li><a href="{{$v->navurl}}">{{$v->category_name}}</a></li>
            @endforeach
        </ul>
    </div>

    </div>

    </div>
</div>



    </div>
    
</div>


    <div id="body" alog-alias="b">
    <!--主体-->
    

<script type="text/javascript" language="javascript">
    var extraInfo = {m:11, c:"top"};

F.use("/static/common/ui/vs/clickMonitor/clickMonitor.js", function(clickMonitor){
    clickMonitor.init("TOP");                          
});

var PAGE_DATA = {
    "guess_list_num": 0,
    "guess_jsonp_status" : true
}

</script>
<!--焦点-->
<div class="column clearfix" id="focus-top">
    <div class="l-left-col" alog-group="focus-top-left">
                    
<div class="hotnews" alog-group="focustop-hotnews">
<ul> 
    <!--用循环来控制输出顶级小版块,以推荐最高的排序  
        这个循环可能会写的很复杂,因为根据百度那个首页的第一个版块,它的数据不规则,
        有的li里面套3个a标签,有的1个,有的4个.

        另一个要注意,所有的都加上了url,去同一个方法,只是内容id不同.
    -->
    <!-- 定义一个计数器来查看循环到第几个了.因为它这个布局没有规律,得要根据每个$v来判断看是怎么布局 -->
    <?php $count=0 ?>
    @foreach($guoneiNews as $v)
        @if(in_array($count,array(0,3,6)))
            <li class="hdline0"><strong><a href="http://cms/news-detail/{{$v->id}}" target="_blank" class="a3" mon="ct=1&amp;a=1&amp;c=top&amp;pn=0">{{$v->title}}</a></strong></li>
        @elseif($count==1)
            <?php @$str.='<a href="http://cms/news-detail/'.$v->id.'" target="_blank" mon="r=1">'.$v->title.'</a>&nbsp;' ?>
        @elseif($count==2)
            <?php @$str.='<a href="http://cms/news-detail/'.$v->id.'" target="_blank" mon="r=1">'.$v->title.'</a>&nbsp;' ?>
            <li class="hdline1">{{$str}}</li>   
        @elseif($count==4)
            <?php @$str1.='<a href="http://cms/news-detail/'.$v->id.'" target="_blank" mon="r=1">'.$v->title.'</a>&nbsp;' ?>
        @elseif($count==5)
            <?php @$str1.='<a href="http://cms/news-detail/'.$v->id.'" target="_blank" mon="r=1">'.$v->title.'</a>&nbsp;' ?>
            <li class="hdline1">{{$str1}}</li>   
        @elseif($count==7)
            <?php @$str2.='<a href="http://cms/news-detail/'.$v->id.'" target="_blank" mon="r=1">'.$v->title.'</a>&nbsp;' ?>
        @elseif($count==9)
            <?php @$str2.='<a href="http://cms/news-detail/'.$v->id.'" target="_blank" mon="r=1">'.$v->title.'</a>&nbsp;' ?>
            <li class="hdline1">{{$str2}}</li>
        @endif
        <?php $count++ ?>
    @endforeach
    <!-- sp_tag_start -->
</ul>
</div>


                    
<!-- 国内新闻 -->
<ul class="ulist focuslistnews">
    <!-- 循环输出,因为第一个是特殊的,需要粗体,所以用个计数器判断下 -->
    <?php $count1=0 ?>
    @foreach($guoneiNews2 as $v)
        @if($count1==0)
            <li class="bold-item"><a href="http://cms/news-detail/{{$v->id}}" mon="ct=1&amp;a=2&amp;c=top&amp;pn=2" target="_blank">{{$v->title}}</a></li>
        @else
            <li><a href="http://cms/news-detail/{{$v->id}}" mon="ct=1&amp;a=2&amp;c=top&amp;pn=2" target="_blank">{{$v->title}}</a></li>
        @endif
        <?php  $count1++; ?>
    @endforeach
</ul>

<!-- 体育新闻 同样循环,第一条粗体显示 -->
<ul class="ulist focuslistnews">
    <?php $count=0 ?>
    @foreach($tiyuNews as $v)
        @if($count==0)
            <?php $str='<a href="http://cms/news-detail/'.$v->id.'" mon="ct=1&amp;a=2&amp;c=top&amp;pn=7" target="_blank">'.$v->title.'</a>&nbsp' ?>
        @elseif($count==1)
            <?php $str.='<a href="http://cms/news-detail/'.$v->id.'" mon="ct=1&amp;a=2&amp;c=top&amp;pn=7" target="_blank">'.$v->title.'</a>&nbsp' ?>
            <li class="bold-item">{{$str}}</li>
        @elseif($count % 2 == 0)
            <?php $str='<a href="http://cms/news-detail/'.$v->id.'" mon="ct=1&amp;a=2&amp;c=top&amp;pn=7" target="_blank">'.$v->title.'</a>&nbsp' ?>
        @elseif($count % 2 !=0)    
            <?php $str.='<a href="http://cms/news-detail/'.$v->id.'" mon="ct=1&amp;a=2&amp;c=top&amp;pn=7" target="_blank">'.$v->title.'</a>&nbsp' ?>
            <li>{{$str}}</li>
        @endif
        <?php $count++ ?>
    @endforeach    
</ul>

<!-- 娱乐新闻版块1 -->
<ul class="ulist focuslistnews">
    <?php $count=0 ?>
    @foreach($yuleNews as $v)
        @if($count==0)
            <li class="bold-item"><a href="http://cms/news-detail/{{$v->id}}" mon="ct=1&amp;a=2&amp;c=top&amp;pn=19" target="_blank">{{$v->title}}</a>&nbsp;</li>
        @else        
            <li><a href="http://cms/news-detail/{{$v->id}}" mon="ct=1&amp;a=2&amp;c=top&amp;pn=19" target="_blank">{{$v->title}}</a>&nbsp;</li>
        @endif
        <?php $count++ ?>
    @endforeach
</ul>



    </div>
    <div class="l-right-col" alog-group="focus-top-right" style="position:relative;padding-top:60px">
        <!-- 写一个搜索功能 -->
        <form action="javascript:;" method="post" id="mysearch" style="margin-left:97px;">
            <!-- 搜索区域:比如新闻搜索,商品搜索之类 
                为了样式好看点,不用select,直接用ul来做,用js获取.
            -->
            <div style="width:80px;border-radius:3px 0px 0px 3px;border-bottom:none;">
                 <ul style="text-align:center;" id="searchArea">
                    <!-- 箭头图标 -->
                    <li data-table="news" style="height:34px;background:url({{asset('images/jiantou.png')}}) no-repeat 62px -338px;">新闻</li> 
                    <li data-table="malls" style="height:34px;display:none">商城</li> 
                    <li data-table="books" style="height:34px;display:none">书城</li> 
                 </ul>  
            </div>
            <!-- 输入框 -->
            <div style="border-left:none;border-right:none;width: 292px; height: 34px;padding-left:20px">
                <input type="text" name="searchText" id="searchText">
            </div>
            <div style="background:url({{asset('images/searchbtn.png')}});height:34px">
                <input type="submit" value="" style="width:65px;height:34px;opacity:0">
            </div>
        </form>        
        <div style="clear:both"></div>


    <div class="toparea-aside-top" alog-group="focustop-carousel">
    <div class="imgplayer clearfix" id="imgplayer">
        <div id="imgplayer-control">
        <a href="javascript:void(0);" mon="c=top&amp;a=50&amp;col=4&amp;ct=1&amp;pn=0" id="imgplayer-prev"></a>
        <a href="javascript:void(0);" mon="c=top&amp;a=52&amp;col=4&amp;ct=1&amp;pn=0" id="imgplayer-next"></a>
        </div>
        <div class="imgview" id="imgView"><a href="http://2014.baidu.com/" target="_blank" mon="c=top&amp;a=12&amp;col=4&amp;pn=2">
            <img src="{{asset('images/ddaf416404a8ffece8a8c437c2410e6f.jpg')}}"></a></div>
        <div class="imgnav-mask"></div>
        <div class="imgnav" id="imgNav">
            <a class="" index="8" mon="c=top&amp;a=51&amp;col=4&amp;ct=1&amp;pn=8" href="javascript:void(0)">8</a>
            <a class="" index="7" mon="c=top&amp;a=51&amp;col=4&amp;ct=1&amp;pn=7" href="javascript:void(0)">7</a>
            <a class="" index="6" mon="c=top&amp;a=51&amp;col=4&amp;ct=1&amp;pn=6" href="javascript:void(0)">6</a>
            <a class="" index="5" mon="c=top&amp;a=51&amp;col=4&amp;ct=1&amp;pn=5" href="javascript:void(0)">5</a>
            <a class="" index="4" mon="c=top&amp;a=51&amp;col=4&amp;ct=1&amp;pn=4" href="javascript:void(0)">4</a>
            <a class="" index="3" mon="c=top&amp;a=51&amp;col=4&amp;ct=1&amp;pn=3" href="javascript:void(0)">3</a>
            <a class="active" index="2" mon="c=top&amp;a=51&amp;col=4&amp;ct=1&amp;pn=2" href="javascript:void(0)">2</a>
            <a class="" index="1" mon="c=top&amp;a=51&amp;col=4&amp;ct=1&amp;pn=1" href="javascript:void(0)">1</a>
        </div>
        <div class="imgtit" id="imgTitle"><a href="http://2014.baidu.com/" target="_blank" mon="col=4&amp;a=9&amp;ct=1&amp;pn=2"><strong>迪玛利亚加时破门激情庆祝</strong></a></div>
    </div>
    </div>
    
    <script type="text/javascript" language="javascript">
        F.use(["/static/common/lib/tangram/base/base.js", "/static/common/ui/vs/ContentPlayer/ContentPlayer.js"], function(T, I) {
        var G = T.dom.g;
        var on = T.event.on;
        var imgList = [];
        var cpOptions_1 = {
        getBtns: function(){
            var a, btns; 
                btns = G('imgNav').getElementsByTagName('a');
                a = [];
                for(var i=btns.length - 1; i>=0; i--){
                    a.push(btns[i]);
                }
                return a;
            },
            mainViewContainer: G('imgView'),
            prevBtn: G('imgplayer-prev'),
            nextBtn: G('imgplayer-next'),
            changeAction: 'mouseover',
            subViewContainer: G('imgTitle'),
            style: {on: 'active', off: ''},
            mainViewTpl: '<a href="#{url}" target="_blank" mon="c=top&a=12&col=4&pn=#{index}"><img src="#{imgUrl}"></a>',
            subViewTpl: '<a href="#{url}" target="_blank" mon="col=4&a=9&ct=1&pn=#{index}"><strong>#{title}</strong>#{abs}</a>',
            curIndex: 0,
            data: [],
            interval: 5000
            };
        
                                                    cpOptions_1.data.push({
            "index": 1,
                "title": "争鸣:传统电视联手能否绝地反击",
                "url": "http:\/\/baijia.baidu.com\/?tn=topic&topicid=x43ec5OU",
                "imgUrl": "http:\/\/news.baidu.com\/z\/resource\/r\/image\/2014-07-02\/59bfdd61bb18ac9b95a8aa8715f50a10.jpg",
                "abs": "",
                "meadia": ""
            });
            imgList.push({"url":"http:\/\/baijia.baidu.com\/?tn=topic&topicid=x43ec5OU"});
                                                        cpOptions_1.data.push({
            "index": 2,
                "title": "迪玛利亚加时破门激情庆祝",
                "url": "http:\/\/2014.baidu.com",
                "imgUrl": "http:\/\/news.baidu.com\/z\/resource\/r\/image\/2014-07-02\/ddaf416404a8ffece8a8c437c2410e6f.jpg",
                "abs": "",
                "meadia": ""
            });
            imgList.push({"url":"http:\/\/2014.baidu.com"});
                                                        cpOptions_1.data.push({
            "index": 3,
                "title": "昆明一溶洞钟乳石遭割撬盗卖",
                "url": "http:\/\/photo.china.com.cn\/2014-07\/02\/content_32830674.htm",
                "imgUrl": "http:\/\/b.hiphotos.baidu.com\/news\/pic\/item\/b3b7d0a20cf431adff034ae34936acaf2fdd9812.jpg",
                "abs": "",
                "meadia": ""
            });
            imgList.push({"url":"http:\/\/photo.china.com.cn\/2014-07\/02\/content_32830674.htm"});
                                                        cpOptions_1.data.push({
            "index": 4,
                "title": "中国科考人员近距离拍到雪豹",
                "url": "http:\/\/news.china.com.cn\/2014-07\/02\/content_32835137.htm",
                "imgUrl": "http:\/\/c.hiphotos.baidu.com\/news\/pic\/item\/b90e7bec54e736d1683381d299504fc2d46269c3.jpg",
                "abs": "",
                "meadia": ""
            });
            imgList.push({"url":"http:\/\/news.china.com.cn\/2014-07\/02\/content_32835137.htm"});
                                                        cpOptions_1.data.push({
            "index": 5,
                "title": "北京悉尼：跨国闺蜜的双重生活",
                "url": "http:\/\/slide.news.sina.com.cn\/y\/slide_1_43011_62341.html",
                "imgUrl": "http:\/\/d.hiphotos.baidu.com\/news\/pic\/item\/a9d3fd1f4134970a44aa1af597cad1c8a6865d0a.jpg",
                "abs": "",
                "meadia": ""
            });
            imgList.push({"url":"http:\/\/slide.news.sina.com.cn\/y\/slide_1_43011_62341.html"});
                                                        cpOptions_1.data.push({
            "index": 6,
                "title": "谢霆锋陈奕迅吃路边摊",
                "url": "http:\/\/photo.huanqiu.com\/ent\/2014-07\/2739549.html",
                "imgUrl": "http:\/\/a.hiphotos.baidu.com\/news\/pic\/item\/d1a20cf431adcbef19f649dcaeaf2edda2cc9f2d.jpg",
                "abs": "",
                "meadia": ""
            });
            imgList.push({"url":"http:\/\/photo.huanqiu.com\/ent\/2014-07\/2739549.html"});
                                                        cpOptions_1.data.push({
            "index": 7,
                "title": "小苹果走红社交媒体的背后逻辑",
                "url": "http:\/\/baijia.baidu.com\/",
                "imgUrl": "http:\/\/news.baidu.com\/z\/resource\/r\/image\/2014-07-02\/9029f66ea44a7cf21ecf427cc4588bc1.jpg",
                "abs": "",
                "meadia": ""
            });
            imgList.push({"url":"http:\/\/baijia.baidu.com\/"});
                                                        cpOptions_1.data.push({
            "index": 8,
                "title": "北京一孕妇跌落站台地铁紧急停车",
                "url": "http:\/\/gb.cri.cn\/42071\/2014\/07\/02\/6611s4598433.htm",
                "imgUrl": "http:\/\/f.hiphotos.baidu.com\/news\/pic\/item\/d1a20cf431adcbef1a494edcaeaf2edda2cc9fee.jpg",
                "abs": "",
                "meadia": ""
            });
            imgList.push({"url":"http:\/\/gb.cri.cn\/42071\/2014\/07\/02\/6611s4598433.htm"});
                                                    
           var index = 0 ; 
           var url = location.href.substr(location.href.indexOf("?")+1).split("&");
           var key ;
           for(var i = 0 ; i < url.length ; i++){
               var tmp = url[i].split("=");
               if(tmp&&tmp.length>0&&tmp[0]=="lb"){
                   key = tmp[1];
               }
               }
           for(var p in imgList){
               if(imgList[p].url == key){
                   index = p ;
               }
           }
           cpOptions_1.curIndex = index;
           var cp_1 = new I.Model(cpOptions_1);

           on(window, 'load', function(){
               cp_1.play(index+1);
           });

           var controlers = baidu.dom.query('#imgNav a');
           baidu.each(controlers,function(item,i){
                baidu.on(item,'mouseover',function(e){
                    UserMonitor.send(e, 6, {c: "top", a:"51", col: "4", ct: "1", m: "11", pn: 8-i});
                    window.alog && alog("monkey.fire", "record", {
                        type: "click",
                        target: item
                    }); 
                });
            });
        });
           
    </script>
    



                
<dl class="toparea-rollnews" alog-group="focustop-scrollnews">
    <dt>滚动新闻</dt>
    <dd id="toparea_rollnews_mask">
    <span style="display: none;" id="toparea_rollnews_tip">加载中，请稍候...</span>
    <div style="width: 4776px; left: -4076px;"><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455977.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="溧阳水利局拆除5处占用河道违建">溧阳水利局拆除5处占用河道违建</a><span>|</span><a href="http://www.js.xinhuanet.com/2014-07/02/c_1111423000.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="徐州永嘉科技园解决中小企业“落户”难题 ">徐州永嘉科技园解决中小企业“落户”难题 </a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455967.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="平湖16个公共区域可以免费蹭网啦！">平湖16个公共区域可以免费蹭网啦！</a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455966.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="细心、小心、诚心给游客舒心">细心、小心、诚心给游客舒心</a><span>|</span><a href="http://report.hebei.com.cn/system/2014/07/02/013611876.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="石家庄市看守所法律援助工作站挂牌成立 ">石家庄市看守所法律援助工作站挂牌成立 </a><span>|</span><a href="http://www.chinahighway.com/news/2014/848840.php" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="吕梁市交通运输局：开展多项活动庆“七一”">吕梁市交通运输局：开展多项活动庆“七一”</a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455945.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="常州居民坐火车，出门尽是高铁、动车">常州居民坐火车，出门尽是高铁、动车</a><span>|</span><a href="http://news.bjx.com.cn/html/20140702/523968.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="500千伏变电站本月完工 巴中电力进入高速时代">500千伏变电站本月完工 巴中电力进入高速时代</a><span>|</span><a href="http://news.qtv.com.cn/system/2014/07/02/011545365.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="中纪委网站解释违纪通报中“与他人通奸”措辞">中纪委网站解释违纪通报中“与他人通奸”措辞</a><span>|</span><a href="http://collection.sina.com.cn/tqfx/20140702/1426156230.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="国宝皿方罍合体完璧：开海外流失文物回归新路">国宝皿方罍合体完璧：开海外流失文物回归新路</a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455910.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="孩子十岁前不能缺的活动">孩子十岁前不能缺的活动</a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455896.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="罗氏虾上市，个头小价格高">罗氏虾上市，个头小价格高</a><span>|</span><a href="http://www.chinanews.com/gn/2014/07-02/6343203.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="北京“城市风道”研究成果年底亮相 利于驱散雾霾 ">北京“城市风道”研究成果年底亮相 利于驱散雾霾 </a><span>|</span><a href="http://sydw.offcn.com/2014/gg_0702/95132.html" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="2014年广东江门新会区残疾人联合会招聘2人公告">2014年广东江门新会区残疾人联合会招聘2人公告</a><span>|</span><a href="http://qhd.house.sina.com.cn/news/2014-07-02/14252802244.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="秦皇岛市财政局公开2014年政府财政预算信息">秦皇岛市财政局公开2014年政府财政预算信息</a><span>|</span><a href="http://futures.jrj.com.cn/2014/07/02142417530714.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="大连中石油管道泄漏续 海上发现少量原油油膜 ">大连中石油管道泄漏续 海上发现少量原油油膜 </a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455843.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="放流800多万尾鱼苗，改善湖河水质">放流800多万尾鱼苗，改善湖河水质</a><span>|</span><a href="http://news.china.com.cn/live/2014-07/02/content_27448119.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="南京“史上最贵”停车费能治拥堵吗？ ">南京“史上最贵”停车费能治拥堵吗？ </a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455808.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="变黑银饰品，抹抹口红就能迎来“第二春”？">变黑银饰品，抹抹口红就能迎来“第二春”？</a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455814.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="新增“弹性直销点” 买瓜卖瓜更便捷">新增“弹性直销点” 买瓜卖瓜更便捷</a><span>|</span></div>
    <div style="width: 4776px; left: 700px;"><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455977.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="溧阳水利局拆除5处占用河道违建">溧阳水利局拆除5处占用河道违建</a><span>|</span><a href="http://www.js.xinhuanet.com/2014-07/02/c_1111423000.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="徐州永嘉科技园解决中小企业“落户”难题 ">徐州永嘉科技园解决中小企业“落户”难题 </a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455967.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="平湖16个公共区域可以免费蹭网啦！">平湖16个公共区域可以免费蹭网啦！</a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455966.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="细心、小心、诚心给游客舒心">细心、小心、诚心给游客舒心</a><span>|</span><a href="http://report.hebei.com.cn/system/2014/07/02/013611876.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="石家庄市看守所法律援助工作站挂牌成立 ">石家庄市看守所法律援助工作站挂牌成立 </a><span>|</span><a href="http://www.chinahighway.com/news/2014/848840.php" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="吕梁市交通运输局：开展多项活动庆“七一”">吕梁市交通运输局：开展多项活动庆“七一”</a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455945.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="常州居民坐火车，出门尽是高铁、动车">常州居民坐火车，出门尽是高铁、动车</a><span>|</span><a href="http://news.bjx.com.cn/html/20140702/523968.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="500千伏变电站本月完工 巴中电力进入高速时代">500千伏变电站本月完工 巴中电力进入高速时代</a><span>|</span><a href="http://news.qtv.com.cn/system/2014/07/02/011545365.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="中纪委网站解释违纪通报中“与他人通奸”措辞">中纪委网站解释违纪通报中“与他人通奸”措辞</a><span>|</span><a href="http://collection.sina.com.cn/tqfx/20140702/1426156230.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="国宝皿方罍合体完璧：开海外流失文物回归新路">国宝皿方罍合体完璧：开海外流失文物回归新路</a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455910.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="孩子十岁前不能缺的活动">孩子十岁前不能缺的活动</a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455896.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="罗氏虾上市，个头小价格高">罗氏虾上市，个头小价格高</a><span>|</span><a href="http://www.chinanews.com/gn/2014/07-02/6343203.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="北京“城市风道”研究成果年底亮相 利于驱散雾霾 ">北京“城市风道”研究成果年底亮相 利于驱散雾霾 </a><span>|</span><a href="http://sydw.offcn.com/2014/gg_0702/95132.html" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="2014年广东江门新会区残疾人联合会招聘2人公告">2014年广东江门新会区残疾人联合会招聘2人公告</a><span>|</span><a href="http://qhd.house.sina.com.cn/news/2014-07-02/14252802244.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="秦皇岛市财政局公开2014年政府财政预算信息">秦皇岛市财政局公开2014年政府财政预算信息</a><span>|</span><a href="http://futures.jrj.com.cn/2014/07/02142417530714.shtml" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="大连中石油管道泄漏续 海上发现少量原油油膜 ">大连中石油管道泄漏续 海上发现少量原油油膜 </a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455843.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="放流800多万尾鱼苗，改善湖河水质">放流800多万尾鱼苗，改善湖河水质</a><span>|</span><a href="http://news.china.com.cn/live/2014-07/02/content_27448119.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="南京“史上最贵”停车费能治拥堵吗？ ">南京“史上最贵”停车费能治拥堵吗？ </a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455808.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="变黑银饰品，抹抹口红就能迎来“第二春”？">变黑银饰品，抹抹口红就能迎来“第二春”？</a><span>|</span><a href="http://news.gmw.cn/newspaper/2014-07/02/content_3455814.htm" target="_blank" mon="c=top&amp;ct=1&amp;col=23" title="新增“弹性直销点” 买瓜卖瓜更便捷">新增“弹性直销点” 买瓜卖瓜更便捷</a><span>|</span></div></dd>
</dl>
 

        





        
<div class="mod h-bd-box slide" id="video-news" alog-group="focustop-videonews-toparea" style="position:static;margin-top:50px">
    <div class="hd line">
        <h3>视频新闻<span class="en">VIDEO NEWS</span></h3>
        <span class="slide-pagination"><a href="javascript:void(0);" class="btn slide-pagination-prev"><b class="icon i-triangler-left"></b></a><a href="javascript:void(0);" class="slide-pagination-item"></a><a href="javascript:void(0);" class="slide-pagination-item current"></a><a href="javascript:void(0);" class="btn slide-pagination-next"><b class="icon i-triangler-right"></b></a></span>
    </div>
    <div class="bd">                                                                          
        <div class="slide-list" style="position: absolute; left: -580px; right: 0px;">
        


<div class="vlist-wrapper">
<ul class="vlist clearfix slide-list-item">
            
                <li><a href="http://video.2014.sina.com.cn/p/2014/4/2014-07-02/072064058151.html" mon="c=top&amp;ct=0&amp;col=26&amp;a=12&amp;pn=1" class="video-img" title="第19比赛日全景回顾" target="_blank">
                    <img src="{{asset('images/a67f755a977f0140bc339ed9d7a5d741.jpg')}}"><span class="play"></span></a><a href="http://video.2014.sina.com.cn/p/2014/4/2014-07-02/072064058151.html" mon="c=top&amp;ct=0&amp;col=26&amp;a=9&amp;pn=1" class="video-txt" target="_blank">第19比赛日全景回顾</a></li>
                        

                
                <li><a href="http://video.2014.sina.com.cn/p/2014/4/2014-07-02/091264058355.html" mon="c=top&amp;ct=0&amp;col=26&amp;a=12&amp;pn=2" class="video-img" title="法德经典交锋史 " target="_blank">
                    <img src="{{asset('images/fc92ebf693f484b36831a8ac4e725865.jpg')}}"><span class="play"></span></a><a href="http://video.2014.sina.com.cn/p/2014/4/2014-07-02/091264058355.html" mon="c=top&amp;ct=0&amp;col=26&amp;a=9&amp;pn=2" class="video-txt" target="_blank">法德经典交锋史 </a></li>
                        

                
                <li><a href="http://2014.sina.com.cn/video/hero/#134876983" mon="c=top&amp;ct=0&amp;col=26&amp;a=12&amp;pn=3" class="video-img" title="盖世英雄迪马利亚" target="_blank">
                    <img src="%{{asset('images/7645369570af9d61eb1c8e30c5de994b.jpg')}}"><span class="play"></span></a><a href="http://2014.sina.com.cn/video/hero/#134876983" mon="c=top&amp;ct=0&amp;col=26&amp;a=9&amp;pn=3" class="video-txt" target="_blank">盖世英雄迪马利亚</a></li>
                        

                
                <li><a href="http://video.2014.sina.com.cn/p/2014/10/2014-07-02/021964058103.html" mon="c=top&amp;ct=0&amp;col=26&amp;a=12&amp;pn=4" class="video-img" title="梅西突破天使拨球怒射" target="_blank">
                    <img src="{{asset('images/ef850045a2feffcf3526e3264a93a93d.jpg')}}"><span class="play"></span></a><a href="http://video.2014.sina.com.cn/p/2014/10/2014-07-02/021964058103.html" mon="c=top&amp;ct=0&amp;col=26&amp;a=9&amp;pn=4" class="video-txt" target="_blank">梅西突破天使拨球怒</a></li>
                        

                
                <li><a href="http://video.2014.sina.com.cn/p/2014/10/2014-07-02/013864058083.html" mon="c=top&amp;ct=0&amp;col=26&amp;a=12&amp;pn=5" class="video-img" title="瑞阿之战火星四溅 " target="_blank">
                    <img src="{{asset('images/8171842b7f8e039330a0bb43e70918d9.jpg')}}"><span class="play"></span></a><a href="http://video.2014.sina.com.cn/p/2014/10/2014-07-02/013864058083.html" mon="c=top&amp;ct=0&amp;col=26&amp;a=9&amp;pn=5" class="video-txt" target="_blank">瑞阿之战火星四溅 </a></li>
                        

                
                <li><a href="http://2014.sina.com.cn/video/match/1F-2E/index.html#134872875" mon="c=top&amp;ct=0&amp;col=26&amp;a=12&amp;pn=6" class="video-img" title="梅西加时助攻绝杀" target="_blank">
                    <img src="{{asset('images/2de27120764cee23944b2796ef2f99a3.jpg')}}"><span class="play"></span></a><a href="http://2014.sina.com.cn/video/match/1F-2E/index.html#134872875" mon="c=top&amp;ct=0&amp;col=26&amp;a=9&amp;pn=6" class="video-txt" target="_blank">梅西加时助攻绝杀</a></li>
                        

                
                <li><a href="http://2014.sina.com.cn/video/index.html#134872606" mon="c=top&amp;ct=0&amp;col=26&amp;a=12&amp;pn=7" class="video-img" title="阿根廷1-0瑞士进8强" target="_blank">
                    <img src="{{asset('images/547076bfb04a07736fcedf23b95989f5.jpg')}}"><span class="play"></span></a><a href="http://2014.sina.com.cn/video/index.html#134872606" mon="c=top&amp;ct=0&amp;col=26&amp;a=9&amp;pn=7" class="video-txt" target="_blank">阿根廷1-0瑞士进8强</a></li>
                        

                
                <li><a href="http://www.iqiyi.com/v_19rrhl5x5k.html" mon="c=top&amp;ct=0&amp;col=26&amp;a=12&amp;pn=8" class="video-img" title="筹5万美元拿奥斯卡" target="_blank">
                    <img src="{{asset('images/dd8e37964875eff47c0456e7a1510e11.jpg')}}"><span class="play"></span></a><a href="http://www.iqiyi.com/v_19rrhl5x5k.html" mon="c=top&amp;ct=0&amp;col=26&amp;a=9&amp;pn=8" class="video-txt" target="_blank">筹5万美元拿奥斯卡</a></li>
                                    <!--MONITOR INdEX_HOTAREA_VIDEONEWS OK 8 HOTAREA-->
            

        
</ul>
</div>


        </div>
    </div>
</div>

<script type="text/javascript">
F.use(['/static/common/lib/tangram/base/base.js', '/static/common/ui/vs/slider/slider.js'],function(baidu,slider){
    new slider({
        speed : 10,
        step : 58,
        offset : 570,
        content : 'video-news',
        contentWidth : 570*2
    }).init();
});
</script>




    </div>
</div>

<!-- start 国内-->
<a name="civilnews" class="focustop-anchor"></a>

    <div class="column clearfix" id="guonei">
        
    <div class="column-title" alog-group="log-civil-title">
            <div class="column-title-border">
                <h2><a href="http://news.baidu.com/n?cmd=1&amp;class=civilnews" target="_blank">国内</a><span class="cname">China</span></h2>
            </div>
    </div>


        
    <div class="l-left-col col-mod" alog-group="log-civil-left">
    
<!-- 国内新闻版块2 -->
<ul class="ulist ">
    <?php $count=0 ?>
    @foreach($guoneiNews3 as $v)
        @if($count==0)
            <li class="bold-item"><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @else
            <li><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @endif
        <?php $count++ ?>
    @endforeach
</ul>

<!-- 娱乐新闻版块2 -->
<ul class="ulist ">
     <?php $count=0 ?>
    @foreach($yuleNews2 as $v)
        @if($count==0)
            <li class="bold-item"><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @else
            <li><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @endif
        <?php $count++ ?>
    @endforeach
</ul>



</div>


        
<div class="l-middle-col" alog-group="log-civil-middle">
    <div class="mod">
        <div class="hd">
                        <h3>国内图片</h3>
                    </div>
        <div class="bd">
            
<div class="imagearea">
    <div class="imagearea-top">
                                    
<div class="image-mask-item">
    <a href="http://politics.gmw.cn/2014-07/01/content_11792294.htm" target="_blank" class="item-image" mon="ct=0&amp;c=civilnews&amp;pn=1&amp;a=12" title="民调落后柯文哲7% 连胜文：将加速与朱立伦合作 ">
        <img src="{{asset('images/uhttpimgpolitics.jpeg')}}" alt="民调落后柯文哲7% 连胜文：将加速与朱立伦合作 "></a>
    <a href="http://politics.gmw.cn/2014-07/01/content_11792294.htm" target="_blank" class="item-title" title="民调落后柯文哲7% 连胜文：将加速与朱立伦合作 " mon="ct=0&amp;c=civilnews&amp;pn=1&amp;a=9">民调落后柯文哲7% 连胜文：将加速与朱立伦合作 </a>
</div>


                                                                            </div>

    <div class="imagearea-bottom">
                                    
                
    <div class="image-list-item">
                <a href="http://society.people.com.cn/n/2014/0702/c1008-25226167.html" title="香港庆祝回归祖国17周年" target="_blank" mon="ct=0&amp;c=civilnews&amp;pn=2&amp;a=12">
                    <img src="{{asset('images/uhttppaper.jpeg')}}"></a><a href="http://society.people.com.cn/n/2014/0702/c1008-25226167.html" mon="ct=0&amp;c=civilnews&amp;pn=2&amp;a=9" class="txt" target="_blank">香港庆祝回归祖国17周年</a>
            </div>



                                            
                
    <div class="image-list-item">
                <a href="http://www.legaldaily.com.cn/xwzx/content/2014-07/02/content_5642272.htm" title="事业单位人事管理“有法可依”了" target="_blank" mon="ct=0&amp;c=civilnews&amp;pn=3&amp;a=12">
                    <img src="{{asset('images/uhttpwww_003.jpeg')}}"></a><a href="http://www.legaldaily.com.cn/xwzx/content/2014-07/02/content_5642272.htm" mon="ct=0&amp;c=civilnews&amp;pn=3&amp;a=9" class="txt" target="_blank">事业单位人事管理“有法可依”了</a>
            </div>



                                                    </div>
</div>


        </div>
    </div>
</div>


        <div class="l-right-col" alog-group="log-civil-right">
            <div class="mod" id="aside-civil-pic">
                <div class="hd"><h3>国内图片</h3></div>
                <div class="bd">
                
<div class="image-list">
    <div class="image-list-wrapper">

        
        
        
                                                                        
                                                                        
                                            
    <div class="image-list-item">
                <a href="http://www.chinanews.com/gn/2014/07-02/6340292.shtml" title="干部自首吃空饷称诈骗国家20多万 当地迟迟未处理 " target="_blank" mon="ct=0&amp;a=28&amp;c=civilnews&amp;pn=4">
                    <img src="{{asset('images/uhttpwww.jpeg')}}"></a><a href="http://www.chinanews.com/gn/2014/07-02/6340292.shtml" mon="ct=0&amp;a=28&amp;c=civilnews&amp;pn=4" class="txt" target="_blank">干部自首吃空饷称诈骗国家20多万 当地迟迟未处理 </a>
            </div>



                                                                                
    <div class="image-list-item">
                <a href="http://www.dfdaily.com/html/63/2014/6/30/1163489.shtml" title="“家族腐败” " target="_blank" mon="ct=0&amp;a=28&amp;c=civilnews&amp;pn=5">
                    <img src="{{asset('images/uhttpimage.jpeg')}}"></a><a href="http://www.dfdaily.com/html/63/2014/6/30/1163489.shtml" mon="ct=0&amp;a=28&amp;c=civilnews&amp;pn=5" class="txt" target="_blank">“家族腐败” </a>
            </div>



                                                <!--MONITOR INDEX_CIVIL_PIC_ASIDE OK 5 HOTAREA-->
                                    
    </div>
</div>


                </div>
            </div>

            <div class="mod tbox" id="civil-aside-tophit">
                <div class="hd"><h3>热门点击</h3></div>
                <div class="bd">
                    

        <ol class="olist " id="">
                                                                                                                        <li> <span class="listnum highlight">01</span><a href="http://china.haiwainet.cn/n/2014/0702/c345646-20807273.html" target="_blank" title="香港多团体示威反对“占中”4人跳海抗议" mon="c=civilnews&amp;ct=0&amp;a=27&amp;col=8&amp;pn=1">香港多团体示威反对“占中”4人跳海抗议</a></li>
                                                                        
    

                                                                        
                                                                        
                            <li> <span class="listnum highlight">02</span><a href="http://www.chinanews.com/fz/2014/07-02/6340526.shtml" target="_blank" title="中纪委的反腐紧迫感：治吏提速升级 为改革护航 " mon="c=civilnews&amp;ct=0&amp;a=27&amp;col=8&amp;pn=2">中纪委的反腐紧迫感：治吏提速升级 为改革护航 </a></li>
                                                                        
    

                                                                        
                                                                        
                            <li> <span class="listnum highlight">03</span><a href="http://news.youth.cn/jsxw/201407/t20140702_5449438.htm" target="_blank" title="刘源上将：道德败坏、蜕化变质的人要坚决清除出党" mon="c=civilnews&amp;ct=0&amp;a=27&amp;col=8&amp;pn=3">刘源上将：道德败坏、蜕化变质的人要坚决清除出党</a></li>
                                                                        
    

                                                                        
                                                                        
                            <li> <span class="listnum">04</span><a href="http://news.163.com/14/0702/04/A04EF27C00014AED.html" target="_blank" title="“毛泽东号”告别68年货运使命(组图)" mon="c=civilnews&amp;ct=0&amp;a=27&amp;col=8&amp;pn=4">“毛泽东号”告别68年货运使命(组图)</a></li>

                                                                        
    

                                                                        
                                                                        
                            <li> <span class="listnum">05</span><a href="http://news.youth.cn/sz/201407/t20140702_5448394.htm" target="_blank" title="童名谦案揭官场晋升诡秘之道:以“庸”求官" mon="c=civilnews&amp;ct=0&amp;a=27&amp;col=8&amp;pn=5">童名谦案揭官场晋升诡秘之道:以“庸”求官</a></li>

                                                                        
    

                                                                        
                                                                        
                            <li> <span class="listnum">06</span><a href="http://news.163.com/14/0702/00/A0411DR30001124J.html?hl" target="_blank" title="央视梳理中纪委半年打&quot;虎&quot;记：清理门户" mon="c=civilnews&amp;ct=0&amp;a=27&amp;col=8&amp;pn=6">央视梳理中纪委半年打"虎"记：清理门户</a></li>

                                                                            

                                                            <!--MONITOR INDEX_CIVIL_TOPHIT OK 6 HOTAREA-->
                                                </ol>
    

                 </div>
            </div>
        </div>
    </div>


<!--end 国内-->

<!--start 军事-->
<a name="milnews" class="focustop-anchor"></a>

    <div class="column clearfix" id="junshi">
        
<div class="column-title" alog-group="log-mil-title">
            <div class="column-title-border">
                <h2><a href="http://news.baidu.com/n?cmd=1&amp;class=mil" target="_blank">军事</a><span class="cname">Military</span></h2>
            </div>
    </div>


        
    <div class="l-left-col col-mod" alog-group="log-mil-left">
    

<ul class="ulist ">
    <!-- 军事版块1 -->
     <?php $count=0 ?>
    @foreach($junshiNews as $v)
        @if($count==0)
            <li class="bold-item"><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @else
            <li><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @endif
        <?php $count++ ?>
    @endforeach
</ul>
<ul class="ulist ">
     <?php $count=0 ?>
    @foreach($junshiNews2 as $v)
        @if($count==0)
            <li class="bold-item"><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @else
            <li><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @endif
        <?php $count++ ?>
    @endforeach
</ul>



</div>


        
<div class="l-middle-col" alog-group="log-mil-middle">
    <div class="mod">
        <div class="hd">
                        <h3>军事图片</h3>
                    </div>
        <div class="bd">
            
<div class="imagearea">
    <div class="imagearea-top">
                                    
<div class="image-mask-item">
    <a href="http://www.miercn.com/bdnews/201407/329723.html" target="_blank" class="item-image" mon="ct=0&amp;c=mil&amp;pn=1&amp;a=12" title="美华裔：中国卑鄙用歼10祸害世界">
        <img src="{{asset('images/84f1e636fbebef223d8ab8c1d1bf9ac8.jpg')}}" alt="美华裔：中国卑鄙用歼10祸害世界"></a>
    <a href="http://www.miercn.com/bdnews/201407/329723.html" target="_blank" class="item-title" title="美华裔：中国卑鄙用歼10祸害世界" mon="ct=0&amp;c=mil&amp;pn=1&amp;a=9">美华裔：中国卑鄙用歼10祸害世界</a>
</div>


                                                    </div>

    <div class="imagearea-bottom">
                                    
                
    <div class="image-list-item">
                <a href="http://www.jfdaily.com/guoji/new/201406/t20140630_499659.html" title="朝鲜要求韩美在亚运会期间暂停军演(图)" target="_blank" mon="ct=0&amp;c=mil&amp;pn=2&amp;a=12">
                            <img src="{{asset('images/uhttpimages.jpeg')}}"></a><a href="http://www.jfdaily.com/guoji/new/201406/t20140630_499659.html" mon="ct=0&amp;c=mil&amp;pn=2&amp;a=9" class="txt" target="_blank">朝鲜要求韩美在亚运会期间暂停军演(图)</a>
            </div>



                                            
                
    <div class="image-list-item">
                <a href="http://www.huaxia.com/xw/twxw/2014/06/3953647.html" title="大、二胆岛移交金门 台&amp;quot;行政院长&amp;quot;登岛主持交接" target="_blank" mon="ct=0&amp;c=mil&amp;pn=3&amp;a=12">
                    <img src="{{asset('images/uhttpwww_004.jpeg')}}"></a><a href="http://www.huaxia.com/xw/twxw/2014/06/3953647.html" mon="ct=0&amp;c=mil&amp;pn=3&amp;a=9" class="txt" target="_blank">大、二胆岛移交金门 台"行政院长"登岛主持交接</a>
            </div>



                            </div>
</div>


        </div>
    </div>
</div>




            <div class="l-right-col" alog-group="log-mil-right">
                <div class="mod tbox" id="mil-aside-video">
                    <div class="hd"><h3>热门点击</h3></div>
                    <div class="bd">
                    

        <ol class="olist " id="">
                                                                                                                        <li> <span class="listnum highlight">01</span><a href="http://china.haiwainet.cn/n/2014/0702/c345646-20808044.html" target="_blank" title="解放军四总部、海空二炮、七大军区对徐才厚被查.." mon="ct=0&amp;a=2&amp;c=mil&amp;pn=1">解放军四总部、海空二炮、七大军区对徐才厚被查..</a></li>
                                                                        
    

                                                                        
                                                                        
                            <li> <span class="listnum highlight">02</span><a href="http://news.163.com/14/0702/01/A044R3MU0001121M.html?hl" target="_blank" title="日本用美女明星拍征兵宣传片 欲激发宅男入伍" mon="ct=0&amp;a=2&amp;c=mil&amp;pn=2">日本用美女明星拍征兵宣传片 欲激发宅男入伍</a></li>
                                                                        
    

                                                                        
                                                                        
                            <li> <span class="listnum highlight">03</span><a href="http://news.china.com/focus/nanhai/11156618/20140702/18602983.html" target="_blank" title="新加坡外长：国际媒体对中国南海立场有偏见" mon="ct=0&amp;a=2&amp;c=mil&amp;pn=3">新加坡外长：国际媒体对中国南海立场有偏见</a></li>
                                                                        
    

                                                                        
                                                                        
                            <li> <span class="listnum">04</span><a href="http://www.china.com.cn/news/txt/2014-07/01/content_32819074.htm" target="_blank" title="俄设计师首次披露“核提箱”秘密：普京经常操演" mon="ct=0&amp;a=2&amp;c=mil&amp;pn=4">俄设计师首次披露“核提箱”秘密：普京经常操演</a></li>

                                                                        
    

                                                                        
                                                                        
                            <li> <span class="listnum">05</span><a href="http://www.jd37.com/news/20146/140137.html" target="_blank" title="解放军绝密：山东河南上万农民一夜突然蒸发" mon="ct=0&amp;a=2&amp;c=mil&amp;pn=5">解放军绝密：山东河南上万农民一夜突然蒸发</a></li>

                                                                            

                                                            <!--MONITOR INDEX_MIL_TOPHIT OK 5 HOTAREA-->
                                                </ol>
    

                    </div>
                </div>
                <div class="mod tbox" id="mil-aside-jq">
                    <div class="hd line"><h3><a href="http://news.baidu.com/n?cmd=1&amp;class=zhongguojq&amp;pn=1" target="_blank">中国军情</a></h3><a href="http://news.baidu.com/n?cmd=1&amp;class=zhongguojq&amp;pn=1" class="more" target="_blank">更多</a></div>
                    <div class="bd">
                    

<ul class="ulist ">
                                    <li>            <a href="http://www.jd37.com/news/20147/140381.html" mon="ct=0&amp;a=28&amp;c=mil&amp;pn=1" target="_blank">中美特种军机在南海激烈对战：场面惊心动魄</a></li>
                                    
                                        <li>            <a href="http://mil.news.sina.com.cn/2014-07-01/0852787807.html" mon="ct=0&amp;a=28&amp;c=mil&amp;pn=2" target="_blank">美媒：中国第3艘航母或达8万吨 类似前苏联航母</a></li>
                                    
                                        <li>            <a href="http://news.enorth.com.cn/system/2014/07/02/011987993.shtml" mon="ct=0&amp;a=28&amp;c=mil&amp;pn=3" target="_blank">疑似国产航母照片被曝光 装备电磁弹射器系统</a></li>
                                    
                                        <li>            <a href="http://www.qianzhan.com/military/detail/275/140702-69047c84.html" mon="ct=0&amp;a=28&amp;c=mil&amp;pn=4" target="_blank">解放军南海获一盟友力挺：勿在中国衰弱时趁火打劫</a></li>
                                    
                                        <li>            <a href="http://www.aihami.com/a/dangjian/junshi/47740.html" mon="ct=0&amp;a=28&amp;c=mil&amp;pn=5" target="_blank">中国情报飞机震撼曝光 揭秘中美空中激烈电子对抗战</a></li>
                                    
                                        <li>            <a href="http://www.cnwnews.com/html/soceity/cn_js/wqzb/20140702/621734.html" mon="ct=0&amp;a=28&amp;c=mil&amp;pn=6" target="_blank">中国海军851号情报收集舰</a></li>
                                                <!--MONITOR INDEX_CHINASITUATION OK 6 HOTAREA-->
            
</ul>



                    </div>
                </div>
             </div>

   </div>



<!--end 军事-->

<!--start 娱乐-->
<a name="enternews" class="focustop-anchor"></a>

    <div class="column clearfix" id="yule">
        
<div class="column-title" alog-group="entertainment-title">
            <div class="column-title-border">
                <h2><a href="http://news.baidu.com/n?cmd=1&amp;class=enternews" target="_blank">娱乐</a><span class="cname">Entertainment</span></h2>
            </div>
    </div>


        
    <div class="l-left-col col-mod" alog-group="entertainment-left">
    
<!-- 娱乐版块2 -->
<ul class="ulist ">
     <?php $count=0 ?>
    @foreach($yuleNews2 as $v)
        @if($count==0)
            <li class="bold-item"><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @else
            <li><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @endif
        <?php $count++ ?>
    @endforeach
</ul>
<!-- 娱乐版块3 -->
<ul class="ulist ">
     <?php $count=0 ?>
    @foreach($yuleNews3 as $v)
        @if($count==0)
            <li class="bold-item"><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @else
            <li><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @endif
        <?php $count++ ?>
    @endforeach
</ul>



</div>


        
<div class="l-middle-col" alog-group="entertainment-middle">
    <div class="mod">
        <div class="hd">
                        <h3>娱乐图片</h3>
                    </div>
        <div class="bd">
            
<!-- <div class="imagearea"> -->
    <!-- <div class="imagearea-top"> -->
                                    
<!-- <div class="image-mask-item">
    <a href="http://lidonglou.baijia.baidu.com/article/20878" target="_blank" class="item-image" mon="ct=0&amp;c=enternews&amp;pn=1&amp;a=12" title="从小苹果走红看社交化媒体流行规律">
        <img src="{{asset('images/32fa828ba61ea8d3833c73de950a304e241f58c9.jpg')}}" alt="从小苹果走红看社交化媒体流行规律"></a>
    <a href="http://lidonglou.baijia.baidu.com/article/20878" target="_blank" class="item-title" title="从小苹果走红看社交化媒体流行规律" mon="ct=0&amp;c=enternews&amp;pn=1&amp;a=9">从小苹果走红看社交化媒体流行规律</a>
</div> -->
    <style>
        /*主要注意,超出容器的图片让它隐藏*/
        #d1{width:560px;height:400px;
            padding:1px;
            border:2px solid green;
            margin-left:300px;
            overflow:hidden;zoom:1;
            position: relative;
        }
        /*内部内容都浮动了,清理一下,否则width为0*/
        #d2{/*overflow: hidden;zoom:1;*/width:2240px;}

        /*内部div宽度设定为可以容纳所有图片,这样图片浮动的话则可以横摆成一条线.因为这里需要的是横向滚动.
            而最外层div设定一张图片宽度,在超过那个宽度的时候隐藏.
            注意,两组图片的直接容器也要一起浮动,让两组图片也成横摆
        */
        #d3,#d4{
            width:1120px;height:400px;
            float:left;
        }
        #d1 img{
            float:left;
            width:560px;height:400px;
            cursor:pointer;
        }
        #dleft,#dright{
            width:45px;height:45px;
            position:absolute;
            cursor:pointer;
            opacity:0.6;
            filter:alpha(opacity=60);
        }
        /*稍微设置下箭头透明度的改变*/
        #dleft:hover,#dright:hover{
            opacity:1;
            filter:alpha(opacity=100);
        }
        #dleft{
            top:80px;
            background: url(http://cms/images/1.png) no-repeat 0px 0px;
        }
        #dright{
            top:80px;left:253px;
            background: url(http://cms/images/1.png) no-repeat 0px -47px;
        }
        /*左下方的列表*/
        #d1 ul{
            padding: 0;
            list-style:none;
            position:absolute;
            right:15px;bottom:10px;
        }
        #d1 ul li{
            cursor: pointer;
            float:left;
            width:20px;height:20px;
            margin-right:3px;
            background: url(http://cms/images/1.png) no-repeat -25px -125px;
        }
    </style>
    <!-- 注意,需要用到jquery -->
    <!-- 包裹幻灯片的最外层div -->
        <div id="d1">
            <!-- 这个d2 div是用来让两组图片一起移动 -->
            <div id="d2">
                <!-- 之所以复制一组,是当第一组图片全部溢出容器之后,能让第二组先补上,不至于露底 -->
                <div id="d3">
                    <img src="http://cms/uploads/005.jpg" alt="">
                    <img src="http://cms/uploads/004.jpg" alt="">
                  <!--   <img src="image/3.jpg" alt="">
                    <img src="image/4.jpg" alt=""> -->
                </div>
                <div id="d4">
                    <img src="http://cms/uploads/005.jpg" alt="">
                    <img src="http://cms/uploads/004.jpg" alt="">
                   <!--  <img src="image/3.jpg" alt="">
                    <img src="image/4.jpg" alt=""> -->
                </div>
            </div>
            <!-- 箭头 -->
            <div id="dleft"></div>
            <div id="dright"></div>
        </div>

        <script>
            window.onload=function(){
                        //调用以测试效果   
                        slide(560,2);   

                        //=====================================================================
                        //slide函数:
                        //      功能:实现幻灯片效果.
                        //      参数:[以下所有数字参数不用带单位]
                        //          ①imgWidth:图片的宽
                        //          
                        //          ②num:图片张数
                        //                  ---以一组图片的张数为准.因为要以这个来计算什么时候一组图片移动完
                        //          
                        //          ③time: [可选,单位毫秒]    
                        //                  每张图片停留的时间,这个参数即带入animate方法的时间,默认2000
                        //======================================================================
                        
                        function slide(imgWidth,num/*,time*/){
                            //用arguments属性来获取可选参数time
                            var time=slide.arguments[2]||2000;
                            var mark;                       //定义move函数内时钟的返回值,在函数外定义,为了下面所有函数能用到
                            var mark1;                      //第二个setTimeout的返回值     
                            var mark2;                      //第三个时钟
                            var d2=$("#d2");                //d2元素,主要就是这个容器来移动
                            var d2ml;                       //d2的marginLeft


                            //创建图片下方的列表
                                var ul=$("<ul/>");
                            //li的数量应该与图片一样多.
                                for(var i=0;i<num;i++){
                                    ul.append("<li></li>");
                                }
                            //放到幻灯片容器内
                                $("#d1").append(ul);
                            //所有li的jquery对象
                                var li=$("#d1 ul li");
                            //设置li的hover效果,移上鼠标,对应的图片停止,li自身改变背景
                                li.hover(
                                    function(){
                                        //清理多余的时钟,让动画停下来.
                                        if(mark2){
                                            clearTimeout(mark2);
                                        }
                                        //停止动画
                                        d2.stop();
                                        clearTimeout(mark);
                                        //改变背景  
                                        $(this).css("background","url(image/1.png) no-repeat -6px -125px");
                                        //得出当前是第几个li,就知道它要哪张图对应.
                                        var order=li.index($(this));
                                        //得出需要对应的marginLeft:
                                        var d2ml=-(order)*imgWidth;
                                        //改变到指定坐标
                                        d2.css("marginLeft",d2ml);
                                    },
                                    function(){
                                        //鼠标离开时还原背景图片
                                        $(this).css("background","url(image/1.png) no-repeat -25px -125px");
                                        //继续move
                                        mark2=setTimeout(move,2000);
                                    }
                                );

                            //图片开始移动
                                move();
                                function move(){    
                                    

                                    d2ml=parseInt(d2.css("marginLeft"));        //获得d2当前的marginLeft

                                    var groupWidth=imgWidth*num;                //一组图片的总宽.这里也可以直接取d3的宽度
                                    
                                    //判断当前是否有一组图片已经整组移动出容器,那样的话把d2这个容器直接调回初始位置
                                    //d2是图片容器,也就是说把所有图片调回初始位置.
                                    if(d2ml<=-groupWidth){
                                        d2.css("marginLeft",0);
                                    }

                                    //开始    
                                    d2.animate({marginLeft:"-="+imgWidth},time);

                                    //清除多余的时钟(下面hover生成的时钟),不清除会出现异常,时钟可能产生叠加.速度越来越快.
                                    if(mark1){
                                        clearTimeout(mark1);
                                    }else if(mark2){
                                        clearTimeout(mark2);
                                    }

                                    //循环调用
                                    mark=setTimeout(move,time+2000);
                                    
                                }

                                // //鼠标移动到图片上,要让其停止: 
                                // [注意,这个功能屏蔽了,因为有列表的鼠标悬浮停止动画效果,这个就不需要了.以免混乱.不过这个也是可以用的]
                                // $("#d2 img").hover(
                                //  function(){
                                //      d2.stop(false,true);
                                //      clearTimeout(mark);
                                //  },
                                //  function(){
                                //      mark1=setTimeout(move,2000);            
                                //  }

                                // )

                                //点击箭头图标,图片前进或者后退
                                $("#dleft").click(function(){
                                    d2.stop();
                                    clearTimeout(mark);
                                    //求出当前是运行到第几张图片.
                                    var index=Math.abs(Math.floor(d2ml/imgWidth));
                                    //因为是有两组图片的.所以有可能这个index会超过一组的数量.
                                    //现在设定是只在第一组来显示前进后退,以免数值过大,导致所有图片全部超出范围.
                                    if(index>num){
                                        index=index%num;
                                    }
                                    //指定到下一张需要的marginLeft
                                    var newml=-((index+1)*imgWidth);
                                    //左箭头,转到下一张图片.
                                    d2.css("marginLeft",newml);
                                    //把更改后的marginleft保存下.不进行这步的话,多次点击会用上面同一个值.
                                    d2ml=newml;
                                });


                                //类似的右箭头:
                                    $("#dright").click(function(){
                                        d2.stop();
                                        clearTimeout(mark);
                                        //求出当前是运行到第几张图片.
                                            var index=Math.abs(Math.floor(d2ml/imgWidth));
                                            //当当前是第一张的时候,index是为0的.此时再找它的上一张,则应该跳到最后一张.
                                            if(index<=0){
                                                index=num;
                                            }
                                        //指定到上一张需要的marginLeft
                                            var newml=-((index-1)*imgWidth);
                                        //右箭头,转到上一张图片.
                                            d2.css("marginLeft",newml);
                                            d2ml=newml;
                                });

                                //鼠标离开箭头后,继续move
                                $("#dleft").mouseleave(function(){
                                    move();
                                })
                                $("#dright").mouseleave(function(){
                                    move();
                                })
                        }
                    }
                </script>
        </script>


                                                    <!-- </div> -->

    <div class="imagearea-bottom">
                                    
                
    <div class="image-list-item">
                <a href="http://www.chinanews.com/yl/2014/07-02/6343025.shtml" title="朱丹周一围演“律政剧” 遭专业律师吐槽 " target="_blank" mon="ct=0&amp;c=enternews&amp;pn=2&amp;a=12">
                    <img src="{{asset('images/uhttpwww_002.jpeg')}}"></a><a href="http://www.chinanews.com/yl/2014/07-02/6343025.shtml" mon="ct=0&amp;c=enternews&amp;pn=2&amp;a=9" class="txt" target="_blank">朱丹周一围演“律政剧” 遭专业律师吐槽 </a>
            </div>



                                            
                
    <div class="image-list-item">
                <a href="http://news.xinhuanet.com/ent/2014-07/02/c_126700178.htm" title="《古剑奇谭》今日开播 四大看点掀起仙侠狂潮 " target="_blank" mon="ct=0&amp;c=enternews&amp;pn=3&amp;a=12">
                    <img src="{{asset('images/uhttpnews_002.jpeg')}}"></a><a href="http://news.xinhuanet.com/ent/2014-07/02/c_126700178.htm" mon="ct=0&amp;c=enternews&amp;pn=3&amp;a=9" class="txt" target="_blank">《古剑奇谭》今日开播 四大看点掀起仙侠狂潮 </a>
            </div>



                            </div>
</div>


        </div>
    </div>
</div>


        <div class="l-right-col" alog-group="entertainment-right">

            <div class="mod" id="yule-aside-star">
                <div class="hd line"><h3><a href="http://news.baidu.com/n?cmd=1&amp;class=star&amp;pn=1" target="_blank">明星</a></h3><a href="http://news.baidu.com/n?cmd=1&amp;class=star&amp;pn=1" class="more" target="_blank">更多</a></div>
                <div class="bd">
                              
<div class="image-list">
    <div class="image-list-wrapper">

                                        
    <div class="image-list-item">
                <a href="http://www.js.xinhuanet.com/2014-07/02/c_1111422903.htm" title="杨幂Angelababy鼻变高眼变大 谁是&amp;quot;变脸女王&amp;quot;" target="_blank" mon="c=enternews&amp;ct=0&amp;col=17&amp;a=27&amp;pn=1">
                    <img src="{{asset('images/d067e523e2ec1440193011.jpeg')}}"></a><a href="http://www.js.xinhuanet.com/2014-07/02/c_1111422903.htm" class="txt" mon="c=enternews&amp;ct=0&amp;col=17&amp;a=27&amp;pn=1" target="_blank">杨幂Angelababy鼻变高眼变大 谁是"变脸女王"</a>
            </div>



        
                                
    <div class="image-list-item">
                <a href="http://news.youth.cn/yl/201407/t20140702_5449235.htm" title="柳岩被曝已与地产富商领证 年底将举行婚礼" target="_blank" mon="c=enternews&amp;ct=0&amp;col=17&amp;a=27&amp;pn=2">
                    <img src="{{asset('images/W020140702317747985213.jpeg')}}"></a><a href="http://news.youth.cn/yl/201407/t20140702_5449235.htm" class="txt" mon="c=enternews&amp;ct=0&amp;col=17&amp;a=27&amp;pn=2" target="_blank">柳岩被曝已与地产富商领证 年底将举行婚礼</a>
            </div>



                <!--MONITOR INDEX_STAR OK 2 HOTAREA-->
        
                    
        
        
        
    </div>
</div>


                              </div>
            </div>

            <div class="mod tbox" id="yule-aside-hotwords" style="padding-top:11px;">
                <div class="bd">
                    

<ul class="ulist ">
                                    <li>            <a href="http://ent.nmgnews.com.cn/system/2014/07/02/011491827.shtml" mon="col=13&amp;ct=0&amp;a=28&amp;c=enternews&amp;pn=1" target="_blank">柳岩被曝已与地产富商领证 经纪人：假消息 </a></li>
                                    
                                        <li>            <a href="http://www.jfdaily.com/wenyu/new/201407/t20140702_508549.html" mon="col=13&amp;ct=0&amp;a=28&amp;c=enternews&amp;pn=2" target="_blank">台湾双胞胎女星办奢华婚宴 花费600余万(图)</a></li>
                                    
                                        <li>            <a href="http://ent.cqnews.net/html/2014-07/02/content_31240764.htm" mon="col=13&amp;ct=0&amp;a=28&amp;c=enternews&amp;pn=3" target="_blank">想不红都不行 盘点捧红明星最多的十大电视剧 </a></li>
                                    
                                        <li>            <a href="http://n.cztv.com/wy/336094.html" mon="col=13&amp;ct=0&amp;a=28&amp;c=enternews&amp;pn=4" target="_blank">陆川秦岚被曝分手近一年 女方不婚主义或乃导火索</a></li>
                                    
                                        <li>            <a href="http://news.jschina.com.cn/system/2014/07/02/021307600.shtml" mon="col=13&amp;ct=0&amp;a=28&amp;c=enternews&amp;pn=5" target="_blank">实在假到离谱 柳岩反击嫁富商传闻</a></li>
                                    
                                        <li>            <a href="http://news.youth.cn/jsxw/201407/t20140702_5450853.htm" mon="col=13&amp;ct=0&amp;a=28&amp;c=enternews&amp;pn=6" target="_blank">章子怡收到汪峰爱的短讯 谈及结婚害羞脸红</a></li>
                                    
                                        <li>            <a href="http://www.qhtv.cn/a/41108-1.html" mon="col=13&amp;ct=0&amp;a=28&amp;c=enternews&amp;pn=7" target="_blank">韩版《命中注定我爱你》张娜拉床戏画面曝光 </a></li>
                                    
                                        <li>            <a href="http://news.youth.cn/yl/201407/t20140702_5452029.htm" mon="col=13&amp;ct=0&amp;a=28&amp;c=enternews&amp;pn=8" target="_blank">金秀贤将入伍 宋慧乔与宋承宪荧幕情侣或重现</a></li>
                                                <!--MONITOR INDEX_ENTERNEWS_HOTWORD OK 8 HOTAREA-->
            
</ul>



                </div>
            </div> 
        </div>

   </div>


<!--end 娱乐-->
<!--start 体育图片墙-->
<a name="sportspicnews" class="focustop-anchor"></a>

<div class="column clearfix" alog-group="log-sports-picwall">
        <div class="mod pic-wall" id="sports-picwall">
            <div class="bd">
            
<div class="image-list">
    <div class="image-list-wrapper">

        
                                                        
    <div class="image-list-item">
                <a href="http://www.miercn.com/bdnews/201407/329700.html" title="胸围爆棚让人流口水的女星" target="_blank" mon="c=sportnews&amp;ct=0&amp;col=22&amp;pn=1&amp;a=12">
                    <img src="{{asset('images/8ec1a0c4dc1fa0c69e6327e5ee38f53d.jpg')}}"></a><a href="http://www.miercn.com/bdnews/201407/329700.html" mon="c=sportnews&amp;ct=0&amp;col=22&amp;pn=1&amp;a=9" class="txt" target="_blank">胸围爆棚让人流口水的女星</a>
            </div>



                                                                                
    <div class="image-list-item">
                <a href="http://www.miercn.com/bdnews/201407/329698.html" title="让人难以忘怀的不老玉女" target="_blank" mon="c=sportnews&amp;ct=0&amp;col=22&amp;pn=2&amp;a=12">
                    <img src="{{asset('images/a6f018f3bf1a46c34884c3acfd4e8c20.jpg')}}"></a><a href="http://www.miercn.com/bdnews/201407/329698.html" mon="c=sportnews&amp;ct=0&amp;col=22&amp;pn=2&amp;a=9" class="txt" target="_blank">让人难以忘怀的不老玉女</a>
            </div>



                                                                                
    <div class="image-list-item">
                <a href="http://www.shenmou.com/caijing/201407/37835.html?news.baidu" title="专门勾搭富豪的女星    " target="_blank" mon="c=sportnews&amp;ct=0&amp;col=22&amp;pn=3&amp;a=12">
                    <img src="{{asset('images/866c2c523d4a4494873171e8c7a0d548.jpg')}}"></a><a href="http://www.shenmou.com/caijing/201407/37835.html?news.baidu" mon="c=sportnews&amp;ct=0&amp;col=22&amp;pn=3&amp;a=9" class="txt" target="_blank">专门勾搭富豪的女星    </a>
            </div>



                                                                                
    <div class="image-list-item">
                <a href="http://www.39yss.com/hot/yule/20140612/29283.html?bd" title="被领导人接见的20位明星" target="_blank" mon="c=sportnews&amp;ct=0&amp;col=22&amp;pn=4&amp;a=12">
                    <img src="{{asset('images/157a3f3390b8171f85f8e9c801bc0245.jpg')}}"></a><a href="http://www.39yss.com/hot/yule/20140612/29283.html?bd" mon="c=sportnews&amp;ct=0&amp;col=22&amp;pn=4&amp;a=9" class="txt" target="_blank">被领导人接见的20位明星</a>
            </div>



                                                                                
    <div class="image-list-item">
                <a href="http://lady.163.com/14/0630/19/A00RNSTM00264IIU.html?bdsy" title="星途迥异的内地小生" target="_blank" mon="c=sportnews&amp;ct=0&amp;col=22&amp;pn=5&amp;a=12">
                    <img src="{{asset('images/83717fef76c5f30b5a0897dd709ccc54.jpg')}}"></a><a href="http://lady.163.com/14/0630/19/A00RNSTM00264IIU.html?bdsy" mon="c=sportnews&amp;ct=0&amp;col=22&amp;pn=5&amp;a=9" class="txt" target="_blank">星途迥异的内地小生</a>
            </div>



                                                                        
                                                                        
                                                                        
                                                    <!--MONITOR  OK 10 HOTAREA-->
                                    
        
        
    </div>
</div>


            </div>
        </div>
   </div>


<!--end 体育图片墙-->

<!--start 国际-->
<a name="internews" class="focustop-anchor"></a>

    <div class="column clearfix" id="guojie">
        
<div class="column-title" alog-group="log-internal-title">
        <div class="column-title-border">
            <h2><a href="http://news.baidu.com/n?cmd=1&amp;class=internews" target="_blank">国际</a><span class="cname">World</span></h2>
        </div>
</div>


        
    <div class="l-left-col col-mod" alog-group="log-internal-left">
    
<!-- 国际版块1 -->
<ul class="ulist ">
     <?php $count=0 ?>
    @foreach($guojiNews as $v)
        @if($count==0)
            <li class="bold-item"><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @else
            <li><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @endif
        <?php $count++ ?>
    @endforeach
</ul>
<!-- 国际版块2 -->
<ul class="ulist ">
     <?php $count=0 ?>
    @foreach($guojiNews2 as $v)
        @if($count==0)
            <li class="bold-item"><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @else
            <li><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @endif
        <?php $count++ ?>
    @endforeach
</ul>



</div>


        
<div class="l-middle-col" alog-group="log-internal-middle">
    <div class="mod">
        <div class="hd">
                        <h3>国际图片</h3>
                    </div>
        <div class="bd">
            
<div class="imagearea">
    <div class="imagearea-top">
                                    
<div class="image-mask-item">
    <a href="http://news.xinhuanet.com/yzyd/world/20140702/c_1111413240.htm" target="_blank" class="item-image" mon="ct=0&amp;c=internews&amp;pn=1&amp;a=12" title="泰国罕见隐世部落照曝光 儿童吸烟玩步枪(图) ">
        <img src="{{asset('images/uhttpnews.jpeg')}}" alt="泰国罕见隐世部落照曝光 儿童吸烟玩步枪(图) "></a>
    <a href="http://news.xinhuanet.com/yzyd/world/20140702/c_1111413240.htm" target="_blank" class="item-title" title="泰国罕见隐世部落照曝光 儿童吸烟玩步枪(图) " mon="ct=0&amp;c=internews&amp;pn=1&amp;a=9">泰国罕见隐世部落照曝光 儿童吸烟玩步枪(图) </a>
</div>


                                                    </div>

    <div class="imagearea-bottom">
                                    
                
    <div class="image-list-item">
                <a href="http://international.dbw.cn/system/2014/07/02/055825547.shtml" title="印尼神秘赶尸人：让尸体自己步行前往坟墓(图)" target="_blank" mon="ct=0&amp;c=internews&amp;pn=2&amp;a=12">
                    <img src="{{asset('images/uhttppic.jpeg')}}"></a><a href="http://international.dbw.cn/system/2014/07/02/055825547.shtml" mon="ct=0&amp;c=internews&amp;pn=2&amp;a=9" class="txt" target="_blank">印尼神秘赶尸人：让尸体自己步行前往坟墓(图)</a>
            </div>



                                            
                
    <div class="image-list-item">
                <a href="http://news.china.com.cn/live/2014-07/02/content_27447790.htm" title="纽约警方严打地铁内演特技卖艺行为 逾240人被捕.." target="_blank" mon="ct=0&amp;c=internews&amp;pn=3&amp;a=12">
                    <img src="{{asset('images/uhttpimages_002.jpeg')}}"></a><a href="http://news.china.com.cn/live/2014-07/02/content_27447790.htm" mon="ct=0&amp;c=internews&amp;pn=3&amp;a=9" class="txt" target="_blank">纽约警方严打地铁内演特技卖艺行为 逾240人被捕..</a>
            </div>



                            </div>
</div>


        </div>
    </div>
</div>


        <div class="l-right-col" alog-group="log-internal-right">
            <div class="mod" id="huanqiu">
                <div class="hd line"><h3><a href="http://news.baidu.com/n?cmd=1&amp;class=hqsy&amp;pn=1" target="_blank">环球视野</a></h3><a href="http://news.baidu.com/n?cmd=1&amp;class=hqsy&amp;pn=1" class="more" target="_blank">更多</a></div>
                <div class="bd">
                
<div class="image-list">
    <div class="image-list-wrapper">

        
                                                        
    <div class="image-list-item">
                <a href="http://travel.sohu.com/20140702/n401675252.shtml" title="艺术家与诗人钟爱地 马略卡" target="_blank" mon="ct=0&amp;a=27&amp;c=internews&amp;pn=1">
                    <img src="{{asset('images/uhttpphotocdn.jpeg')}}"></a><a href="http://travel.sohu.com/20140702/n401675252.shtml" mon="ct=0&amp;a=27&amp;c=internews&amp;pn=1" class="txt" target="_blank">艺术家与诗人钟爱地 马略卡</a>
            </div>



                                                                                
    <div class="image-list-item">
                <a href="http://www.cnwnews.com/html/tech/cn_zxkj/20140702/621703.html" title="震惊!黑海古城墓室惊现3000年前神秘海底人鱼（组.." target="_blank" mon="ct=0&amp;a=27&amp;c=internews&amp;pn=2">
                    <img src="{{asset('images/uhttpb60ff8b41f368739.jpeg')}}"></a><a href="http://www.cnwnews.com/html/tech/cn_zxkj/20140702/621703.html" mon="ct=0&amp;a=27&amp;c=internews&amp;pn=2" class="txt" target="_blank">震惊!黑海古城墓室惊现3000年前神秘海底人鱼（组..</a>
            </div>



                                                <!--MONITOR INDEX_HQSY OK 2 HOTAREA-->
                                    
        
        
    </div>
</div>


                </div>
            </div>

            <div class="mod tbox" id="internal-hotword">
                <div class="hd"><h3>国际热搜词</h3></div>
                <div class="bd">
                

        <ol class="olist hotwords-list" id="">
                                                                                                                        <li> <span class="listnum highlight">01</span><a href="http://news.baidu.com/ns?cl=2&amp;ct=9&amp;rn=20&amp;sp=hotquery&amp;word=MH370%2010%C4%EA" target="_blank" title="马航搜寻或需10年" mon="ct=0&amp;a=28&amp;c=internews&amp;pn=1">马航搜寻或需10年</a></li>
                                                                        
                                                        

                                                                        
                                                                        
                            <li> <span class="listnum highlight">02</span><a href="http://news.baidu.com/ns?cl=2&amp;ct=9&amp;rn=20&amp;sp=hotquery&amp;word=%D6%D0%B9%FA%C8%CB%B1%BB%C0%A7%D2%C1%C0%AD%BF%CB" target="_blank" title="中国人被困伊拉克" mon="ct=0&amp;a=28&amp;c=internews&amp;pn=2">中国人被困伊拉克</a></li>
                                                                        
                                                        

                                                                        
                                                                        
                            <li> <span class="listnum highlight">03</span><a href="http://news.baidu.com/ns?cl=2&amp;ct=9&amp;rn=20&amp;sp=hotquery&amp;word=%C1%D0%C4%FE%C8%F6%C4%F2" target="_blank" title="波兰建列宁撒尿喷泉" mon="ct=0&amp;a=28&amp;c=internews&amp;pn=3">波兰建列宁撒尿喷泉</a></li>
                                                                        
                                                        

                                                                        
                                                                        
                            <li> <span class="listnum">04</span><a href="http://news.baidu.com/ns?cl=2&amp;ct=9&amp;rn=20&amp;sp=hotquery&amp;word=%D4%BD%C4%CF%20%B7%B4%BB%AA%20%C9%A7%C2%D2%20%C5%E2%B3%A5" target="_blank" title="越南赔偿中国企业" mon="ct=0&amp;a=28&amp;c=internews&amp;pn=4">越南赔偿中国企业</a></li>

                                                                        
                                                        

                                                                        
                                                                        
                            <li> <span class="listnum">05</span><a href="http://news.baidu.com/ns?cl=2&amp;ct=9&amp;rn=20&amp;sp=hotquery&amp;word=%D4%BD%C4%CF%20%CA%C0%BD%E7%D7%EE%B4%F3%B6%B4%D1%A8" target="_blank" title="越南现世界最大洞穴" mon="ct=0&amp;a=28&amp;c=internews&amp;pn=5">越南现世界最大洞穴</a></li>

                                                                        
                                                        

                                                                        
                                                                        
                            <li> <span class="listnum">06</span><a href="http://news.baidu.com/ns?cl=2&amp;ct=9&amp;rn=20&amp;sp=hotquery&amp;word=%CF%A3%C0%AD%C0%EF%20%C2%EE%20%B0%C2%B0%CD%C2%ED" target="_blank" title="希拉里曾骂奥巴马" mon="ct=0&amp;a=28&amp;c=internews&amp;pn=6">希拉里曾骂奥巴马</a></li>

                                                                        
                                                                </ol>
                                <ol class="olist hotwords-list" id="">
                                                    

                                                                        
                                                                        
                            <li> <span class="listnum">07</span><a href="http://news.baidu.com/ns?cl=2&amp;ct=9&amp;rn=20&amp;sp=hotquery&amp;word=%C8%F8%BF%C6%C6%EB%20%BE%D0%C1%F4" target="_blank" title="萨科齐涉贪腐被拘留" mon="ct=0&amp;a=28&amp;c=internews&amp;pn=7">萨科齐涉贪腐被拘留</a></li>

                                                                        
                                                        

                                                                        
                                                                        
                            <li> <span class="listnum">08</span><a href="http://news.baidu.com/ns?cl=2&amp;ct=9&amp;rn=20&amp;sp=hotquery&amp;word=%D6%D0%B9%FA%B9%AB%C3%F1%20%C3%C0%B9%FA%D5%CB%BB%A7" target="_blank" title="中国公民美国账户" mon="ct=0&amp;a=28&amp;c=internews&amp;pn=8">中国公民美国账户</a></li>

                                                                        
                                                        

                                                                        
                                                                        
                            <li> <span class="listnum">09</span><a href="http://news.baidu.com/ns?cl=2&amp;ct=9&amp;rn=20&amp;sp=hotquery&amp;word=%CE%DA%BF%CB%C0%BC%20%C5%B7%C3%CB%20%C7%A9%D0%AD%D2%E9" target="_blank" title="乌克兰与欧盟签协议" mon="ct=0&amp;a=28&amp;c=internews&amp;pn=9">乌克兰与欧盟签协议</a></li>

                                                                        
                                                        

                                                                        
                                                                        
                            <li> <span class="listnum">10</span><a href="http://news.baidu.com/ns?cl=2&amp;ct=9&amp;rn=20&amp;sp=hotquery&amp;word=%C8%D5%B1%BE%20%BD%E2%BD%FB%20%D7%D4%CE%C0%C8%A8" target="_blank" title="日本决定解禁自卫权" mon="ct=0&amp;a=28&amp;c=internews&amp;pn=10">日本决定解禁自卫权</a></li>

                                                                        
                                                        

                                                                        
                                                                        
                            <li> <span class="listnum">11</span><a href="http://news.baidu.com/ns?cl=2&amp;ct=9&amp;rn=20&amp;sp=hotquery&amp;word=%D3%A2%B9%FA%20%CD%CB%B3%F6%20%C5%B7%C3%CB" target="_blank" title="英国可能将退出欧盟" mon="ct=0&amp;a=28&amp;c=internews&amp;pn=11">英国可能将退出欧盟</a></li>

                                                                        
                                                        

                                                                        
                                                                        
                            <li> <span class="listnum">12</span><a href="http://news.baidu.com/ns?cl=2&amp;ct=9&amp;rn=20&amp;sp=hotquery&amp;word=%B7%A8%B9%FA%20%C8%F8%BF%C6%C6%EB%20%B1%BB%BE%D0%C1%F4" target="_blank" title="萨科齐被拘留" mon="ct=0&amp;a=28&amp;c=internews&amp;pn=12">萨科齐被拘留</a></li>

                                                                                                                                

                                                            <!--MONITOR INDEX_INTERNAL_HOTWORD OK 12 HOTAREA-->
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                </ol>
    

                </div>
            </div>

        </div>
    </div>


<!--end 国际-->

<!--start 体育-->
<a name="sportsnews" class="focustop-anchor"></a>

    <div class="column clearfix" id="tiyu">
        
<div class="column-title" alog-group="log-sports-title">
            <div class="column-title-border">
                    <h2><a href="http://news.baidu.com/n?cmd=1&amp;class=sportnews" target="_blank">体育</a><span class="cname">Sports</span></h2>
                        
            </div>
    </div>


        
    <div class="l-left-col col-mod" alog-group="log-sports-left">
    
<!-- 体育1 -->
<ul class="ulist ">
     <?php $count=0 ?>
    @foreach($tiyuNews as $v)
        @if($count==0)
            <li class="bold-item"><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @else
            <li><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @endif
        <?php $count++ ?>
    @endforeach
</ul>
<!-- 体育2 -->
<ul class="ulist ">
     <?php $count=0 ?>
    @foreach($tiyuNews2 as $v)
        @if($count==0)
            <li class="bold-item"><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @else
            <li><a href="http://cms/news-detail/{{$v->id}}" mon="ct=0&amp;a=2&amp;c=civilnews&amp;pn=1" target="_blank">{{$v->title}}</a></li>
        @endif
        <?php $count++ ?>
    @endforeach
</ul>



</div>


        
<div class="l-middle-col" alog-group="log-sports-middle">
    <div class="mod">
        <div class="hd">
                        <h3>体育图片</h3>
                    </div>
        <div class="bd">
            
<div class="imagearea">
    <div class="imagearea-top">
                                    
<div class="image-mask-item">
    <a href="http://2014.baidu.com/" target="_blank" class="item-image" mon="ct=0&amp;c=sportnews&amp;pn=1&amp;a=12" title="巴萨皇马合体造绝杀">
        <img src="{{asset('images/e60a0b14d8799e24a9e54ca0c2ac5f64.jpg')}}" alt="巴萨皇马合体造绝杀"></a>
    <a href="http://2014.baidu.com/" target="_blank" class="item-title" title="巴萨皇马合体造绝杀" mon="ct=0&amp;c=sportnews&amp;pn=1&amp;a=9">巴萨皇马合体造绝杀</a>
</div>


                                                    </div>

    <div class="imagearea-bottom">
                                    
                
    <div class="image-list-item">
                <a href="http://chengzheng.baijia.baidu.com/article/20792" title="逗比和疯狗式进攻" target="_blank" mon="ct=0&amp;c=sportnews&amp;pn=2&amp;a=12">
                    <img src="{{asset('images/fa15bc8266b9dacc2e21aa8b152f6e40.jpg')}}"></a><a href="http://chengzheng.baijia.baidu.com/article/20792" mon="ct=0&amp;c=sportnews&amp;pn=2&amp;a=9" class="txt" target="_blank">逗比和疯狗式进攻</a>
            </div>



                                            
                
    <div class="image-list-item">
                <a href="http://sanbiao.baijia.baidu.com/article/20800" title="黑又硬与烂解说" target="_blank" mon="ct=0&amp;c=sportnews&amp;pn=3&amp;a=12">
                    <img src="{{asset('images/eca3f989536b1a6dd840d71eee06e212.jpg')}}"></a><a href="http://sanbiao.baijia.baidu.com/article/20800" mon="ct=0&amp;c=sportnews&amp;pn=3&amp;a=9" class="txt" target="_blank">黑又硬与烂解说</a>
            </div>



                            </div>
</div>


        </div>
    </div>
</div>




            <div class="l-right-col" alog-group="log-sports-right">
                <div class="mod rbox" id="sports-aside-nba">
                    <div class="hd line"><h3><a href="http://news.baidu.com/n?cmd=1&amp;class=nba&amp;pn=1" target="_blank">NBA</a></h3><a href="http://news.baidu.com/n?cmd=1&amp;class=nba&amp;pn=1" class="more" target="_blank">更多</a></div>
                    <div class="bd">
                    
<div class="image-list">
    <div class="image-list-wrapper">

        
                                                        
    <div class="image-list-item">
                <a href="http://china.nba.com/news/4/2014-07-02/0536/21866.html" title="曝韦德、波什双双大幅降薪 热火能迎第四巨头？" target="_blank" mon="ct=0&amp;a=27&amp;c=sportnews&amp;pn=1">
                    <img src="{{asset('images/uhttpi1.jpeg')}}"></a><a href="http://china.nba.com/news/4/2014-07-02/0536/21866.html" mon="ct=0&amp;a=27&amp;c=sportnews&amp;pn=1" class="txt" target="_blank">曝韦德、波什双双大幅降薪 热火能迎第四巨头？</a>
            </div>



                                                                                
    <div class="image-list-item">
                <a href="http://china.nba.com/news/4/2014-07-02/0901/21869.html" title="戈塔特将5年6000万美元续约奇才" target="_blank" mon="ct=0&amp;a=27&amp;c=sportnews&amp;pn=2">
                    <img src="{{asset('images/uhttpi2.jpeg')}}"></a><a href="http://china.nba.com/news/4/2014-07-02/0901/21869.html" mon="ct=0&amp;a=27&amp;c=sportnews&amp;pn=2" class="txt" target="_blank">戈塔特将5年6000万美元续约奇才</a>
            </div>



                                                <!--MONITOR INDEX_NBA OK 2 HOTAREA-->
                                    
        
        
    </div>
</div>


                    </div>
                </div>
                <div class="mod rbox" id="sports-aside-video">
                    <div class="hd line"><h3><a href="http://v.baidu.com/sport/" target="_blank">体育视频</a></h3><a href="http://v.baidu.com/sport/" class="more" target="_blank">更多</a></div>
                    <div class="bd">
                    


<div class="vlist-wrapper">
<ul class="vlist clearfix ">
                                        <li><a href="http://v.qq.com/cover/9/9jqf3hv577bue6b.html" mon="c=sportnews&amp;ct=0&amp;col=18&amp;a=28&amp;pn=1" class="video-img" title="乔治背传击地戏詹皇" target="_blank"><img src="{{asset('images/54fbb2fb43166d22980d7f30442309f79052d218.jpg')}}"><span class="play"></span></a><a href="http://v.qq.com/cover/9/9jqf3hv577bue6b.html" mon="c=sportnews&amp;ct=0&amp;col=18&amp;a=28&amp;pn=1" class="video-txt" target="_blank">乔治背传击地戏詹皇</a></li>
                                    
                                            <li><a href="http://v.qq.com/cover/q/qpz501la31ib0rz.html" mon="c=sportnews&amp;ct=0&amp;col=18&amp;a=28&amp;pn=2" class="video-img" title="维特斯压哨绝杀活塞" target="_blank"><img src="{{asset('images/2e2eb9389b504fc2f1a6daa1e7dde71191ef6d9c.jpg')}}"><span class="play"></span></a><a href="http://v.qq.com/cover/q/qpz501la31ib0rz.html" mon="c=sportnews&amp;ct=0&amp;col=18&amp;a=28&amp;pn=2" class="video-txt" target="_blank">维特斯压哨绝杀活塞</a></li>
                                                <!--MONITOR INDEX_SPORTS_VIDEO OK 2 HOTAREA-->
            
</ul>
</div>


                    </div>
                </div>
             </div>

   </div>


<!--end 体育-->


<!--start 视频新闻-->
<a name="videonews" class="focustop-anchor"></a>

    <div class="column clearfix" alog-group="log-entervideos" id="shipinxinwen">
        
<div class="column-title">
            <div class="column-title-border">
                                            <h2><a href="http://v.baidu.com/" target="_blank">视频新闻</a><span class="cname">Videos</span></h2>
                <span class="more"><a href="http://v.baidu.com/" target="_blank">更多</a></span>
                                        
            </div>
    </div>


        <div class="mod" id="video-list-news">
            <div class="bd">
            
<div class="image-list">
    <div class="image-list-wrapper">

        
                                                        
    <div class="image-list-item">
                <a href="http://www.letv.com/ptv/vplay/20209990.html" title="北京地铁13号线一孕妇掉下..." target="_blank" mon="a=28&amp;c=enternews&amp;ct=0&amp;col=17&amp;pn=1"><img r_src="http://b.hiphotos.baidu.com/video/pic/item/86d6277f9e2f0708207611daeb24b899a801f2fc.jpg"></a><a href="http://www.letv.com/ptv/vplay/20209990.html" mon="a=28&amp;c=enternews&amp;ct=0&amp;col=17&amp;pn=1" class="txt" target="_blank">北京地铁13号线一孕妇掉下...</a>
            </div>



                                                                                
    <div class="image-list-item">
                <a href="http://video.2014.sina.com.cn/p/2014/2/2014-07-02/023564058057.html?fr=bdvwc-sina" title="阿根廷1-0瑞士进8强" target="_blank" mon="a=28&amp;c=enternews&amp;ct=0&amp;col=17&amp;pn=2"><img r_src="{{asset('images/f2deb48f8c5494ee54edd4c02ff5e0fe98257e18.jpg')}}"></a><a href="http://video.2014.sina.com.cn/p/2014/2/2014-07-02/023564058057.html?fr=bdvwc-sina" mon="a=28&amp;c=enternews&amp;ct=0&amp;col=17&amp;pn=2" class="txt" target="_blank">阿根廷1-0瑞士进8强</a>
            </div>



                                                                                
    <div class="image-list-item">
                <a href="http://www.letv.com/ptv/vplay/20210662.html" title="网曝白百何奢侈品店偷600..." target="_blank" mon="a=28&amp;c=enternews&amp;ct=0&amp;col=17&amp;pn=3"><img r_src="http://c.hiphotos.baidu.com/video/pic/item/a8014c086e061d950a921ce279f40ad163d9ca17.jpg"></a><a href="http://www.letv.com/ptv/vplay/20210662.html" mon="a=28&amp;c=enternews&amp;ct=0&amp;col=17&amp;pn=3" class="txt" target="_blank">网曝白百何奢侈品店偷600...</a>
            </div>



                                                                                
    <div class="image-list-item">
                <a href="http://tv.sohu.com/20140702/n401650896.shtml" title="姚笛甩小三阴影 约友按摩..." target="_blank" mon="a=28&amp;c=enternews&amp;ct=0&amp;col=17&amp;pn=4"><img r_src="http://a.hiphotos.baidu.com/video/pic/item/aa18972bd40735fa21ba62639c510fb30e2408a5.jpg"></a><a href="http://tv.sohu.com/20140702/n401650896.shtml" mon="a=28&amp;c=enternews&amp;ct=0&amp;col=17&amp;pn=4" class="txt" target="_blank">姚笛甩小三阴影 约友按摩...</a>
            </div>



                                                                                
    <div class="image-list-item">
                <a href="http://list.video.baidu.com/bianxingjingang4.html" title="变形金刚前3部回顾" target="_blank" mon="a=28&amp;c=enternews&amp;ct=0&amp;col=17&amp;pn=5"><img r_src="http://d.hiphotos.baidu.com/video/pic/item/34fae6cd7b899e51cc522fce40a7d933c9950d0f.jpg"></a><a href="http://list.video.baidu.com/bianxingjingang4.html" mon="a=28&amp;c=enternews&amp;ct=0&amp;col=17&amp;pn=5" class="txt" target="_blank">变形金刚前3部回顾</a>
            </div>



                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <!--MONITOR INDEX_VIDEONEWS_TL OK 32 HOTAREA-->
                                    
        
        
    </div>
</div>


            </div>
        </div>
   </div>


<!--end 视频新闻-->



<!--start 图片新闻-->
<a name="imagenews" class="focustop-anchor"></a>

    <div class="column clearfix" alog-group="log-imagenews" id="tupianxinwen">
        
<div class="column-title">
            <div class="column-title-border">
                                            <h2><a style="text-decoration:none;">图片新闻</a><span class="cname">Photos</span></h2>
                                        
            </div>
    </div>


        <div class="mod" id="image-list-news">
            <div class="bd">
            
<div class="image-list">
    <div class="image-list-wrapper">

                                        
    <div class="image-list-item">
                <a href="http://www.818today.com/dianshi/22881-818.html" title="好声音齐秦成星座控" target="_blank" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=1&amp;a=12"><img r_src="http://news.baidu.com/z/resource/r/image/2014-07-01/1dc26b078401e28b363156aa520769cc.jpg"></a><a href="http://www.818today.com/dianshi/22881-818.html" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=1&amp;a=9" class="txt" target="_blank">好声音齐秦成星座控</a>
            </div>



        
                                
    <div class="image-list-item">
                <a href="http://www.39yss.com/hot/yule/20140531/28888.html?bd" title="明星自爆抽风照笑翻网友" target="_blank" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=2&amp;a=12"><img r_src="http://news.baidu.com/z/resource/r/image/2014-07-01/8684e3abe618119a85fa4639d839813b.jpg"></a><a href="http://www.39yss.com/hot/yule/20140531/28888.html?bd" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=2&amp;a=9" class="txt" target="_blank">明星自爆抽风照笑翻网友</a>
            </div>



        
                                
    <div class="image-list-item">
                <a href="http://www.39yss.com/hot/yule/20140701/29938.html?bd" title="明星不为人知的闺蜜纠纷" target="_blank" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=3&amp;a=12"><img r_src="http://news.baidu.com/z/resource/r/image/2014-07-01/207100f6a458699ffd5a14f784ffe67e.jpg"></a><a href="http://www.39yss.com/hot/yule/20140701/29938.html?bd" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=3&amp;a=9" class="txt" target="_blank">明星不为人知的闺蜜纠纷</a>
            </div>



        
                                
    <div class="image-list-item">
                <a href="http://www.39yss.com/hot/yule/20140701/29936.html?bd" title="揭当红女星真实胸围" target="_blank" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=4&amp;a=12"><img r_src="http://news.baidu.com/z/resource/r/image/2014-07-01/660c117215886b507387ff2602fbfa81.jpg"></a><a href="http://www.39yss.com/hot/yule/20140701/29936.html?bd" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=4&amp;a=9" class="txt" target="_blank">揭当红女星真实胸围</a>
            </div>



        
                                
    <div class="image-list-item">
                <a href="http://mil.chinaiiss.com/html/20147/1/pdcc2.html" title="勤奋金正恩又视察前线" target="_blank" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=5&amp;a=12"><img r_src="http://news.baidu.com/z/resource/r/image/2014-07-01/26088758054ce4edcb73995e7194cb4e.jpg"></a><a href="http://mil.chinaiiss.com/html/20147/1/pdcc2.html" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=5&amp;a=9" class="txt" target="_blank">勤奋金正恩又视察前线</a>
            </div>



        
                                
    <div class="image-list-item">
                <a href="http://mil.chinaiiss.com/html/20147/1/pdcce.html" title="中国陆军新战舰出海" target="_blank" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=6&amp;a=12"><img r_src="http://news.baidu.com/z/resource/r/image/2014-07-01/8ffaee84078b4fadc96988ffdbc6d878.jpg"></a><a href="http://mil.chinaiiss.com/html/20147/1/pdcce.html" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=6&amp;a=9" class="txt" target="_blank">中国陆军新战舰出海</a>
            </div>



        
                                
    <div class="image-list-item">
                <a href="http://www.miercn.com/bdnews/201407/329717.html" title="外省人对中国各省人的印象" target="_blank" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=7&amp;a=12"><img r_src="http://news.baidu.com/z/resource/r/image/2014-07-01/a072f3f165e8a432b0c41aa8cd01896a.jpg"></a><a href="http://www.miercn.com/bdnews/201407/329717.html" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=7&amp;a=9" class="txt" target="_blank">外省人对中国各省人的印象</a>
            </div>



        
                                
    <div class="image-list-item">
                <a href="http://www.miercn.com/bdnews/201407/329704.html" title="揭晓中国超高档香烟排行" target="_blank" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=8&amp;a=12"><img r_src="http://news.baidu.com/z/resource/r/image/2014-07-01/bafa92611bfd623f69517b002105548c.jpg"></a><a href="http://www.miercn.com/bdnews/201407/329704.html" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=8&amp;a=9" class="txt" target="_blank">揭晓中国超高档香烟排行</a>
            </div>



        
                                
    <div class="image-list-item">
                <a href="http://www.miercn.com/bdnews/201407/329702.html" title="全球10大神秘怪兽" target="_blank" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=9&amp;a=12"><img r_src="http://news.baidu.com/z/resource/r/image/2014-07-01/c613145d4318fb68275dced410b10bee.jpg"></a><a href="http://www.miercn.com/bdnews/201407/329702.html" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=9&amp;a=9" class="txt" target="_blank">全球10大神秘怪兽</a>
            </div>



        
                                
    <div class="image-list-item">
                <a href="http://www.miercn.com/bdnews/201407/329703.html" title="被黑社会下毒手的10大女星" target="_blank" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=10&amp;a=12"><img r_src="http://news.baidu.com/z/resource/r/image/2014-07-01/307cfdd90a44e4fbcf560a8e91f051c7.jpg"></a><a href="http://www.miercn.com/bdnews/201407/329703.html" mon="c=picnews&amp;ct=0&amp;col=24&amp;pn=10&amp;a=9" class="txt" target="_blank">被黑社会下毒手的10大女星</a>
            </div>



                <!--MONITOR INDEX_IMAGENEWS OK 10 HOTAREA-->
        
                    
        
        
        
    </div>
</div>


            </div>
        </div>
   </div>


<!--end 图片新闻-->

<div id="feedback" style="display:none;">
<form id="feedbackForm" action="http://api.baiyue.baidu.com/sn/api/feedback" method="post" target="postpage" accept-charset="utf-8">
        <h2><span>1</span>请选择问题分类：</h2>
        <div id="tab" class="tang-ui tang-tab" tang-param="originalIndex: 0;">
            <ul class="tang-title tang-title">
                <li class="tang-title-item tang-title-item">
                <a href="#" onclick="return false;" hidefocus="true"><span>使用不方便</span></a>
                </li>
                <li class="tang-title-item">
                <a href="#" onclick="return false;" hidefocus="true"><span>新闻不好看</span></a>
                </li>
                <li class="tang-title-item">
                <a href="#" onclick="return false;" hidefocus="true"><span>无线与客户端</span></a>
                </li>
                <li class="tang-title-item tang-title-item">
                <a href="#" onclick="return false;" hidefocus="true"><span>新闻源相关</span></a>
                </li>
                <li class="tang-title-item tang-title-item">
                <a href="#" onclick="return false;" hidefocus="true"><span>提建议</span></a>
                </li>
            </ul>
            <div class="tang-body tang-body">
                <div class="tang-body-item tang-body-item"><textarea default-value="使用不方便" maxlength="1000"></textarea></div>
                <div class="tang-body-item tang-body-item"><textarea default-value="新闻不好看" maxlength="1000"></textarea></div>
                <div class="tang-body-item tang-body-item"><textarea default-value="无线与客户端" maxlength="1000"></textarea></div>
                <div class="tang-body-item tang-body-item"><textarea default-value="新闻源相关" maxlength="1000"></textarea></div>
                <div class="tang-body-item tang-body-item"><textarea default-value="提建议" maxlength="1000"></textarea></div>

            </div>

    </div>


<h2><span>2</span>请留下联系方式，您将有机会获得精美礼品！</h2>

<div class="feedback-contact" id="feedback-contact">

<div class="box"><input value="QQ/邮箱/电话" default-value="QQ/邮箱/电话" name="contact" maxlength="50" type="text"></div>

<div class="des">(可选)</div>

<div style="clear:both;"></div>

</div>

<div class="sub-btn" id="sub-btn"></div>

<input name="msg" type="hidden">

<input name="mid" value="news_pc" type="hidden">

</form>

</div>


<style>#goTop {
    position:fixed;
    width:54px;
    left:50%;
    margin-left:512px;
    bottom:70px;
    _position:absolute;
    _top:expression(eval(document.documentElement.scrollTop || document.body.scrollTop) +eval(document.documentElement.clientHeight || document.body.clientHeight) -305+'px');
    z-index:998;
}
#identifier-pannel {
    bottom:345px;
    margin-left:512px;
    position:fixed;
    _position:absolute;
    left:50%;
    width:110px;
    _top:expression(eval(document.documentElement.scrollTop || document.body.scrollTop) +eval(document.documentElement.clientHeight || document.body.clientHeight) -480 +'px');
    z-index:998;
}
#goTop div {
    height:48px;
    margin-top:3px;
    position:relative;
    width:48px;
}
#goTop div a,#goTop div a:link {
    display:inline-block;
    height  :18px;
    width:100%;
    color:#fff;
    background:#b7c5ca url(http://news.baidu.com/resource/img/gotop.png) no-repeat;
    font-size:12px;
    line-height:14px;
    text-align:center;
    text-decoration:none;
    padding-top:30px;
}
#goTop div.hotword a {
    background-position:0 -48px;
}
#goTop .hotword a:hover {
    background-position:0 0;
}
#goTop div.media a {
    background-position:-49px -48px;
}
#goTop .media a:hover {
    background-position:-49px 0;
}
#goTop div.search a {
    background-position:-98px -48px;
}
#goTop .search a:hover {
    background-position:-98px 0;
}
#goTop .search dl {
    position:absolute;
    top:0;
    right:0;
    white-space:nowrap;
}
#goTop div.feedback a {
    padding:10px;
    height:28px;
    width:28px;
    line-height:14px;
    background:#b7c5ca;
}
#goTop .feedback a:hover {
    background:#59a9c6;
}
#goTop div.gotop a {
    background-position:-147px -48px;
}
#goTop .gotop a:hover {
    background-position:-147px 0;
}
#goTop .search dt {
    font-size:0;
    white-space:nowrap;
    vertical-align:top;
}
#goTop .search dt a {
    height:18px;
    width:48px;
}
#goTop .search dd {
    display:inline-block;
    vertical-align:top;
    background:#69b8d1;
    height:48px;
    overflow:hidden;
    position:absolute;
    top:0;
    right:0;
    width:0;
    -webkit-transition:width  .5s;
    -moz-transition:width  .5s;
    -ms-transition:width  .5s;
    -o-transition:width  .5s;
    transition:width  .5s;
}
#goTop .search.show dd {
    width:256px;
}
#goTop .search input {
    border:0;
    color:#666;
    font-size:12px;
    height:28px;
    line-height:28px;
    padding:2px 0 2px 6px;
    vertical-align:middle;
    width:178px;
    margin:0;
}
#goTop .search form {
    margin:8px 8px 8px 16px;
    font-size:0;
    line-height:0;
    vertical-align:middle;
}
#goTop .search dd span {
    display:block;
    width:16px;
    height:100%;
    position:absolute;
    left:0;
    top:0;
    background:url(http://news.baidu.com/resource/img/gotop.png) no-repeat  -234px 0;
    cursor:hand;
}
#goTop .search button {
    color:#fff;
    border:0;
    margin:0;
    padding:0;
    width:48px;
    height:32px;
    text-align:middle;
    font-size:12px;
    line-height:32px;
    background:#b7c5ca;
    vertical-align:middle;
}
#header.for-ipad-style {
    background:url(http://news.baidu.com/resource/img/tuiguang/news_ad_header_ipad.png) no-repeat  right  5px;
    background-size:160px 65px;
    -webkit-background-size:160px 65px;
}
#tuiguang_dialog {
    position:absolute;
    top:-1000px;
    left:-9999px;
    background:url(http://news.baidu.com/resource/img/tuiguang/news_home_ad_dialog_ipad_news.png) no-repeat;
    background-size:564px 429px;
    width::564px;
    height:429px;
    border:none;
}
#tuiguang_dialog .buttons a.close-btn {
    display:block;
    width:60px;
    height:60px;
    background:none;
}
.tuiguang-app-download {
    position:absolute;
    display:block;
    width:195px;
    height:66px;
    top:136px;
    left:322px;
}</style>
<script type="text/javascript">
F.use(['/static/common/lib/tangram/base/base.js', '/static/widget/channel/focustop/fixedpannel/fixedpannel.js'],function(baidu,feedback_init){
    /*temp for ad-for-ipad*/
    if(navigator.userAgent.match(/(iPad).*OS\s([\d_]+)/)){
        document.getElementById('header').className = 'for-ipad-style';
        document.getElementById('searchbox_tuiguang').setAttribute('mon' , 'col=504');
        //document.getElementById('searchbox_tuiguang').href='https://itunes.apple.com/cn/app/bai-du-shi-pin-ying-yin-ban/id588287777?mt=8';
        document.getElementById('searchbox_tuiguang').href='https://itunes.apple.com/cn/app/id659994109?mt=8';
        $(window).on('load',function(){
            $('<li class="line">|</li><li><a href="http://m.baidu.com/news?fr=newspc">悦读版</a></li>').appendTo($('#usrbar ul'));
        });
    }else{
        baidu.dom.remove('searchbox_tuiguang');
    }
    function fixedele(id , options){
        var ele = baidu.g(id),
            setting = {
                top : 0,
                show : true,
                aotuHidden : false
            },
            options = baidu.extend(setting , options);
            if(!ele) return;
        var pageHeight = baidu.page.getHeight(),
            setIEfixed = function(){
                baidu.dom.setStyles(ele,{'position':'absolute',top: options.top});
                if(options.show) baidu.show(ele);
                baidu.on(window,'scroll' , function (){
                var scrolltop = baidu.page.getScrollTop();
                        baidu.dom.setStyle(ele , 'top' , scrolltop + options.top + "px");
                        options.autoHidden && scrolltop == 0 ? baidu.hide(ele) : baidu.show(ele);
                    });
            },
            setFixed = function(){
                baidu.dom.setStyle(ele, 'top' , options.top + 'px');
                baidu.on(window,'scroll',function (){
                    options.autoHidden && baidu.page.getScrollTop() == 0 ? baidu.hide(ele) : baidu.show(ele);
                });
        
            };
            if(options.show) baidu.show(ele);
            baidu.browser.ie ? setIEfixed() : setFixed();
    }
    baidu.on(window,'load', function(){
        //fixedele('backTopBtn',{top:366,show: false,autoHidden:true});
        //fixedele('identifier-pannel',{top:164, show: true, autoHidden:false});
        var eleTop = baidu.g("gotop_btn");
        baidu.on(window, 'scroll', function(){
            baidu.page.getScrollTop() >= 200 ? baidu.show(eleTop) : baidu.hide(eleTop);
        });
        var eleSearch = baidu.dom.query("#goTop .search")[0];
        baidu.on(eleSearch, "click", function(){
            baidu.dom.addClass(eleSearch, "show");
        });
        var eleSearchHide = baidu.dom.query("#goTop .search dd span")[0];
        baidu.on(eleSearchHide, "click", function(e){
            baidu.dom.removeClass(eleSearch, "show");
            baidu.event.stopPropagation(e);
        });
        baidu.on(document.body,"click", function(e){
            var target = baidu.event.getTarget(e);
            if(!baidu.dom.getAncestorBy(target, function(ele){return ele.id == "goTop"})){
            baidu.dom.removeClass(eleSearch, "show");
            }
        });
    feedback_init({
            tuiguang : true ,
            tuiguang_width: 564,
            tuiguang_height:429,
            tuiguang_cookiename:'NEWSNEWIPADTJ',
            tuiguang_image:'http://news.baidu.com/resource/img/tuiguang/news_home_ad_dialog_ipad_news.png',
            tuiguang_url:'https://itunes.apple.com/cn/app/id659994109?mt=8'

    });
    });
});
</script>




    </div>
    <!--页脚-->
    
    
<div id="footerwrapper">
<div class="bottombar" alog-group="log-footer-bottombar" alog-alias="hunter-start-bottombar">
    <div class="bottombar-inner clearfix">
        <div class="bot-left">
            <h4>热门频道推荐</h4>
            <div class="bot-left-list">
                <ul>
                    <li><a href="http://guonei.news.baidu.com/" target="_blank">国内</a></li>
                    <li><a href="http://finance.baidu.com/" target="_blank">财经</a></li>
                    <li><a href="http://shehui.news.baidu.com/" target="_blank">社会</a></li>
                    <li><a href="http://yule.baidu.com/" target="_blank">娱乐八卦</a></li>
                    <li><a href="http://guoji.news.baidu.com/" target="_blank">国际</a></li>
                    <li><a href="http://sports.baidu.com/" target="_blank">体育</a></li>
                    <li><a href="http://auto.baidu.com/" target="_blank">汽车</a></li>
                    <li><a href="http://lady.baidu.com/" target="_blank">女性时尚</a></li>
                    <li><a href="http://mil.news.baidu.com/" target="_blank">军事</a></li>
                    <li><a href="http://tech.baidu.com/" target="_blank">科技</a></li>
                    <li><a href="http://renwu.baidu.com/" target="_blank">人物</a></li>
                    <li><a href="http://internet.baidu.com/" target="_blank">互联网事</a></li>
                    <div style="clear:both"></div>
                </ul>
            </div>
        </div>
        <div class="bot-center">
            <h4>相关功能</h4>
            <div class="bot-center-list">
                <ul>
                    <li class="center-01"><a href="http://newsalert.baidu.com/na?cmd=0" target="_blank">邮件新闻订阅</a></li>
                    <li class="center-02"><a href="http://news.baidu.com/newscode.html" target="_blank">新闻免费代码</a></li>
                    <li class="center-03"><a href="http://news.baidu.com/n?bypass=lamp&amp;m=pagesother&amp;v=newsgx" target="_blank">个性化新闻</a></li>
                    <li class="center-04"><a href="http://www.baidu.com/search/rss.html" target="_blank">新闻订阅</a></li>
                    <li class="center-05"><a href="http://news.baidu.com/history.html" target="_blank">历史新闻</a></li>
                    <li class="center-06"><a href="http://news.baidu.com/n?cmd=6&amp;loc=0&amp;name=%B1%B1%BE%A9" target="_blank">地区新闻</a></li>
                    <div style="clear:both"></div>
                </ul>
            </div>
        </div>
        <div class="bot-right">
            <h4>百度新闻独家出品</h4>
            <p class="p1">新闻由机器选取每5分钟自动更新</p>
            <p class="p2">百度新闻搜索源于互联网新闻网站和频道，系自动分类排列，百度不刊登或转载任何完整的新闻内容</p>
        </div>
    </div>
</div>

<div id="footer" alog-group="log-footer" alog-alias="hunter-start-footer"><a href="http://tousu.baidu.com/news/add">投诉中心</a><span> 京公网安备110000000001号 </span><a href="http://news.baidu.com/licence.html">互联网新闻信息服务许可</a>
    <span style="color:#7777CC;">&#169;2014 Baidu</span> <a class="cy" href="http://www.baidu.com/duty/">使用百度前必读</a> <a target="_blank" href="http://net.china.cn/chinese/index.htm"><img r_src="http://gimg.baidu.com/img/net.gif"></a> <a target="_blank" href="http://www.bj.cyberpolice.cn/index.htm"><img alt="首都网络110报警服务" src="%E7%99%BE%E5%BA%A6%E6%96%B0%E9%97%BB%E6%90%9C%E7%B4%A2%E2%80%94%E2%80%94%E5%85%A8%E7%90%83%E6%9C%80%E5%A4%A7%E7%9A%84%E4%B8%AD%E6%96%87%E6%96%B0%E9%97%BB%E5%B9%B3%E5%8F%B0_files/110.gif"></a> <a target="_blank" href="http://www.bjjubao.org/"><img src="%E7%99%BE%E5%BA%A6%E6%96%B0%E9%97%BB%E6%90%9C%E7%B4%A2%E2%80%94%E2%80%94%E5%85%A8%E7%90%83%E6%9C%80%E5%A4%A7%E7%9A%84%E4%B8%AD%E6%96%87%E6%96%B0%E9%97%BB%E5%B9%B3%E5%8F%B0_files/report_center.png"></a></div>
</div>


<!-- 搜索报错:这个是数据库操作的时候报错,至于没有数据不需要报,在查询列表页中直接显示结果为0条就行了
    那个另外有一个变量.        
-->
@if(@$msg)
<script>alert("{{$msg}}")</script>
@endif
    

<style>.focustop-anchor {
    height:0;
    line-height:0;
    font-size:0;
}
#headerwrapper {
    width:100%;
}</style>
<script>
        alog('set', 'alias', {
            monkey: 'http://img.baidu.com/hunter/alog/monkey.min.js',
            element: 'http://img.baidu.com/hunter/alog/element.min.js'
        });
        var pageId = "news-index";
        alog('require', ['monkey'], function(monkey){
            monkey.create({
                page: window.pageId,
                pid: 241,
                p: 133,
                hid: 424,
                postUrl: 'http://nsclick.baidu.com/u.gif',
                reports: {
                    staytime: true
                }
            });
        });
        alog('monkey.send', 'pageview', { now: +new Date });
    alog('rt.create', {
        'postUrl': 'http://felog.baidu.com/u.gif',
        'mid': 66
    });
    alog('monkey.on', 'send', function(data){
        if(data.t == "pageview"){
        alog('rt.send', 'event', {
            cmd: "o",
            mid: 66
        });
        return;
        }
        if(!data.g) return;
        var g = data.g;
        g = {"focustop-hotnews": 1, "focus-top-left": 2}[g];
        if(!g) return;

        var txt = escape(data.txt).replace(/\%u/g, "_"),
        xp = rtDealPath(data.xp),
        len = 100 - xp.length;

        if(txt.length > len) txt = txt.substr(0, txt.lastIndexOf("_", len + 4));

        alog('rt.send', 'event', {
        cmd: "c",
        txt: txt,
        xp: xp,
        u: data.u,
        g: g
        });
    });
    function rtDealPath(path){
        if(!path || !path.toUpperCase){
        return "";
        }
        var pos = path.lastIndexOf("(");
        if(pos > -1){
        path = path.substr(pos).split(")");
        if(path.length < 2){
            return path[0].toUpperCase();
        }
        }
        else{
        path = ["", path];
        }
        pos = path[1].lastIndexOf("C");
        if(pos > -1){
        path[1] = path[1].split("");
        var len = path[1].length;
        pos += 1;
        while(pos <= len){
            if(path[1][pos] <= "9" && path[1][pos] >= "0"){
            pos++;
            }
            else{
            break;
            }
        }
        path[1] = path[1].slice(0, pos).join("");
        }
        path = path[0] ? path.join(")") : path[1];
        return path.toUpperCase();
    }



        </script>

<script type="text/javascript" language="javascript">
    document.write("<img src='/nocache/mp/b.jpg?cmd=3&"+Math.random()+"' style='display:none;'>");    
    document.write("<img id='cgif' src='http://c.baidu.com/c.gif?t=5&p=1&"+Math.random()+"' style='display:none'>");
</script><img src="%E7%99%BE%E5%BA%A6%E6%96%B0%E9%97%BB%E6%90%9C%E7%B4%A2%E2%80%94%E2%80%94%E5%85%A8%E7%90%83%E6%9C%80%E5%A4%A7%E7%9A%84%E4%B8%AD%E6%96%87%E6%96%B0%E9%97%BB%E5%B9%B3%E5%8F%B0_files/b.jpg" style="display:none;"><img id="cgif" src="%E7%99%BE%E5%BA%A6%E6%96%B0%E9%97%BB%E6%90%9C%E7%B4%A2%E2%80%94%E2%80%94%E5%85%A8%E7%90%83%E6%9C%80%E5%A4%A7%E7%9A%84%E4%B8%AD%E6%96%87%E6%96%B0%E9%97%BB%E5%B9%B3%E5%8F%B0_files/c.html" style="display:none">

<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fe9e114d958ea263de46e080563e254c4' type='text/javascript'%3E%3C/script%3E"));
</script><script src="%E7%99%BE%E5%BA%A6%E6%96%B0%E9%97%BB%E6%90%9C%E7%B4%A2%E2%80%94%E2%80%94%E5%85%A8%E7%90%83%E6%9C%80%E5%A4%A7%E7%9A%84%E4%B8%AD%E6%96%87%E6%96%B0%E9%97%BB%E5%B9%B3%E5%8F%B0_files/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=e9e114d958ea263de46e080563e254c4" target="_blank"><img style="display: none;" src="{{asset('images/21.gif')}}" height="20" border="0" width="20"></a>

<script type="text/javascript">
F.use('/static/common/lib/tangram/base/base.js',function(baidu){
    var local_id = '-1';
        if(baidu.string.trim(local_id) == '2354'){
                baidu.hide('channel-all');
                baidu.show('channel-shanghai');
        }
    baidu.each(baidu.dom.query('img'),function(item){   
        if(/eiv.baidu.com\/hmt\/icon/.test(baidu.dom.getAttr(item, 'src'))){
            item.style.display = 'none';        
        }
    });
});
;(function(){
    $.fn.extend({
            organ : function(options){
                var  setting = {
                    max : 431,
                    min : 181
                }
                var opt = $.extend(setting,options);
                return this.each(function(){
                        var animate = true, $this = $(this), $items = $('li' , $this);
                            $items.on('mouseenter', function(){
                                if(animate && !$(this).hasClass('active')){
                                    animate=false;
                                    $(this).parent('ul').find('.active').animate({width:opt.min},200).removeClass('active');
                                    $(this).animate({width:opt.max},200,function(){
                                        animate = true;
                                    }).addClass('active');
                                }
                            });
                    });
            }
    });
})(jQuery);
if($('#events').length){
$(function(){
$('#today-star').organ({
    min:76,
    max:119
});
var $favaor = $('#favoriteTips'),$usrbar = $('#usrbar');
if($favaor.length){
    $('#usrbar').css('top','50');
    $favaor.on('click', function(e){
        var e = e || window.event;
        if(e.target.tagName.toLowerCase()== 'a'){
                $('#usrbar').css('top','10px');
                $('#events').css({marginTop:194});
                $('#events-close-btn').css('top',$usrbar.position().top + 30);

            }
        
        });

    }else{
    $('#usrbar').css('top','10px');
    $('#events').css({marginTop:194});
}

    $('#events-close-btn').css('top',$usrbar.position().top + 30);

    $('#events-close-btn').on('click',function(){
        var wcookie = baidu.cookie.get('newsworldcup');
            wcookie ? baidu.cookie.set('newsworldcup',Number(wcookie)+1) : baidu.cookie.set('newsworldcup',1);
        $('#events').slideUp(function(){
            $('body').css('background','none');
            $(this).remove();
        });


    });
});
}

</script>







    


<script type="text/javascript">F.use("/static/common/ui/vs/enterState/enterState.js", function(enterState){enterState("yjfenggang", "http://hi.baidu.com/sys/checkuser/yjfenggang/3")});</script><!--ecomend--></body></html>
<!--ecombegin-->