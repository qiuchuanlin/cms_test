@extends("admin.layout")
@section("con")

<!-- 自己写点页面 -->
<h2>CMS<span>后台管理首页</span></h2>
 <div class="status">
        <p class="p1">用户状态</p>
        <p>
                用户：
                <strong>{{$user}}</strong>,
                所属用户组：
                <strong>管理员</strong>
        </p>
        <p>
                这是您第
                <strong>{{$frequency}}</strong>
                次登录，
                上次登录时间：
                <span>{{$last_login}}</span>,
                登录IP：
                <span>{{$ip}}</span>
        </p>
        <div id="datepicker-inline"></div>
 </div> 
 <div class="status server">
        <p class="p1">服务器信息</p>
        <ul>
            <li>
                <span>服务器软件:</span>
                <span class="s2">{{$server_software}}</span>
            </li>
            <li>
                <span>操作系统:</span>
                <span class="s2">{{$os}}</span>
            </li>
            <li>
                <span>php版本:</span>
                <span class="s2">{{$php_version}}</span>
            </li>
            <li>
                <span>MYSQL版本:</span>
                <span class="s2">{{$mysql_version}}</span>
            </li>
            <li>
                <span>是否允许文件上传:</span>
                <span class="s2">{{$upload_allow}}</span>
            </li>
            <li>
                <span>单个文件最大尺寸:</span>
                <span class="s2">{{$upload_max_filesize}}</span>
            </li>
            <li>
                <span>文件上传上限:</span>
                <span class="s2">{{$post_max_size}}</span>
            </li>
            <li>
                <span>使用域名:</span>
                <span class="s2">{{$domain}}</span>
            </li>
         
        </ul>
 </div>  
@stop
