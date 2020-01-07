<?php 
include ('conf1.php');
include ('header.php');
?>

<!--<div class="row" id="nodetable" style="display: inline-block;" >
    <div class="tile_count">
            <div class="col-md-3 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Nodes</span>
                <div class="count black">2,300</div>
              </div>
              <div class="col-md-3 col-sm-4  tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Up Nodes</span>
                  <div class="count green">2,273</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i>Down Nodes</span>
                  <div class="count red">27</div>
                </div>

              <div class="col-md-4 col-sm-4  tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Online Modems</span>
                  <div class="count">27,435 </div>
                </div>



          </div>
        </div>-->
	<meta http-equiv="refresh" content="500">
        <hr>
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
		<h2>List of Hotspot Users</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                      </div>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
			<table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Client Name</th>
                      <th>IP</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Mac</th>
                      <th>Phone</th>
                      <th>Login</th>
                    </tr>
                  </thead>


                  <tbody>
                        <?php
                                $result = mysqli_query($con,"select * from hotspot_users where name !='' and ip !='' and address !='' and mac !='';");
                                while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['ip']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['mac']."</td>";
                        echo "<td>".$row['phone']."</td>";
                        echo "<td>".$row['login']."</td>";
                        echo "</tr>";
                         }
                                 mysqli_close($con);
                        ?>
                        </tbody>
                </table>



 		</div>
            </div>
          </div>
        </div>
    </div>

</div>

<?php
include ('footer.php');
?>
