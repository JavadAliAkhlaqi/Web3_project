<?php
include_once("../crude_folder/crude.php");
$cr=new Crude();
$table="grade";
$cols="*";
$condition="";
$result=$cr->select($cols,$table,$condition);
			$title=$_GET["title"];
?>
<div id="content" class="span8">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="http://localhost/Web3_project/indexPage_folder/index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#"><?php echo $title ?></a>
					</li>
				</ul>
			</div>
			<a href="index.php?title=grade_insertion&from=grade" $><button class="btn btn-small btn-primary">Add<?php  echo ".$title";?></button></a>
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
			 <tr role="row">  
		    	<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 221px; " aria-sort="ascending" aria-label="Username: activate to sort column descending">Class ID</th>
				<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 221px; " aria-sort="ascending" aria-label="Username: activate to sort column descending">Class Name</th> 
		    	<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 221px; " aria-sort="ascending" aria-label="Username: activate to sort column descending">Operation</th>
				
			</tr>
			 </thead>
						  <tbody role="alert" aria-live="polite" aria-relevant="all">
					  								  	<?php 
					  								  	while ($row=mysql_fetch_assoc($result)) {

					  								  echo ' <tr class="odd">
								<td class="  sorting_1">'.$row['idGrade'].'</td>
								<td class="center ">'.$row['gradeName'].'</td>
									<td class="center ">
									<a class="btn btn-info" href="index.php?title=insertion_subject&from='.$title.'&id='.$row["idGrade"].'">
										<i class="icon-plus icon-white"></i>  
										Add Subject                                            
									</a>
							     <a class="btn btn-info" href="#">
										<i class="icon-plus icon-white"></i>  
										Add Grade                                            
									</a>
									</tr>';			  		
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