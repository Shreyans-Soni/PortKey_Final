<?php

session_start();
if(isset($_SESSION['login_user'])){
  header("location: profile_bus.php");
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Driver's Bus</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
      
      
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Bus Registration Form</h1>
          
          <form action="driver_auth.php" method="post">
          
          
          
		  <div class="field-wrap">
            <label>
              Bus Color<span class="req">*</span>
            </label>
            <input type="text" name = "color" required autocomplete="off"/>
          </div>
          
		  <div class="field-wrap">
            <label>
              Bus Number<span class="req">*</span>
            </label>
            <input type="text" name = "number" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Register Bus</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="index.html" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>