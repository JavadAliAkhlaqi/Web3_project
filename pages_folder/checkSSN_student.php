<?php
$ssn=$_GET["ssn"];
$result=mysql_query("select ssn from student where ssn='$ssn'");

while ($row=mysql_fetch_assoc($result)) {
$ssn=$_GET["ssn"];
	if($row[]==$ssn){
		echo "exist"
		return;
	}
}

?>