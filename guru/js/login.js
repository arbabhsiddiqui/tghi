function login() {
	
	
	let userid=document.getElementById("jname").value;
	let pwd=document.getElementById("jpwd").value;
	
	if(userid==""){
		alert("enter user id");
		return false;
	}
	else if(pwd==""){
		alert("enter password");
		return false;
	}
	else{
		
		var r=new XMLHttpRequest();
		var t=Math.random();
		r.onreadystatechange=function(){
			if(r.readyState==4){
				if(r.responseText=="login"){
					window.location="welcome.php";
				}
				else{
					alert(r.responseText);
				}
			}
		}
		
	}
	r.open("post","includes/login.php?s="+t+"&id="+userid+"&pwd="+pwd);
	r.send();
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
