<nav class="sidebar bar-block collapse white animate-left card" style="z-index:3;width:320px;" id="sidemenu">
  <a href="javascript:void(0)" class="bar-item button border-bottom large"><h1>Car Dealership</h1></a>
  <a href="javascript:void(0)" onclick="close_sidemenu()" title="Close Sidemenu" 
  class="bar-item button hide-large large">Close <i class="fa fa-remove"></i></a>
  <a href="#" class="bar-item button hover-white left-align"><?php echo'  Logged in as: '.$_SESSION["user_email"].'';?></a>
  <a href="../ce29x/login.php" class="bar-item button hover-light-grey left-align"><i class="fa fa-user margin-right"></i>Login</a>
  <a href="../ce29x/register.php" class="bar-item button hover-light-grey left-align"><i class="fa fa-user-edit margin-right"></i>Register</a>
  <a href="../ce29x/order.php" class="bar-item button hover-light-grey left-align"><i class="fa fa-shopping-cart margin-right"></i>My Order</a>
  <?php
	if ($page=='home'){
		echo'<a id="carsBtn" onclick="showCars(', "'carsTab'", ')" href="javascript:void(0)" class="bar-item button"><i class="fa fa-car margin-right"></i>Cars (3)<i class="fa fa-caret-down margin-left"></i></a>';
		echo'<div id="carsTab" class="hide animate-left">';

		$sql = "SELECT id, name, price FROM cars";
		$cars = mysqli_query($conn, $sql);
		  
		if (mysqli_num_rows($cars) > 0) {
			while($car = mysqli_fetch_assoc($cars)) {
				echo '<a href="javascript:void(0)" class="bar-item button border-bottom test hover-light-grey" onclick="openShop(' . $car["id"] . ');close_sidemenu();" id="firstTab"><div class="container"><span class="opacity large">' . $car["name"]. '</span><h6>Price: £' . $car["price"]. '</h6></div></a>';
			}
		}
		
		echo'</div>';
	}
	else{
		echo'<a href="../ce29x/index.php" class="bar-item button hover-light-grey left-align"><i class="fa fa-car margin-right"></i>Cars</a>';
	}	

	?>
</nav>

<!-- Overlay effect when opening the side navigation on small screens -->
<div class="overlay hide-large animate-opacity" onclick="close_sidemenu()" style="cursor:pointer" title="Close Sidemenu" id="overlay"></div>

<div class="main" style="margin-left:320px;">
<i class="fa fa-bars button white hide-large xlarge margin-left margin-top" onclick="open_sidemenu()"></i>