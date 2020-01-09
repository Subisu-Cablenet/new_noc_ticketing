<?php
include ('conf.php');
include ('header.php');
if(!isset($_GET['acknowledge'])){
		header("location:./index.php");
}
?>

<form class="action_form mx-5" action="includes/acknowledge.inc.php" method="POST">
		<div class="form-group">
				<div class="row">
						<div class="col-md-6">
								<label class="action_label">Host Name</label>
								<label class="d-block action_data"><?php echo $_GET['host'] ?></label>
								<input type="text" hidden class="form-control" value="<?php echo $_GET['host'] ?>" name="hostname">
						</div>
						<div class="col-md-6">
								<label class="action_label">Port No:</label>
								<label class="d-block action_data"><?php echo $_GET['port'] ?></label>
								<input type="text" hidden class="form-control" value="<?php echo $_GET['port'] ?>" name="port">
						</div>
				</div>
				<div class="row">
						<div class="col-md-6">
								<label class="action_label">Port Description: </label>
								<label class="d-block action_data"><?php echo $_GET['port_desc'] ?></label>
								<input type="text" hidden class="form-control" value="<?php echo $_GET['port_desc'] ?>" name="description">
						</div>
						<div class="col-md-6">
								<label class="action_label">Down Time: </label>
								<label class="d-block action_data"><?php echo $_GET['duration'] ?></label>
								<input type="text" hidden class="form-control" value="<?php echo $_GET['duration'] ?>" name="down_time">
								<input type="text" hidden class="form-control" value="<?php echo $_GET['nid'] ?>" name="nid">
						</div>
				</div>
				<div class="form-row">
						<div class="col-md-6">
								<div class="form-group">
										<label for="inlineFormCustomSelect sr-only" class="action_label">Reason</label>
										<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="reason">
												<?php
												$sql = "select * from tbl_subReasons";
												$result = $con->query($sql);
												if($result->num_rows>0){
														while($row = $result->fetch_assoc()){
																echo " <option value='".$row['id']."'";
																if($row['id'] == $_GET['pr']){
																		echo "selected";
																}
																echo ">".$row['description']."</option> ";
														}
												}
												else{
														echo "no reasons in the databases";
												}
												?>
										</select>
								</div>
						</div>
						<div class="col-md-6">
								<div class="form-group">
										<label for="informed_to sr-only" class="action_label">Informed To</label>
										<input type="text" class="form-control" id="reason" placeholder="Informed To" name="informed_to">
								</div>
						</div>
				</div>
				<div class="row">
						<div class="col-md-12">
								<div class="form-group">
										<label for="exampleFormControlTextarea1" class="action_label">Remark</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="remark"></textarea>
								</div>
						</div>
				</div>
				<div class="d-flex">
						<input type="submit" class="btn btn-danger ml-auto" name ="submit" value="Submit"/>
						<button type="submit" class="btn btn-primary mr-5">Cancel</button>
				</div>
		</div>
</form>

<?php
include ('footer.php');
?>


