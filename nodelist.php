<?php 
include ('conf.php');
include ('header.php');
header("Refresh: 60");
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
		<h2>List of Down Nodes</h2>
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
											<th>CMTS</th>
											<th>Interface</th>
											<th>Description</th>
											<th>Online Modem</th>
											<th>Last Update</th>
										</tr>
									</thead>


									<tbody>
<?php
$result = mysqli_query($con,"select tbl_host.hostname,
		tbl_node.interface,
		tbl_node.description,
		tbl_node.online,
		tbl_node.last_update from tbl_node  JOIN tbl_host on tbl_host.id=tbl_node.hid  ORDER by tbl_host.hostname");
while($row = mysqli_fetch_array($result))
{
		if ($row['online'] > 0){
				echo "<tr style='color:#038017'>";
				echo "<td>".$row['hostname']."</td>";
				echo "<td>".$row['interface']."</td>";
				echo "<td>".$row['description']."</td>";
				echo "<td>".$row['online']."</td>";
				echo "<td>".$row['last_update']."</td>";
				echo "</tr>";
		}
		else	{
				echo "<tr style='color:#a61103'>";
				echo "<td>".$row['hostname']."</td>";
				echo "<td>".$row['interface']."</td>";
				echo "<td>".$row['description']."</td>";
				echo "<td>".$row['online']."</td>";
				echo "<td>".$row['last_update']."</td>";
				echo "</tr>";
		}
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
