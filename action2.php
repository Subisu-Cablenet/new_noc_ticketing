<?php 
include ('conf.php');
include ('header.php');
?>

<?php
$hostname=$_GET['hostname'];
$host_port=$_GET['host_port'];
$port_desc=$_GET['host_desc'];
$port_dtime=$_GET['downtime'];

?>

<!--ACKNOWLEDGEMENT FORM STARTS HERE--> 

<form>
<!--divion for name and port-->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="hostName">Host Name</label>
      <input type="text" class="form-control" id="hostname">
    </div>
    <div class="form-group col-md-6">
      <label for="portNo">Port No</label>
      <input type="text" class="form-control" id="port_no">
    </div>
  </div>
<!--- -Div ends---- ->

<!----Divison for port description and down time -->
<div class="form-row">

 <div class="form-group col-md-6">
    <label for="Down Time">Port Description</label>
    <input type="text" class="form-control" id="down_time">
  </div>




 <div class="form-group col-md-6">
    <label for="Down Time">Down Time</label>
    <input type="text" class="form-control" id="down_time">
  </div>
</div>


<!-- End of division -->





<!-- Division for reasona nd informed to -->
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="reasons">Reason</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Bandwidth</option>
        <option>Latency</option>
        <option>Firewall</option>
        <option></option>
        <option></option>
        <option></option>
  </div>
 
   <div class="form-group col-md-6">
      <label for="infomedto">Informed to</label>
      <input type="text" class="form-control" id="informedto">
    </div>
  </div>
<!-- Diviosn ends here-->

<!--Division for Remarks-->
<div class="form-row">
<div class="form-group col-md-12">
<label for="remarks">Remarks</label>
<div class="md-form">
  <i class="fas fa-pencil-alt prefix"></i>
  <textarea id="form10" class="md-textarea form-control" rows="3"></textarea>
</div>

</div>
</div>

<!--Division ends here-->


<br>

<!--Division for buttons-->
<div class="form-row">
<div class="form-group col-md-12">
<center> 
 <button type="submit" class="btn btn-primary">Update</button>
  
  <button type="cancel" class="btn btn-danger">Cancel</button>
</center>
</div>
</div>

<!-- Division ends here-->
</form>








<?php
include('footer.php');
?>

