<?php
 class Crude{
	public $host;
	public $user;
	public $password;
	public $database;
	function __construct(){

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
function delete(){

}
function update(){

}
function select(){

}
function test(){
	echo "you are connected to the classes";
}
}


?>