<?php
include ('conf.php');
?>
                <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>CMTS</th>
                      <th>Interface</th>
                      <th>Description</th>
                      <th>Down Time</th>
                      <th>Online</th>
                      <th>Action</th>
                    </tr>
                  </thead>


                  <tbody>
			<?php
                                $result = mysqli_query($con,"call getdownnode");
                                while($row = mysqli_fetch_array($result))
                        {
                	echo "<tr>";
          		echo "<td>".$row['hostname']."</td>";
          		echo "<td>".$row['interface']."</td>";
          		echo "<td>".$row['description']."</td>";
          		echo "<td>".$row['last_update']."</td>";
          		echo "<td>".$row['online']."</td>";
          		echo "<td><button id='btn2'>Ack</button> <button id='btn3'>Update</button></td>";
         	 	echo "</tr>";
           		 }
            			 mysqli_close($con);
			?>
 			</tbody>	
                </table>
