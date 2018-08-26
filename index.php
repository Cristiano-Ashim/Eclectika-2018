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
  <title>Experiment-3</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

<p><?php echo $_SESSION['accesstoken']?></p>

  
<header class="hero">
  <h1>Genres of Events we offer</h1>
  <p>We promise we won't let you down! </p>
</header>

<ul class="card-stacks">
  <li class="title">
    <h2>Click the stack to take a peek!</h2>
  </li>
  <li class="stack stack-1">
    
    <ul class="cards-down">
     
        <li id="mega-events" class="card card-1 ">
              <a href="mega-events.php" target="blank"> 
               <div class="content">
            <h1>Mega Events</h1>
            <p></p>
          </div>
        </a>
        </li>
      
      <li id="literary"  class="card card-2">
              <a href="literary.php" target="blank">

        <div class="content">
          <h1>Literary Events</h1>
          <p></p>
        </div></a>
      </li>
      
      
      <li id="nineties" class="card card-3">
              <a href="rush.php" target="blank">

        <div class="content">
          <h1>90's Rush</h1>
          <p></p>
        </div></a>
      </li>
      

    </ul>
</li>
  
  <li class="stack stack-2">
    <ul class="cards-down">
      <li id="quiz" class="card card-1">
              <a href="quiz.php" target="blank">

        <div class="content">
          <h1>Quiz!</h1>
          <p></p>
        </div></a>
      </li>
      

      <li id="dance" class="card card-2">
      <a href="dance.php" target="blank">

        <div class="content">
          <h1>Dancing!</h1>
          <p></p>
        </div></a>
      </li>
            
      <li id="music" class="card card-3">
              <a href="music.php" target="blank">

        <div class="content">
          <h1>Music</h1>
          <p></p>
        </div></a>
      </li>
      
    </ul>
  </li>
  <li class="stack stack-3">
    <ul class="cards-down">
      <li id="informal" class="card card-1">
              <a href="informals.php" target="blank">

        <div class="content">
          <h1>Informals</h1>
          <p></p>
        </div></a>
      </li>
    
      
      <li id=arts class="card card-2">
              <a href="arts.php" target="blank">

        <div class="content">
          <h1>Fine Arts</h1>
          <p></p>
        </div></a>
      </li>
    

      <li id="photo" class="card card-3">
      <a href="photography.php" target="blank">
        <div class="content">
          <h1>Photography</h1>
          <p></p>
        </div></a>
      </li>
    
    </ul>
  </li>
</ul>
<hr/>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
