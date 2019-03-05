<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["email"])) {
	}
	elseif (empty($_POST["password"])) {
	}
	else {
		$sql = "SELECT * FROM users";
		$users = $conn->query($sql);

		if ($users->num_rows > 0) {
			 // output data of each row
			while($user = $users->fetch_assoc()) {
				if ($user['email'] == $_POST["email"]) {
					$_SESSION["user_email"] = $user['email'];
					$_SESSION["user_id"] = $user['id'];
					$_SESSION["user_active"] = True;
				}
			}
		}
	}
}
?>

<div id="Login" class="container">
  <br>
  <h4>Login</h4>
  <h5 class="opacity">Login to your account.</h5>
  <hr>
<form method="post">
  <label>Email</label>
  <input class="input border margin-bottom" type="text" name="email" id="email">
  <label>Password</label>
  <input class="input border margin-bottom" type="password" name="password" id="password">
  <hr>
  <input type="submit" name="submit" value="Login"><br><br>
</form>
  
</div>