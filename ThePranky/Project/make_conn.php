<?php

//crate connection
$con=mysqli_connect("localhost","root","","the_pranky");

//check connection
if(!$con){
    die("Connection failed" . $mysqli_error);
}

?>
