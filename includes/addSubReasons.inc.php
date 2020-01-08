<?php
require("../conf.php");
if(isset($_POST['addSubReasons'])){
		$parentReason = $_POST['parentReason'];
		$subReason = $_POST['subReason'];
		if(empty($parentReason) || empty($subReason)){
				header("location:../add_sub_reasons.php?pr=".$parentReason."&sr=".$subReason);
		}

		else{

				$sql = "INSERT INTO tbl_subReasons(reasonId, description) VALUES ('$parentReason','$subReason')";
				if($con->query($sql)){
						header("location:../add_reasons.php?status=success");
				}
				else{
						echo "not added";
				}
		}
}
else{
		header("location: ../add_sub_reasons.php");
}
?>
