<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"D:\phps\PHPTutorial\WWW\tp5\public/../application/admin\view\article\add.html";i:1525599412;s:36:"../application/admin/common/top.html";i:1523431717;s:37:"../application/admin/common/left.html";i:1521689969;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>后台管理</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://127.0.0.1/tp5/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1/tp5/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="http://127.0.0.1/tp5/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://127.0.0.1/tp5/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://127.0.0.1/tp5/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://127.0.0.1/tp5/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="http://127.0.0.1/tp5/public/static/admin/style/animate.css" rel="stylesheet">
    <script type="text/javascript" src="http://127.0.0.1/tp5/public/static/admin/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="http://127.0.0.1/tp5/public/static/admin/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="http://127.0.0.1/tp5/public/static/admin/ueditor/lang/zh-cn/zh-cn.js"></script>

</head>
<body>
    <!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                           
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://127.0.0.1/tp5/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('uid'))); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
    <!-- /头部 -->
	   <div class="main-container container-fluid">
        <div class="page-container">
                        <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理员</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
             <li>
                                <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                                         <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-folder-o "></i>
                            <span class="menu-text">栏目</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                      <a href="<?php echo url('Cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目选择                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文档</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                     <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa  fa-mail-forward"></i>
                            <span class="menu-text">友情链接</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                      <a href="<?php echo url('Links/lst'); ?>">
                                    <span class="menu-text">
                                        链接详情                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>                        
                    
                                           
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                   <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('lst/'); ?>"> 文章管理</a>
                    </li>
                                        <li class="active">添加文章</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->


                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增文章</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label no-padding-right"> 文章标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" id=" title" placeholder="" name=" title"  type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                         <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <label for="author" class="col-sm-2 control-label no-padding-right"> 文章作者</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="author" placeholder="" name="author"  type="text">
                            </div>
                           </div>
                        
                         <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <label for="keywords" class="col-sm-2 control-label no-padding-right"> 关键字</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="keywords" placeholder="" name="keywords"  type="text">
                            </div>
                      
                        </div>
                         <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <label for="pic" class="col-sm-2 control-label no-padding-right"> 缩略图</label>
                            <div class="col-sm-6">
                                <input id="pic" placeholder="" name="pic"  type="file">
                            </div>
                        </div>
                            <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <label for="photo" class="col-sm-2 control-label no-padding-right"> 图册</label>
                            <div class="col-sm-6">
                                 <input type="file" name="photo[]"  multiple="multiple"/> 
                            </div>
                        </div>
                         <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <label for="cateid" class="col-sm-2 control-label no-padding-right"> 所属栏目</label>
                            <div class="col-sm-6">
                               <select name="cateid">
                              <option value="">请选择栏目</option>
                              <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                              <option value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?></option>
                              <?php endforeach; endif; else: echo "" ;endif; ?>
                               </select>
                            </div>
                          <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                              <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <label for="state" class="col-sm-2 control-label no-padding-right"> 是否推荐</label>
                            <div class="col-sm-6">
                              <label>
                                <input class="checkbox-slider colored-blue" name="state" checked="checked" type="checkbox">
                                  <span class="text"></span>
                              </label>
                            </div>
                        </div>
                         <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <label for="desc" class="col-sm-2 control-label no-padding-right"> 文章描述</label>
                            <div class="col-sm-6">
                             <textarea name="desc" class="form-control" id="desc"></textarea>
                            </div>
                         
                        </div>
                   <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <label for="content" class="col-sm-2 control-label no-padding-right">文章内容</label>
                            <div class="col-sm-6">
                                <label>
                                <textarea name="content"  id="content"></textarea>
                            </label>
                            </div>
                       
                        </div>
                       
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="http://127.0.0.1/tp5/public/static/admin/style/jquery_002.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/admin/style/bootstrap.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://127.0.0.1/tp5/public/static/admin/style/beyond.js"></script>
    <script type="text/javascript">

UE.getEditor('content',{initalFrameWidth: 1000 ,initalFrameHight:500,});

    </script>
    


</body></html>