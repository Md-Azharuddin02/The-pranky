<?php
include('make_conn.php');

if(isset($_POST['submit'])){

   
if($fnameErr == "" && $lnameErr == "" && $emailErr == ""){
// $msg_success = "You filled this form up correctly";
$sql = "INSERT INTO student (firstname, lastname, email) VALUES ('$lname','$lname','$email')";

}
mysqli_close($con);

}
}
?>
