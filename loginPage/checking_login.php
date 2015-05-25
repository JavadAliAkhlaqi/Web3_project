<?php
session_start();
//this import used for improting database connection page
include_once("../db_connection/connection.php");
//used for improting validation class
include_once("../crude_folder/validate_input.php");
//for validating user name;
$pattern="/^[A-Z]+[0-9a-zA-Z_]+[a-z_0-9]+$/";
$vl=new Validate_Input($pattern,$_GET["user"]);
//used for validating password entering;
$pattern="/^[\S]+$/";
$vl=new Validate_Input($pattern,$_GET["pass"]);
//start checking
if($vl->check_user()==0||$vl->check_user()==0){
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