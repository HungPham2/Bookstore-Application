<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: obs.html"); // Redirecting To Home Page
}
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Sign Up</title>
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
	      <h3>Welcome to the Store of <span>Books</span></h3>
	    </div><!--close welcome_slogan-->
      </div><!--close strapline-->	  
	  <nav>

	    <div id="menubar">
          <ul id="nav">
            <li><a href="obs.html">Home</a></li>
            <li><a href="register.html">Sign Up</a></li>
            <li><a href="orders.php">Books</a></li>
            <li><a href="loginCus.php">Login</a></li>
             <li class="current"><a href="profile.html">Profile</a></li>
          </ul>
        </div><!--close menubar-->	
      </nav>
    </header>
    
     <div id="slideshow_container">  
	  <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="940" height="250" src="images/obs10.jpeg" alt="&quot;The best things in life are free!&quot;" /></li>
          <li><img width="940" height="250" src="images/obs11.jpeg" alt="&quot;Access to the World&quot;" /></li>
        </ul> 
	  </div><!--close slideshow-->  	
	</div><!--close slideshow_container-->   
	
	<div id="site_content">		
	  
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
           
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		
	     <div class="sidebar">
          <div class="sidebar_item">
            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->  
	
	     		
		<div id="content">
        <div class="content_item">
		  
  <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
  

	<div id="site_content">		
	  
	  
    		
		<div class="sidebar">
          <div class="sidebar_item">
            <p>Take advantage of special offers!</p>
            <p> </p>
	</div><!--close sidebar_item--> 
        </div><!--close sidebar-->

  <div class="sidebar">
          <div class="sidebar_item">
            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
       
       <b id="logout"><a href="logout.php">Log Out</a></b>
			
       <footer>
        <a href="obs.html">Home</a> | <a href="register.html">Sign Up</a> | <a href="orders.php">Books</a> | <a href="loginCus.php">Login</a><br/><br/>
	  
    </footer>
	
  </div><!--close main-->
  <!-- | website template by <a href="http://www.freehtml5templates.co.uk">Free HTML5 Templates</a>-->
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>

</html>