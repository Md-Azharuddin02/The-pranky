<?php
    include('make_conn.php');

if(isset($_POST['submit'])){

    $sql="INSERT INTO user_jokes (username,email,category,jokes)
    VALUES('$_POST[username]','$_POST[email]','$_POST[category]','$_POST[jokes]')";

    if(mysqli_query($con, $sql)){
        header("Location:./userProfile.php", true, 301);
        exit();
    }

    mysqli_close($con);
}

