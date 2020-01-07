<?php
include ('conf.php');
$result = $con->query ("call getdownnode");
if ($result->num_rows > 0){
	while ($row = $result->fetch_assoc()){
	echo $row['hostname'].' '.$row['interface'].' '.$row['description'].' '.$row['online'].' '.$row['last_update'].'<br/>';
   }

 }
else
  {
	echo "Nothing to display";
  }
?>
