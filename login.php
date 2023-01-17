<?php
  $msg1='';
  $msg2='';
  session_start();   //Session start and Store Session Data
      
  //Check form submit with IF Isset function
  if(isset($_POST['submit'])) {
    $username="admin";   //set variable value for username
    $password="123";   //set variable value for password

    //Check Given user name, password and Variable user name password are same
    if($_POST['username']==$username && $_POST['password']==$password) {
      $_SESSION['username']=$username;   //set session from given user name
      $msg1="Username and Password correct   ";
      echo($msg1);

      if(isset($_SESSION['username'])) {
        echo "<a href=\"userlogin.php\">$username</a>";
      } 
    }
    else {
      $msg2="Username or Password incorrect   ";
      echo($msg2);
    }
  }

  if(isset($_POST['cancel'])) {
    session_unset();   // Remove all session variables
    session_destroy();   //Destroy the session
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>loginForm</title>

    <link rel="stylesheet" type="text/css" href="resourses/css/styles.css">
  </head>
    
  <body>
    <header class="E">
      <nav>
        <div class="row">
          <ul class="main-nav">
            <li>
              <a href="index.html">
              <img src="icons/home.png" class="nav_home" alt="home">
            </li>  
            <li><a href="loan.html" target="_blank">Loans</a></li>  
            <li><a href="savings.html" target="_blank">Savings</a></li>  
            <li><a href="fd.html" target="_blank">FD</a></li>  
            <li><a href="billPay.html" target="_blank">Bill Payments</a></li>   
            <li><a href="Login.php"target="_blank">Login</a></li>
          </ul>
        </div>
      </nav>

      <div class="row">
        <img src="resourses/img/Shakthi.jpg" alt="logo" class="logo">
      </div>
    </header>
        
    <section class="login">
      <div class="row login">
        <div>
          <h1 style="font-size: 40px; color: black;" align="center">Login Form</h1>
          <p name="colorPara1" id="colorPara" style="color: green" align="center"><b><?php echo($msg1); ?></b></p>
          <p name="colorPara2" id="colorPara"style="color: red" align="center"><b><?php echo($msg2); ?></b></p>

          <form action="" method="POST">
          <div class="container">
            <label for="uname"><b>Username :</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br><br>

            <label for="psw"><b>Password :</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br><br>
        
            <button type="submit" name="submit" id="submit"><b>Login</b></button>

            <button class="cancelbtn" type="cancel" name="cancel"><b>Cancel</b></button>

          </div>
          </form>
        </div>
      </div>
    </section> 

    <footer>
      <div class="col span-1-of-1">
        <ul class="social-icons">
          <li>
            <a href="https://www.facebook.com" target="_blank">
              <img src="icons/facebook.jpg" class="facebook" alt="facebook">
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com" target="_blank">
              <img src="icons/twitter.png" class="twitter" alt="twitter">
            </a>
          </li>
          <li>
            <a href="https://www.google.com" target="_blank">
              <img src="icons/google.png" class="google" alt="google">
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com" target="_blank">
              <img src="icons/linkedin.png" class="linkedin" alt="linkedin">
            </a>
          </li>
        </ul>

        <div class="row">
          <ul class="footer-nav">
            <li><a href="#">Sitemap</a></li>
            <li><a href="application.html">Downloads</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Customer Feedback</a></li>
          </ul>
        </div>

        <br><br><br><br><br><br><br><br><hr>

        <div class="copyright">
          <p>
            Copyright &copy; 2019 by Prabhani Programming. All rights reserved.<br>Solution By: Sachi Udawaththa
          </p>
        </div>
      </div>
    </footer>
    
  </body> 
</html>
    