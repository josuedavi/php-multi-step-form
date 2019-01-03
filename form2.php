<?php
require_once('header.php');

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$_SESSION['address'] = $address;
$_SESSION['state'] = $state;
$_SESSION['city'] = $city;
$_SESSION['zipcode'] = $zipcode;
$_SESSION['phone_number'] = $num;


?>

<div id="form2">
<center>
<form action="form3.php" method="POST">
  <div class="form-group">
    <label>Residential Address:</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label>State:</label>
    <input type="text" class="form-control" name="state" id="state" placeholder="Enter State">
  </div>
  <div class="form-group">
    <label>City:</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
  </div>
  <div class="form-group">
    <label>Zipcode:</label>
    <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Enter Zipcode">
  </div>
  <div class="form-group">
    <label>Phone Number:</label>
    <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Enter Phone Number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
</div>

<?php
require_once('footer.php');
?>
