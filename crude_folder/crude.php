<?php
include_once("dbCannection.php");
 class Crude{
	public $host;
	public $user;
	public $password;
	public $database;
	function __construct(){
//$this->db_connection();
	}
	public function db_connection(){
		$con=mysql_connect($this->host,$this->user,$this->password);
		if($db=mysql_select_db($this->database,$con)){
			echo "a database has been selected";
		}else{
			echo "no database selected";
		}
}
function setHost($host){
	$this->host=$host;
}
function setUser($user){
$this->user=$user;
}
function setPassword($password){
	$this->password=$password;
}
function setDatabase($database){
$this->database=$database;
}
function insert($table,$col,$values){
$ins="insert into ".$table."(".$col.") values(".$values.")";
if(mysql_query($ins)){
return 1;
}
else{
	return 0;
}
}
function delete($table,$condition){
if(mysql_query("delete from ".$table." ".$condition)){
return 1;
}else{
return 0;
}
}
function update($table,$setting,$condition){
if(mysql_query("update ".$table." ".$setting." ".$condition)){
return 1;
}else{
return 0;
}
}
function select($cols,$table,$condition){
if($result=mysql_query("select ".$cols." from ".$table." ".$condition)){
return $result;
}else{
return 0;
}
}
function test(){
	echo "you are connected to the classes";
}
}# code...
// $cols="*";
// $table="grade";
// $condition="";
// $crd=new Crude();
// $result=$crd->select($cols,$table,$condition);
// while($row=mysql_fetch_assoc($result)){
// 	echo $row["idStudent"];
// }

?>