var login={
	check:function(){
		var email=$("#email").val();
		var password=$("#password").val();
		var data={email:email,password:password};
		$.post(url,data,function(data,status){
			alert(status);
		},'json');
	}
}