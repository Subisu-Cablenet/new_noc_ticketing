<?php
include ('headerdemo.php');
include ('conf.php');
#$hid = filter_input(INPUT_POST, 'ddlhostname');
#$interface = filter_input(INPUT_POST, 'txtinterface');
#$description = filter_input(INPUT_POST, 'txtdescription');
#$snmpindex = filter_input(INPUT_POST, 'txtsnmpindex');
#$monitoring = filter_input(INPUT_POST, 'ddlmonitoring');
#if (!empty($_POST['addnode']))
#{
#	$query= "call addnode($hid,$interface,$description,$snmpindex,$monitoring)";
#	$con->query($query);
#	mysqli_query($conn,$query);
#}
#else{
#	echo "Error". $sql."<br>". $con->error;
#}
?>
<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Node</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Node <small>Details</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a class="dropdown-item" href="#">Settings 1</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> 
			<div class="col-md-2">
			</div>
                       <!-- form input mask -->
                     <div class="wrapper">
        <div class="container-fluid">
           <!-- <div class="row">-->
                <div class="col-md-12">
                    <div class="page-header clearfix">
                      <!--  <h2 class="pull-left">Node Details</h2>-->
                        <a href="addnode.php" class="btn btn-success pull-right">Add New Node</a>
                    </div>
                    <?php
                    
                    // Attempt select query execution
			$sql ="select tbl_host.hostname,tbl_node.interface,tbl_node.description,tbl_node.snmpIndex from tbl_node  JOIN tbl_host on tbl_host.id=tbl_node.hid  ORDER by tbl_host.hostname";
                    if($result = mysqli_query($con,$sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>CMTS</th>";
                                        echo "<th>Interface</th>";
                                        echo "<th>Description</th>";
                                        echo "<th>SNMP Index</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['hostname'] . "</td>";
                                        echo "<td>" . $row['interface'] . "</td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                        echo "<td>" . $row['snmpIndex'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                    }
 
                    // Close connection
                    mysqli_close($con);
                    ?>
                </div>
            </div>        
        </div>
    </div> 
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
<hr> </hr>
<p> This is a line for test </p>
<?php
include ('footer.php');
?>
