<?php
$title=$_GET["title"];
$name=$_GET["table"];
$from=$_GET["from"];

?>
<div id="content" class="span10">
			<!-- content starts -->
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="http://localhost/Web3_project/indexPage_folder/index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="http://localhost/Web3_project/indexPage_folder/index.php?title=<?php echo $from ?>"><?php echo $from ?></a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#"><?php echo $title; ?></a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable ui-sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title="">
						<h2><i class="icon-edit"></i><?php echo $second." "; ?>form<?php echo " ".$title?></h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="../pages_folder/insert2_grade.php">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead"> Class Name: </label>
							  <div class="controls">
								<input type="text" name="clName" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4">

							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead"> Number of Subject: </label>
							  <div class="controls">
								<input type="text" name="subAmount" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4">

							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div>
			</div>
			</div>
		</div>
		