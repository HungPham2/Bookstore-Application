<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?> 



<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">		

    <header>
	  <div id="strapline">
	    <div id="welcome_slogan">
	     <h3>Welcome online Store of <span>Entertainment</span></h3>
	    </div><!--close welcome_slogan-->
      </div><!--close strapline-->	  
	  <nav>
	    <div id="menubar">
          <ul id="nav">
            <li><a href="obs.html">Home</a></li>
            <li><a href="register.html">Sign Up</a></li>
            <li><a href="orders.php">Movies/Games</a></li>
            <li class="current"><li><a href="loginCus.php">Login</a></li>
          </ul>
        </div><!--close menubar-->	
      </nav>
    </header>

<div id="slideshow_container">  
	  <div class="slideshow">
	    <ul class="slideshow">
                <li class="show"><img width="940" height="250" src="images/lin2.jpeg" alt="&quot;Information at your tips&quot;" /></li>
          <li><img width="940" height="250" src="images/lin.jpeg" alt="&quot;Convenience at its best&quot;" /></li>
        </ul> 
	  </div><!--close slideshow-->  	
	</div><!--close slideshow_container-->  

<div id="site_content">		
	  
	  <div class="sidebar_container">	
	         		
        <div class="sidebar">
          <div class="sidebar_item">
            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->
   
  <div id="login">
  <h2>Login As:</h2>
   <form action="login.php" method="post">
       <p> Username: <input id="Username" name="Username" placeholder="Username" type="text"></p>
   <p> Password: <input id="Zip_Code" name="Zip_Code" placeholder="**********" type="password"></p><br><br>
   <input name="submit" type="submit" value=" Login ">
   <span><?php echo $error; ?></span>
  	</form>

<footer>
        <a href="obs.html">Home</a> | <a href="register.html">Sign Up</a> | <a href="orders.php">Movies/Games</a> | <a href="loginCus.php">Login</a><br/><br/>
	  
    </footer>
	
  </div><!--close main-->
  <!-- | website template by <a href="http://www.freehtml5templates.co.uk">Free HTML5 Templates</a>-->
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>
</html> 