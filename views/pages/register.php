<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["email"])) {
	}
	elseif (empty($_POST["password"])) {
	}
	else {
		
		$valid=True;
		$sql = "SELECT * FROM users";
		$users = $conn->query($sql);
		
		// check to see if user already exists
		if ($users->num_rows > 0) {
			while($user = $users->fetch_assoc()) {
				if ($user['email'] == $_POST["email"]) {
					$valid=False;
				}
			}
		}
		if ($valid == True) {
			
			$email = ($_POST["email"]);
			$password = ($_POST["password"]);
			$sql = "INSERT INTO users (email, password)
			VALUES ('$email', '$password')";
		}
	}
}
?>

<div id="Register" class="container">
  <br>
  <h4>Register</h4>
  <h5 class="opacity">Register a new account.</h5>
  <hr>
<form method="post">
  <label>Email</label>
  <input class="input border margin-bottom" type="text" name="email" id="email">
  <label>Password</label>
  <input class="input border margin-bottom" type="password" name="password" id="password">
  <hr>
  <input type="submit" name="submit" value="Register"><br><br>
  <?php
	if ($conn->query($sql) === TRUE) {
		echo "Your account has been registered.";
	}
  ?>  
</form>
  
</div>