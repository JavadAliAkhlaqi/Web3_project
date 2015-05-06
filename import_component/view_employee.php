<?php
include_once("../db_connection/connection.php");

			$title=$_GET["title"];

?>
<div id="content" class="span11">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="http://localhost/w3_project/first_layer/index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#"><?php echo $title ?></a>
					</li>
				</ul>
			</div>
			<a href="index.php?title=insert_employee&table=employee&name=employee" $><button class="btn btn-small btn-primary">Add<?php  echo ".$title";?></button></a>
			<div class="row-fluid sortable ui-sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title="">
						<h2><i class="icon-user"></i> Members</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
			<div class="box-content">
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
							<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
						  <thead>
  <tr role="row">  	<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 221px; " aria-sort="ascending" aria-label="Username: activate to sort column descending">Name</th>
  	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 192px; " aria-label="Date registered: activate to sort column ascending">Last Name</th>
  		<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 100px; " aria-label="Role: activate to sort column ascending">Job</th>
		<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 112px; " aria-label="Status: activate to sort column ascending">SSN</th>
		<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 112px; " aria-label="Status: activate to sort column ascending">Start Date</th>
		<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 112px; " aria-label="Status: activate to sort column ascending">End Date</th>
	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 112px; " aria-label="Status: activate to sort column ascending">Salary</th>
	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 413px; " aria-label="Actions: activate to sort column ascending">Actions</th></tr>
						  </thead>   
			 
					  <tbody role="alert" aria-live="polite" aria-relevant="all">
					  								  	<?php 
			
			$result=mysql_query("select * from employee");
			 function getJob($type)
			{
			$sresult=mysql_query("select * from jobs where idJobs='$type'");
			while ($srow=mysql_fetch_assoc($sresult)) {
				# code...
				if($srow["idJobs"]==$type)
			return $srow["name"];

}
			}


			while($row=mysql_fetch_assoc($result)){
				echo ' <tr class="odd">
								<td class="  sorting_1">'.$row['employeeName'].'</td>
								<td class="center ">'.$row['lname'].'</td>
								<td class="center ">'.getJob($row['tape']).'</td>
								<td class="center ">'.$row['ssn'].'</td>
								<td class="center ">'.$row['date_In'].'</td>
								<td class="center ">'.$row['date_Out'].'</td>
								<td class="center ">'.$row['salary'].'</td>
								<td class="center ">
									<a class="btn btn-success" href="index.php?title=properties_employee&from=employee Home&name=employee&id='.$row["idEmployee"].'">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a>
	<a class="btn btn-info" href="index.php?title=employee_edit&name=employee&operation=edit&jd='.$row["idEmployee"].'">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
	<a class="btn btn-danger" href="../import_component/delete_employee.php?title=delete_employee&id='.$row['idEmployee'].'">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
							';
						}
							?>
							</tbody>
							</table>
						</div>            
					</div>
				</div><!--/span-->
			
			</div>'
	
				  
			</div>
		</div>