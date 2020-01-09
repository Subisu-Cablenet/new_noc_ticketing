<?php
		require("../conf.php");

		if(isset($_POST['add_dept'])){

		$dept_name=$_POST['dept_name'];
		$dept_head=$_POST['dept_head'];
		$email=$_POST['email'];
		$status=$_POST['status'];
		
		if(empty($dept_name)|| empty($dept_head) || empty($email) || empty($status)){
			
				//Later add here a pop up saying some info are missing
			
			header("refresh:2;url=../add_dept.php?status=".$status."&dept_name=".$dept_name."&email=".$email."&dept_head=".$dept_head);
									
		}	
		else{
		$sql = "INSERT INTO tbl_dept(deptName,deptHead,email,status) VALUES ('$dept_name','$dept_head','$email','$status')";
	
		
		if($con->query($sql)){
				
		echo "<script>";
                echo "alert('Succesfully Added Department');";
                echo "window.location.replace('../add_dept.php');";
                echo "</script>";
		}
			
		else{
		echo "<script>";
                echo "alert('Oops!Error Occured!Try Again!');";
                echo "window.location.replace('../add_dept.php');";
                echo "</script>";
								
		}
		
}
		}
?>

