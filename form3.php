<?php
require_once('header.php');

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$address = $_POST['address'];
$state= $_POST['state'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$num = $_POST['num'];
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;


?>

<div id="form3">
  <center>
<form action="form3_todb.php" method="POST">
<div class="form-group">
  <div class="form-group">
    <label>Email Adress:</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address">
  </div>
<div class="form-group">
  <label>Password:</label>
  <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter Password">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<form>
</center>
</div>
<?php
require_once('footer.php');
?>
