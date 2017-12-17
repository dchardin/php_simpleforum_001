<?php

session_start();	
session_destroy();

?>


<?php 

include "db.php";
include "functions.php";
include "includes/header.php";
include "includes/footer.php";   
    

?>


<div class="container">

    <div class="col-sm-6">
	<h1 class="text-center">You have logged out.</h1>
	</br>
    
	<a class="btn btn-primary center-block" href="login_homepage.php">Log in again?</a>
	
	</div>

</div>

