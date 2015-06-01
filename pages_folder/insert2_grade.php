<?php
include_once("../crude_folder/crude.php");
if(isset($_POST["submit"])){
$clname=$_POST["clName"];
$numSub=$_POST["subAmount"];
$crd=new Crude();
$cols="idGrade,gradeName";
$table="grade";
$value="null,'".$clname."'";
if($crd->insert($table,$cols,$value)==1){
	header("Location:http://localhost/Web3_project/indexPage_folder/index.php?title=grade");
}else{
	echo "try again later";
}
}else{
	echo "you should fill filds and then submit";
	}
?>