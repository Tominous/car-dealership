<?php $page='home';?>

<!-- Require Settings Files -->
<?php require 'config/settings.php';?>
<?php require 'config/db.php';?>

<!-- Initialise Database Connection -->
<?php require 'bootstrap/db.php';?>
<?php require 'bootstrap/session.php';?>

<!-- Require Views -->
<?php require 'views/header.php';?>
<?php require 'views/navbar.php';?>
<?php require 'views/pages/home.php';?>

<!-- Require Modals -->
<?php require 'views/modals/login.php';?>
<?php require 'views/modals/register.php';?>
<?php require 'views/modals/order.php';?>

<!-- Require Footer -->
<?php require 'views/footer.php';?>