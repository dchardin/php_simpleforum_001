<?php


include "db.php";

function createRows() {


// decided to comment out the lines below and check for session in login_create.php

// if (isset($_SESSION['username'])) {


// echo "<div class=\"container\">";
// echo "<div class=\"col-sm-6\">";
// echo $_SESSION['username'];
// echo "</div>";
// echo "</div>";

//} else {

// echo "<div class=\"container\">";
// echo "<div class=\"col-sm-6\">";
// echo "<h1 class=\"text-center\">Hello New Visitor!</h1>";
// echo "</div>";
// echo "</div>";

//}



if(isset($_POST['submit'])) {

global $connection;


// tried to use the below commented section to handle the possibility that 
// a user may enter in a username when first using the login_create.php page,
// then return to the login_create.php page and enter in every field EXCEPT
// the username field, and then return to login_create.php for a third time.
// ...didn't work.


// $saveForLaterUsername = "blankuser";

// if(!isset($_POST['username'])) {

// $_SESSION['username'] = $saveForLaterUsername;

// } else {

// $_SESSION['username'] = $_POST['username'];

// $saveForLaterUsername = $_POST['username'];

// }

$_SESSION['username'] = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$streetaddress = $_POST['streetaddress'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];


//allow special characters in input fields

$firstname = mysqli_real_escape_string($connection,$firstname );
$lastname = mysqli_real_escape_string($connection,$lastname );
$streetaddress = mysqli_real_escape_string($connection,$streetaddress );
$city = mysqli_real_escape_string($connection,$city );
$state = mysqli_real_escape_string($connection,$state );
$zip = mysqli_real_escape_string($connection,$zip );

$connection = mysqli_connect('localhost', 'root', '', 'ADDRESSBOOK');

    if(!$connection) {

    die("Database connection failed");

    }

$query = "INSERT INTO ADDRESSES(firstname,lastname,streetaddress,city,state,zip) " ;
$query .= "VALUES ('$firstname', '$lastname', '$streetaddress', '$city', '$state', '$zip')";


$result = mysqli_query($connection, $query);

if(!$result) {

        die('query FAILED' .mysqli_error());

} else {

	header("Location: login_success.php");
	exit();

}


}

}



function readData() {

global $connection;

$query = "SELECT * FROM ADDRESSES" ;
$result = mysqli_query($connection, $query);

if(!$result) {
 
        die('query FAILED' .mysqli_error());
}


while($row = mysqli_fetch_assoc($result)) {

echo "<pre>";

print_r($row);

echo "</pre>";

}


}



function showAllData() {

	global $connection;
	$query = "SELECT * FROM ADDRESSES" ;
	$result = mysqli_query($connection, $query);
	if(!$result) {
	        die('query FAILED' .mysqli_error());
	}
	
	
	while($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo "<option value='$id'>$id</option>";
	}

}


function updateTable() {

if(isset($_POST['submit'])) {

global $connection;

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $streetaddress = $_POST['streetaddress'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $id = $_POST['id'];

        $query = "UPDATE ADDRESSES SET ";
        $query .= "firstname = '$firstname', ";
        $query .= "lastname = '$lastname' ";
        $query .= "streetaddress = '$streetaddress' ";
        $query .= "city = '$city' ";
        $query .= "state = '$state' ";
        $query .= "zip = '$zip' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if(!$result) {

                die("QUERY FAILED" . mysqli_error($connection));

        } else {

	echo "Record Updated";

}

}

}


function deleteRows() {

if(isset($_POST['submit'])) {

global $connection;

        $id = $_POST['id'];

        $query = "DELETE FROM ADDRESSES ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if(!$result) {

                die("QUERY FAILED" . mysqli_error($connection));

        } else {

	echo "Record Deleted";

}

}

}


?>
