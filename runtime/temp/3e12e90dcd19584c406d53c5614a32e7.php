<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\wamp\www\tp5\public/../application/index\view\article\article.html";i:1525447801;s:39:"../application/index/common/header.html";i:1523430779;s:38:"../application/index/common/right.html";i:1525446086;s:37:"../application/index/common/foot.html";i:1521521025;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>我的博客</title>
        <meta name="keywords" content="博客" />
        <meta name="description" content="博客" />
        <meta name="mobile-agent" content="format=html5; url=http://m.zx.wed114.cn/shenghuo/20160920156214.html" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<link href="http://127.0.0.1/tp5/public/static/index/style/lady.css" type="text/css" rel="stylesheet" />
		<script type='text/javascript' src='http://127.0.0.1/tp5/public/static/index/style/ismobile.js'></script>
    </head>

    <body>

           <div class="ladytop">
            <div class="nav">
               
                <div class="right">
                <div class="box">
                       <a href="<?php echo url('index/index'); ?>"  rel='dropmenu209'>首页</a> 
                    <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                 <a href="<?php echo url('cate/index',array('cateid'=>$vo['id'])); ?>"  rel='dropmenu209'><?php echo $vo['catename']; ?></a> 
                   <?php endforeach; endif; else: echo "" ;endif; ?>            
                 </div>
                </div>
            </div>
        </div>

<!-- <div class="hotmenu">
	<div class="con">热门标签：<a href='qiwenqushi/'>奇闻趣事</a> <a href=''>生活妙招</a> <a href='xingzuo/'>星座</a> <a href='qinzi/'>亲子</a> <a href='qiche/'>汽车</a> <a href='chongwubaike/'>宠物百科</a> <a href='jiaji/'>家居</a> </div>
</div> -->

<!--顶部通栏-->
        <!--顶部通栏-->
        <script src='/jiehun/goto/my-65547.js' language='javascript'></script>
<div class="position"><a href="<?php echo url('index/index'); ?>">主页</a> > <a href="<?php echo url('cate/index',array('cateid'=>$cates['id'])); ?>"><?php echo $cates['catename']; ?></a> >  </div>


        <div class="overall">
            <div class="left">
                <div class="scrap">
                    <h1><?php echo $articles['title']; ?></h1>
                    <div class="spread">
                        <span class="writor">发布时间：<?php echo date("Y-m-d",$articles['time']); ?></span>
                        <span class="writor">编辑：<?php echo $articles['author']; ?></span>
                       
                           <span class="writor">标签：
                                <?php
                    $arr=explode(',',$articles['keywords']);
                 foreach ($arr as $k=>$v){
                 echo "<a >$v</a> ";
             }
                    ?></span> 
                    <span class="writor">热度：<?php echo $articles['click']; ?></span>
                    </div>
                </div>
               

                <div class="takeaway">
                    <span class="btn arr-left"></span>
                    <p class="jjxq"><h3 style="color: red">摘要：</h3><?php echo $articles['desc']; ?>
             </p>
                    <span class="btn arr-right"></span>
                </div>

                  <script src='/jiehun/goto/my-65541.js' language='javascript'></script>

                <div class="substance">
              <img src="<?php if($articles['pic'] != ''): ?>http://127.0.0.1/tp5/public/<?php echo $articles['pic']; else: ?>http://127.0.0.1/tp5/public/static/index/images/error.png<?php endif; ?>" alt="" />
              <?php echo $articles['content']; ?>
                <div class="biaoqian">
                   
                </div>
</div> 
                <!--频道推荐-->
                <div class="hotsnew">
                <div class="til"><h4>频道推荐</h4></div>
                <ul>
                 <?php if(is_array($recres) || $recres instanceof \think\Collection || $recres instanceof \think\Paginator): $i = 0; $__LIST__ = $recres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                     <li><div class="tu"><a href='<?php echo url('article/index',array('arid'=>$vo['id'])); ?>' target="_blank"><img src="<?php if($vo['pic'] != ''): ?>http://127.0.0.1/tp5/public/<?php echo $vo['pic']; else: ?>http://127.0.0.1/tp5/public/static/index/images/error.png<?php endif; ?>" alt=""/></a></div><p><a href='<?php echo url('article/index',array('arid'=>$vo['id'])); ?>'><?php echo $vo['title']; ?></a></p></li>
                     
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </div>		
                </div>

         
  
<div class="right">
<div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
<div class="hm-t-container" style="width: 298px;"><div class="hm-t-main"><div class="hm-t-header">热门点击</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
  <?php if(is_array($clicks) || $clicks instanceof \think\Collection || $clicks instanceof \think\Paginator): $i = 0; $__LIST__ = $clicks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<li class="hm-t-item hm-t-item-img"><a data-pos="0" title="<?php echo $vo['title']; ?>" target="_blank" href="
  <?php echo url('article/index',array('arid'=>$vo['id'])); ?>" class="hm-t-img-title" style="visibility: visible;"><span><?php echo $vo['title']; ?></span></a></li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div></div></div>

</div></div>
<div style="height:15px"></div>
<div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
<div style="width: 298px;" class="hm-t-container"><div class="hm-t-main"><div class="hm-t-header">推荐阅读</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
  <?php if(is_array($tjres) || $tjres instanceof \think\Collection || $tjres instanceof \think\Paginator): $i = 0; $__LIST__ = $tjres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<li class="hm-t-item hm-t-item-img"><a data-pos="0" title="<?php echo $vo['title']; ?>" target="_blank" href="
  <?php echo url('article/index',array('arid'=>$vo['id'])); ?>" class="hm-t-img-title" style="visibility: visible;"><span><?php echo $vo['title']; ?></span></a></li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div></div></div>

</div></div>
<div style="height:15px"></div>
<div id="bdcs"><div class="bdcs-container"><meta content="IE=9" http-equiv="x-ua-compatible">   
<!-- 嵌入式 -->  
<div id="default-searchbox" class="bdcs-main bdcs-clearfix">    
<div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">          
<form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="get" action="<?php echo url('search/index'); ?>">                                                                 
<input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="keywords" autocomplete="off" style="line-height: 30px; width:220px;">             
<input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">                      
</form>      
</div>               
<div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">             
 <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>         
  </div>                 
   </div>                           
</div>
</div>

<div style="height:15px"></div>


                
            </div>
    
</div>

    
</div>

       
<div class="footerd">
<ul>
<li>Copyright &#169; 2008-2016  all rights reserved 版权所有   <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">蜀icp备08107937号</a></li> 
</ul>
</div>

<div style="display:none;"><script src='goto/my-65537.js' language='javascript'></script><script src="images/js/count_zixun.js" language="JavaScript"></script></div>

    </body>
</html>