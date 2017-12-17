<?php

	session_start();

	if ( isset ( $_SESSION['views'] ) ) {
		$_SESSION['views'] = $_SESSION['views'] + 1;
	} else {
		$_SESSION['views'] = 1;
	}

if (isset($_SESSION['username'])) {


$sessionUser =  $_SESSION['username'];

} else {


$sessionUser =  "New Visitor";

}

?>

<?php 

include "db.php";
include "functions.php";
include "includes/header.php";
include "includes/footer.php";

createRows();

?>

<div class="container">
    
    <div class="col-sm-6">
        <h1 class="text-center">Welcome <?php echo $sessionUser; ?></h1>
</div>
</div>



<div class="container">
    
    <div class="col-sm-6">
        <h1 class="text-center">Create New Contact</h1>
	<form action="login_create.php" method="post">
            
		<div class="form-group">
		<label for="username">Please enter your username</label>
		<input type="text" name="username" class="form-control">
		</div>
             
		<div class="form-group">
		<label for="firstname">Please enter the first name of your contact</label>
		<input type="text" name="firstname" class="form-control">
		</div>
              
		<div class="form-group">
		<label for="lastname">Please enter the last name of your contact</label>
		<input type="text" name="lastname" class="form-control">
		</div>
             
		<div class="form-group">
		<label for="streetaddress">Please enter the street address of your contact</label>
		<input type="text" name="streetaddress" class="form-control">
		</div>
             
		<div class="form-group">
		<label for="city">Please enter the city for your contact</label>
		<input type="text" name="city" class="form-control">
		</div>
              
<!--		<div class="form-group">
		<label for="state">Please enter the state for your contact</label>
		<input type="text" name="state" class="form-control">
		</div>
-->             
		<div class="form-group">
		<label for="state">Please select a state</label>
		<select class="form-control" id="state" name="state">

			<option value="">N/A</option>
			<option value="AK">Alaska</option>
			<option value="AL">Alabama</option>
			<option value="AR">Arkansas</option>
			<option value="AZ">Arizona</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DC">District of Columbia</option>
			<option value="DE">Delaware</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="IA">Iowa</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="MA">Massachusetts</option>
			<option value="MD">Maryland</option>
			<option value="ME">Maine</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MO">Missouri</option>
			<option value="MS">Mississippi</option>
			<option value="MT">Montana</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="NE">Nebraska</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NV">Nevada</option>
			<option value="NY">New York</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="PR">Puerto Rico</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VA">Virginia</option>
			<option value="VT">Vermont</option>
			<option value="WA">Washington</option>
			<option value="WI">Wisconsin</option>
			<option value="WV">West Virginia</option>
			<option value="WY">Wyoming</option>


		</select>
		</div>


		<div class="form-group">
		<label for="zip">Please enter the zip code for your contact</label>
		<input type="text" name="zip" class="form-control">
		</div>
    
            
            <input class="btn btn-primary center-block" type="submit" name="submit" value="CREATE">

            
        </form>


    </div>

