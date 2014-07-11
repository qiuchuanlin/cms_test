<!DOCTYPE html>
<html style="background:#c1bfbf">
<head>
<title>CMS搜索</title>


<style type="text/css">
/* 脥篓脫脙 */
html, body, ul, li, ol, dl, dd, dt, p, h1, h2, h3, h4, h5, h6, form, fieldset, legend, table, td, img { margin: 0; padding: 0; }
input, select, textarea { margin:0; }
fieldset, img { border:none; }
address, caption, cite, code, dfn, em, th, var { font-style: normal; font-weight: normal; }
ul, ol { list-style-type:none; }
select, input { vertical-align:middle; }
select, input, textarea { font-size:12px; }
body { background:#fff; color:#000; font:13px/20px "arial"; }
.clearfix:after { content:"."; display:block; height:0; visibility:hidden; clear:both; }
.clearfix { zoom:1; }
.clearit { clear:both; height:0px; overflow:hidden; }
.lh20 { line-height:20px; }
.pl20{padding-left:20px;}
.lh23 { line-height:23px; }
.sp10 { height:10px; overflow:hidden; }
.f12 { font-size:12px; }
.f14 { font-size:14px; }
.fB { font-weight:bold; }
.fwhite, a.fwhite { color:#fff; }
.fblack { color:#000; }
.fred { color:#c00; }
.fgreen { color:#009900; font-size:12px; }
.fgray_time { color:#666; font-size:12px; }
a.fnoL { text-decoration:none; }
a.fnoL:hover { text-decoration:underline; }
.fB { font-weight:bold; }
.fgray { color:#999; }
.space { height:10px; background:#fff; overflow:hidden; clear:both; }
.fblue { color:#000099; }
.wbret-wrap { margin-top:15px; margin-bottom:19px;/* width:205px; *//* 20120910 dalong3*/ display:block; padding:10px 15px; /*background-color:#f2f6f9; */border-bottom:1px dashed #c3d0ed; }
a.wbret-wrap, a.wbret-wrap:link, a.wbret-wrap:visited, a.wbret-wrap:active, a.wbret-wrap:hover, a.wbret-wrap:focus { text-decoration:none; }
.wbret-wrap { margin-top:10px; }/*20120910 dalong3*/
.wbret-tt { display:block; padding:0 0 0 20px; background:url(images/swb_01.png) 0 0 no-repeat; }
.wbret-tt span { text-decoration:none; font-size:14px; }
.wbret-p1 { display:block; padding:10px 0 5px 0; border-bottom:1px dotted #ccc; font-size:12px; color:#333; }
.wbret-date1 { display:block; color:#999; }
.wbret-p2 { word-wrap:break-word;display:block; padding:5px 0 5px 0; font-size:12px; color:#333; }
.wbret-link1 { padding:0; color:#000099; }
a.wbret-link1:link, a.wbret-link1:visited { color:#00099; text-decoration:none; }
a.wbret-link1:active, a.wbret-link1:hover, a.wbret-link1:focus { text-decoration:underline; }
.wbret-p3 { display:block; padding:0; font-size:12px; }
.wblink { color:#26A2DA; }
a { color:#000099; text-decoration:none; }
a:hover { color: #ff0000; text-decoration:underline; }
.tac { text-align:center; }
.tar { text-align:right; }
.pad10 { padding:10px; }
.wrap { width:1000px; }
/*碌炉鲁枚虏茫脳篓脫脙*/
a.fred { color:#c00; }
.layer-frame { border:0; position:absolute; filter: alpha(opacity=0); }
.l { float:left; }
.r { float:right; }
.r a { margin:5px; }
.r a.style_a { margin-left:0px; }
/*20120912 dalong3 start*/
.r a { color:#000000; }
.product_l .r .style_box { border-right:dotted 1px #ccc; margin-right:5px; padding-right:10px }
.product_l .r a:link, .r a:visited { color:#000 }
.product_l .r a:hover { color:#000; text-decoration:underline; }
.zcblk01 .titChange1 { width:550px; }
/*20120912 dalong3 end*/

/* xuehua1 modify 20130911 start*/
.topWrap{ background-color:#f6f6f6; border-bottom:solid 1px #ececec; min-width:970px; margin-bottom:8px;}
.navType{ float:left; font-size:14px;padding:18px 0 0 9px}
/* xuehua1 modify 20130911 end*/
.r .style_cion { margin-left:0 }
.top {position:relative; line-height:26px; padding:8px 10px 0 5px;}/* xuehua1 modify 20130911 */
.top .l a { float:left; display:inline; margin:2px 3px 0; padding:0 5px; outline:0 }
.top .l a:link { text-decoration:none; color:#009; }/* xuehua1 modify 20130911 */
.top .l a:visited { color:#009; }/* xuehua1 modify 20130911 */
.top .l a:hover { color:#e42f36;}/* xuehua1 modify 20130911 */
.top .l a.selected { color:#e42f36; font-weight:bold; /*text-decoration:underline*/}/* xuehua1 modify 20130911 */
.top a:hover, .top a:active, .top a:focus { text-decoration:none; }
.top .r{ line-height:34px;}/* xuehua1 modify 20130911 */
.top2 { position: relative; z-index:100; height:80px; width:950px; }
.top h1 { padding:0 0 0 19px; }/* xuehua1 modify 20130911 */
.search-form { padding:6px 0 0 31px; zoom:1; }/* xuehua1 modify 20130911 */
.search-form a:hover, .search-form a:focus { text-decoration:none; }
.ipt-02 { border:1px solid #898989; padding:3px 5px; line-height:24px; height:24px; font-size:14px; width:608px; margin:0 10px 0 0; }/* xuehua1 modify 20130911 */
input.ipt-03 { background: url(images/search_btn_yan.png) 0 0 no-repeat; width:90px; height:30px; border:none; color:#fff; margin:0 3px 0 0; cursor:pointer; outline:none 0 }
input.ipt-03_zt { background: url(images/zt_search_btn_yan.png) 0 0 no-repeat; width:90px; height:30px; border:none; color:#fff; margin:0 3px 0 0; cursor:pointer; outline:none 0 }
input.ipt-03_img { background: url(images/img_search_btn_yan.png) 0 0 no-repeat; width:90px; height:30px; border:none; color:#fff; margin:0 3px 0 0; cursor:pointer; outline:none 0 }
input.ipt-03_blog { background: url(images/blog_search_btn_yan.png) 0 0 no-repeat; width:90px; height:30px; border:none; color:#fff; margin:0 3px 0 0; cursor:pointer; outline:none 0 }
input.ipt-03_product { background: url(images/product_search_btn_yan.png) 0 0 no-repeat; width:90px; height:30px; border:none; color:#fff; margin:0 3px 0 0; cursor:pointer; outline:none 0 }
input.ipt-03 { margin-left:7px;}
input.ipt-03:focus, input.ipt-03:active { outline:none 0; border:none }
input.ipt-03::-moz-focus-inner {
border: 0;
}
/*20120823 moidfy yan*/
input.ipt-03b { background:url(images/search_btn_yan.png) 0 0 no-repeat; width: 90px; margin-left:0;}
input.ipt-03b:hover, input.hoverb { background:url(images/search_btn_yan.png) 0 -50px no-repeat; }
.search-form-bot input.ipt-03_zt { background:url(images/zt_search_btn_yan.png) 0 0 no-repeat; width: 90px; margin-left:0;}
.search-form-bot input.ipt-03_zt:hover, input.hoverb { background:url(images/zt_search_btn_yan.png) 0 -50px no-repeat; }
.search-form-bot input.ipt-03_img { background:url(images/img_search_btn_yan.png) 0 0 no-repeat; width: 90px; margin-left:0;}
.search-form-bot input.ipt-03_img:hover, input.hoverb { background:url(images/img_search_btn_yan.png) 0 -50px no-repeat; }
.search-form-bot input.ipt-03_blog { background:url(images/blog_search_btn_yan.png) 0 0 no-repeat; width: 90px; margin-left:0;}
.search-form-bot input.ipt-03_blog:hover, input.hoverb { background:url(images/blog_search_btn_yan.png) 0 -50px no-repeat; }
.search-form-bot input.ipt-03_product { background:url(images/product_search_btn_yan.png) 0 0 no-repeat; width: 90px; margin-left:0;}
.search-form-bot input.ipt-03_product:hover, input.hoverb { background:url(images/product_search_btn_yan.png) 0 -50px no-repeat; }
/* 脭脷陆谩鹿没脰脨脣脩脣梅*/
.ipt-04 { background:url(http://www.sinaimg.cn/dy/search/images/searchin_btn.png); width:90px; height:26px; border:none; color:#fff; margin:0 3px 0 0; }
.search-form p { padding:10px 0 0 228px; }
.search-form p label input { margin:-3px 3px 0 0; }
.search-form p label { margin:0 1.5em 0 0; }
/* 赂脽录露脣脩脣梅 by liusong */
.adv_search { padding:10px 20px; height:600px; }
.adv_search table { width:100%; margin:20px auto; border-collapse:collapse; border-spacing:0 }
.adv_search th, .adv_search td { border:dashed 1px #E4E9FA; border-width:1px 0; padding:10px }
.adv_search th { text-align:left; font-size:14px; width:160px; padding-right:15px }
.adv_search td p { padding-bottom:10px ;margin:5px;}
.adv_search .btns { text-align:center; border-width:0; padding:20px }
.adv_search .btns input { font-size:14px }
.adv_search label { margin-right:2em; vertical-align:middle }
.adv_search .inp_txt_long { /*border:solid 1px #9EB5E4;*/  width:220px;padding:3px 4px ;float:right;margin-right:280px;}
.adv_search .inp_txt { /*border:solid 1px #9EB5E4;*/  width:220px;padding:3px 4px ;margin-right:40px;}
.date_pick .inp_txt { width:100px; background:url(http://www.sinaimg.cn/dy/search/images/ss_cl_011.png) no-repeat 95% center; cursor:pointer; }
.data-select { background:url(http://www.sinaimg.cn/dy/search/images/ss_cl_011.png) no-repeat 95% center; border:1px solid #8fcee0; padding:2px; height:14px; line-height:14px; width:80px; cursor:pointer; }
.adv_search select { width:110px; margin-right:16px }

.sec_tit h2 { font-weight:bold; margin:-10px 0 0px; font-family:"脦垄脠铆脩脜潞脷", "潞脷脤氓"; font-size:18px }
.nav { border-bottom:solid 1px #ddd;; line-height:28px; color:#666; margin-left:30px; width:700px}
.nav .l{ padding:0 0 0 155px; }
.nav .r_v2{ float:right; margin-top:-28px;padding:0px 5px;}
.nav .r_v2 span{ display:inline-block; border-bottom:solid 1px #e42f36; position:relative; margin-bottom:-1px;}
.nav .r{ color:#787878; position:relative }
.nav .r strong, .nav .product_l { font-weight:normal; zoom:1 }
.nav a:hover, .nav a:focus { text-decoration:none; }
.nav2 { background:#eef7f9; margin-top:1px; line-height:30px; padding:0 10px; }
.nav2 .l { border-right:1px solid #cfe9ef; width:150px; }
.nav2 .r { line-height:normal; height:22px; padding:6px 0 0 0; }
/*20120823 added yan start*/
/*common bg*/
/* 20120908 dalong3 start*/
li .product_cur, .imgcur, dd ul li, dt .cur, .main .l .toClose, .main .l .toOpen, .reset, .r_list .selected a, .r_list dd .del_h { background:url(images/search_btn_yan.png) 999px 999px no-repeat; }
.main .l dt{ height:25px; line-height:25px; padding-bottom:2px }
.wrap .main .sidebar dl ul .selected, .imgcur, .main .l dt .cur, .sRight .r_list dd .cur { background-color:#ffffff; background-position:5px -94px; font-size:14px; margin-bottom:3px; padding-left:18px; }
 .c_list span.cur li { background-color:#ffffff; background-position:5px -96px; font-size:14px; padding-bottom:3px; }
.imgcur, .main .l dl dd ul span li .cur {cursor:pointer} 
.l .sidebar dl dt a span, .sidebar dl dt a, dd ul li {cursor:pointer}
.imgcur { color:#000; }
li.imgcur:hover { background-color:#e9eff5; }
.img_sidebar li a { display:block; }
.main .l dl dt a, .main .l dl dd li a { color:#000000; }
.search_history { width:205px; }
.sRight .wbret-wrap .wbret-p3 .wbret-link1 { color:#7F7FCC; }
#nav_result_container .zcblk { margin: 0 0 30px 0; padding:10px 0 10px 0; /*width:550px;*/}
.zcblk .zch .nav_add_log { width:300px; margin-right:23px; }
/*.zcblk .zcbox .zcwords { width:399px; } hongliang4 脰卤麓茂脟酶脧脭脢戮脠楼碌么*/ 
/*20120908 dalong3 end*/

.fgrey a:link, .fgrey a:visited { color:#5d5d5d}
.fgrey a:hover { color:#333; text-decoration:none; }

.main { cursor:default; }
.main .l { width:125px; cursor:auto; }
.main .l dl { padding:25px 0 0 0; }

.main .l dt span { display:inline-block; padding-right:10px;}
.main .l dt a, .main .l dd ul li { display:block; padding-left:17px; }
.main .l .product_sidebar dl dt { display:block; padding-left:17px;}
.main .l .product_sidebar .product_sidebar_dl dt { padding-left:0; }
.main .l .product_sidebar dl dt.product_reset { padding-left:0; }
#sidebar .product_sidebar { padding-top:10px; width:135px; }
.main .product_sidebar dl dd ul li.cur:hover { background-color:#e9eff5; }
.product_sidebar li a:hover { background-color:#e9eff5; }
.product_sidebar li a { display:block; }
.c_list a {display:block;}
.main .l .toClose { background-position:100% -132px; }
.main .l .toOpen { background-position:100% -170px; }
.main .l #cannel.toOpen { background-position:-25px -170px; }
.main .l #sYear.toOpen { background-position:-28px -170px; }
.main .l #cdatebtn.toOpen { background-position:-3px -170px; }

.main .l a:hover .toClose { background-position:100% -332px; }
.main .l #cannel.toClose { background-position:-25px -332px; }
.main .l #sYear.toClose { background-position:-28px -332px; }
.main .l #cdatebtn.toClose { background-position:-3px -332px; }
.main .l a:hover .toOpen { background-position:100% -370px; }

.main .l a:link, .main .l a:visited { color:#000 }
.main .l #sYear { display:inline-block; padding-right:10px;}
.main .l a.reset { background-position:15px -234px; padding-left:30px }
.main .l a.reset:hover { background-position:15px -254px; }
.main .c_list { padding-top:5px; }
.main .c_list li { height:20px; line-height:20px; padding-left:17px; margin:0 0 5px }
.main .c_list li.on, .main .c_list li:hover, dd ul li:hover { background-color:#e9eff5; }
/*.main .c_list a:link, .c_list a:visited { color#333333 }    dalong3 20120922*/
.main .c_list a:hover { text-decoration:none; }
.main .result { float:left; padding:10px 0px 10px 30px; width:589px; zoom:1; cursor:auto; position:relative; overflow:hidden; }/* xuehua1 modify 20130911 */
.main .product_result { width:700px; padding-left:10px; margin-left:10px; }
.main .sLeft { float:left; width:619px; }/* xuehua1 modify 20130911 */
.main .sRight { float:right; width:235px; background-color:#fff; border:solid 1px #eaeaea; margin-top:-22px;}/* xuehua1 modify 20130911 */
.main .zcad { float:left; width:210px; float:right; }

.r_list { padding-bottom:15px; }
.r_list dt { font-size:14px; font-weight:bold; color:#3d3d3d; padding-left:15px; padding-bottom: 10px;}
.r_list dd, .r_list dd .highlighted  { line-height:22px; height:22px; font-weight:normal}
.r_list dd a, .r_list dd .highlighted  { padding: 0 20px 0 15px; display:inline-block; }
.r_list .selected a { background-position: 0 -94px; font-size:14px; }
.r_list dd a:hover, .r_list dd .highlighted:hover { background-color:#e9eff5 }
/*.r_list dt a:hover, dalong3 20120919*/
.main .sidebar dl dt a:hover, .product_sidebar ul li:hover { background-color:#e9eff5 }/*dalong3*/
.main .sidebar dt .cur_time { padding-left:17px; }
/*.nav .wrap .main .l .sidebar dl dt a.cur:hover { background-color:#e9eff5 }/*dalong3*/
.sidebar dl a span { width:97px } /*dalong3 20120919*/
.r_list dd .del_h { background-position:15px -273px; padding-left:30px; }
.r_list dd a.del_h:hover { background-position:15px -293px; padding-left:30px; }
.r_list dd .highlighted { cursor:pointer; }
.r_list.fgrey a, .r_list dd .highlighted  { width:205px; }

.about_search{ background-color:#f3f5f8; padding:10px 0;}
.about_search_box{ width:800px; padding-left:150px;}
.about_search .Stabl01 th{font-size: 14px;font-weight: normal; line-height:30px; text-align: left; vertical-align: top;    white-space: nowrap;}
.about_search .Stabl01 .tt{ padding:0 25px 0 0}
.about_search .Stabl01 td{ width: 5%;}
.about_search .Stabl01 a:hover{ text-decoration:none; color:#000099}

.foot { text-align:center; padding:10px 0; color:#666666; background-color:#e1e1e1;font-size: 12px;}
.foot a:link,.foot a:visited { color:#666; }
.foot a:hover, .foot a:focus { text-decoration:none;color:#666; }

/*20120823 added yan end*/


a.amore { background:url(http://www.sinaimg.cn/dy/search/images/ss_cl_007.png) no-repeat 100% -88px; padding-right:15px; }
a.amore2 { background:url(http://www.sinaimg.cn/dy/search/images/ss_cl_007.png) no-repeat 100% -49px; padding-right:15px; }
.list-more { position:absolute; left:5px; top:18px; width:95px; z-index:10000; }
.list-more .more-arr { background: url(http://www.sinaimg.cn/dy/search/images/sea_m_arr.png) no-repeat 10px 0; height:5px; overflow:hidden; position:relative; margin-bottom:-1px; zoom:1 }
.ipt-01 { border:1px solid #60a9cc; padding:3px; line-height:20px; height:20px; width:426px; margin:0; float:left; font-size:14px; outline:none }
.more-link { border:1px solid #687DCE; background:#fff; padding:3px 0 0 0; }
.more-link a { display:block; margin:1px; line-height:24px; padding:0 0 0 13px; text-decoration:none; background:#fff; zoom:1; height:24px; overflow:hidden; }
.more-link a:hover { background-color:#ECEEF9; text-decoration:none; color:#000099; }
.more-link .line-dot { background:url(http://www.sinaimg.cn/dy/search/images/ss_cl_004.png) repeat-x; }
.data-select { background:url(http://www.sinaimg.cn/dy/search/images/ss_cl_011.png) no-repeat 95% center; border:1px solid #8fcee0; padding:2px; height:14px; line-height:14px; width:80px; cursor:pointer; }
.box-define { padding:0 0 0 7px; }
.box-define p { padding:2px 0; }
a.areset { background:url(http://www.sinaimg.cn/dy/search/images/ss_cl_012.png) no-repeat 0 center; padding:0 0 0 15px; }
a.back { background:url(http://www.sinaimg.cn/dy/search/images/back.png) no-repeat 0 center; padding:0 0 0 12px; margin:0 0 0 -10px; }
/* 脛脷脠脻露楼虏驴脤谩脢戮脟酶脫貌 mod_bar */
.mod_bar { zoom:1; overflow:hidden; padding:0 0 5px; width:605px; margin:0 0 0 1px; } /*20120912 dalong3*/
/* 脜脜脨貌路陆脢陆 */
.sort_option { float: right; margin:0; width:160px; height:25px; line-height:25px; text-align:center; }/*2010/10/26*/
.sort_option_product { margin:0; display:block; width:558px; text-align:right; height:25px; line-height:25px; z-index:9999; }
.result .sort_option a { margin-left:0px; text-decoration:none; }
.result .sort_option_product a { text-decoration:none; }
.cur_sort { color:#000; padding-bottom:5px; background:url(http://www.sinaimg.cn/dy/search/images/arr.png) no-repeat 50% 100%;/*margin-left:10px;*/ }
/* 掳麓脢卤录盲脜脜脨貌脤谩脢戮脨脜脧垄 */
.tips_01 { position: relative; height:30px; line-height: 30px; background:#F2F6F9; margin: 0 18px 5px 0; padding:0 10px;border: 1px solid #e0ebf1; color: #000; }
.tips_01 { /*width:529px; *width:547px;*/ }/*20120912 dalong3 */
.tips_01 p em { color: #CC0033; }
.tips_01 .close { color:#959ebe; position: absolute; right:6px; top:6px; line-height: 14px; font-family: arial; cursor: pointer; }
/*  鹿脴卤脮脡赂脩隆脝梅掳麓脜楼虏禄虏脡脫脙 20120821  碌芦脥录脝卢脣脩脣梅脨猫脪陋脝么脫脙 20120912 --dalong3*/
#sidebtn{background:url(images/side_arr3.png) no-repeat 0 0;display:block; position:absolute; width:11px;height:30px;overflow:hidden;text-indent:-999em;margin:120px 0 0 -31px;padding:0;outline:none;}
a#sidebtn.sideclose{background-position:100% 0;margin-left:-30px; }
a.sideopen{}
#sidebtn:hover{background-position:0 -30px; }
a#sidebtn.sideclose:hover{background-position:100% 100%;}

.result h2 { line-height:24px; }
.box-result { zoom:1; padding:0 0 0 10px; border: 1px solid #fff; position:relative;margin-bottom:8px; }/*20120823*/
.box-result { /*width:569px; *width:579px;*/}/*20120910 about ie by dalong3*/
.box-result .r-img { margin:5px 0; float:left; width:140px; position:relative; }
.box-result .r-img .video { position:absolute; left:5px; bottom:5px; *bottom:9px;
border:none; }
a.a-img img { border:1px solid #ccc; padding:1px; }
a.a-img:hover img { border-color:#69c; }
.box-result .r-info { margin:5px 0; float:left; width:417px; }/* 20120823*/
.box-result .r-info p { word-wrap:break-word; word-break:break-all; }
.box-result .r-info p a:link,.box-result .r-info p a:visited{ color:#7F7FCC}/* 20120829 modify yan*/
.box-result .r-info p a:hover{ color:#4949b5}/* 20120829 modify yan*/
.box-result .r-info p .col3 { display:inline-block; width:22%; overflow:hidden; height:16px; }
.box-result .r-info p .update { width:45% }
.box-result .r-info2 { float:none; width:auto; }
.box-result h2 { font:normal normal normal 16px/1.67em "arial"; }/*20120828 modify yan*/
.box-result h2 .fgreen { font-size:12px; font-family:Arial; }/*20120828 modify yan*/
a strong.highlight, a:link strong.highlight, a:visited strong.highlight, .highlight { color:#c00; font-weight:normal; }
a strong.highlight { text-decoration:underline }
.box-result .fblue { color:#7f7fcc; text-decoration:none; }/*20120828 modify yan*/
/*.box-result .r-info h2 a {padding-right:10px;}*/
.acmt { background:url(http://www.sinaimg.cn/dy/search/images/ss_cl_014.png) no-repeat 0 center; padding-left:12px; }
.box-result a:visited { color:#800080; }
.box-result a.fblue:visited { color:#7f7fcc; }/*20120828 modify yan*/
.box-result a.fblue:hover, .box-result a.fblue:focus { color:#f00; text-decoration:none; }
.box-result .r-info a { text-decoration:underline; }
.box-result h2 a{text-decoration: underline;} 
.box-result .time { white-space:nowrap; }
.box-result span.zts { /*white-space:nowrap;*/}
.product_box-result { width:579px; }
img.noimg { vertical-align:middle; margin:0 2px; }
.list-img { overflow:hidden; zoom:1; padding:5px 0 0 0; height:94px; }
.list-img li { float:left; margin:0 5px 0 0; display:inline; }
.list-img li img { display:block; margin:0 auto; float:left; }
.list-img li.lastall { border:none; width:auto; padding:78px 0 0 15px; }
.result .hover { background: #F3F7FA; border-color: #E0EBF1 }/*2010/11/22*/
/* 路脰脪鲁 */

.pagebox { font-size:12px; margin-bottom:10px; margin-top:5px; }
.pagebox a, .pagebox a:visited, .pagebox a:link { border:1px solid #ddd; color:#2c98c7; cursor:pointer; height:21px; line-height:21px; padding:0 8px; text-decoration:none; display:inline-block; overflow:hidden; margin-right:4px; }
.pagebox a:hover { background:#044580 none repeat scroll 0 0; color:#FFFFFF; border-color:#044580 }
.pagebox span.pagebox_cur_page { color:#000; cursor:default; font-weight:bold; height:23px; line-height:23px; padding:0 8px; display:inline-block; overflow:hidden; margin-right:4px; }
/*脰卤麓茂脟酶鹿芦脫脙css*/
.box-nav { /*background:#F3F7FA url(http://www.sinaimg.cn/dy/search/images/dot_line.png) repeat-x 0 100%; */padding:0 0 0 10px; margin-bottom:25px; }
/*鹿脡脝卤*/
.box-finance {/*padding-left:15px;*/ }
.box-finance .r-img { width:auto; margin:2px 5px 0 0; }
.box-finance .r-info { width:auto; padding-left:15px; }
.box-finance h2 { padding: 0 0 10px 0; }
.box-finance .r-num { font-family:arial; padding:0px 0 7px; zoom:1; }
.box-finance .r-num:after { content:"."; display:block; height:0; visibility:hidden; clear:both; }
.box-finance .r-num h3 { font-size:24px; font-weight:normal; line-height:1.0; padding:4px 14px 2px 0; float:left; margin:0 10px 0 0; border-right:1px solid #999; }
.fgreen { color:#090; }
.box-finance .r-num p { line-height:14px; white-space:nowrap; }
.box-finance .r-num .num_detail { float:left; padding:2px 0 2px 14px; }
.box-finance .r-data { padding:4px 1em 2px 2px; border-top:1px solid #999999; clear:both; _float:left; }
.f_table { border-spacing:0; border-collapse:collapse; }
.f_table th, .f_table td { padding-right:10px; text-align:left }
.f_table td { padding-left:2px }
/* end of 鹿脡脝卤 */

/*脤矛脝酶*/
.box-weather {/*padding-left:10px;*/ }
.box-weather h2 { padding:0 0 8px 0; }
.box-weather .w-cnt { overflow:hidden; zoom:1; margin:0 0 0 0; }
.box-weather .w-icon { vertical-align:middle; }
.box-weather dl { float:left; width:174px; padding:0 0 0 0px; border-right:1px dotted #ccc; margin-right:15px; }
.box-weather dl.last { border:none; margin-right:-25px; }
.box-weather dd p { line-height:normal; padding:3px 0; }
/* 麓贸脝卢 */
/* 脢脫脝碌 */
.nav_16 .r-info h2 .hd { background: url(http://www.sinaimg.cn/dy/search/images/hd.png) repeat-x; border:solid 1px #9FB6E4; color:#8697D9; padding:3px 6px }
.nav_16 .hd a {
color:color:#8697D9; text-decoration:none }
.nav_16 .blue { color:#6699cc; }
/*禄媒路脰掳帽*/
.box-socre h2 { padding:0 0 5px 0; }
.tbl-score { border-collapse:collapse; border:1px solid #CFE9EF; line-height:24px; font-family:arial; margin:5px 0; }
.tbl-score th { background:#F1F4FC; padding-left:12px; text-align:left; border-right:1px solid #fff; }
.tbl-score td { padding-left:12px; border-bottom:1px solid #CFE9EF; }
.tbl-score td.tar { font-family:"arial"; padding:0 1em 0 0; }
.more-keyword { font:normal normal normal 14px/1.67em "arial"; padding:10px; }
.more-keyword td { padding:0 0 0 3px; line-height:26px; text-align:center; }
.more-keyword td.item { padding: 0 25px; text-align:left; }
.search-form-bot { padding:10px 0 20px;}
.search-form-bot form { width:530px; padding-left:15px; }
.sidebar { width:125px ;}
.more-keyword a, .result a { text-decoration:none; }
.from { color:#666; padding:10px 0 15px; }
.from strong { font-weight:normal; color:#000 }
.from strong a { text-decoration:none; color:#000; }
/*赂么脨脨禄禄脡芦*/
/*.zebra { background:#F3F7FA; padding:10px; }/* modified by  youhuata 0415 */
.zebra { padding: 10px 0 10px 10px; } /* 20120913 dalong3 */
.zebra .r-info { width:389px; }/* added by youhuata 0415 */
.zebra .r-info2 { float:none; width:auto; }
/* 脟脨禄禄脧脭脢戮路陆脢陆脥录卤锚 */
.view_icon { width:18px; height:15px; vertical-align:-10%; background:url(http://www.sinaimg.cn/dy/search/images/thumbs.png) no-repeat 0 0; }
#thumb { background-position: 0 0 }
#list { background-position:100% 0 }
#thumb.on { background-position: 0 100% }
#list.on { background-position:100% 100% }
/* 虏煤脝路驴芒 */
.box-prd { padding:10px; margin-bottom:15px }
.box-prd h2 { margin-top:-3px }
.box-prd .r-img { width:102px; text-align:center; vertical-align:middle; height:102px; line-height:102px; border:solid 1px #ccc; background:#fff; position:relative; overflow:hidden; zoom:1; display:table; }
.box-prd .r-img a { position:static; +position:absolute;
top:50%; vertical-align:middle; display:table-cell; _display:inline; zoom:1; _blr:expression(this.onFocus=this.blur());
outline-style:none; }
/*.box-prd .r-img a:after { content:" "; font-size:1px; visibility:hidden }*/
.box-prd .r-img a img { border:none; padding:0; vertical-align:middle; position:static; +position:relative;
top:-50%; left:-50%; max-height:98px; max-width:98px; }
.box-prd .r-info { float:none; margin-left:124px; width:auto; zoom:1 }
.box-prd h3 { font-weight:normal; text-align:right; margin:-23px 0 0; font-size:12px }
.box-prd h3 .price { color:#c00; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:normal; line-height:28px; }
.box-prd h3 .noprice { line-height:28px; }
/* 虏煤脝路驴芒 > 脠铆录镁 */
.box-software .r-img { width:44px; height:44px }
.box-software .r-img a { width:42px; height:42px; line-height:42px }
.box-software .r-img a img { margin-top:6px }
.box-software .r-info { margin-left:60px }
/* 麓贸脥录脧脭脢戮 */
.dN { display:none }
.thumbnail { font-size:12px; overflow:hidden; height:16px; }
.thumbnail_view .box-prd { float:left; width:181px; padding:0; vertical-align:top }
.thumbnail_view .r-img { float:none; width:142px; height:142px; line-height:142px }
.thumbnail_view .r-img img { max-height:140px; max-width:140px; /*  麓脣麓娄脫脨CSS驴脴脰脝脥录脝卢驴铆赂脽拢卢脠莽脢盲鲁枚脢卤驴脴脰脝鹿媒脥录脝卢鲁脽麓莽拢卢脭貌驴脡脪脭脳垄脢脥碌么脰脨虏驴路脰 */ _height:expression(this.scrollHeight>139?"140px":"auto");
_width:expression(this.scrollWidth>139?"140px":"auto");
/*  麓脣麓娄脫脨CSS驴脴脰脝脥录脝卢驴铆赂脽拢卢脠莽脢盲鲁枚脢卤驴脴脰脝鹿媒脥录脝卢鲁脽麓莽拢卢脭貌驴脡脪脭脳垄脢脥碌么脰脨虏驴路脰 IE6 脳篓脫脙 */
    }
.thumbnail_view .r-info { margin-left:0; padding:10px 0 0 0; zoom:1 }
.thumbnail_view .r-info h3 { text-align:left; margin:0 }
.thumbnail_view .r-info p.content { display:none }
/* .thumbnail_view .r-info p span, .thumbnail_view .r-info h3 span { display:none } */
.thumbnail_view .r-info p .thumbnail { display:block }
.thumbnail_view .r-info p .thumbnail { display:block; width:auto }/* modified by youhua 2010-8-20 */
/* 脦垄虏漏脧脿鹿脴 */
.small_icon { background:url(http://simg.sinajs.cn/miniblog2style/images/common/sicon.gif) no-repeat 0 0; overflow:hidden; }
.male, .man { background-position:0 -20px; width:9px; height:12px; }
.female, .sicon_female { width:9px; height:12px; background-position:0 0; }
.vip { background-position:-32px -20px; width:11px; height:10px; }
/* 脰卤脥篓鲁碌 */
.box-map .r-img { width:250px }
.box-map .r-info { width:auto; margin-left:250px; float:none }
/*脠脮脝脷脩隆脭帽*/
#ui-datepicker-div { margin-top:5px; margin-left:-10px;/* 脨脼脮媒脝芦虏卯 */ margin-bottom:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif; background:#fff; display:none; border:1px #9ca9cb solid; width:244px; padding:3px; color:#434343; overflow:hidden; z-index:99 }
#ui-datepicker-div select { height:21px; color:#434343; cursor:pointer }
.ui-datepicker-header { width:244px; height:25px; border-bottom:1px #fff solid; overflow:hidden; background:url(http://i3.sinaimg.cn/dy/home/090605/bg_news.png) no-repeat 0 0; position:relative }
.ui-datepicker-header a.ui-state-disabled, .ui-datepicker-header a.ui-state-disabled:visited { background:#d8ebfe; cursor:default }
.ui-datepicker-prev { width:30px; height:21px; overflow:hidden; cursor:pointer; position:absolute; top:2px; left:4px; display:block }
.ui-datepicker-next { width:30px; height:21px; overflow:hidden; cursor:pointer; position:absolute; top:2px; right:5px; display:block }
.ui-datepicker-title { text-align:center; width:175px; height:21px; position:absolute; top:2px; left:34px }
.ui-datepicker-year, .ui-datepicker-month { width:60px }
.ui-datepicker-calendar { width:245px; border-collapse:collapse; border-left:1px #fff solid }
.ui-datepicker-calendar th, .ui-datepicker-calendar td { padding:0; background:#efefef; color:#686868; border-right:1px #fff solid; border-bottom:1px #fff solid; line-height:22px; text-align:center; cursor:default; font-weight:400 }
.ui-datepicker-calendar th {/* 卤铆脥路脩霉脢陆脭脷麓脣 */ background:#e9e9e9 }
.ui-datepicker-calendar th span { display:block }
.ui-datepicker-calendar th.ui-datepicker-week-end, .ui-datepicker-calendar td.ui-datepicker-week-end {/* 脰脺脛漏碌楼脭陋赂帽脩霉脢陆脭脷麓脣 */ }
.ui-datepicker-calendar td { font-size:10px }
.ui-datepicker-calendar td.ui-state-disabled { color:#aaa }
.ui-datepicker-calendar td a, .ui-datepicker-calendar td a:visited { display:block; cursor:pointer; color:#686868; text-decoration:none; text-align:center; border:1px #efefef solid; line-height:20px; height:/* IE6脭脷a碌脛display脦陋block脢卤拢卢卤脴脨毛脡猫脰脙height禄貌width脰脨碌脛脪禄赂枚虏脜脛脺脮媒脠路麓楼路垄hover脦卤脌脿 */20px }
.ui-datepicker-calendar td a:hover, .ui-datepicker-calendar td a:active, .ui-datepicker-calendar td a:focus { background:#ec6e6b; color:#fff; border:1px #a40300 solid }
.ui-datepicker-calendar td a.ui-state-active, .ui-datepicker-calendar td a.ui-state-active:visited {/* .ui-state-active卤脴脨毛脭脷.ui-state-highlight脰庐脟掳拢卢麓脣脩霉脢陆脫脙脫脷卤锚脳垄脰赂露篓碌脛碌芦虏禄脢脟陆帽脤矛碌脛脠脮脝脷 */ background:#fff; border-color:#efefef }
.ui-datepicker-calendar td a.ui-state-active:hover, .ui-datepicker-calendar td a.ui-state-active:active, .ui-datepicker-calendar td a.ui-state-active:focus { color:#ca0e0a; text-decoration:underline; background:#fff; border-color:#efefef }
.ui-datepicker-calendar td a.ui-state-highlight, .ui-datepicker-calendar td a.ui-state-highlight:visited { background:#ca0e0a; color:#fff; border:1px #a40300 solid }
.ui-datepicker-calendar td a.ui-state-highlight:hover, .ui-datepicker-calendar td a.ui-state-highlight:active, .ui-datepicker-calendar td a.ui-state-highlight:focus { background:#ca0e0a; color:#ff0; text-decoration:underline; border:1px #a40300 solid }
.ui-icon, .ui-datepicker-cover, .ui-datepicker-trigger { display:none }
.pagenum { font-size:11px; font-family:verdana; }
.noresult { margin-left:25px; clear:left; font-size:14px; padding-bottom:100px; }
.noresult h4 { font-weight:normal; font-size:14px; line-height:30px; }
.noresult h4 span { color:#cc0033; }
.noresult p { font-size:14px; line-height:50px; }
.noresult ul { }
.noresult ul li { font-size:14px; line-height:20px; margin-left:30px; list-style-type:disc; }
.more_switch { text-align:right; }
.more_switch a.amore, .more_switch a.amore2 { background-image:url(http://www.sinaimg.cn/dy/search/images/sw.png); outline:none 0; text-decoration:none; }
span.style1 { color:#f00; }
/**/
.gray_lv2 { color:#666 }
.cur_area { margin:0 0 5px 30px; }
.notice { background:url(http://www.sinaimg.cn/dy/search/images/notice.gif) no-repeat 0 50%; padding:2px 2px 2px 15px; }
/* 脭脷陆谩鹿没脰脨脣脩 */
#search_more { padding:0 20px; font-size:14px; height:300px; position:relative; z-index:2 }
#search_more h2 { font-weight:bold; margin:-10px 0 18px; font-family:"脦垄脠铆脩脜潞脷", "潞脷脤氓"; font-size:18px; position:relative; z-index:20 }
#search_more p { line-height:157% }
.main .l li .type-more li { padding-left:7px; }/* added by youhuata 2010-03-26  16:33 */
.type-more { zoom:1; overflow:hidden }
/* range radio add pointer */
label.label_range { cursor:pointer; }
label.label_range input { cursor:pointer; }
/* world cup 2010 */
/* added by youhuata 100602 */
.WorldCupTop { height:95px!important }
.w_c_p { background: url(http://www.sinaimg.cn/dy/search/images/sjb_banner.png) no-repeat 100% 100%; height:95px }
.world_cup_filter { position:absolute; margin:0; color:#cc0000; }
.world_cup_filter a { color:#00f; text-decoration:none }
.world_cup_filter a:hover { color:#f00; text-decoration:none; }
.main .l li span { color:#000000 }
/* 脨脗脦脜脣脩脣梅脧脗脡赂脩隆脝梅 脢脌陆莽卤颅卤锚脳垄脤脴脢芒脩脮脡芦 */
.sidebar li.wc2010_a a { color:#f60; }
.sidebar li.wc2010_a a:hover { color:#f00; }
/* 脥录脝卢脣脩脣梅 掳麓脨搂鹿没赂脽脟氓卤锚脢露 */
img.size_hd { /*vertical-align:text-top;*/ margin-left:2px; }
/*脠楼碌么hover 脧脗禄庐脧脽*/
.sidebar a:hover, .sidebar a:focus { text-decoration:none; }
/* 脳贸虏脿脡赂脩隆脝梅脰赂露篓脠脮脝脷路露脦搂 */
.cdatehost { text-align:right; margin-right:2px; }
.cdatehost p { padding:2px 0 0 0; }
.cdatehost .btns { text-align:center; border-width:0; padding:20px }
.cdatehost .btns input { font-size:14px }
.cdatehost label { margin-right:2em; vertical-align:middle }
.cdatehost .inp_txt { border:solid 1px #9EB5E4; width:90px; padding:3px 4px; height:13px; }
.cdatehost select { width:90px; margin-right:16px }
/*2010/11/3begin*/
.mod_thumb { float: left; width: 140px; text-align: center; }
.mod_thumb table { margin: auto; text-align: center; }
.mod_thumb .video { text-align: left; }
.mod_thumb .video a { position: relative; display: block; margin: -25px 0 0 5px; }
.mod_thumb .btn_play { display: inline-block; width: 73px; height: 25px; background: url(http://www.sinaimg.cn/dy/search/images/search_btn_play.png) 0 0 no-repeat; }
#search_ft_02 { display: none; }
.dropselectbox { display:inline; }
.dropdown { outline:none; display:inline-block; vertical-align: middle; *display:inline;
zoom:1; background:#dee3fa; }
.dropdown * { -moz-user-select:none; }
.dropdown h4 { cursor:pointer; text-indent:5px; height:24px; padding-right: 5px; font:12px/24px '脣脦脤氓', sans-serif; border:solid 1px #667bce; background:url(http://www.sinaimg.cn/dy/search/images/search_slt_arr.png) no-repeat right center; }
.dropdown h4.over { border-color:#667bce; background-image:url(http://www.sinaimg.cn/dy/search/images/search_slt_arr.png); }
.dropdown h4.current { border-color:#667bce; }
.dropdown div { display:block;}
.dropdown ul { position:absolute; display:none; margin:0; padding:0; float:left; clear:both; border:1px solid #667bce; background:#FFF; }
.dropdown ul li { text-indent:5px; display:block; cursor:default; background:#FFF; height:19px; }
.dropdown ul li.over { background:#39f; color:#FFF; }
/*2010/11/3end*/

.icon_arr { padding-right: 10px; background: url(http://www.sinaimg.cn/dy/search/images/search3.png) right center no-repeat; }

.ipt-00 { border:1px solid #898989; padding:3px 5px; line-height:24px; height:24px; font-size:14px; width:400px; margin:0 10px 0 0; }
.filterzz {height: 24px;padding: 10px 0;text-align: center;}
.filterzz a:link, .filterzz a:visited {background: none repeat scroll 0 0 #F6F6F6;border: 1px solid #EFEFEF;color: #6699CC;text-decoration: none;}
.filterzz a {background: none repeat scroll 0 0 #F6F6F6;border: 1px solid #EFEFEF;color: #6699CC;display: inline-block;height: 22px;line-height: 22px;margin: 0 auto;padding: 0 75px;}
.foot_tip{padding:10px 0;color:#777;margin:10px 0 5px 0;border-top: dashed 1px #999;}

.result_s { display:inline;float:left;width:124px;margin:30px 50px 0px 20px;}
.result_s .result_s_pic { display:block;position:relative;padding:1px;border:1px solid #dcdcdc;line-height:0px;font-size:0px;zoom:1;}
.result_s .result_s_pic span { position:absolute;left:1px;bottom:1px;width:120px;height:18px;line-height:18px;font-size:12px;color:white;text-align:right;}
.result_s .result_s_marker { background-color:black;opacity:0.6;filter:alpha(opacity=60);}
.result_s .result_s_pic .result_s_length { width:114px;padding-right:6px;}
.result_s .result_s_play { display:none;position:absolute;left:50%;top:50%;margin-left:-16px;margin-top:-20px;width:32px;height:32px;background:url(images/result_play_btn.png);_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,sizingMethod=scale, src='images/result_play_btn.png');}
.result_s .result_s_pic:hover .result_s_play { display:block;}
.result_s p { color:#666666;}
.result_s .result_key { color:red;}
.result_s .result_s_title { height:36px;line-height:18px;margin:5px 0;}

</style>


<style type="text/css">
.top2 .search-form .ipt-02 {margin:0 3px 0 0}
.sidebar { width:125px ;border-right: 1px solid rgb(200, 213, 240);}
</style>  

<style type="text/css">.tn-title-login-custom{float:left!important;font-family: "Microsoft YaHei","微软雅黑","SimSun","宋体"!important;position:relative!important;}
.tn-title-login-custom .tn-user-custom{float:left!important;font-size:12px!important;}
.tn-title-login-custom .tn-user-greet{float:left!important;height:17px!important;padding:12px 0!important;width:51px!important; line-height:17px!important;overflow:hidden!important;}
.tn-title-login-custom .tn-tab-custom{position:relative!important;float:left!important;border-width:0 1px!important;border-style:solid!important;width:85px!important;height:17px!important;padding:12px 0!important;_padding:14px 0 10px!important;text-align:center!important;font-style:normal!important;text-decoration:none!important; vertical-align:top!important;}
.tn-title-login-custom .tn-tab-custom-login{width:57px!important;_float:left;}
.tn-title-login-custom .tn-tab-custom i{font-style:normal!important;}
.tn-title-login-custom .tn-tab-custom:hover{text-decoration:none!important;}
.tn-title-login-custom .tn-tab-custom .tn-new-custom{display:none;position:absolute!important;right:2px!important;margin-top:-10px!important;height:11px!important;width:13px!important;padding-left:3px!important;font-size:8px!important;overflow:hidden!important;line-height:10px!important;text-align:center!important;-webkit-text-size-adjust:none!important;font-style:normal!important;}
.tn-title-login-custom .tn-tab-custom .tn-arrow-custom{display: inline-block!important;font-size: 12px!important;height: 5px!important;line-height: 13px!important;margin: 0 0 0 5px!important;overflow: hidden!important;transform: none!important;vertical-align: middle!important;width:9px!important;font-style:normal!important;}
.tn-title-login-custom .tn-topmenulist-custom{position:absolute!important;right:0!important;top:41px!important;border-width:1px 1px 0!important;border-style:solid!important;width:85px!important;overflow:hidden!important;}
.tn-title-login-custom .tn-topmenulist-custom .tn-text-list{margin-bottom:-2px!important;margin:0!important;padding:0!important;}
.tn-title-login-custom .tn-topmenulist-custom li{border-bottom-width:1px!important;border-bottom-style:solid!important;line-height:31px!important; list-style:none!important;margin:0!important;padding:0!important;}
.tn-title-login-custom .tn-topmenulist-custom a{display:block!important;padding:0 15px!important;text-decoration:none!important;text-align:left!important;}
.tn-title-login-custom .tn-topmenulist-custom a em{float:right!important;font-style:normal!important;}
.tn-title-login-custom .tn-topmenulist-custom a:hover{text-decoration:none!important;}
.tn-title-login-custom .tn-topmenulist-custom a.tn-user-custom-logout{background:#f2f2f2!important;color:#0a8cd2!important;}
.tn-title-login-custom .tn-topmenulist-custom a.tn-user-custom-logout:hover{text-decoration:underline!important;}
/*可覆盖样式区域*/
.tn-title-login-custom .tn-user-custom{background:#f7f7f7;}
.tn-title-login-custom .tn-tab-custom{border-color:#f7f7f7;color:#ff8601;}
.tn-title-login-custom .tn-tab-custom:hover,
.tn-title-login-custom .tn-tab-custom-onmouse{background:#eaeaea;border-color:#ff8503;color:#ff8601;}
.tn-title-login-custom .tn-tab-custom .tn-new-custom{background:url(http://i.sso.sina.com.cn/images/login/icon_custom.png) no-repeat 0 -30px;color:#fff;text-align:center;-webkit-text-size-adjust: none;}
.tn-title-login-custom .tn-tab-custom .tn-arrow-custom{ background:url(http://i.sso.sina.com.cn/images/login/icon_custom.png) no-repeat scroll 0 0 transparent; }
.tn-title-login-custom .tn-topmenulist-custom{border-color:#ff8601;background:#fff;}
.tn-title-login-custom .tn-topmenulist-custom li{border-bottom-color:#ff8601;}
.tn-title-login-custom .tn-topmenulist-custom a{color:#000;}
.tn-title-login-custom .tn-topmenulist-custom a em{color:#ff8603;}
.tn-title-login-custom .tn-topmenulist-custom a:hover{background:#fff6d9;color:#ff8601;}</style><style type="text/css">.outlogin_layerbox_bylx,
.outlogin_layerbox_bylx p,
.outlogin_layerbox_bylx div,
.outlogin_layerbox_bylx li,
.outlogin_layerbox_bylx input{font: 12px/1.125 "Simsun", "Arial Narrow", "HELVETICA"!important;}
.outlogin_layerbox_bylx{width:292px!important;position:absolute;border-width:1px!important;border-style:solid!important;text-align:left!important;}
.outlogin_layerbox_bylx .cur_move{position:relative!important;width:477px!important;height:17px!important;cursor:move;left:0!important;clear:both!important;}
.outlogin_layerbox_bylx a.layerbox_close{position:absolute!important;right:8px!important;top:8px!important;width:12px!important;height:11px!important;padding:5px!important;font:700 12px "Simsun"!important;text-decoration:none!important;overflow:hidden!important;}
.outlogin_layerbox_bylx .close_loginname{position:absolute!important;width:11px!important;height:11px!important;padding:5px!important;left:180px!important;top:4px!important;font:700 12px "Simsun"!important;text-decoration:none!important;overflow:hidden!important;}
.outlogin_layerbox_bylx a.layerbox_close:hover{text-decoration:none!important;}
.outlogin_layerbox_bylx .layerbox_left{width:259px!important;display:inline!important;float:right!important;margin-top:-17px!important;height:230px;padding:17px 0 17px 30px!important;border-right-width:1px!important;border-right-style:solid!important;}
.outlogin_layerbox_bylx .layerbox_left .titletips{padding:8px 0 35px!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist{list-style:none!important;padding:0!important;margin:0!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist li{width:260px!important; clear:both!important; padding-bottom:12px!important; vertical-align:top;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist .sub_wrap_r{height:20px!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist .ndrelativewrap{position:relative!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist li .btn_wrap{float:left!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist li input.styles{margin:0!important;border-style:solid!important;border-width:1px!important;width: 198px!important;height:14px!important;padding:6px 0 7px 4px!important;outline-style:none!important;vertical-align:middle!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist li input.styles::-ms-clear{display:none!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist input.styles:focus::-webkit-input-placeholder {color:transparent!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist input.styles:focus::-moz-placeholder {color:transparent!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist li.loginform_yzm{height:28px!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist li.loginform_yzm input.styles{width:90px!important; float:left!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist li.loginform_yzm .disability_voice{display:inline-block;width:35px;height:29px;vertical-align:middle!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist li.loginform_yzm img.yzm{float:left!important;margin-left:12px!important;height:28px!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist li.loginform_yzm .reload-code{float:left!important;margin:7px 0 0 5px!important;width:24px!important;height:18px!important;cursor:pointer!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist a.login_btn{float:left!important;margin-right:6px!important;padding:7px 18px!important;text-decoration:none!important;font-size:14px!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist a.register_lnk{text-decoration:none;vertical-align:middle;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist a.register_lnk:hover{text-decoration:underline; }
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist .auto_checkbox{vertical-align:-2px!important;_vertical-align:-1px!important;margin:0 5px 0 0!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist label{margin:0 0 0 0!important;vertical-align:middle!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist a.forget_Pwd{margin-right:10px!important;text-decoration:none!important;vertical-align:middle!important;_vertical-align:-1px!important;}
.outlogin_layerbox_bylx .layerbox_left .log_option{float:left!important;padding:7px 20px 0 0!important;*padding-top:12px!important;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist a.forget_Pwd:hover{text-decoration:underline!important;}
.outlogin_layerbox_bylx .association{position:absolute!important;left:30px;top:94px;margin:0;border-width:1px!important;border-style:solid!important;width:230px;overflow:hidden!important;padding:0;clear:both!important;}
.outlogin_layerbox_bylx .association li{margin:0 1px!important;padding:3px!important;line-height:1.2!important;list-style:none!important;white-space:nowrap!important;}
.outlogin_layerbox_bylx .association li.note_item{margin:4px!important;padding:0!important;}
.outlogin_layerbox_bylx .association li a{display:block!important;text-decoration:none!important;}
.outlogin_layerbox_bylx .login_error_tips{position:absolute; top:42px; left:215px; z-index:10; border:1px #797979 solid; background:#ffffcc; margin:0 0 10px 0!important;width:225px!important;padding:5px!important;}
.outlogin_layerbox_bylx .login_recom_tips{position:absolute; top:42px; left:215px; z-index:10; border:1px #797979 solid; background:#ffffcc; margin:0 0 10px 0!important;padding:5px; white-space:nowrap;}
.outlogin_layerbox_bylx .layerbox_left ul.loginformlist li .rmb_login{float:left;padding:8px 0 0 10px;}
.outlogin_LoginBtn:hover{text-decoration:underline!important;}
.outlogin_LoginBtn .LoginIcon{display:inline-block!important;height:15px!important;width:16px!important;vertical-align:middle!important;}
.outlogin_LoginBtn .LoginTx{vertical-align:middle!important;padding-left:5px!important;cursor:pointer!important;} 
/*微博客户端*/
.outlogin_layerbox_bylx .otwo_d_wrap{width:185px!important;height:230px!important;_width:182px!important;}
.outlogin_layerbox_bylx .otwo_d_wrap .otwo_tl{height:40px!important;padding:8px 0 0 26px!important;}
.outlogin_layerbox_bylx .otwo_d_wrap .td_wrap{border-right:1px solid #ededed!important;height:128px!important;padding-right:30px!important;text-align:right!important;}
.outlogin_layerbox_bylx .otwo_d_wrap .td_wrap img{border:none!important;display:inline!important;}
.outlogin_layerbox_bylx .otwo_hlp{position:absolute!important;left:275px!important;top:59px!important;width:229px!important;height:329px!important;background:#ebebeb!important;background:hsla(0,0%,0%,.08)!important;z-index:16!important;-ms-transition:all 1s;-moz-transition:all 1s;-webkit-transition:all 1s;-o-transition:all 1s;opacity:0;filter:alpha(opacity=0);}
.outlogin_layerbox_bylx .otwo_hlp.transition_hlp{left:175px!important;opacity:1;filter:alpha(opacity=100);}
.outlogin_layerbox_bylx .otwo_hlp .hlp_cnt{margin:3px!important;border:1px solid #dadada!important;height:302px!important;padding:19px 0 0 15px!important;background:#fff;!important}
.outlogin_layerbox_bylx .otwo_hlp .otwo_hlp_tl{height:23px!important;line-height:1!important;}
.outlogin_layerbox_bylx .otwo_hlp .ot_arrow{position:absolute!important;top:68px!important;left:-7px!important;width:11px!important;height:16px!important;background:url(http://i.sso.sina.com.cn/images/login/arrow.png) no-repeat 0 0!important;}
.outlogin_layerbox_bylx .swip_check{position:absolute!important;left:10px!important;top:25px!important;border:1px solid #ccc!important;width:204px!important;height:46px!important;background:#fffae1!important; box-shadow:0 0 3px hsla(0,0%,0%,.2)!important; border-radius:3px!important;}
.outlogin_layerbox_bylx .swip_check_cls,
.outlogin_layerbox_bylx .swip_check_icon,
.outlogin_layerbox_bylx .swip_check_btmarow{background-image:url(http://i.sso.sina.com.cn/images/login/swip_icon.gif)!important;background-repeat:no-repeat!important;overflow:hidden!important;}
.outlogin_layerbox_bylx .swip_check_cls{float:right!important;display:inline!important;margin:9px!important;width:10px!important;height:10px!important;background-position:1px -27px!important;}
.outlogin_layerbox_bylx .swip_check_icon{float:left!important;margin:5px!important;width:15px!important;height:15px!important;background-position:0 -8px!important; }
.outlogin_layerbox_bylx .swip_check_txt{ margin:4px 0 0!important;overflow:hidden!important;line-height:18px!important;}
.swip_check_btmarow{position:absolute!important;bottom:-6px!important;left:50%!important;margin-left:-3px!important;width:10px!important;height:6px!important;background-position:0 0!important;}
/*可被定制样式*/
.outlogin_layerbox_bylx{width:477px!important;border-color:#ffc525;color:#434242;box-shadow:4px 4px 0 rgba(0,0,0,.1);background-color:#fff;}
.outlogin_layerbox_bylx a.layerbox_close{color:#666;}
.outlogin_layerbox_bylx a.layerbox_close:hover{color:#3f7bc1;}
.outlogin_layerbox_bylx .close_loginname{color:#666;}
.outlogin_layerbox_bylx .close_loginname:hover{color:#DA0000;}
.outlogin_layerbox_bylx .layerbox_left{border-right-color:#fff;background:#fff;}
.outlogin_layerbox_bylx .layerbox_left input.styles{border-color:#d0d0d0;background:#FFF;}
.outlogin_layerbox_bylx .layerbox_left .disability_voice{background:url(http://i.sso.sina.com.cn/images/login/voice.gif) no-repeat 50% 50%;}
.outlogin_layerbox_bylx .layerbox_left a.login_btn{background:#ff8500;color:#fff;}
.outlogin_layerbox_bylx .layerbox_left a.login_btn:hover{background:#ff931d;}
.outlogin_layerbox_bylx .layerbox_left a.register_lnk{color:#a87a2c;}
.outlogin_layerbox_bylx .layerbox_left a.login_lnk:hover{color:#a87a2c;}
.outlogin_layerbox_bylx .layerbox_left a.forget_Pwd{color:#a87a2c;}
.outlogin_layerbox_bylx .association{border-color:#ddd;background:#fff;}
.outlogin_layerbox_bylx .association .note_item{color:#999;}
.outlogin_layerbox_bylx .association a{color:#999;}
.outlogin_layerbox_bylx .association .current{background:#f4f5f7;}
.outlogin_layerbox_bylx .login_error_tips{color:#DA0000; }
.outlogin_layerbox_bylx .login_recom_tips{color:#000; }
.outlogin_LoginBtn .LoginIcon{background:url(http://i.sso.sina.com.cn/images/login/loginButton_16a.png) no-repeat 0 0;}
.outlogin_layerbox_bylx li.loginform_yzm .reload-code{background:url(http://i.sso.sina.com.cn/images/login/verify_refresh.png) no-repeat 0 0;}
.outlogin_layerbox_bylx li.loginform_yzm .reload-code:hover{background-position:0 -18px;}</style><script src="%E6%96%B0%E9%97%BB%E6%90%9C%E7%B4%A2_%E6%96%B0%E6%B5%AA%E6%90%9C%E7%B4%A2_%E6%96%B0%E6%B5%AA%E7%BD%91_files/prelogin.html" type="text/javascript" id="ssoLoginScript" charset="gb2312"></script><style type="text/css">.ui-outlogin-shake {-moz-animation:outlogin-layer-shake 600ms;}
@-moz-keyframes outlogin-layer-shake {
0% {-moz-transform:translateX(0px);-moz-animation-timing-function:ease-out;}
10% {-moz-transform:translateX(-16px);-moz-animation-timing-function:ease-in;}
20% {-moz-transform:translateX(0px);-moz-animation-timing-function:ease-out;}
30% {-moz-transform:translateX(8px);-moz-animation-timing-function:ease-in;}
40% {-moz-transform:translateX(0px);-moz-animation-timing-function:ease-out;}
50% {-moz-transform:translateX(-4px);-moz-animation-timing-function:ease-in;}
60% {-moz-transform:translateX(0px);-moz-animation-timing-function:ease-out;}
70% {-moz-transform:translateX(2px);-moz-animation-timing-function:ease-in;}
80% {-moz-transform:translateX(0px);-moz-animation-timing-function:ease-out;}
90% {-moz-transform:translateX(-1px);-moz-animation-timing-function:ease-in;}
100% {-moz-transform:translateX(0px);-moz-animation-timing-function:ease-out;}
}
</style></head>
<body style="width:980px;min-height:900px;margin-left:250px;box-shadow:1px 1px 5px 3px #808080">
	<div style="display: block; visibility: hidden;" class="side-btns-wrap"><div class="side-btns-top"><a class="side-btns-top-btn" href="javascript:;" title="返回顶部" suda-uatrack="key=channel_index_up_to_top&amp;value=news" hidefocus="">返回顶部</a><a class="side-btns-top-close" href="javascript:;" title="关闭" suda-uatrack="key=channel_index_up_to_top&amp;value=news_close" hidefocus="">关闭</a></div></div>
<div class="topWrap">
<div style="position:relative;z-index:10000;width:980px;" id="top_column">
	<div class="top clearfix" style="width:975px;">
		<div class="l">
		<div class="l">

                 <h1 class="l">CMS搜索</h1>
        

          <div class="navType l">
			<a rel="/?q=[keyword]&amp;c=news" href="http://search.sina.com.cn/?q=%BD%E2%B7%C5%BE%FC&amp;c=news" class="selected" id="tab02" suda-uatrack="key=SearchHeader&amp;value=news">新闻</a>
			<a rel="/?q=[keyword]&amp;c=zt" href="http://search.sina.com.cn/?q=%BD%E2%B7%C5%BE%FC&amp;c=zt&amp;range=title" id="tab02" suda-uatrack="key=SearchHeader&amp;value=topic">商城</a>
			
          </div>
       	</div>
	</div>
		
        

	</div>
	
</div>    
<div class="top2">
        <!--             <h1 class="l"><a href="/?t=news"><img src="images/logo_new_yan.png" alt="新浪搜索" /></a></h1>
         -->
        <div class="search-form l">
            <form method="get" action="/" onsubmit="return submit_form(this)">
                <input name="q" autocomplete="off" maxlength="100" value="解放军" class="ipt-02" onblur="set_top_column_href(this.value);" id="keyword" type="text">
                <input value="" class="ipt-03" hidefocus="true" suda-uatrack="key=SearchHeader&amp;value=searchnews" type="submit">
                
                <p>
                   	<label class="label_range" for="range1_all">
                    <input onclick="news_range_search_base_click(this);" id="range1_all" checked="checked" name="range" value="all" type="radio">新闻全文</label>
                    <label class="label_range" for="range1_title">
                    <input onclick="news_range_search_base_click(this);" id="range1_title" suda-uatrack="key=SearchHeader&amp;value=title" name="range" value="title" type="radio">新闻标题</label>
                                </p>
               
                
                <input name="c" value="news" type="hidden">
                <input name="sort" value="time" type="hidden">
				                
                            </form>
        </div>
    </div>
</div>
<style type="text/css">

body{font-family: "Arial","Microsoft YaHei","微软雅黑";}/*0425*/
.r-info-blog .content{font-size: 14px;line-height: 20px;padding-top: 5px;padding-bottom: 10px;}/*0425*/
.box-result .r-info{width: 545px}/*0530*/
.box-result .r-info2{width: 670px}/*0605*/
.box-result .r-info a{text-decoration: none!important;}/*0425*/
.box-result .r-info-blog-tit a { text-decoration:none!important;}/*0528*/
input.ipt-03{background: url({{asset('images/searchbtn2.png')}}) 00px 0px no-repeat;}/*0425*/
.r-info-blog .fgray{color: #616161;padding-left: 10px;}/*0528*/
.box-result .r-info p a:link, .box-result .r-info p a:visited{color: #000099}/*0428*/
.box-result .r-info p a:hover{color: #ff0000}/*0428*/
/*0422 zyc*/
/*filter*/
.search_bar{width: 730px;padding-left: 30px;padding-bottom: 8px;}
.search_type{float: left;}
.search_type a{float: left;padding: 0 10px;height: 22px;line-height: 22px;color: #000099;}
.search_type a.cur{color: #fff;background: #4141aa;}
.search_filter{float: right;height: 22px;line-height: 22px;}
.search_filter .left{float: left;border-right: 1px solid #bcbcbc;padding-right: 15px;}
.search_filter .right{float: left;padding-left: 15px;}
.search_filter span,.search_filter a{padding: 0 5px;font-size: 12px;}
.search_filter .cur{color: #5f5f5f;}

/*result*/
.nav{width: 100%;margin-left: 0;}
.r-info-pic{float: left;margin-right: 10px;padding-top: 10px;_height:expression((this.offsetHeight)>260?"250px":"auto");max-height: 240px;overflow: hidden;}/*0528*/
.box-result .r-img{_height:expression((this.offsetHeight)>240?"240px":"auto");max-height: 240px;overflow: hidden;}
.r-info-pic img{border: 1px solid #e8e8e8;}
.box-result .r-info-blog{width: 530px;}/*0528*/
.box-result .r-info-blog-full{width: 660px;}/*0528*/
.box-result h2{font:normal normal normal 16px/1.67em "Arial","Microsoft YaHei","微软雅黑"}/*0428*/
.main .result{width: 690px;}/*0430*/
.box-result{border-bottom: 1px solid #f2f2f2;padding: 10px 0;margin-bottom: 0;}/*0428*/
.r-info-blog-tit .rib-author{color: #2c2c2c;}/*0528*/
.r-info-blog-tit .rib-author:visited{color: #2c2c2c;}/*0528*/
.r-info-blog-tit .rib-author:hover{color: #cc0033;}/*0528*/
.main .sRight{margin-top: 15px;}
.result_num{padding: 5px 0;color: #666;}

.result-top{border-bottom: 1px solid #d9d9f0;border-top: 1px solid #d9d9f0;margin-bottom: 0;}
.so_userinfo{border-bottom:1px solid #f2f2f2;padding: 20px 0;}
.result-top .so_userinfo{border-bottom: 0px;margin-bottom: 0;padding: 13px 0;}/*0428*/
.info_txt .it_p span{padding: 5px 0 2px;display: block;}/*0428*/
.info_txt ul{margin-top: 8px;}/*0428*/
.info_txt h4{font-size: 16px;}/*0428*/
.blog_rss{background: url(/images/0422_zyc_search_newIcons.png) 0 -93px no-repeat;display: block;text-indent: -999em;width: 58px;height: 18px;}
/*右侧rss,his,hotsearch*/
.main .sRight{border: 0;}
.blk_right{border-left: 1px solid #e9e9e9;padding-left: 10px;}
.blk_myRss{padding: 10px 0;border-bottom: 1px solid #e9e9e9;}

.br_title h4{font-size: 14px;color: #000;float: left;}
.br_title .rss_rssCur{background: url(/images/0422_zyc_search_newIcons.png) 0 -63px no-repeat;padding-left: 15px;font-size: 12px;float: right;color: #4141aa;}
.blk_myRss ul{margin-top: 10px;}
.ul_right li{height: 20px;line-height: 20px;position: relative;padding-left: 10px;margin-bottom: 5px;}
.ul_right li .delItem{display: none;background: url(/images/0422_zyc_search_newIcons.png) 0 0 no-repeat;width: 21px;height: 20px;position: absolute;right: 0;top:0;text-indent: -999em;border-left: 1px solid #fff;}
.ul_right li .delItem:hover{background-position: -29px 0;}
.ul_right li.cur{background: #e9eff5}
.ul_right .cur .delItem{display: block;}
.blk_myHis{padding: 10px 0;border-bottom: 1px solid #e9e9e9;}
.blk_myHis ul{margin-top: 10px;}
.blk_myHis .his_fold{background: url(/images/0422_zyc_search_newIcons.png) 0 -32px no-repeat;width: 16px;height: 14px;text-indent: -999em;float: left;margin-left: 5px;margin-top: 3px;overflow: hidden;}
.blk_myHis .his_fold:hover{background-position: -29px -32px;}
.blk_myHis .his_unfold{background-position: 0 -48px;}
.blk_myHis .his_unfold:hover{background-position: -29px -48px;}
.blk_myHis .his_clear{float: right;color: #929292;}
.blk_hotSearch{padding: 10px 0;border-bottom: 1px solid #e9e9e9;}
.ul_hotSearch{margin-top: 12px;}
.ul_hotSearch span{padding-right: 10px;display: inline-block;width: 18px;text-align: center;}
.ul_hotSearch .top3{color: #cc0033;font-size: 12px;}

.filterzz a{width: 100%;padding: 0;}
/*0630 zyc*/
.ul_right li .rssItem{display: block;width: 190px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;}
/*login*/
.login-frame{float: right;line-height: 34px;height: 34px;margin-top: 13px;position: relative;}
.login-frame a:link,.login-frame a:visited{color:#2c2c2c;}
.login-frame .login-button{padding-left:4px;padding-right: 10px;}
.login-frame .logined-wrap{float:left;}
.login-frame .top-nr-welcome{display: block;padding-top: 4px;}
.login-frame .username{padding-right:5px;}
.login-frame .logout{padding-right:15px;}
.login-frame a.username,.login-frame a.username:visited{color:#6c6c6c;}
.login-frame a.login-button:hover,.login-frame a.username:hover,.login-frame a.logout:hover{color:#ab010e;text-decoration:none;}

.login-frame a.username{display: block;background: url(/images/0422_zyc_search_newIcons.png) right -144px no-repeat;padding-right: 20px;height: 24px;line-height: 24px;border: 1px solid #f6f6f6;text-align: center;padding-left: 20px;color: #4141aa;width: 70px;white-space:nowrap; text-overflow:ellipsis; overflow:hidden}
.login-frame a.username:hover{background-color: #fff;border: 1px solid #ededed;}
.login-frame .logout{display: block;text-align: center;border: 1px solid #ededed;background:#f6f6f6;border-top:0px;height: 24px;line-height: 24px;padding-right: 20px;padding-left: 20px;width: 70px;position: absolute;}
.login-frame .logout:hover{background: #fff;}
.login-frame-on a.username{background-color: #fff;border: 1px solid #ededed;color: #4141aa;}
.login-frame-on a.username:visited{color: #4141aa;}
.login-frame-on .logout{color: #4141aa;}
.login-frame-on .logout:visited{color: #4141aa;}
.top{width: 1000px;padding-right: 0px;}
.top2{zoom:1;}
.top .r{margin-top: 13px;}
.r a:link, .r a:visited{color: #3d3d3d;}
.nav_inner{width: 730px;padding-left: 30px;}
.nav .r_v2{margin-top: 0!important;}
</style>
<div class="nav clearfix">
    <div class="nav_inner clearfix">
                
            <div class="search_type clearfix">
                <a href="http://search.sina.com.cn/?q=%BD%E2%B7%C5%BE%FC&amp;c=news&amp;col=&amp;range=all&amp;source=&amp;from=&amp;country=&amp;size=&amp;time=&amp;a=&amp;sort=time&amp;t=" class="cur">全部</a>
                <a href="http://search.sina.com.cn/?q=%BD%E2%B7%C5%BE%FC&amp;c=news&amp;col=&amp;range=all&amp;source=&amp;from=&amp;country=&amp;size=&amp;time=&amp;a=&amp;sort=time&amp;t=3_5_6" suda-uatrack="key=SearchBody&amp;value=includepic">含图片</a>
                <a href="http://search.sina.com.cn/?q=%BD%E2%B7%C5%BE%FC&amp;c=news&amp;col=&amp;range=all&amp;source=&amp;from=&amp;country=&amp;size=&amp;time=&amp;a=&amp;sort=time&amp;t=2" suda-uatrack="key=SearchBody&amp;value=includevideo">含视频</a>
            </div>
            <div class="r_v2"> 
                                 
                 
                   按时间 
                                  
                                | 
                                    <a href="http://search.sina.com.cn/?q=%BD%E2%B7%C5%BE%FC&amp;c=news&amp;col=&amp;range=all&amp;source=&amp;from=&amp;country=&amp;size=&amp;time=&amp;a=&amp;sort=rel" suda-uatrack="key=SearchBody&amp;value=correlation">
                    按相关度</a> 
                                  
                                | 
                                    <a href="http://search.sina.com.cn/?q=%BD%E2%B7%C5%BE%FC&amp;c=news&amp;col=&amp;range=all&amp;source=&amp;from=&amp;country=&amp;size=&amp;time=&amp;a=&amp;sort=count" suda-uatrack="key=SearchBody&amp;value=clicksort">
                    按点击量</a> 
                                  
                            </div>
            <!--  -->
        </div>
        </div>
    <div class="wrap" id="wrap">
        <div class="main clearfix">    
        <div class="result" id="result">
                        
              <span id="correct_box"></span>
			<div class="l_v2">找到相关新闻{{Session::get('count')}}篇</div>
                                    
             
                    <div class="mod_bar" style="width:688px">
        
                                
                                
                <!--
               

    <!--移动直达区到提示信息下方 20120908 dalong3-->
                        <div id="nav_result_container"></div>
        
                      
                            
             <!-- 这里就开始循环新闻的查询结果了,因为设定是在这同一个页面显示所有类型的搜索,
				所以要标明一下,是新闻的,还是别的商城什么的.
				$count是数据数量,如果没有查到,是0的话就不需要循环了
         	-->
         @if($type=='news' && Session::get('count'))
				<div class="box-result clearfix hover" data-sudaclick="blk_result_index_0">
	         	@foreach(Session::get('result') as $v)
	         	<!-- searchList是一个数组,由后台拼接而成,数组的键是title,值是content -->
					<div class="r-info r-info2">
						<h2><a href="http://cms/news-detail/{{$v->id}}" target="_blank">{{$v->title}}</a> <span class="fgray_time">{{$v->updated_at}}</span></h2>
						<p class="content">{{$v->content}}</p>
					</div>
				@endforeach
				</div>
        @endif      
         
        
        