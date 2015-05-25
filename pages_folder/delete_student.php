<?php
include_once("../db_connection/connection.php");
$id=$_GET["id"];
$query="delete from student where idstudent=$id";
if(mysql_query($query)){
header("Location:http://localhost/Web3_project/indexPage_folder/index.php?title=student");
}else{
echo $query;

}

?>