<?php
include ('conf.php');
include ('header.php');
?>

<center>
	<h1>Add Department</h1>
</center>
<div class="centerForm">
<form action="./includes/add_dept.inc.php" method="POST">
	<div class="form-group row">
		<label for="departmentName" class="col-sm-2 col-form-label">Department Name</label>
		<div class="col-sm-10">
		<input type="text" class="form-control" id="" value="<?php echo $_GET['dept_name']; ?>" placeholder="Department Name" name="dept_name">
		</div>
	</div>
	<div class="form-group row">
		<label for="departmentHead" class="col-sm-2 col-form-label">Department Head</label>
		<div class="col-sm-10">
		<input type="text" class="form-control" id="" value="<?php echo $_GET['dept_head']; ?>" placeholder="Department Head" name="dept_head">
</div>
</div>

	<div class="form-group row">
                <label for="departmentEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
								<input type="text" class="form-control" id="" value="<?php echo $_GET['email'] ?>" placeholder="Department Head-Email" name="email">
                </div>
        </div>

	<div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                 <div class="col-sm-10">
                        <select class="form-control" name="status">
														<option value="1">Active</option>
														<option value="0"
														<?php
														if($_GET['status']==0){
														echo 'selected';
														}
														?>
														">Deactive</option>
			</select>
                </div>
 
        </div>

	<div class="form-group row d-flex">
		<input type="submit" value="Add" class="btn btn-primary ml-auto" name="add_dept"></button>
		<button class="btn btn-danger">Cancel</button>

	</div>
</form>
</div>


<?php
include('footer.php');
?>
