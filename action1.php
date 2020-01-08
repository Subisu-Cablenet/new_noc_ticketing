<?php
include ('conf.php');
include ('header.php');
if(!isset($_GET['sagar'])){
		header("Location:./index.php");
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
						</div>
				</div>
				<div class="form-row">
						<div class="col-md-6">
								<div class="form-group">
										<label for="inlineFormCustomSelect sr-only" class="action_label">Reason</label>
										<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="reason">
												<option value="port_down">Port Shutdown</option>
												<option value="fiber_breakage">Fiber Breakage</option>
										</select>
								</div>
						</div>
						<div class="col-md-6">
								<div class="form-group">
										<label for="inlineFormCustomSelect sr-only" class="action_label">Informed To</label>
										<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="informed_to">
												<option value="sagar">Sagar</option>
												<option value="navraj">Navraj</option>
										</select>
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


