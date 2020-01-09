<?php
$db_server ='127.0.0.1';
$db_username='root';
$db_password='R&D$3rv3r';
$database='nodedb';
global $con; //Making $con variable global so that it can be used inside the functions.
$con=mysqli_connect($db_server,$db_username,$db_password,$database);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect database " . mysqli_connect_error();
}
?>
