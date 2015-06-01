<?php
if(isset($_POST["submit"])){
	$name=$_POST["name"];
	$fname=$_POST["fname"];
	$bDate=$_POST["brDate"];
	$sDate=$_POST["stDate"];
	$id=$_POST["id"];
	$photo=$_FILES["photo"]["name"];
	$grade=$_POST["grade"];
	$ssn=$_POST["ssn"];
	//used for inserting data after updating.
include_once("../crude_folder/crude.php");
$cr=new Crude();
$table ="student";
$setting="set name='".$name."',fatherName='".$fname."',birthDate='".$bDate."',image='".$photo."',ssn='".$ssn."',startDate='".$sDate."'";
$condition="where idStudent=".$id;
if($cr->update($table,$setting,$condition)==1){
	
	header("Location:http://localhost/Web3_project/indexPage_folder/index.php?title=student");
}else{
	echo "sorry try again later";
}
}else{

}

?>