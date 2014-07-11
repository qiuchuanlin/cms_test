<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CMS</title>
    <meta name="author" content="SuggeElson" />
    <meta name="description" content="Supr admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
    <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, masonry, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
    <meta name="application-name" content="Supr admin template" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Force IE9 to render in normla mode -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Le styles -->
    <link href="http://cms/theme/html/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="http://cms/theme/html/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="http://cms/theme/html/css/icons.css" rel="stylesheet" type="text/css" />

    <!-- Main stylesheets -->
    <link href="css/main.css" rel="stylesheet" type="text/css" /> 

    <!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/libs/excanvas.min.js"></script>
      <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script type="text/javascript" src="js/libs/respond.min.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://cms/theme/html/images/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://cms/theme/html/images/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://cms/theme/html/images/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png" />

    <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
    <meta name="application-name" content="Supr"/> 
    <meta name="msapplication-TileColor" content="#3399cc"/> 

    </head>
      
    <body class="errorPage">

    <div class="container-fluid">

        <div class="errorContainer">
            <div class="page-header">
                <h1 class="center">404 <small>错误</small></h1>
            </div>

            <h2 class="center">找不到该页面</h2>

            <div class="center">
                <a href="javascript: history.go(-1)" class="btn" style="margin-right:10px;"><span class="icon16 icomoon-icon-arrow-left-10"></span>返回之前页面</a>
                <a href="http://cms" class="btn"><span class="icon16 icomoon-icon-screen"></span>首页</a>
            </div>

        </div>

    </div><!-- End .container-fluid -->

    <!-- Le javascript
    ================================================== -->
     <script  type="text/javascript" src="http://cms/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="http://cms/theme/html/js/bootstrap/bootstrap.js"></script>  

     <script type="text/javascript">
        // document ready function
        $(document).ready(function() {
            //------------- Some fancy stuff in error pages -------------//
            $('.errorContainer').hide();
            $('.errorContainer').fadeIn(1000).animate({
                'top': "50%", 'margin-top': +($('.errorContainer').height()/-2-30)
                }, {duration: 750, queue: false}, function() {
                // Animation complete.
            });
        });
    </script>
 
    </body>
</html>
