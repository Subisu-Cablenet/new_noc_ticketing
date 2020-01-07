<?php
include ('headerdemo.php');
include ('conf.php');
$hid = filter_input(INPUT_POST, 'ddlhostname');
$interface = filter_input(INPUT_POST, 'txtinterface');
$description = filter_input(INPUT_POST, 'txtdescription');
$snmpindex = filter_input(INPUT_POST, 'txtsnmpindex');
$monitoring = filter_input(INPUT_POST, 'ddlmonitoring');
if (!empty($_POST['addnode']))
{
	$query= "call addnode($hid,$interface,$description,$snmpindex,$monitoring)";
	$con->query($query);
	if (mysqli_query($con,$query))
	{
	echo "data inserted";
	}
	else{
		echo" Eroor in data inserting";
	}
}
else{
	echo "Error". $sql."<br>". $con->error;
}
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
              <div class="col-md-8 col-sm-12  ">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Add New Node</h2>
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
                        <br />
                        <form class="form-horizontal form-label-left" name="addnode" action="addnode.php">
    
                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">CMTS Name</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                    <select id="heard" class="form-control" name='ddlhostname' required>
                                    <?php
                                $sql = mysqli_query($con, "call getcmts()");
                                                                        $row = mysqli_num_rows($sql);
                                                                                while ($row = mysqli_fetch_array($sql)){
                                echo "<option  value=".$row['id'].">".$row['hostname']."</option>";
                                }
                                #mysqli_close($con);?>
                                 </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Interface</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                              <input type="text" class="form-control" name="txtinterface">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Description</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                              <input type="text" class="form-control" name="txtdescription">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">SNMP Index</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                              <input type="text" name='txtsnmpindex' class="form-control">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Monitoring</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                    <select id="heard" class="form-control" name='ddlmonitoring' required>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                    </select>
                            </div>
                          </div>
                          <div class="ln_solid"></div>
    
                          <div class="form-group row">
                            <div class="col-md-9 offset-md-3">
                              <button type="submit" style="margin-left:20%;"class="btn btn-success col-md-2">Add</button>
                              <button type="submit" style="margin-left:23px;" class="btn btn-primary col-md-2">Cancel</button>
                            </div>
                          </div>
    
                        </form>
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
