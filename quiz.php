<?php

session_start();

$servername = "localhost";
$username = "ecleca9f";
$password = "newWeb16@ec#";
$dbname = "ecleca9f_eclectika18";

    // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else{
    }
if($_SESSION['status'] == "loggedin")
	{
		
	}
	else
	{
		header("location:login.php");
	}
	
	
//session available are :semester,name,college,branch,email,usernumber,status,accesstoken

echo $_SESSION['status']." ".$_SESSION['name']." ".$_SESSION['semester']." ".$_SESSION['branch']." ".$_SESSION['college']." ".$_SESSION['email']." ".$_SESSION['usernumber']." ".$_SESSION['accesstoken']." ";
?>




<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Quiz</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700'>

      <link rel="stylesheet" href="megaevents.css"> 
    <script    src="http://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
      <script src="megaevents.js" type="text/javascript"></script>

  
</head>

<body>
<p id="token"><?php echo $_SESSION['accesstoken']?></p>
<p id="cat_id">2</p>

<section class="container">
  <div class="wrapper">

    <div id="a"  class="one">
        <div class="hidden"><p></p></div>
        <div class="title"><h2></h2></div>
        <div class="introduction"><h4></h4></div>
        <div class="contact"><h4>Contact for Queries.</h4>
        <p><br /></p></div>
        <div class="inner"><div class="innermost"><p></p></div></div>
        <div class="button-container">
          <button class="des btn">See Rules</button>
          <button class="register btn">Register</button>
        </div>


    </div>


    <div id="b"  class="one">
        <div class="hidden"><p></p></div>
        <div class="title"><h2></h2></div>
        <div class="introduction"><h4></h4></div>
        <div class="contact"><h4>Contact for Queries.</h4>
        <p><br /></p></div>
        <div class="inner"><div class="innermost"><p></p></div></div>
        <div class="button-container">
          <button class="des btn">See Rules</button>
          <button class="register btn">Register</button>
        </div>


    </div>


    <div id="c"  class="one">
        <div class="hidden"><p></p></div>
        <div class="title"><h2></h2></div>
        <div class="introduction"><h4></h4></div>
        <div class="contact"><h4>Contact for Queries.</h4>
        <p><br /></p></div>
        <div class="inner"><div class="innermost"><p></p></div></div>
        <div class="button-container">
          <button class="des btn">See Rules</button>
          <button class="register btn">Register</button>
        </div>


    </div>


    <div id="d"  class="one">
        <div class="hidden"><p></p></div>
        <div class="title"><h2></h2></div>
        <div class="introduction"><h4></h4></div>
        <div class="contact"><h4>Contact for Queries.</h4>
        <p><br /></p></div>
        <div class="inner"><div class="innermost"><p></p></div></div>
        <div class="button-container">
          <button class="des btn">See Rules</button>
          <button class="register btn">Register</button>
        </div>


    </div>
    

    <div id="e"  class="one">
        <div class="hidden"><p></p></div>
        <div class="title"><h2></h2></div>
        <div class="introduction"><h4></h4></div>
        <div class="contact"><h4>Contact for Queries.</h4>
        <p><br /></p></div>
        <div class="inner"><div class="innermost"><p></p></div></div>
        <div class="button-container">
          <button class="des btn">See Rules</button>
          <button class="register btn">Register</button>
        </div>


    </div>

    <div id="f"  class="one">
        <div class="hidden"><p></p></div>
        <div class="title"><h2></h2></div>
        <div class="introduction"><h4></h4></div>
        <div class="contact"><h4>Contact for Queries.</h4>
        <p><br /></p></div>
        <div class="inner"><div class="innermost"><p></p></div></div>
        <div class="button-container">
          <button class="des btn">See Rules</button>
          <button class="register btn">Register</button>
        </div>


    </div>


    <div id="g"  class="one">
        <div class="hidden"><p></p></div>
        <div class="title"><h2></h2></div>
        <div class="introduction"><h4></h4></div>
        <div class="contact"><h4>Contact for Queries.</h4>
        <p><br /></p></div>
        <div class="inner"><div class="innermost"><p></p></div></div>
        <div class="button-container">
          <button class="des btn">See Rules</button>
          <button class="register btn">Register</button>
        </div>


    </div>

        <div id="h"  class="one">
        <div class="hidden"><p></p></div>
        <div class="title"><h2></h2></div>
        <div class="introduction"><h4></h4></div>
        <div class="contact"><h4>Contact for Queries.</h4>
        <p><br /></p></div>
        <div class="inner"><div class="innermost"><p></p></div></div>
        <div class="button-container">
          <button class="des btn">See Rules</button>
          <button class="register btn">Register</button>
        </div>


    </div>





  </div>
</section>


</body>
</html>