<?php
session_start();
include_once("../db_connection/connection.php");
if($_GET["pass"]==""||$_GET["user"]==""){

echo "empty";
}else{
	$password=$_GET["pass"];
	$username=$_GET["user"];
	$que="select * from admin where password='$password' and user_name='$username'";
	$result=mysql_query($que);

	
	do {
		# code...
		$row=mysql_fetch_assoc($result);
		if($password==$row["password"]&$username==$row["user_name"]){
        $_SESSION["go"]="$username";
			echo "found";
		}else{
			echo "not found";
		}
	} while ( mysql_fetch_assoc($result));

}

?>