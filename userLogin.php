<!DOCTYPE html>
<html lang="en">
  <head>
    <title>userLogin</title>
          
    <link rel="stylesheet" type="text/css" href="resourses/css/styles.css">
  </head>
    
  <body>  
    <header class="E">
      <nav class="accout">
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
      <div class="row">
        <div class="text-cover">
          <h1>User Account</h1>
        </div>
      </div>
    </header>
         
    <section class="login">
      <div>
        <form style="height: 700px; width: 700px; background-color: yellow;" action="login.php">
          <img src="icons/user.jpg" align="right"> 
          <label style="font-size: 50px">
            <?php
              $username="admin";
              echo ($username);
            ?>
          </label>
          <hr style="width: auto; height: 75px; background-image: url(resourses/img/HRprop.jpg);">
        </form>  
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
