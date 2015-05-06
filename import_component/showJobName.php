<?php
include_once '../db_connection/connection.php';

$result=mysql_query("select * from jobs ");
	while($row=mysql_fetch_assoc($result)){
		echo "<option value='".$row["idJobs"]."'>".$row["name"]."</option>"; 
	}


?>