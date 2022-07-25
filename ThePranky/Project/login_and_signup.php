<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <!-- Google font -->
     <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    
     <!-- Favicon -->
     <link rel="shortcut icon" href="./images/site-images/Favicon/apple-icon.png" type="image/x-icon">
   
    <!-- StyleSheet -->
    <link rel="stylesheet" href="./css/loginandsignup.css" />
    <title>Sign Up | Login </title>
  </head>
  <body>
    <section>
      <div class="container"  >
        <div class="user login" >
          <div class="form-box">
            <div class="top">
              <p>
                Not a member?
                <a href="./signup.php" class="a-link" >Register Now</a>
              </p>
            </div>
            <form method="POST" action="login_db.php">
              <div class="form-control">
                <h2>Login Now</h2>
                <span>
                  <input type="email" id="email" name="email"  placeholder="Enter you Email">
                 <p><small id="email-msg"></small></p>
                </span>
                <div>
                  <input type="password" id="password" name="password" placeholder="Password">
                  <!-- <span id="validPassword"> </span> -->
                  <div class="icon form-icon">
                    <!-- <img src="./images/eye.svg" alt="" /> -->
                  </div>
                </div>
                <span>Forgot Your Password</span>
                <input type="Submit" id="logi" name="submit"  value="Login" />
                
              </div>
              <div class="form-control">
                <p>Or continue with</p>
                <div class="icons">
                  <div class="icon">
                    <img src="./images/search.svg" alt="" />
                  </div>
                  <div class="icon">
                    <img src="./images/facebook.svg" alt="" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>


    </section>
    <!-- IndexJs -->
    <script src="./js/login_and_signup.js"></script>
  </body>
</html>
