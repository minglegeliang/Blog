<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="baidu-site-verification" content="gMSvLHvnWi" />
    <meta name="keywords" content="Toruneko,特鲁尼克,戴建豪,PHP,Java,设计模式,Windows Phone,C#" />
    <meta name="description" content="戴建豪(Toruneko)的博客." />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/blog.css" />
<title>剑阁-Toruneko</title>
    <link rel="shortcut icon" href="__PUBLIC__/Images/favicon.ico" type="image/x-icon"/>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/js/respond.min.js"></script>
	<![endif]-->
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
				<a class="navbar-brand" href="__URL__/index">Toruneko</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="__URL__/index">Home</a></li>
					<li><a href="__URL__/login">Login</a></li>
					
				</ul>
				<form action="http://blog.toruneko.net/search" class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" name="kw" class="form-control" placeholder="关键字" />
					</div>
					<button type="submit" class="btn btn-default">搜索</button>
				</form>
			</div>
		</div>
	</div>
    <div class="container-fluid blog-container"><div class="row">
	<div class="col-md-9 blog-container-list">
<!--文章的遍历-->
<?php if(is_array($data)): foreach($data as $key=>$d): ?><div class="page-header">
		<h2><a href="__URL__/content/id/<?php echo ($d["id"]); ?>"><?php echo ($d["title"]); ?></a></h2>
	</div>
	<div class="panel">
		<div class="panel-body"><pre><?php echo ($d["content"]); ?></pre></div>
		<div class="panel-footer">
		
			<span><a href='__URL__/add'>添加</a>|<a href="__URL__/change/id/<?php echo ($d["id"]); ?>">修改</a>|<a href="__URL__/delete/id/<?php echo ($d["id"]); ?>">删除</a></span>
			创建于：<?php echo ($d["timeat"]); ?>		By Toruneko
		</div>
	</div><?php endforeach; endif; ?>
<!--分页-->
<?php echo ($page); ?>

</div>
	<!--分类标签-->
<div class="col-md-3 blog-container-sidebar" id="sidebar">
    <div class="page-header">
        <span class="glyphicon glyphicon-chevron-up sidebar-toggle" for="#category"></span>
        <h6>分类标签</h6>
    </div>
    <?php if(is_array($list)): foreach($list as $key=>$l): ?><div class="list-group" id="category">
        <a href="__URL__/type/typename/<?php echo ($l["id"]); ?>" class="list-group-item">
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
<script type="text/javascript">
/*<![CDATA[*/
var offset = 20;

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