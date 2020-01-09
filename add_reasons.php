<?php
include ('conf.php');
include ('header.php');
?>

<center>
	<h1>Form - Reasons</h1>
</center>
<div class="centerForm">
<form method="POST" action="./includes/addReasons.inc.php" id="add_reasons">
				<div class="form-group row">
						<label for="dept_select" class="col-sm-2 col-form-label">Concerned Department</label>
						<div class="col-sm-10">
								<select class="form-control" id="exampleFormControlSelect1" name="dept">
												<?php
												$sql = "select * from tbl_dept";
												$result = $con->query($sql);
												if($result->num_rows>0){
														while($row = $result->fetch_assoc()){
																echo " <option value='".$row['id']."'"; 
																if($_GET['dept'] == $row['id']){echo "selected";}
																echo ">".$row['deptName']."</option> ";
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
						<label for="reason" class="col-sm-2 col-form-label">Reason: </label>
						<div class="col-sm-10">
								<input type="text" class="form-control" id="reason" placeholder="Reasons" name="reason">
						</div>
				</div>
				<div class="form-group row d-flex">
						<input type="submit" class="btn btn-primary ml-auto" id="reason" value="Submit" name="addreasons">
						<input type="submit" class="btn btn-danger" id="reason" value="Cancel">
				</div>
		</form>
</div>



<?php
include('footer.php');
?>
