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
    <title>Sign Up</title>
  </head>
  <body>

  <?php
//connection code:-
$con=mysqli_connect("localhost","root","","the_pranky");
if(!$con){
    die("connection failed :" . $mysqli_error);
}


if(isset($_POST['submitx'])){

    $nameErr = $emailErr = $phoneErr = $passwordErr = $c_passwordErr = "";  
    $name = $email = $phone = $password = $c_password = "";
    
    //Input fields validation  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
        //String Validation  
        if (empty($_POST['name'])) {  
            $nameErr = "Name is required";  
       } else {  
           $name =$_POST['name'];  
               // check if name only contains letters and whitespace  
               if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                   $nameErr = "Only alphabets and white space are allowed";  
               }  
       }  
     
        //Email Validation   
        if (empty($_POST['email'])) {  
            $emailErr = "Email is required";  
    } else {  
            $email =$_POST['email'];  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  

     // phone validation
     if(empty($_POST['phone'])){
        $phoneErr = "phone No. is required";
     }
     else{
       $phone = $_POST['phone'];
        // check if mobile no is well-formed  
       if (!preg_match ("/^[0-9]*$/", $phone) ) {  
        $phoneErr = "Only numeric value is allowed.";  
          }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($phone) != 10) {  
            $phoneErr = "Mobile no must contain 10 digits.";  
            }  
      }

      // password validation
      if (empty($_POST['password'])) {  
        $passwordErr = "password is required";  
   } else {  
       $password =$_POST['password'];  
   }  
      
   
   // c_password validation
    if (empty($_POST['c_password'])) {  
        $c_passwordErr = " conform password is required";  
   }
   else{
       $c_password =$_POST['c_password'];  
   }  



    function input_data($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
      }  
    
$slquery = "SELECT 1 FROM userdata WHERE email = '$email'";
$selectresult = mysqli_query($con,$slquery);
$row = mysqli_fetch_array($selectresult, MYSQLI_ASSOC);  
$count = mysqli_num_rows($selectresult); 

if($nameErr == ""  && $emailErr == "" && $phoneErr=="" && $passwordErr=="" && $c_passwordErr == ""){
// $msg_success = "You filled this form up correctly";
if($count == 1)
{
     $msg = 'email already exists';
}
else if($password!=$c_password){
 echo "conform password not same";
}
else{
$sql = "INSERT INTO userdata (name, email, phone, password,c_password) VALUES ('$name','$email','$phone','$password','$c_password')";
     
    if(mysqli_query($con,$sql)){
      header('login_and_signup.php');
      echo "New record created successfully";
    }
}
}
mysqli_close($con);
}
}
?>

    <section>
      <!-- Register -->
      <div class="user signup" >
          <div class="form-box">
            <div class="top">
              <p>
                Already a member?
                <a href="./login_and_signup.php" class="a-link" >Login Now</a>
                
              </p>
            </div>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div class="form-control">
                <h2>Create Account</h2>
                <span>
                  <input type="text" name="name" id="name"  placeholder="Your Name" required>
                  <?php
                if(isset($_POST['submitx'])){
                    print("<br>");
                echo $nameErr;
                }
                ?>
                <small id="name-msg"></small>
                </span>
                <span><input type="email" id="signup-email" name="email"    placeholder="Enter Your Email"require >
                <?php
                if(isset($_POST['submitx'])){
                    print("<br>");
                echo $emailErr;
                }
                ?>
                  <small id="email-msg2"></small>
                </span>
                
                <span>
                  <input type="number" id="phone" name="phone" placeholder="Phone Number" require >
                  <?php
                if(isset($_POST['submitx'])){
                    print("<br>");
                echo $phoneErr;
                }
                ?>
                <small id="phone-msg"></small>
                </span>
                <div>
                  <span>
                    <input type="password" id="passwordRegister" name="password" placeholder="Password" require >
                    <?php
                if(isset($_POST['submitx'])){
                    print("<br>");
                echo $passwordErr;
                }
                ?>
                  <small id="password-msg"></small>
                  </span>
                  <div class="icon form-icon">
                    <img src="./images/eye.svg" alt="" />
                  </div>
                </div>
                <div>
                  <span>
                    <input type="password" id="passwordConfirm" name="c_password" placeholder="Confirm Password" require >
                    <?php
                if(isset($_POST['submitx'])){
                    print("<br>");
                echo $c_passwordErr;
                }
                ?>
                  <small id="password-msg2"></small>
                  </span>
                  <div class="icon form-icon">
                    <img src="./images/eye.svg" alt="" />
                  </div>
                </div>
                <input type="Submit" id="sign" name="submitx" value="Register"/>
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
          <!-- <div class="img-box">
            <img src="./images/trial.svg" alt="" />
          </div> -->
        </div>
      </div>
    </section>
    <!-- IndexJs -->
    <!-- <script src="./js/login and signup.js"></script> -->



  </body>
</html>
