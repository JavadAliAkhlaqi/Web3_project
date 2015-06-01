<?php
//used for importing class
include_once("../crude_folder/crude.php");
$id=$_GET["id"];
$crd=new Crude();
$table="student";
$condition="where idStudent='".$id."'";
if($crd->delete($table,$condition)==1){
header("Location:http://localhost/Web3_project/indexPage_folder/index.php?title=student");
}else{
echo "sorry try again later";
}

?>