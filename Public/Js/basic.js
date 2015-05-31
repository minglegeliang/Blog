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