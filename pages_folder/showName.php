<?php
include_once("../crude_folder/crude.php");
$cols=$_GET["cols"];
$table=$_GET["table"];
$condition=$_GET["condition"];
$cr=new Crude();
$result=$cr->select($cols,$table,$condition);
while($row=mysql_fetch_assoc($result)){
	echo "<option value='".$row["idJob"]."'>".$row["job_name"]."</option>";
echo $cols;
}

?>