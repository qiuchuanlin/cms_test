<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS</title>
<meta name="keywords" content="帝国网站管理系统,EmpireCMS" />
<meta name="description" content="　　帝国软件是一家专注于网络软件开发的科技公司，其主营产品“帝国网站管理系统(EmpireCMS)”是目前国内应用最广泛的CMS程序。通过多年的不断创新与完善，使系统集安全、强大、稳定、灵活于一身。目前EmpireCMS程序已经广泛应用在国内数十万家网站，覆盖国内上千万上网人群，并经过上千家知名网站的严格检测，被称为国内最安全、最稳定的开源CMS系统。" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{asset('js/jquery-1.10.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/my.js')}}"></script>
<script type="text/javascript" src="{{asset('js/k.js')}}"></script>
</head>
<body class="homepage">
<!-- 页头 -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="top">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="63%"> 

    <!--登录 -->
    <!-- 查看登录状态，来确定需要那些选项 -->
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

  <!-- 遮罩层 -->
  <div id="cover"></div>

</td>
<td align="right">
<a onclick="window.external.addFavorite(location.href,document.title)" href="#ecms">加入收藏</a> | <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('/kcms/')" href="#ecms">设为首页</a> | <a href="/kcms/e/member/cp/">会员中心</a> | <a href="/kcms/e/DoInfo/">我要投稿</a> | <a href="/kcms/e/web/?type=rss2&classid=0" target="_blank">RSS<img src="/kcms/skin/default/images/rss.gif" border="0" hspace="2" /></a>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
<tr valign="middle">
<td width="240" align="center"><a href="/kcms/"><img src="/kcms/skin/default/images/logo.gif" width="200" height="65" border="0" /></a></td>
<td align="center"><a href="http://www.phome.net/OpenSource/" target="_blank"><img src="/kcms/skin/default/images/opensource.gif" width="100%" height="70" border="0" /></a></td>
</tr>
</table>
<!-- 导航tab选项卡 -->
<table width="920" border="0" align="center" cellpadding="0" cellspacing="0" class="nav">
  <tr> 
    <td class="nav_global">
      <ul>
        <li class="curr" id="tabnav_btn_0" onmouseover="tabit(this)"><a href="#">首页</a></li>

      @foreach($navigator as $n)
        <li id="tabnav_btn_1" onmouseover="tabit(this)">
          <a href="{{$n->navurl}}">{{$n->alias?$n->alias:$n->category_name}}</a>
        </li> 
      @endforeach
    </ul>
  </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>最后更新</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<li><a href="/kcms/news/sports/2012-12-10/78.html" title="中国男乒第16次捧起斯韦思林杯">中国男乒第16次捧起斯韦思林杯</a></li><li><a href="/kcms/news/sports/2012-12-10/77.html" title="科比专为大场面而生">科比专为大场面而生</a></li><li><a href="/kcms/news/ent/2012-12-10/76.html" title="“最美清洁工”原是《赤壁》宫女">“最美清洁工”原是《赤壁》宫</a></li><li><a href="/kcms/news/ent/2012-12-10/75.html" title="尹馨大胆亮相《男人装》 嫩肤美腿勾人魂">尹馨大胆亮相《男人装》 嫩肤</a></li><li><a href="/kcms/news/ent/2012-12-10/74.html" title="传张艺谋因执导奥运身价涨5倍">传张艺谋因执导奥运身价涨5倍</a></li><li><a href="/kcms/news/ent/2012-12-10/73.html" title="张曼玉广告写真花絮曝光 流露优雅从容">张曼玉广告写真花絮曝光 流露</a></li><li><a href="/kcms/news/world/2012-12-10/72.html" title="中国紧急援助物资运抵缅甸仰光(组图)">中国紧急援助物资运抵缅甸仰光</a></li><li><a href="/kcms/news/sports/2012-12-10/71.html" title="奥运圣火成功登顶珠峰">奥运圣火成功登顶珠峰</a></li><li><a href="/kcms/news/world/2012-12-10/70.html" title="俄罗斯第三任总统梅德韦杰夫宣誓就职">俄罗斯第三任总统梅德韦杰夫宣</a></li><li><a href="/kcms/news/china/2012-12-10/69.html" title="广东丹霞山发现巨型"青铜剑"(组图)">广东丹霞山发现巨型&quot;青铜剑&quot;</a></li><li><a href="/kcms/news/china/2012-12-10/68.html" title="驻日大使崔天凯:胡锦涛主席访日有三点值得关注">驻日大使崔天凯:胡锦涛主席访</a></li></ul>

<table width="94%" border="0" align="center" cellpadding="0" cellspacing="6" class="picText">
<tr valign="top">
<td><a href="/kcms/news/sports/2012-12-10/78.html" target="_blank"><img width="70" height="78" src="http://img1.qq.com/sports/pics/8865/8865651.jpg" alt="中国男乒第16次捧起斯韦思林杯" /></a></td>
<td><strong><a href="/kcms/news/sports/2012-12-10/78.html" title="中国男乒第16次捧起斯韦思林杯">中国男乒第16次捧起</a></strong>第49届世乒赛男团决赛的争夺，中国队最终凭借马琳、王皓和王励</td>
</tr>
</table>
</td>
</tr>
</table></td>
<td class="content"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
          <td> 
            <!-- 焦点图片，调用默认模型带标题图片的头条信息 -->
            <script type="text/javascript">
<!--
 var interval_time=3;
 var focus_width=450;
 var focus_height=250;
 var text_height=0;
 var text_align="center";
 var swf_height = focus_height+text_height;
 var swfpath="/kcms/e/data/images/pixviewer.swf";
 var swfpatha="/kcms/e/data/images/pixviewer.swf";
 
 var pics="http%3A%2F%2Fcimg21.163.com%2Fcnews%2F2008%2F5%2F8%2F200805080616347228c.jpg%7Chttp%3A%2F%2Fcimg20.163.com%2Fcnews%2F2008%2F5%2F8%2F2008050809305433312.jpg%7Chttp%3A%2F%2Fcimg21.163.com%2Fcnews%2F2008%2F5%2F7%2F20080507165459698f2.jpg";
 var links="%2Fkcms%2Fnews%2Fworld%2F2012-12-10%2F72.html%7C%2Fkcms%2Fnews%2Fsports%2F2012-12-10%2F71.html%7C%2Fkcms%2Fnews%2Fworld%2F2012-12-10%2F70.html";
 var texts="||";
 
 document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">');
 document.write('<param name="movie" value="'+swfpath+'"><param name="quality" value="high"><param name="bgcolor" value="#ffffff">');
 document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
 document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'&text_align='+text_align+'&interval_time='+interval_time+'">');
 document.write('<embed src="'+swfpath+'" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'&text_align='+text_align+'&interval_time='+interval_time+'" menu="false" bgcolor="#ffffff" quality="high" width="'+ focus_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
 document.write('</object>');
//-->
</script>
 </td>
</tr>
</table>
<!-- 头条信息调用 -->
<table width="100%" border="0" cellspacing="8" cellpadding="0" class="focus">
<tr>
<td>
<strong><a href="/kcms/news/world/2012-12-10/72.html">中国紧急援助物资运抵缅甸仰光(组图)</a></strong>
<p>　　中国政府向缅甸提供的人道主义紧急援助物资当日空运抵达仰光国际机场。这批物资主要包括帐篷、毛巾被和压缩饼干等，价值50万美元。中国政府还向缅甸提供了50万美元</p>
</td>
</tr>
<tr>
<td align="center"><a href="/kcms/news/sports/2012-12-10/71.html" title="奥运圣火成功登顶珠峰">·奥运圣火成功登顶珠峰</a>　<a href="/kcms/news/world/2012-12-10/70.html" title="俄罗斯第三任总统梅德韦杰夫宣誓就职">·俄罗斯第三任总统梅德韦杰夫宣</a></td>
</tr>
</table></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>推荐资讯</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box no_doc">
<tr>
<td><ul>
<li><p><strong><a href="/kcms/news/sports/2012-12-10/78.html" title="中国男乒第16次捧起斯韦思林杯">中国男乒第16次捧起斯韦思林杯</a></strong>第49届世乒赛男团决赛的争夺，中国队最终凭借马琳、王皓和王励勤三 </p></li><li><p><strong><a href="/kcms/news/sports/2012-12-10/77.html" title="科比专为大场面而生">科比专为大场面而生</a></strong>成名这么久远了，科比终于被证实“最有价值”。 </p></li><li><p><strong><a href="/kcms/news/ent/2012-12-10/76.html" title="“最美清洁工”原是《赤壁》宫女">“最美清洁工”原是《赤壁》宫</a></strong>2008北京车展4月23日刚刚落幕，“最美清洁工”迅速走红网络。这位 </p></li><li><p><strong><a href="/kcms/news/ent/2012-12-10/75.html" title="尹馨大胆亮相《男人装》 嫩肤美腿勾人魂">尹馨大胆亮相《男人装》 嫩肤</a></strong>蔡明亮徒弟之作《帮帮我爱神》女主角尹馨的大胆出演，足以挑战《色 </p></li><li><p><strong><a href="/kcms/news/ent/2012-12-10/74.html" title="传张艺谋因执导奥运身价涨5倍">传张艺谋因执导奥运身价涨5倍</a></strong>2008北京奥运会的开幕式已开始了彩排，作为总导演的张艺谋坦言，执导 </p></li></ul></td>
</tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
    <td align="center" class="banner_ad"><a href="http://www.phome.net/ebak2008/" target="_blank" title="马上免费下载"><img src="/kcms/skin/default/images/empirebak.gif" width="920" height="90" border="0" /></a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td width="230" class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong><a href="/kcms/info/">分类信息</a></strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<li><a href="/kcms/info/fwxx/fwcz/41.html" title="距积水潭地铁步行5分钟">距积水潭地铁步行5分钟</a></li><li><a href="/kcms/info/qzzp/jygl/40.html" title="公司高薪聘请销售经理">公司高薪聘请销售经理</a></li><li><a href="/kcms/info/qzzp/jygl/39.html" title="太平洋寿险招聘售后服务团队主管">太平洋寿险招聘售后服务团队主</a></li><li><a href="/kcms/info/qzzp/jygl/38.html" title="本人多年会计工作经验,证件齐全,如有需要招会计的单位请联系我">本人多年会计工作经验,证件齐</a></li><li><a href="/kcms/info/qzzp/cwkj/37.html" title="应聘会计">应聘会计</a></li><li><a href="/kcms/info/qzzp/cwkj/36.html" title="招聘出纳/全职会计">招聘出纳/全职会计</a></li><li><a href="/kcms/info/qzzp/cwkj/35.html" title="房地产开发公司项目招聘出纳一名">房地产开发公司项目招聘出纳一</a></li><li><a href="/kcms/info/qzzp/gcjs/34.html" title="网络程序开发工程师">网络程序开发工程师</a></li><li><a href="/kcms/info/qzzp/gcjs/33.html" title="推荐软件开发人员(就业或实习均可)">推荐软件开发人员(就业或实习</a></li><li><a href="/kcms/info/qzzp/gcjs/32.html" title="招聘网页设计、开发、行政人员">招聘网页设计、开发、行政人员</a></li></ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong><a href="/kcms/download/">下载更新</a></strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box no_doc">
<tr>
<td><ul>
              <li><p><strong><a href="/kcms/download/media/24.html" title="MPCGo 2.5">MPCGo 2.5</a></strong>独有特点:<br />
1．主播放程序自动更新<br />
2．解码器模块自动更新 </p></li><li><p><strong><a href="/kcms/download/media/23.html" title="超级解霸">超级解霸</a></strong>超级解霸3500.2.1全新Vsita 增强版 解霸系列软件最新</p></li><li><p><strong><a href="/kcms/download/media/22.html" title="Windows Media Player 11">Windows Media Player 11</a></strong>Windows Media Player 11 for Windows XP 为数字媒体</p></li><li><p><strong><a href="/kcms/download/media/21.html" title="暴风影音3.5">暴风影音3.5</a></strong>暴风影音 ——全球领先的万能播放软件<br />
针对不同用户的</p></li> 
            </ul></td>
</tr>
</table></td>
<td class="content"><!-- tab选项卡，默认为点击变化，如需改为移动，将onmouseover改为onclick -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbtn1">
<tr>
<td class="tbtncon"><ul><li class="curr" id="tab1_btn_0" onmouseover="etabit(this)">新闻</li><li id="tab1_btn_1" onmouseover="etabit(this)">图片</li><li id="tab1_btn_2" onmouseover="etabit(this)">影视</li><li id="tab1_btn_3" onmouseover="etabit(this)">FLASH</li></ul></td>
</tr>
<tr>
<td class="picList"><div id="tab1_div_0"> <table width=100% border=0 cellpadding=3 cellspacing=0><tr><td align=center><a href='/kcms/news/sports/2012-12-10/78.html' target=_blank><img src='http://img1.qq.com/sports/pics/8865/8865651.jpg' width='128' height='90' border=0 alt='中国男乒第16次捧起斯韦思林杯'><br><span style='line-height:15pt'>中国男乒第16次捧起斯</span></a></td><td align=center><a href='/kcms/news/sports/2012-12-10/77.html' target=_blank><img src='http://img1.qq.com/sports/pics/10300/10300435.jpg' width='128' height='90' border=0 alt='科比专为大场面而生'><br><span style='line-height:15pt'>科比专为大场面而生</span></a></td><td align=center><a href='/kcms/news/ent/2012-12-10/76.html' target=_blank><img src='http://img1.qq.com/ent/pics/10290/10290791.jpg' width='128' height='90' border=0 alt='“最美清洁工”原是《赤壁》宫女'><br><span style='line-height:15pt'>“最美清洁工”原是《</span></a></td></tr><tr><td align=center><a href='/kcms/news/ent/2012-12-10/75.html' target=_blank><img src='http://img1.qq.com/ent/pics/10290/10290789.jpg' width='128' height='90' border=0 alt='尹馨大胆亮相《男人装》 嫩肤美腿勾人魂'><br><span style='line-height:15pt'>尹馨大胆亮相《男人装</span></a></td><td align=center><a href='/kcms/news/ent/2012-12-10/74.html' target=_blank><img src='http://cimg21.163.com/ent/2008/5/8/200805080924559c424.jpg' width='128' height='90' border=0 alt='传张艺谋因执导奥运身价涨5倍'><br><span style='line-height:15pt'>传张艺谋因执导奥运身</span></a></td><td align=center><a href='/kcms/news/ent/2012-12-10/73.html' target=_blank><img src='http://cimg21.163.com/ent/2008/5/8/2008050811191076090.jpg' width='128' height='90' border=0 alt='张曼玉广告写真花絮曝光 流露优雅从容'><br><span style='line-height:15pt'>张曼玉广告写真花絮曝</span></a></td></tr></table> 
            </div>
            <div id="tab1_div_1" style="display:none;"> <table width=100% border=0 cellpadding=3 cellspacing=0><tr><td align=center><a href='/kcms/photo/mingxing/13551244397.html' target=_blank><img src='/kcms/testdata/demopic/photo/shq/titlepic.jpg' width='128' height='90' border=0 alt='宋慧乔[图集]'><br><span style='line-height:15pt'>宋慧乔[图集]</span></a></td><td align=center><a href='/kcms/photo/mingxing/13551244396.html' target=_blank><img src='/kcms/testdata/demopic/photo/ldh/s1.jpg' width='128' height='90' border=0 alt='刘德华[图集]'><br><span style='line-height:15pt'>刘德华[图集]</span></a></td><td align=center><a href='/kcms/photo/dongman/13551244395.html' target=_blank><img src='/kcms/testdata/demopic/photo/dt/s3.jpg' width='128' height='90' border=0 alt='火影忍者[单图]'><br><span style='line-height:15pt'>火影忍者[单图]</span></a></td></tr><tr><td align=center><a href='/kcms/photo/fengjing/13551244394.html' target=_blank><img src='/kcms/testdata/demopic/photo/lmhd/titlepic.jpg' width='128' height='90' border=0 alt='全球最浪漫海岛[图集]'><br><span style='line-height:15pt'>全球最浪漫海岛[图集]</span></a></td><td align=center><a href='/kcms/photo/fengjing/13551244392.html' target=_blank><img src='/kcms/testdata/demopic/photo/dt/s1.jpg' width='128' height='90' border=0 alt='日本北海道空气中的淡淡的花香'><br><span style='line-height:15pt'>日本北海道空气中的淡</span></a></td><td align=center><a href='/kcms/photo/mingxing/13551244391.html' target=_blank><img src='/kcms/testdata/demopic/photo/lry/s5.jpg' width='128' height='90' border=0 alt='刘若英[图集]'><br><span style='line-height:15pt'>刘若英[图集]</span></a></td></tr></table> 
            </div>
            <div id="tab1_div_2" style="display:none;"> <table width=100% border=0 cellpadding=3 cellspacing=0><tr><td align=center><a href='/kcms/movie/aiqing/10.html' target=_blank><img src='http://img.v163.56.com/images/17/22/jian-jiai56olo56i56.com_sc_119165531014.jpg' width='128' height='90' border=0 alt='西雅图夜未眠'><br><span style='line-height:15pt'>西雅图夜未眠</span></a></td><td align=center><a href='/kcms/movie/aiqing/9.html' target=_blank><img src='http://img.v21.56.com/images/24/27/linw56i56olo56i56.com_zhajm_1171968763_487.jpg' width='128' height='90' border=0 alt='泰坦尼克号'><br><span style='line-height:15pt'>泰坦尼克号</span></a></td><td align=center><a href='/kcms/movie/aiqing/8.html' target=_blank><img src='http://img.v197.56.com/images/4/20/youaredogi56olo56i56.com_zhajm_120917959799x.jpg' width='128' height='90' border=0 alt='罗马假日'><br><span style='line-height:15pt'>罗马假日</span></a></td></tr><tr><td align=center><a href='/kcms/movie/aiqing/7.html' target=_blank><img src='http://img.v42.56.com/images/0/19/plp_1987i56olo56i56.com_zhajm_120771946758x.jpg' width='128' height='90' border=0 alt='乱世佳人'><br><span style='line-height:15pt'>乱世佳人</span></a></td><td align=center><a href='/kcms/movie/dongzuo/4.html' target=_blank><img src='http://img.v162.56.com/images/14/12/specter11i56olo56i56.com_zhajm_121015653757x.jpg' width='128' height='90' border=0 alt='黄飞鸿之壮志凌云'><br><span style='line-height:15pt'>黄飞鸿之壮志凌云</span></a></td><td align=center><a href='/kcms/movie/dongzuo/2.html' target=_blank><img src='http://img.v139.56.com/images/25/29/fireaticei56olo56i56.com_zhajm_120936095856x.jpg' width='128' height='90' border=0 alt='少林寺'><br><span style='line-height:15pt'>少林寺</span></a></td></tr></table> 
            </div>
            <div id="tab1_div_3" style="display:none;"> <table width=100% border=0 cellpadding=3 cellspacing=0><tr><td align=center><a href='/kcms/flash/yinle/11.html' target=_blank><img src='http://img.v155.56.com/images/11/25/qiuwenhani56olo56i56.com_zhajm_11931312011.jpg' width='128' height='90' border=0 alt='葬花吟 古筝Flash音乐'><br><span style='line-height:15pt'>葬花吟 古筝Flash音乐</span></a></td><td align=center><a href='/kcms/flash/yinle/10.html' target=_blank><img src='http://img.v138.56.com/images/10/6/qiuwenhani56olo56i56.com_zhajm_119331232075.jpg' width='128' height='90' border=0 alt='梅花三弄 古筝Flash音乐'><br><span style='line-height:15pt'>梅花三弄 古筝Flash音</span></a></td><td align=center><a href='/kcms/flash/yinle/9.html' target=_blank><img src='http://img.v197.56.com/images/11/14/pkn4b4i56olo56i56.com_zhajm_11949782631.jpg' width='128' height='90' border=0 alt='青花瓷'><br><span style='line-height:15pt'>青花瓷</span></a></td></tr><tr><td align=center><a href='/kcms/flash/yinle/8.html' target=_blank><img src='http://img.v48.56.com/images/10/29/hufan2005i56olo56i56.com_1178434797_88.jpg' width='128' height='90' border=0 alt='等一分钟'><br><span style='line-height:15pt'>等一分钟</span></a></td><td align=center><a href='/kcms/flash/youxi/4.html' target=_blank><img src='http://flash.tom.com/uploadfiles/y/y--two/1198564039_91464.gif' width='128' height='90' border=0 alt='万花筒'><br><span style='line-height:15pt'>万花筒</span></a></td><td align=center><a href='/kcms/flash/youxi/2.html' target=_blank><img src='http://flash.tom.com/uploadfiles/p/ptt_piedra/1208396648_52987.jpg' width='128' height='90' border=0 alt='火炬手'><br><span style='line-height:15pt'>火炬手</span></a></td></tr></table> 
            </div></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>精彩专题</strong></td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="box">
<tr valign="top">
<td width="50%"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="news_title">
<tr>
                <td>
<strong><a href="/kcms/news/china/2012-12-10/62.html">武汉一日两遭暴雨袭击</a></strong>
<p>　　昨晚武昌上空电闪雷鸣。武汉共闪电2200次。本报摄昨日凌晨1点，一场强雷暴“意外”袭击江城。来源：武汉晚报熊波摄昨晚9时，我市突降大暴雨，铁路立交桥下路人打着伞在雨</p>
 </td>
</tr>
</table>
<ul>
              <li><a href="/kcms/news/china/2012-12-10/69.html" title="广东丹霞山发现巨型"青铜剑"(组图)">广东丹霞山发现巨型&quot;青铜剑</a></li><li><a href="/kcms/news/china/2012-12-10/68.html" title="驻日大使崔天凯:胡锦涛主席访日有三点值得关注">驻日大使崔天凯:胡锦涛主席</a></li><li><a href="/kcms/news/china/2012-12-10/67.html" title="杭州湾跨海大桥日均车流量逾10万(组图)">杭州湾跨海大桥日均车流量逾</a></li><li><a href="/kcms/news/china/2012-12-10/66.html" title="广东省物价局：粮价节后上涨不可信">广东省物价局：粮价节后上涨不</a></li><li><a href="/kcms/news/china/2012-12-10/65.html" title="柏杨葬礼将于14日举行 骨灰抛撒绿岛海面">柏杨葬礼将于14日举行 骨灰</a></li><li><a href="/kcms/news/china/2012-12-10/64.html" title="民进党今开临时党代会检讨败选 陈水扁选择缺席">民进党今开临时党代会检讨败</a></li><li><a href="/kcms/news/china/2012-12-10/63.html" title="EV71病毒袭粤港澳 香港发病率高于过去3年">EV71病毒袭粤港澳 香港发病</a></li> 
            </ul></td>
<td width="50%"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="news_title">
<tr>
                <td>
<strong><a href="/kcms/news/world/2012-12-10/70.html">俄罗斯第三任总统梅德</a></strong>
<p>　　在3月2日俄罗斯总统选举中胜出的当选总统德米特里-梅德韦杰夫, 于当地时间7日12时过后(北京时间下午4时)在克里姆林宫正式宣誓就职，成为俄罗斯第三位总统。</p>
</td>
</tr>
</table>
<ul>
              <li><a href="/kcms/news/world/2012-12-10/72.html" title="中国紧急援助物资运抵缅甸仰光(组图)">中国紧急援助物资运抵缅甸仰</a></li><li><a href="/kcms/news/world/2012-12-10/70.html" title="俄罗斯第三任总统梅德韦杰夫宣誓就职">俄罗斯第三任总统梅德韦杰夫</a></li><li><a href="/kcms/news/world/2012-12-10/15.html" title="中国紧急援助物资运抵缅甸仰光(组图)">中国紧急援助物资运抵缅甸仰</a></li><li><a href="/kcms/news/world/2012-12-10/14.html" title="印度成功试射一枚“烈火－3”型导弹">印度成功试射一枚“烈火－3”</a></li><li><a href="/kcms/news/world/2012-12-10/13.html" title="马来红新月会宣布将向缅甸派出救灾小组">马来红新月会宣布将向缅甸派</a></li><li><a href="/kcms/news/world/2012-12-10/12.html" title="爱尔兰议会投票推举布赖恩-考恩为新政府总理">爱尔兰议会投票推举布赖恩-</a></li><li><a href="/kcms/news/world/2012-12-10/11.html" title="两名日本女游客在也门被部落武装人员绑架">两名日本女游客在也门被部落</a></li> 
            </ul></td>
</tr>
</table></td>
<td width="240" class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>热门点击</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ol class="rank">
<li class="no1"><a href="/kcms/news/sports/2012-12-10/78.html" title="中国男乒第16次捧起斯韦思林杯">中国男乒第16次捧起斯韦思林杯</a></li><li class="no2"><a href="/kcms/news/china/2012-12-10/69.html" title="广东丹霞山发现巨型"青铜剑"(组图)">广东丹霞山发现巨型&quot;青铜剑&quot;</a></li><li class="no3"><a href="/kcms/news/world/2012-12-10/72.html" title="中国紧急援助物资运抵缅甸仰光(组图)">中国紧急援助物资运抵缅甸仰光</a></li><li class="no4"><a href="/kcms/news/world/2012-12-10/70.html" title="俄罗斯第三任总统梅德韦杰夫宣誓就职">俄罗斯第三任总统梅德韦杰夫宣</a></li><li class="no5"><a href="/kcms/news/world/2012-12-10/11.html" title="两名日本女游客在也门被部落武装人员绑架">两名日本女游客在也门被部落武</a></li><li class="no6"><a href="/kcms/news/china/2012-12-10/62.html" title="武汉一日两遭暴雨袭击 闪电2000次2人死亡(图)">武汉一日两遭暴雨袭击 闪电200</a></li><li class="no7"><a href="/kcms/news/china/2012-12-10/68.html" title="驻日大使崔天凯:胡锦涛主席访日有三点值得关注">驻日大使崔天凯:胡锦涛主席访</a></li><li class="no8"><a href="/kcms/news/sports/2012-12-10/71.html" title="奥运圣火成功登顶珠峰">奥运圣火成功登顶珠峰</a></li><li class="no9"><a href="/kcms/news/world/2012-12-10/1.html" title="奥地利“兽父”是怎么养成的？">奥地利“兽父”是怎么养成的？</a></li><li class="no10"><a href="/kcms/news/world/2012-12-10/2.html" title="韩国总统李明博想请比尔·盖茨当顾问">韩国总统李明博想请比尔·盖茨</a></li> 
</ol></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>热门评论文章</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<li><a href="/kcms/news/world/2012-12-10/1.html" title="奥地利“兽父”是怎么养成的？">奥地利“兽父”是怎么养成的？</a></li><li><a href="/kcms/news/world/2012-12-10/2.html" title="韩国总统李明博想请比尔·盖茨当顾问">韩国总统李明博想请比尔·盖茨</a></li><li><a href="/kcms/news/world/2012-12-10/3.html" title="奥巴马北卡初选大赢 希拉里印第安纳险胜">奥巴马北卡初选大赢 希拉里印</a></li><li><a href="/kcms/news/world/2012-12-10/4.html" title="普京获俄总理提名 俄国家杜马今日将审议">普京获俄总理提名 俄国家杜马</a></li><li><a href="/kcms/news/world/2012-12-10/5.html" title="法国客机飞行员炫耀高空特技险致两机相撞">法国客机飞行员炫耀高空特技险</a></li><li><a href="/kcms/news/world/2012-12-10/6.html" title="斑鳖全球仅三只 两只苏州完婚(视频)">斑鳖全球仅三只 两只苏州完婚(</a></li><li><a href="/kcms/news/world/2012-12-10/7.html" title="日本本州东海岸发生7.1级地震 连发6级以上地震">日本本州东海岸发生7.1级地震 </a></li><li><a href="/kcms/news/world/2012-12-10/8.html" title="七国人道援助物资已运抵缅甸">七国人道援助物资已运抵缅甸</a></li><li><a href="/kcms/news/world/2012-12-10/9.html" title="联合国粮农组织担心强风暴影响缅甸稻米出口">联合国粮农组织担心强风暴影响</a></li><li><a href="/kcms/news/world/2012-12-10/10.html" title="加拿大一公寓楼发生火灾3人丧生数十人受伤">加拿大一公寓楼发生火灾3人丧</a></li><li><a href="/kcms/news/world/2012-12-10/11.html" title="两名日本女游客在也门被部落武装人员绑架">两名日本女游客在也门被部落武</a></li><li><a href="/kcms/news/world/2012-12-10/12.html" title="爱尔兰议会投票推举布赖恩-考恩为新政府总理">爱尔兰议会投票推举布赖恩-考</a></li><li><a href="/kcms/news/world/2012-12-10/13.html" title="马来红新月会宣布将向缅甸派出救灾小组">马来红新月会宣布将向缅甸派出</a></li> 
</ul></td>
</tr>
</table></td>
</tr>
</table>
<!-- 友情链接 -->
<table width="100%" border="0" cellspacing="10" cellpadding="0" class="links">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#E9F2FB" class="title">
<tr>
<td><strong>友情链接</strong></td>
          <td align="right">&nbsp;</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0" class="box">
<tr>
          <td>
            <!-- 文字链接 -->
            <table width=100% border=0 cellpadding=3 cellspacing=0><tr><td align=center><a href='http://www.phome.net' title='帝国CMS官方网站' target=_blank>帝国CMS官方网站</a></td><td align=center><a href='http://bbs.phome.net' title='帝国CMS官方论坛' target=_blank>帝国CMS官方论坛</a></td><td align=center><a href='http://www.dotool.cn' title='帝国站长工具' target=_blank>帝国站长工具</a></td><td align=center><a href='http://www.phome.net/zy/template/' title='帝国CMS模板下载' target=_blank>帝国CMS模板下载</a></td><td align=center><a href='http://bbs.phome.net/listthread-35-cms-page-0.html' title='帝国CMS教程' target=_blank>帝国CMS教程</a></td><td align=center><a href='http://www.phome.net/ebak2010/' title='帝国备份王下载' target=_blank>帝国备份王下载</a></td><td align=center><a href='http://www.phome.net/EmpireCMS/UserSite/' title='帝国CMS用户案例' target=_blank>帝国CMS用户案例</a></td><td></td><td></td></tr></table> 
            <hr width="100%" size="1" noshade="noshade" />
            <!-- logo链接 -->
            <table width=100% border=0 cellpadding=3 cellspacing=0><tr><td align=center><a href='http://www.phome.net' target=_blank><img src='http://www.phome.net/img/link/empirecms.gif' alt='帝国软件' border=0 width='88' height='31'></a></td><td align=center><a href='http://www.phome.net' target=_blank><img src='http://www.phome.net/img/link/empirecms.gif' alt='帝国软件' border=0 width='88' height='31'></a></td><td align=center><a href='http://www.phome.net' target=_blank><img src='http://www.phome.net/img/link/empirecms.gif' alt='帝国软件' border=0 width='88' height='31'></a></td><td align=center><a href='http://www.phome.net' target=_blank><img src='http://www.phome.net/img/link/empirecms.gif' alt='帝国软件' border=0 width='88' height='31'></a></td><td align=center><a href='http://www.phome.net' target=_blank><img src='http://www.phome.net/img/link/empirecms.gif' alt='帝国软件' border=0 width='88' height='31'></a></td><td align=center><a href='http://www.phome.net' target=_blank><img src='http://www.phome.net/img/link/empirecms.gif' alt='帝国软件' border=0 width='88' height='31'></a></td><td align=center><a href='http://www.phome.net' target=_blank><img src='http://www.phome.net/img/link/empirecms.gif' alt='帝国软件' border=0 width='88' height='31'></a></td><td></td><td></td></tr></table></td>
</tr>
</table></td>
</tr>
</table>
<!-- 页脚 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center" class="search">
<form action="/kcms/e/search/index.php" method="post" name="searchform" id="searchform">
<table border="0" cellspacing="6" cellpadding="0">
<tr>
<td><strong>站内搜索：</strong>
<input name="keyboard" type="text" size="32" id="keyboard" class="inputText" />
<input type="hidden" name="show" value="title" />
<input type="hidden" name="tempid" value="1" />
<select name="tbname">
<option value="news">新闻</option>
<option value="download">下载</option>
<option value="photo">图库</option>
<option value="flash">FLASH</option>
<option value="movie">电影</option>
<option value="shop">商品</option>
<option value="article">文章</option>
<option value="info">分类信息</option>
</select>
</td>
<td><input type="image" class="inputSub" src="/kcms/skin/default/images/search.gif" />
</td>
<td><a href="/kcms/search/" target="_blank">高级搜索</a></td>
</tr>
</table>
</form>
</td>
</tr>
<tr>
<td>
	<table width="100%" border="0" cellpadding="0" cellspacing="4" class="copyright">
        <tr> 
          <td align="center"><a href="/kcms/">网站首页</a> | <a href="#">关于我们</a> 
            | <a href="#">服务条款</a> | <a href="#">广告服务</a> | <a href="#">联系我们</a> 
            | <a href="#">网站地图</a> | <a href="#">免责声明</a> | <a href="/kcms/e/wap/" target="_blank">WAP</a></td>
        </tr>
        <tr> 
          <td align="center">Powered by <strong><a href="http://www.phome.net" target="_blank">EmpireCMS</a></strong> 
            <strong><font color="#FF9900">7.0</font></strong>&nbsp; &copy; 2002-2013 
            <a href="http://www.digod.com" target="_blank">EmpireSoft Inc.</a></td>
        </tr>
	</table>
</td>
</tr>
</table>
</body>
</html>