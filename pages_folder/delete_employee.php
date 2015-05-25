<?php
include_once '../db_connection/connection.php';
$id=$_GET["id"];
if(mysql_query("delete from employee where idEmployee='$id'")){

	header("Location:http://localhost/Web3_project/indexPage_folder/index.php?title=employee");

}else{
echo "trye again later";
}
?>