<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$_SESSION["car_trim"] = ($_POST["Trim"]);
	$_SESSION["car_colour"] = ($_POST["Colour"]);
	$_SESSION["car_interior"] = ($_POST["Interior"]);
	$_SESSION["car_engine"] = ($_POST["Engine"]);
	$_SESSION["car_wheels"] = ($_POST["Wheels"]);
	$_SESSION["car_sensors"] = ($_POST["Sensors"]);
}	

$sql = "SELECT id, name, price FROM cars";
$cars = mysqli_query($conn, $sql);

if (mysqli_num_rows($cars) > 0) {
	while($car = mysqli_fetch_assoc($cars)) {
		echo '<div id="' .$car['id']. '" class="container car"><br><h4>' .$car['name']. '</h4><h5 class="opacity">Price: £' .$car['price']. '</h5><hr><form method="post">';
		
		$car_id=$car["id"];
		
		$options = array('Trim', 'Colour', 'Interior', 'Engine', 'Wheels', 'Sensors');
		
		foreach ($options as $option) {
			$sql = "SELECT name, price FROM car_options WHERE car_id='$car_id' AND configuration='$option'";
			$options = mysqli_query($conn, $sql);
						
			echo'<h5><b> '.$option.': </b></h5>';
						
			if ($options->num_rows > 0) {
				while($row = $options->fetch_assoc()) {
					echo'<i>' .$row['name']. '</i><span class="opacity"> -- </span><i>£' .$row['price']. '</i><br>';
				}
			}
						
			echo'<br><b>Your Choice: </b><select name="'.$option.'">';
						
			$options = mysqli_query($conn, $sql);
						
			if ($options->num_rows > 0) {
				while($option = $options->fetch_assoc()) {
					echo'<option value="' .$option['name']. '">' .$option['name']. '</option>';
				}
			}
			echo'</select><br><br>';
		}
		echo'<input type="submit" name="submit" value="Submit"></form><br></div>';
		}
	}
	
echo'</div><script>var openTab = document.getElementById("firstTab");openTab.click();</script>';
	
?>
