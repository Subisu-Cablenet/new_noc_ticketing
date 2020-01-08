<?php
		require("../conf.php");

		if(isset($_POST['add_dept'])){
			global $dept_name,$dept_head,$email,$status;
			update_department();
		}

		else{
                echo "<script>";
                echo "alert('Oops!Error Occured!Try Again!');";
                echo "window.location.replace('../add_dept.php');";
                echo "</script>";
                }
		
		
		function update_department(){

		$dept_name=$_POST['dept_name'];
		$dept_head=$_POST['dept_head'];
		$email=$_POST['email'];
		$status=$_POST['status'];
	
		if(validate()){ //Calling function validate to check empty paramters

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
		
		else{
		
		 header("refresh:1;url=../add_dept.php?status=".$status.");

}
}

		function validate(){
			
			if(empty($dept_name) || empty($dept_head) || empty($email) || empty($status)){
			return false;
			}
			else{
			return true;
			}
	}

?>

