function addlatest(){
	
	
	
	var title=document.getElementById("title").value;
	var emb=document.getElementById("emb").value;
	var descip=document.getElementById("descip").value;
	
	title=title.trim();
	emb=emb.trim();
	
	if(title==""){
		alert("please enter title");
		
	}
	else if(emb==""){
		alert("please enter link");
		
	}
	else{
		
		var r=new XMLHttpRequest();
		var t=Math.random();
		r.onreadystatechange=function(){
			if(r.readyState==4){
				alert(r.responseText);
			}
		}
		
		
		
		
	}
	r.open("post","includes/addmaster.php?s="+t+"&title="+title+"&emb="+emb+'&descip='+descip);
	r.send();
	
}