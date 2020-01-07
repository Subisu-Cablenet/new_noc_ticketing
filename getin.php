<?php
include ('conf.php');
if(isset($_post['btnlogin']))
{
$username= $_POST['username'];
$password= $_POST['password'];
$query="select * from tbl_users where username='$username' && pwd='$password'";
$credential=mysqli_query($con,$query);
$result = mysqli_num_rows($credential);
echo $result;
}

?>

<form method="post" action="">
<label> Username:</label>
<input type="text" name="username">
<label> Password: </label>
<input type="text" name="password">
<input type="submit" name="btnlogin" value="Log In">

</form>


