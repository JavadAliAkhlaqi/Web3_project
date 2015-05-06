<?php
session_start();
if(isset($_SESSION["go"])){
	
include_once("../import_component/header.php");

include_once("../import_component/left_menu.php");

if(isset($_GET["title"])){

	$title=$_GET["title"];

if($title=="student"){

include_once("../import_component/view_student.php");

}elseif($title=="employee"){

	include_once("../import_component/view_employee.php");

}elseif($title=="insertion"){

	include_once("../import_component/insertion_student.php");

}elseif($title=="delete"){

	include_once("../import_component/delete.php");

}elseif($title=="edit"){

		include_once("../import_component/edit.php");

}elseif($title=="employee_edit"){

	include_once '../import_component/edit_employee.php';	

}elseif($title=="delete_employee"){

	include_once '../import_component/delete_employee.php';

}elseif($title=="properties_employee"){

	include_once '../import_component/properties_employee.php';

}elseif($title=="properties_student"){

	include_once '../import_component/properties_student.php';

}elseif($title=="insert_employee"){

	include_once '../import_component/insert_employee.php';

}elseif($title=="subject"){

	include_once("../import_component/view_subject.php");

}elseif($title=="grade"){
    
    include_once ("../import_component/view_grade.php");

} elseif($title=="Mark information"){
   	
   	include_once ("../import_component/view_mark.php");

}elseif($title=="pocket"){

	include_once("../import_component/view_pocket.php");

}elseif($title=="relative_insertion"){

	include_once("../import_component/relative_insertion.php");

}elseif($title=="pocket_insertion"){

	include_once("../import_component/pocket_insertion.php");

}elseif($title=="grade_insertion"){

	include_once("../import_component/grade_insertion.php");

}elseif ($title=="insertion_subject") {
	
	include_once("../import_component/subject_insertion.php");
	# code...
}

}else{

echo "<h2 align='center'>this is a test</h2>";

}
include_once("../import_component/footer.php");
}else{
	header("Location:http://localhost/Web3_project/login/");
}



?>