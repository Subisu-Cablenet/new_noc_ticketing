<?php
require("../conf.php");
if(isset($_POST['submit'])){
		$hostname = $_POST['hostname'];
		$port = $_POST['port'];
		$description = $_POST['description'];
		$down_time = $_POST['down_time'];
		$reason = $_POST['reason'];
		$submitted_to = $_POST['informed_to'];
		$remark = $_POST['remark'];

		echo $hostname;
		echo $port;
		echo $description ;
		echo $down_time ;
		echo $reason ;
		echo $submitted_to ;
		echo $remark ;
}
else{
		header("location:../index.php");
}
?>
