<?php 

$connection = mysqli_connect('localhost', 'root', '', 'ADDRESSBOOK');    
    
    if(!$connection) {
    
    die("Database connection failed");
    
    }

?>
