<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$user_id = $_SESSION["user_id"];
	$car_trim = $_SESSION["car_trim"];
	$car_colour = $_SESSION["car_colour"];
	$car_interior = $_SESSION["car_interior"];
	$car_engine = $_SESSION["car_engine"];
	$car_wheels = $_SESSION["car_wheels"];
	$car_sensors = $_SESSION["car_sensors"];

	$sql = "SELECT * FROM user_options";
	$user_options = $conn->query($sql);
	
//	if ($user_options->num_rows > 0) {
//		while($user_option = $user_options->fetch_assoc()) {
//			if ($user_option['user_id'] == $user_id) {
	$sql = "DELETE FROM user_options WHERE user_id=$user_id";
//		}
//	}
	$msg = "Your Order Details are as follows:\n Trim:" .$car_trim. "\n Colour:" .$car_colour. "\n Interior:" .$car_interior. "\n Engine:" .$car_engine. "\n Wheels:" .$car_wheels. ".";
	$msg = wordwrap($msg,70);
	mail("".$_SESSION["user_email"]."","Your Car",$msg);
	
	$sql = "INSERT INTO user_options (user_id, car_trim, car_colour, car_interior, car_engine, car_wheels, car_sensors)
	VALUES ('$user_id', '$car_trim', '$car_colour', '$car_interior', '$car_engine', '$car_wheels', '$car_sensors')";
}
?>

<div id="My Order" class="container">
  <br>
  <h4>My Order</h4>
  <h5 class="opacity">Review your order.</h5>
  <hr>
  <?php
	echo'<label><b>Trim</b></label><br>';
	echo '<span class="opacity"><i>' .$_SESSION["car_trim"]. '</i></span>';		
	echo'<br><label><b>Colour</b></label><br>';
	echo '<span class="opacity"><i>' .$_SESSION["car_colour"]. '</i></span>';	
	echo'<br><label><b>Interior</b></label><br>';
	echo '<span class="opacity"><i>' .$_SESSION["car_interior"]. '</i></span>';		
	echo'<br><label><b>Engine</b></label><br>';
	echo '<span class="opacity"><i>' .$_SESSION["car_engine"]. '</i></span>';		
	echo'<br><label><b>Wheels</b></label><br>';
	echo '<span class="opacity"><i>' .$_SESSION["car_wheels"]. '</i></span>';	
	echo'<br><label><b>Parking Sensors</b></label><br>';
	echo '<span class="opacity"><i>' .$_SESSION["car_sensors"]. '</i></span>';
  ?>
  <hr>
  <form method="post">
	<input type="submit" name="submit" value="Confirm Order"> 
  </form><br>
  <?php
	if ($conn->query($sql) === TRUE) {
		echo "Your car configuration has been saved.";
	}
  ?>
</div>