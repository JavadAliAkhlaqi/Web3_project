<?php
$name=$_GET["name"];
$fname=$_GET["fname"];
$brDate=$_GET["brDate"];
$inDate=$_GET["inDate"];
$file=$_GET["file"];
$ssn=$_GET["ssn"];
$grade=$_GET["grade"];
include_once("../crude_folder/crude.php");
$cr=new Crude();
$cr->setHost("localhost");
$cr->setUser("root");
$cr->setPassword("");
$cr->setDatabase("school");
$table ="student";
$col="idStudent,name,fatherName,birthDate,image,ssn,id_gr,startDate";
$value="null,'".$name."','".$fname."','".$brDate."','".$file."','".$ssn."',".$grade.",'".$inDate"'";
if($cr->insert($table,$col,$value)==1){
	header("Location:index.php?title=student");
}
?>
