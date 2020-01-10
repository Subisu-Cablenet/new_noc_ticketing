<?php 
include ('conf.php');
include ('header.php');
?>

<meta http-equiv="refresh" content="60">
<hr>
<div class="col-md-12 col-sm-12 ">
<div class="x_panel">
<div class="x_title">
<h2>List of Acknowledged Nodes</h2>
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
<th>Date & Time</th>
<th>Down Time</th>
<th>Assigned To</th>
<th>Remark</th>
<th>Action</th>

</tr>
</thead>


<tbody>
<?php
$result = mysqli_query($con,"");
while($row = mysqli_fetch_array($result))
{
	echo "<tr style='background-color:#ff8378'>";
	echo "<td>".$row['hostname']."</td>";
	echo "<td>".$row['interface']."</td>";
	echo "<td>".$row['description']."</td>";
	echo "<td>".$row['last_update']."</td>";
	echo "<td>".$row['Duration']."</td>";
	echo "<td>".$row['assign']."</td>";
	echo "<td>".$row['remark']."</td>";

	echo "<td>
		<div class='btn-group mr-2' role='group' aria-label='First group'>
		<a href='#'>Action here</a>
		</div>
		</td>";
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

}
?>
<?php
include ('footer.php');
?>
