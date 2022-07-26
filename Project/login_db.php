<?php
session_start();
 include('make_conn.php'); 
// if(isset($_POST["submit"])){

 $username = $_POST['email'];  
 $password = $_POST['password'];  
   
     //to prevent from mysqli injection  
     $username = stripcslashes($username);  
     $password = stripcslashes($password);  
     $username = mysqli_real_escape_string($con, $username);  
     $password = mysqli_real_escape_string($con, $password);  
   
     $sql = "SELECT * FROM userdata WHERE email = '$username' and password = '$password'";  
     $result = mysqli_query($con, $sql);  
     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
     $count = mysqli_num_rows($result);  
       
     if($count == 1){ 
        $_SESSION['login_user'] =$username;
        header("Location:./home.php", true, 301);
        exit();
     }  
     else{ 
        header("Location:./login_and_signup.php", true, 301);
         echo "<h1> Login failed. Invalid username or password.</h1>";  
     }    
// }
?>