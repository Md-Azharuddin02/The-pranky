<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font 3 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Fredoka:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">

    <!-- Favicon -->
  <link rel="shortcut icon" href="./images/site-images/Favicon/apple-icon.png" type="image/x-icon">

  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="css/style12.css" />

    <!-- Style CSS  -->
    <link rel="stylesheet" href="css/style.css">
    <title>The Pranky</title>
</head>
<body>
     <!-- Navigation Bar -->
     <header id="navbar" class="header">
        <div class="nav-container">
            <div class="nav-logo">
            <a href="home.php" ><img src="./images/site-images/logo png.png"  alt="image"></a>
            </div>

            <ul class="nav-list">
                <li class="nav-item">
                    <a href="home.php" >Home</a>
                </li>
                <li class="nav-item">
                  <div class="dropdown">
                    <button class="dropbtn">Category
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="#">Funny Jokes</a>
                      <a href="#">Santa Banta Jokes</a>
                      <a href="#">School Jokes</a>
                      <a href="#">Weather Jokes</a>
                      <a href="#">Animal Jokes</a>
                      <a href="#">Birthday Jokes</a>
                      <a href="#">Animal Jokes</a>
                      <a href="#">Dad Jokes</a>
                      <a href="#">Dog Jokes</a>
                      <a href="#">Love Jokes</a>
                    </div>
                  </div>                
                </li>
                <li class="nav-item">
                    <a href="#about" >About</a>
                </li>
                <li class="nav-item">
                    <a href="#contactus" >Contact Us</a>
                </li>
                <li class="nav-item">
                  <div class="dropdown">
                    <button class="dropbtn">Account
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="userProfile.php">Profile</a>
                      <a href="index.php" >LogOut</a>
                    </div>
                  </div>
            </ul>
        </div>
    </header>

<section>
<div class="container">
        <div class="profile">
            <h1>Profile</h1>
        </div>
        <div class="image">
            <img src="images/dummy.jpg" alt="Profile-image">
        </div>
      <div class="form">
        <div>
          <h1><?php echo $login_name_session; ?></h1>
          <span></span>
        </div>
        <br>
        <div>
          <label for="">Email : </label>
          <span><?php echo $login_session; ?></span>
        </div>
        <br>
        <div>
          <label for="">Mobile : </label>
          <span><?php echo $login_phone_session; ?></span>
        </div>
      </div>
     
    </div>
</section>


    <section id="joke-section">
      <div class="head-text">
        <h1>Joke Section</h1>
      </div>
      <div class="grid">

    <?php
    $con=mysqli_connect("localhost","root","","the_pranky");
    if(!$con){
      die("connection failed : ". $mysqli_connect_error);
    }

    $sql="SELECT sr, username, jokes FROM user_jokes WHERE email='$login_session'";
    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
            echo  '<form method="POST" action="">';
        
                echo "<div class="."joke-section".">";
            
                    echo "<div class="."imgbox".">";
                        echo '<img src="./images/site-images/header (1).png" alt="image">';
                        echo"</div>";
                        echo" <div class=" ."content". ">";
                        echo"<h2>Keep Smiling</h2>";
                        echo "<p>".$row["jokes"]. "</p>";
                        echo "<p>".$row["sr"]. "</p>";
                        echo '<button name="delete">Delete</button>';
                        echo "</div>";
                echo "</div>";
           
           echo "</form>";
           $deleteRow=$row["sr"];
          
           if(isset($_POST['delete'])){

            $sql="DELETE FROM user_jokes WHERE sr=$deleteRow"; 
           
            // $sql="DELETE FROM user_jokes WHERE sr='$deleteRow'";   

            if(mysqli_query($con, $sql)){
                header("Location:./userProfile.php", true, 301);
                echo 'entity deleted';

                exit();
            }

           }
          
      }
    }
   
    // else{
    //   echo "0 result";
    // }

    ?>
  </section>
</body>
</html>