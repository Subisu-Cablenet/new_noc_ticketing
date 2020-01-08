<?php
require("../conf.php");
if(isset($_POST['addreasons'])){
		$dept = $_POST['dept'];
		$reason = $_POST['reason'];

		if(empty($dept) || empty($reason)){
				echo "empty";
				header("refresh:2;url=../add_reasons.php?dept=".$dept."&reason=".$reason);
		}
		else{
				$sql = "INSERT INTO tbl_reasons (description, conDeptId) VALUES ('$reason','$dept')";
				if($con->query($sql)){
						header("location:../add_reasons.php?status=success");
				}
				else{
						echo "not added";
				}
		}
}
else{
		header("location: ../add_reasons.php");
}
?>
