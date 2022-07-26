<?php
include ('session.php');
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
                    <a href="about.html" >About</a>
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

    <!-- Banner Section  -->
    <section id="banner">
        <div class="banner-container">
         <div class="image">
          <div class="img1">
            <img src="./images/site-images/banner (1).png" alt="image" width="400px">
          </div>
          <div class="img2">
            <img src="./images/site-images/emoji/gif (2).gif" alt="image" width="250px">
          </div>
          <div class="img3">
            <img src="./images/site-images/emoji/gif (5).gif" alt="image" width="250px">
          </div>
          <div class="img4">
            <!-- <img src="./images/site-images/banner (3).png" alt="image" width="300px"> -->
          </div>
         </div>
          <div class="heading">
            <h1>
              <span>Let's Start  </span>
              <span class="span2">Fun </span>
            </h1>
            <img src="./images/site-images/emoji/png.png" alt="image">
          </div>
        </div>
    </section>

    <!-- Post Your Own Jokes Section  -->
    <div class="post-joke">
      <div class="img">
        <img src="./images/site-images/header (2).png" alt="">
      </div>
      <div class="btn">
        <a href="post.html"><button id="btn-post">Post Your Own Jokes </button></a>
      </div>
      <div class="img">
        <img src="./images/site-images/header (3).png" alt="">
      </div>
    </div>

<!-- joke Section  -->
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

    $sql="SELECT username, jokes FROM user_jokes;";
    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0){

      while($row=mysqli_fetch_assoc($result)){
          echo "<div class="."joke-section".">";
          echo "<div class="."imgbox".">";
          echo '<img src="./images/site-images/header (1).png" alt="image">';
         echo"</div>";
         echo" <div class=" ."content". ">";
          echo"<h2>Keep Smiling</h2>";
           echo "<p>".$row["jokes"]. "</p>";
          echo "</div>";
       echo "</div>";
      }
    }
    // else{
    //   echo "0 result";
    // }
    ?>

        <div class="joke-section">
          <div class="imgbox">
            <img src="./images/site-images/header (1).png" alt="image">
          </div>
          <div class="content">
            <h2>Keep Smiling</h2>
            <p>Why are oranges the smartest fruit? Because they are made to concentrate. </p>
          </div>
        </div>
        <div class="joke-section">
          <div class="imgbox">
            <img src="./images/site-images/header (1).png" alt="image">
          </div>
          <div class="content">
            <h2>Keep Smiling</h2>
            <p>I asked a frenchman if he played video games. He said "Wii" </p>
          </div>
        </div>
        <div class="joke-section">
          <div class="imgbox">
            <img src="./images/site-images/header (1).png" alt="image">
          </div>
          <div class="content">
            <h2>Keep Smiling</h2>
            <p>Why don't skeletons ride roller coasters? They don't have the stomach for it. </p>
          </div>
        </div>
        <div class="joke-section">
          <div class="imgbox">
            <img src="./images/site-images/header (1).png" alt="image">
          </div>
          <div class="content">
            <h2>Keep Smiling</h2>
            <p>Why was ten scared of seven? Because seven ate nine.</p>
          </div>
        </div>
        <div class="joke-section">
          <div class="imgbox">
            <img src="./images/site-images/header (1).png" alt="image">
          </div>
          <div class="content">
            <h2>Keep Smiling</h2>
            <p>What do you do when you see a space man? Park your car, man. </p>
          </div>
        </div>
        <div class="joke-section">
          <div class="imgbox">
            <img src="./images/site-images/header (1).png" alt="image">
          </div>
          <div class="content">
            <h2>Keep Smiling</h2>
            <p>Why was Santa's little helper feeling depressed? Because he has low elf esteem. </p>
          </div>
        </div>
        <div class="joke-section">
          <div class="imgbox">
            <img src="./images/site-images/header (1).png" alt="image">
          </div>
          <div class="content">
            <h2>Keep Smiling</h2>
            <p>What happens when you anger a brain surgeon? They will give you a piece of your mind. </p>
          </div>
        </div>
        <div class="joke-section">
          <div class="imgbox">
            <img src="./images/site-images/header (1).png" alt="image">
          </div>
          <div class="content">
            <h2>Keep Smiling</h2>
            <p>What do you call a beehive without the b's? An eehive. </p>
          </div>
        </div>
        <div class="joke-section">
          <div class="imgbox">
            <img src="./images/site-images/header (1).png" alt="image">
          </div>
          <div class="content">
            <h2>Keep Smiling</h2>
            <p>I have kleptomania, but when it gets bad, I take something for it. </p>
          </div>
        </div>
        <div class="joke-section">
          <div class="imgbox">
            <img src="./images/site-images/header (1).png" alt="image">
          </div>
          <div class="content">
            <h2>Keep Smiling</h2>
            <p>What do you call a troublesome Canadian high schooler? A poutine. </p>
          </div>
        </div>
        <div class="joke-section">
          <div class="imgbox">
            <img src="./images/site-images/header (1).png" alt="image">
          </div>
          <div class="content">
            <h2>Keep Smiling</h2>
            <p>What did one snowman say to the other snow man? Do you smell carrot? </p>
          </div>
        </div>
        <div class="joke-section">
          <div class="imgbox">
            <img src="./images/site-images/header (1).png" alt="image">
          </div>
          <div class="content">
            <h2>Keep Smiling</h2>
            <p>Today a girl said she recognized me from vegetarian club, but I’m sure I’ve never met herbivore. </p>
          </div>
        </div>
      </div>
  </section>

  <!-- My Team Members About Section Start-->

 <section id="about" class="our-webcoderskull padding-lg">
    <div class="container">
      <div class="row heading heading-icon">
          <h2>Our Team Members</h2>
      </div>
      <ul class="row">
        <li id="about-box" class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 349px;">
              <figure><img src="./images/site-images/teams/Reduce size.jpg" class="img-responsive" alt="image"></figure>
              <h3>Shivam Kumar Nayak</h3>
              <p>Maharishi Markandeshwar Deemed to be University, Mullana, Ambala</p>
              <ul class="follow-us clearfix">
                <li><a href="#" target="blank"><i class='bx bxl-facebook-circle' ></i></i></a></li>
                <li><a href="https://twitter.com/theshivamnayak" target="blank"><i class='bx bxl-twitter' ></i></i></a></li>
                <li><a href="https://www.linkedin.com/in/shivamkumarnayak/" target="blank"><i class='bx bxl-linkedin'></i></a></li>
              </ul>
            </div>
        </li>
        <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 349px;">
              <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
              <h3>Shaurav Kumar Sharma</h3>
              <p>Maharishi Markandeshwar Deemed to be University, Mullana, Ambala</p>
              <ul class="follow-us clearfix">
                <li><a href="#" target="blank"><i class='bx bxl-facebook-circle' ></i></i></a></li>
                <li><a href="#" target="blank"><i class='bx bxl-twitter' ></i></i></a></li>
                <li><a href="#" target="blank"><i class='bx bxl-linkedin'></i></a></li>
              </ul>
            </div>
        </li>
        <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 349px;">
              <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
              <h3>Md. Azharuddin</h3>
              <p>Maharishi Markandeshwar Deemed to be University, Mullana, Ambala</p>
              <ul class="follow-us clearfix">
                <li><a href="#" target="blank"><i class='bx bxl-facebook-circle' ></i></i></a></li>
                <li><a href="#" target="blank"><i class='bx bxl-twitter' ></i></i></a></li>
                <li><a href="#" target="blank"><i class='bx bxl-linkedin'></i></a></li>
              </ul>
            </div>
         </li>
      </ul>
    </div>
  </section> 

    <!-- My Team Members About Section End -->

    <!-- Footer Section  -->
    <div id="footer">
        <div class="footer-container">
            <div class="footer-content">
                <h3>INFORMATION</h3>
                <div class="page">
                  <a href="about.html">About Us</a>
                </div>
                <div class="page">
                  <a href="privacy-policy.html" target="blank">Privacy Policy</a>
                </div>
                <div class="page">
                  <a href="terms-condition.html" target="blank">Terms & Conditions</a>
                </div>
            </div>
            <div id="contactus" class="footer-content">
                <h3>CONTACT US</h3>
                <div>
                  <span>
                    <i class='bx bx-map'></i>
                  </span>
                  MMDU, Mullana, Ambala, Haryana
                </div>
                <div>
                  <span>
                    <i class='bx bxs-envelope'></i>
                  </span>
                  thepranky@gmail.com
                </div>
                <div>
                  <span>
                    <i class='bx bxs-phone'></i>
                  </span>
                  9709808834
                </div>
                <div>
                  <span>
                    <!-- <i class="far fa-paper-plane"></i> -->
                  </span>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Footer End -->

    <!-- GSAP  -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script> -->

    <!-- GSAP Part-2-->
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>

    <!-- Java Script  -->
    <script src="./js/index.js"></script>
    <script src="./js/gsap.js"></script> 
</body>
</html>