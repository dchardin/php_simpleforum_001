<?php 

session_start();

include "db.php";
include "functions.php";
include "includes/header.php";
include "includes/footer.php";   
    

?>


<div class="container">

    <div class="col-sm-6">
	<h1 class="text-center">Transaction Successful.</h1>
	<h2 class="text-center">Where to now?</h2>
	</br>
    
	
	<a class="btn btn-primary center-block" href="login_read.php">Read Address Book</a>
	</br>
	<a class="btn btn-primary center-block" href="login_create.php">Add Another Address</a>
	</br>
	<a class="btn btn-primary center-block" href="login_logout.php">Log Out</a>
	
	</div>

</div>

