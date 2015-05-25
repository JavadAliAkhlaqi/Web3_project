<?php
$title=$_GET["title"];
$name=$_GET["table"];
$second=$_GET["second"];
$from=$_GET["from"];
$id=$_GET["ids"];
include_once("../db_connection/connection.php");
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
						<form class="form-horizontal">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead"> Subject Name: </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4">

							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Number of Pages: </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4">

							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Class: </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4">
							  </div>
							</div>
							<div class="control-group">
							  <div class="controls">
								<input type="text" class="span6 typeahead" value="<?php echo $id ?>" id="typeahead11" style="display:none;" data-provide="typeahead" data-items="4">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
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