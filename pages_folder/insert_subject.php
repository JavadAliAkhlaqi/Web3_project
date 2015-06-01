<?php
include_once("../crude_folder/crude.php");
$sname=$_GET["sname"];
$clid=$_GET["clid"];
$numpage=$_GET["spage"];
$cols="idSubject,id_gr,subjectName,number_page";
$table="subject";
$values="null,".$clid.",'".$sname."','".$numpage."'";
$crd=new Crude();
if($crd->insert($table,$cols,$values)==1){
echo "inserted successfully";
}else{
	echo "sorry";
}
?>