
var xmlhttp;
if(window.XMLHttpRequest){
xmlhttp =new XMLHttpRequest();
}else{
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

}
function showClName(){
	xmlhttp.open("GET","../import_component/showName.php");
	xmlhttp.send(null);
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.status==200 && xmlhttp.readyState==4){
			document.getElementById("selectError3").innerHTML=xmlhttp.responseText;
		}
	}

}
function showStName(){
	var student_name=document.getElementById("typeahead1").value;
	document.getElementById('typeahead11').value=student_name;
}
function insert(){alert("untill this step it is oke");
	//var name,fname,ssn,brDate,inDate,grade;
	//var id=document.getElementById('typeahead12').value;
	var name=document.getElementById('typeahead1').value;
	var fname=document.getElementById('typeahead2').value;
	var ssn=document.getElementById('typeahead3').value;
	var brDate=document.getElementById('typeahead4').value;
	var inDate=document.getElementById('typeahead5').value;
	var grade=document.getElementById('selectError3').value;
	var file=document.getElementById('fileInput1').value;

	xmlhttp.open("GET","../import_component/insert_student.php?name="+name+"&fname="+fname+"&ssn="+ssn+"&brDate="+brDate+"&inDate="+inDate+"&grade="+grade+"&file="+file);
	xmlhttp.send();
	xmlhttp.onreadystatechange=function  () {
		// body...
		if(xmlhttp.status==200 && xmlhttp.readyState==4){
			if(xmlhttp.responseText=="inserted"){
			alert("successfully inserted");
		}else{
			alert(xmlhttp.responseText);
		}
		}
	}
}
function update_student(){
	var name=document.getElementById('typeahead1').value;
	var fname=document.getElementById('typeahead2').value;
	var ssn=document.getElementById('typeahead3').value;
	var birthDate=document.getElementById('typeahead4').value;
	var startDate=document.getElementById('typeahead5').value;
	var grade=document.getElementById('selectError3').value;
	var img=document.getElementById('fileInput1').value;
	var id=document.getElementById('typeahead12').value;
xmlhttp.open("GET","../import_component/update_student.php?name="+name+"&fname="+fname+"&ssn="+ssn+"&birthDate="+birthDate+"&startDate="+startDate+"&grade="+grade+"&img="+img+"&id="+id);
xmlhttp.send();
xmlhttp.onreadystatechange=function  () {
	// body...
	if(xmlhttp.status==200 && xmlhttp.readyState==4){

document.getElementById('txt_area').innerHTML=xmlhttp.responseText;

	}
}
}
function checkSSN () {
	
	var ssn=document.getElementById('typeahead3').value;
	

	xmlhttp.open("get","../import_component/checkSSN.php?ssn="+ssn);
	xmlhttp.send();
	xmlhttp.onreadystatechange=function  () {
		if(xmlhttp.status==200 && xmlhttp.readyState==4){
			if(xmlhttp.responseText=="exist"){
			alert(xmlhttp.readyState);
		}else{
			alert(xmlhttp.responseText+"false");
		}
}
	}
}
function showJobName () {
	
	// body...
	xmlhttp.open("get","../import_component/showJobName.php");
	
	xmlhttp.send();
	xmlhttp.onreadystatechange=function  () {
	
		if(xmlhttp.status=200 && xmlhttp.readyState==4){
			document.getElementById('selectError3').innerHTML=xmlhttp.responseText;
		}
	}
}
function checking(){

var pass=document.getElementById("inputPass").value;

var user=document.getElementById("inputUser").value;

xmlhttp.open("GET","../login/checking.php?pass="+pass+"&user="+user);

xmlhttp.send();

xmlhttp.onreadystatechange=function(){

if(xmlhttp.status==200 && xmlhttp.readyState==4){

if(xmlhttp.responseText=="found"){
	window.location.assign("http://localhost/Web3_project/first_layer/index.php");
}else{if(xmlhttp.responseText=="not found"){
	document.getElementById('alerg').innerHTML="Please check your username or password!";
}else{
	document.getElementById("alerg").innerHTML="Please fill all of the fields!";
}
 }

}
}
}

