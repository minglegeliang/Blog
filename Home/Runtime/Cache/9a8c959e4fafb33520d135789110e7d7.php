<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="baidu-site-verification" content="gMSvLHvnWi" />
    <meta name="keywords" content="Toruneko,特鲁尼克,戴建豪,PHP,Java,设计模式,Windows Phone,C#" />
   
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/blog.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/sunburst.css" />
<title><?php echo ($blog[0]["title"]); ?>| 剑阁-Toruneko</title>
    <link rel="shortcut icon" href="http://toruneko.sinaapp.com/favicon.ico" type="image/x-icon"/>
    <script type="text/javascript" >
    
        function sub(){
            
        var username=document.myForm.username;
        var password=document.myForm.email;
        var code=document.myForm.verifyCode;
        var contents=document.myForm.contents;
        if(username.value==''|| password.value==''|| code.value == '' || contents.value==''){
            alert('不能为空');
        }else{
            document.myForm.submit();
            
            
        }
    }
    </script>

</script>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Toruneko</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="__URL__/index">Home</a></li>
                    <li><a href="__URL__/login">Login</a></li>
					
				</ul>
				<form action="__URL__/search" class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" name="kw" class="form-control" placeholder="关键字" />
					</div>
					<button type="submit" class="btn btn-default">搜索</button>
				</form>
			</div>
		</div>
	</div>
    <div class="container-fluid blog-container"><div class="row">
    <div class="col-md-12 blog-container-breadcrumbs">
        <ol class="breadcrumb">
<li><a href="__URL__/index">Home</a></li></li><li><a href="__URL__/search">搜索</a></li><li class="active"><?php echo ($blog[0]["title"]); ?></li></ol>    </div>
    <div class="col-md-9 blog-container-content">
        <div class="page-header"><span><a href="#comment" class="btn btn-default">留下足迹</a></span><h2>标题：<?php echo ($blog[0]["title"]); ?></h2><h5>(分类：<?php echo ($blog[0]["typename"]); ?>)</h5></div>
        <div class="panel">
            <div class="panel-body">
               <pre><h3>内容：<?php echo ($blog[0]["content"]); ?></h3></pre>
                           
            </div>
            <div class="panel-footer">
            <span class="bdsharebuttonbox">
                <a href="#" class="bds_more" data-cmd="more"></a>
                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
            </span>
			<span>
				归档日期：
				<a href=""><?php echo ($blog[0]["timeat"]); ?></a>
			</span>
                创建于：<?php echo ($blog[0]["timeat"]); ?> By <?php echo ($blog[0]["author"]); ?>           </div>
        </div>
        <ul class="pager">
        <li class="previous"><a href="__URL__/content/id/<?php echo ($id-1); ?>">&larr; 上一篇</a>
        <li class="next"><a href="__URL__/content/id/<?php echo ($id+1); ?>">下一篇 &rarr;</a></li>
        </ul>
        <h3 style="color:green;">评论：</h3>
        <?php if(is_array($com)): foreach($com as $key=>$c): ?><p style="background:rgb(245,245,235);"><?php echo ($c["content"]); ?><p>
        	By--- <?php echo ($c["commenter"]); endforeach; endif; ?>
        <div class="page-header"><h4>留下足迹</h4><a name="comment"></a></div>
        <ul class="list-group commentList" id="commentList">
            <span class="empty"></span>        </ul>
        <form  name='myForm' class="form-horizontal" id="commentBox" action="__URL__/comment" method="post" >    <div class="form-group" id="commentReply">
        <label class="col-md-2 control-label">回复</label>
        <div class="col-md-6">
            <input class="form-control" type="text" disabled="disabled">
            <input value="0" name="ContactForm[fid]" id="ContactForm_fid" type="hidden" />        </div>
        <div class="col-md-2">
            <a class="btn btn-default cancel" href="##">取消</a>        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label required" for="ContactForm_username">昵称 <span class="required">*</span></label>        <div class="col-md-6">
            <input class="form-control" name="username" id="ContactForm_username" type="text" />        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label required" for="ContactForm_email">邮箱 <span class="required">*</span></label>        <div class="col-md-6">
            <input class="form-control" name="email" id="ContactForm_email" type="text" />        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label required" for="ContactForm_content">留言 <span class="required">*</span></label>        <div class="col-md-6">
            <textarea class="form-control" style="height:150px" name="contents" id="ContactForm_content"></textarea>        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="form-group">
                    <label class="col-md-2 control-label" for="ContactForm_verifyCode">验证码</label>            <div class="col-md-2">
                <img src="__APP__/Public/code" onclick="this.src=this.src+'?'+Math.random()"/>           </div>
            <div class="col-md-2">
                <input class="form-control" name="verifyCode" id="ContactForm_verifyCode" type="text" />            </div>
                <div class="col-md-offset-1 col-md-1">
            <input type="hidden" name="yt0" value="<?php echo ($blog[0]['id']); ?>"/>   
            <button type ="button" class="btn btn-default" name="yt"  onclick="sub()">提交</button>  </div>
        <div class="col-md-2"></div>
    </div>
</form>    </div>
    <div class="col-md-3 blog-container-sidebar" id="sidebar">
    <div class="page-header">
        <span class="glyphicon glyphicon-chevron-up sidebar-toggle" for="#category"></span>
        <h6>分类标签</h6>
    </div>
    <?php if(is_array($list)): foreach($list as $key=>$l): ?><div class="list-group" id="category">
        <a href="__URL__/type/typename/<{<?php echo ($l["typename"]); ?>}>" class="list-group-item">
			<span class="badge"><?php echo ($l["num"]); ?></span><?php echo ($l["typename"]); ?>
		</a>
	</div><?php endforeach; endif; ?>
</div></div></div>
	<div class="container-fluid text-center">
		&copy; 2014 - 2015		Toruneko. All rights reserved.
		Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a>.        <a href="http://sae.sina.com.cn/">
            <img title="Sae App Engine" alt="Sae App Engine" width="117" height="12" src="http://sae.sina.com.cn/doc/_images/poweredby-117x12px.gif"/>
	    </a>
    </div>
<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://libs.useso.com/js/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/main/blog.js"></script>
<script type="text/javascript" src="http://cdn.bootcss.com/prettify/r298/prettify.min.js"></script>
<script type="text/javascript">
/*<![CDATA[*/
prettyPrint();
var offset = 75;
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];

var current = window.location.href;
$('.nav li').each(function(){
    var href = $(this).find('a').attr('href');
    if(href == current){
        $('.nav li.active').removeClass('active');
        $(this).addClass('active');
    }else if(current.match('^'+href+'.*')){
        $('.nav li.active').removeClass('active');
        $(this).addClass('active');
    }
});


var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?e259f8f91c0fa95b00c128e2cb9c9503";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();

/*]]>*/
</script>
</body>
</html>