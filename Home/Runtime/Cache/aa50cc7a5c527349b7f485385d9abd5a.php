<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://libs.useso.com/js/bootstrap/3.2.0/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="http://toruneko.sinaapp.com/assets/admin/admin.css" />

<title>剑阁-Toruneko 后台管理系统</title>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="/assets/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="/assets/js/respond.min.js"></script>
	<![endif]-->
<script type="text/javascript" >
	
		function sub(){
		var ou=document.myForm.username;
		var op=document.myForm.password;
		var oc=document.myForm.code;
		if(ou.value==''|| op.value==''|| oc.value == ''){
			alert('用户名或密码或验证码不能为空');
		}else{
			document.myForm.submit();
			
		}
	}
</script>
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">剑阁-Toruneko 后台管理系统</div>
				<div class="panel-body">
                    <form name='myForm' class="form-horizontal" id="yw0" action="__URL__/dologin" method="post">                    <div class="form-group">
                        <label class="col-md-3 control-label required" for="LoginForm_username">用户名 <span class="required">*</span></label>                        <div class="col-md-9">
                            <input class="form-control" name="username" id="LoginForm_username" type="text" />                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label required" for="LoginForm_password">密码 <span class="required">*</span></label>                        <div class="col-md-9">
                            <input class="form-control" name="password" id="LoginForm_password" type="password" />                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label required" for="LoginForm_password">验证码 <span class="required">*</span></label>                        
                        <div class="col-md-9">
                            <input class="form-control" name="code" id="LoginForm_password" type="text" style="width:80px;" /> 
                             <img src="__APP__/Public/code" onclick="this.src=this.src+'?'+Math.random()"/>              
                        </div>
                    </div>
                    
                   
				
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-4">
                            <div class="checkbox">
                                <label>
                                    <input id="ytLoginForm_remember" type="hidden" value="0" name="LoginForm[remember]" /><input name="LoginForm[remember]" id="LoginForm_remember" value="1" type="checkbox" />记住我
                                </label>
                            </div>
                        </div>
                        <div class="col-md-offset-1 col-md-2">
                            <input class="btn btn-default" type="button" name="yt0" value="进入" onclick="sub()" />                        </div>
                    </div>
                    </form>				</div>
				<div class="panel-footer">
												</div>
			</div>
		</div>
	</div>
</div>
	<div class="spinner" id="loading" style="display:none;">
		<div class="spinner-container container1">
			<div class="circle1"></div>
			<div class="circle2"></div>
			<div class="circle3"></div>
			<div class="circle4"></div>
		</div>
		<div class="spinner-container container2">
			<div class="circle1"></div>
			<div class="circle2"></div>
			<div class="circle3"></div>
			<div class="circle4"></div>
		</div>
		<div class="spinner-container container3">
			<div class="circle1"></div>
			<div class="circle2"></div>
			<div class="circle3"></div>
			<div class="circle4"></div>
		</div>
	</div>
<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://libs.useso.com/js/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/admin/jquery.admin.js"></script>
</body>
</html>