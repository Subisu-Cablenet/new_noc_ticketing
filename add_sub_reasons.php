<?php
include ('conf.php');
include ('header.php');
?>

<center>
	<h1>Form -Sub Reasons</h1>
</center>
<div class="centerForm">
<form method="POST" action="./includes/addSubReasons.inc.php">
				<div class="form-group row">
						<label for="parentReason" class="col-sm-2 col-form-label">Parent Reason</label>
						<div class="col-sm-10">
								<select class="form-control" id="exampleFormControlSelect1" name="parentReason">
												<?php
												$sql = "select * from tbl_reasons";
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
				<div class="form-group row">
						<label for="subReason" class="col-sm-2 col-form-label">Sub Reason</label>
						<div class="col-sm-10">
								<input type="text" class="form-control" id="reason" placeholder="Reasons" name="subReason">
						</div>
				</div>
				<div class="form-group row d-flex">
						<input type="submit" class="btn btn-primary ml-auto" id="reason" value="Submit" name="addSubReasons">
						<input type="submit" class="btn btn-danger" id="reason" value="Cancel">
				</div>
		</form>
</div>

<?php
include('footer.php');
?>
