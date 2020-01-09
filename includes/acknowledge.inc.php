<?php
require("../conf.php");
if(isset($_POST['submit'])){

		add_to_database($con);
}
else{
		header("location:../index.php");
}

function add_to_database($con){
		$hostname = $_POST['hostname'];
		$port = $_POST['port'];
		$description = $_POST['description'];
		$down_time = $_POST['down_time'];
		$reason = $_POST['reason'];
		$submitted_to = $_POST['informed_to'];
		$remark = $_POST['remark'];
		$nid = $_POST['nid'];

		$sql = "insert into tbl_ack (nid,downtime,status,subReasonId,assign,remark)
																values('$nid','$down_time',0,'$reason','$submitted_to','$remark')";

		if($con->query($sql)){
				echo "inserted";
		}
		else{
				echo "not inserted";
		}

}

?>
