<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT id FROM topss WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: profile.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Netflix Clone Page</title>
</head>
<body>
    <section class="showcase2">
        <header class="top">
            <h1 class="logo">NETFLIX</h1>
        </header>
            <img src="images/netfliximage.jpg" class="im" alt="">
            <div class="overlay"></div>
        <div class="container">
            <form name="myform" onSubmit="return validate()" class="form" action="" method="POST">
                <h2>Sign In</h2>
                <?php $error ?>
                <input type="text" name="email" placeholder="Email or phone number"/>
                <input type="password" name="pass" placeholder="Password"/>
                <input type="submit" name="submit" value="Sign In"/>
                <small class="ch">
                    <div class="c">
                   <input type="checkbox" name="remember me" value="remember me"/>Remember me
                </div>
                <a href=""> Need help?</a>
            </small>
            </form>
            <div class="face">
                <p class="log"><a href=""><img src="images/facebook.png"  alt=""></a>
                    <a href=""> Login with Facebook</a></p>
                <p class="new">New to Netflix?  <a href="index.php"> Sign up now</a></p>
                <p class="this">This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="">Learn more</a></p>
            </div>
        </div>     
    </section>

    <script>
        function validate(){
            var text = document.forms["myform"]["email"].value;

            if(text=="" || text==null){
                alert("Enter your email or phone number");
                return false;
            }
        }
    </script>
    </body>
    </html>