<?php
 include('make_conn.php');
 session_start();

 $user_check=$_SESSION['login_user'];

 $sql = "SELECT name, email, phone FROM userdata WHERE email= '$user_check'";  
 $result = mysqli_query($con, $sql);  
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);    
 $login_name_session=$row['name'];
 $login_session=$row['email'];
 $login_phone_session=$row['phone'];

 if(!isset($login_session)){
     mysqli_close($con);
     header('Location: about.html');
 }
?>