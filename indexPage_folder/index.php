<?php
session_start();
if(isset($_SESSION["go"])){
	
include_once("../pages_folder/header.php");

include_once("../pages_folder/left_menu.php");

if(isset($_GET["title"])){

	$title=$_GET["title"];

if($title=="student"){

include_once("../pages_folder/view_student.php");

}elseif($title=="employee"){

	include_once("../pages_folder/view_employee.php");

}elseif($title=="insertion"){

	include_once("../pages_folder/insert_studentPage.php");

}elseif($title=="delete"){

	include_once("../pages_folder/delete_student.php");

}elseif($title=="edit"){

		include_once("../pages_folder/edit_student.php");

}elseif($title=="employee_edit"){

	include_once '../pages_folder/edit_employee.php';	

}elseif($title=="delete_employee"){

	include_once '../pages_folder/delete_employee.php';

}elseif($title=="properties_employee"){

	include_once '../pages_folder/properties_employee.php';

}elseif($title=="properties_student"){

	include_once '../pages_folder/detail_student.php';

}elseif($title=="insert_employee"){

	include_once '../pages_folder/insert_employee.php';

}elseif($title=="subject"){

	include_once("../pages_folder/view_subject.php");

}elseif($title=="grade"){
    
    include_once ("../pages_folder/view_grade.php");

} elseif($title=="Mark information"){
   	
   	include_once ("../pages_folder/view_mark.php");

}elseif($title=="pocket"){

	include_once("../pages_folder/view_pocket.php");

}elseif($title=="relative_insertion"){

	include_once("../pages_folder/relative_insertion.php");

}elseif($title=="pocket_insertion"){

	include_once("../pages_folder/pocket_insertion.php");

}elseif($title=="grade_insertion"){

	include_once("../pages_folder/insert_grade.php");

}elseif ($title=="insertion_subject") {
	
	include_once("../pages_folder/subject_insertion.php");
	# code...
}

}else{
$name="جوادعلی اخلاقی";
echo $name;
echo "<h2 align='center'>حواد علی اخلاقی</h2>";

}
include_once("../pages_folder/footer.php");
}else{
	header("Location:http://localhost/Web3_project/loginPage/");
}



?>