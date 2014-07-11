<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>内容编辑页面</title>
    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="{{asset('theme/html/css/custom.css')}}" rel="stylesheet" type="text/css" /> 
    <script type="text/javascript" src="{{asset('theme/html/js/jquery.min.js')}}"></script>
    <!-- 自己的js -->
    <script src="{{asset('js/my.js')}}"></script>
    <!-- ckEditor编辑器 -->
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
</head>
<body>
    <div class="tab-pane fade newsContent" id="addContentnews">
        <!-- 因为整个页面是用js的showModalDialog生成的,showModalDialog在请求url时就会转到后台控制器了,
            然后下面form的url需要用到的id已经传过来了,$news代表的就是那一条内容数据.
         -->
        {{Form::model($news,array('url'=>"admin/content/edit/$id",'files'=>true))}}
        <!-- [后加] 增加一个设置为头条的操作,应该是每个版块都只能有一个头条.
            头条新闻在前台页面上可以表现为粗体,以吸引人注意.作者这一栏可以去掉,
            发现别人的新闻都不会写作者
        -->
        <div>
            {{Form::label('title','＊标题:')}}
            {{Form::text('title')}}
        </div>
        <div>
            {{Form::label('author','作者:')}}
            {{Form::text('author')}}
        </div>
        <div>
            {{Form::label('content','＊内容:')}}  

             <!--注意这里,上传的时候是用的ckeditor编辑的数据,它有很多标签,写入数据库的时候经过转义.
                ----------------------------------------------------------------------
                这里显示时,得把内容转回来.Form::model本身是不会做一步的,它只会把上面这个$news的内容分配到对应字段.
                ---------------------
                也许可以在后台的时候处理好这一个内容,然后拼接回一个对象,再传到模板来显示.
                -----------------------------------------------------------
                为了方便,现在直接在模板上来调,这个就不要写Form::textarea了,写原生的.
               -->
            <textarea name="content" id="content"  class="ckeditor">
                {{preg_replace('/rn/','',stripslashes($news->content))}}
            </textarea>   
             <!--用ckeditor替换普通的textarea  -->
             <script>
                    CKEDITOR.replace("content");
             </script>
        </div>
        {{Form::token()}}
        <button type="submit" style="margin-top:25px;margin-left:300px;width:480px;height:50px" class="btn btn-info center"><span class="icon16 icomoon-icon-enter white"></span>提交</button>
        {{Form::close()}}

        <!-- 判断下错误信息 -->
        @if(@$msg)
            <script>alert("{{$msg}}")</script>
        @endif   
    </div> 
</body>
</html>