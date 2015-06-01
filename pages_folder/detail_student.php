<?php
			$title=$_GET["title"];
			$id=$_GET["id"];
			$from =$_GET["from"];
			$position=$_GET["position1"];
			//used for inlcluding class
			include_once("../crude_folder/crude.php");
			$crd=new Crude();
			$cols="*";
			$table="student";
			$condition="where idStudent=".$id;
			$result=$crd->select($cols,$table,$condition);
?>
<div id="content" class="span12">
			<!-- content starts --><div><ul class="breadcrumb"><li>
			<a href="http://localhost/Web3_project/indexPage_folder/index.php"><?php echo $position?></a> 
						<span class="divider">/</span>
						<a href="http://localhost/Web3_project/indexPage_folder/index.php?title=student"><?php echo $from?></a> 
						<span class="divider">/</span>
					</li><li>
						<a href="#"><?php echo $title ?></a></li></ul>
			</div><div class="row-fluid sortable ui-sortable"><div class="box span12">
			<table class="table  table-bordered"> 
			 			<thead>  
						<tr role="row">
<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 221px; " aria-sort="ascending" aria-label="Username: activate to sort column descending">ID</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 192px; " aria-label="Date registered: activate to sort column ascending">Name</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 100px; " aria-label="Role: activate to sort column ascending">Father Name</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 112px; " aria-label="Status: activate to sort column ascending">Image</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 112px; " aria-label="Status: activate to sort column ascending">SSN</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 112px; " aria-label="Status: activate to sort column ascending">Start Date</th>
<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 112px; " aria-label="Status: activate to sort column ascending">End Date</th>
						  </tr>
						  </thead>   
			 
					  <tbody role="alert" aria-live="polite" aria-relevant="all">
					  								  	<?php 
					  // function getPicture($folder)
					  // {
					  // 	# code...
					  // 	$fdir="../upload/".$folder;
					  // 	$openeddir=opendir($fdir);
					  // 	while ($newdir=readdir($openeddir)) {
					  // 		# code... 
					  // 		if($newdir=="."||$newdir==":"){
					  // 			continue;
					  // 		}else{
					  // 			$filedir=$newdir;
					  // 		}
					  // 	}
					  // 	return $filedir;
					  // }
			while($row=mysql_fetch_assoc($result)){
				echo ' <tr class="odd">

								<td class="center ">'.$row['idStudent'].'</td>
								<td class="  sorting_1">'.$row['name'].'</td>
								<td class="center ">'.$row['fatherName'].'</td>
								<td class="center ">'.$row['image'].'</td>
								<td class="center ">'.$row['ssn'].'</td>
								<td class="center ">'.$row['birthDate'].'</td>
								<td class="center ">'.$row['startDate'].'</td>
							</tr>
							';
						}
							?>
							</tbody>
							</table>
				</div><!--/span-->
			
			</div>'
	
				  
			</div>
		</div>