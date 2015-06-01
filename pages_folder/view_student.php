<?php
	$title=$_GET["title"];
	include_once("../crude_folder/crude.php");
	$crd=new Crude();
	$cols="*";
	$table="student";
	$condition="";
	$result=$crd->select($cols,$table,$condition);
?>
<div id="content" class="span12">
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
			<a href="index.php?title=insertion&table=student&second=relative" $><button class="btn btn-small btn-primary">Add<?php  echo ".$title";?></button></a>
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
								<div class="controls" style="display:inline">
								  <select id="selectError2">
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>
									<option>Option 4</option>
									<option>Option 5</option>
								  </select>
								  <label class="control-label" style="display:inline"for="selectError3">Select Class</label>
								</div>
						  <thead>
							  <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 221px; " aria-sort="ascending" aria-label="Username: activate to sort column descending">Name</th>
							  	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 192px; " aria-label="Date registered: activate to sort column ascending">Birthd Date</th>
							  	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 100px; " aria-label="Role: activate to sort column ascending">ID</th>
							  	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 112px; " aria-label="Status: activate to sort column ascending">SSN</th>
							  	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 413px; " aria-label="Actions: activate to sort column ascending">Actions on Student</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 413px; " aria-label="Actions: activate to sort column ascending">Add Properties</th>
							  </tr>
						  </thead>   
					  <tbody role="alert" aria-live="polite" aria-relevant="all">
					  								  	<?php 
			$result=mysql_query("select * from student");
			while($row=mysql_fetch_assoc($result)){
				echo ' <tr class="odd">
								<td class="  sorting_1">'.$row['name'].'</td>
								<td class="center ">'.$row['birthDate'].'</td>
								<td class="center ">'.$row['idStudent'].'</td>
								<td class="center ">'.$row['ssn'].'</td>
								<td class="center ">
									<a class="btn btn-success" href="index.php?title=properties_student&position1=Home&from=Student Home&name=student&id='.$row["idStudent"].'">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a>
									<a class="btn btn-info" href="index.php?title=edit&name=student&operation=edit&from=Student Home&jd='.$row["idStudent"].'">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="../pages_folder/delete_student.php?title=delete&from=Student Home&id='.$row['idStudent'].'">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
								<td class="center ">
									<a class="btn btn-primary" href="index.php?title=pocket_insertion&position1=Home&from=student&name=student&ids='.$row["idStudent"].'">
										<i class="icon-plus-sign icon-white"></i>  
										Add Pocket           
									</a>
									<a class="btn btn-primary" href="index.php?title=relative_insertion&position1=Home&from=student&ids='.$row['idStudent'].'">
										<i class="icon-plus-sign icon-white"></i> 
										Add Relative
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