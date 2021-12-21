<?php


$msg = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($_POST['username']) || empty($_POST['message'])){
	  echo "<div class='alert-nosucces'>Completeaza campurile!</div>";
	}
	else {
	 
		echo "<div class='alert-succes'>Ati introdus datele:<br>Username: $_POST[username]<br>Message: $_POST[message]</div>";
		
	}
	
  } 
//Connection Database
$conn= new mysqli('localhost','root','','contact');
if ($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt=$conn->prepare("insert into contact(username,message)
	values(?,?)");
	$stmt->bind_param("ss", $username,$message);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
	$sql = "INSERT INTO `contact` (, `username`, `message`) VALUES ( '$username', '$message');"

?>


<!DOCTYPE html>
<head>
    <title>Inregistrare</title>
    <meta charset="utf-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css\null.css">
	<link rel="stylesheet" href="css\prichindel.css">
  <link rel="stylesheet" href="css\signin.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
<header class="header">
		<nav class="header__nav container">
			<ul class="header__nav-list">
				<li class="header__nav-item">
					<a href="Untitled-1.html" class="header__nav-link butt">
						Principala
					</a>
				</li>
				<li class="header__nav-item">
					<a href="rezumat.html" target="_blank" class="header__nav-link butt">
						Rezumat
					</a>
				</li>
				<li class="header__nav-item">
					<a href="autor.html" target="_blank"  class="header__nav-link butt">
						Autor
					</a>
				</li>
				<li class="header__nav-item">
					<a href="Login.php" target="_blank"  class="header__nav-link butt">
						Sign In
					</a>
				</li>
				<li class="header__nav-item">
					<a href="Register.php" target="_blank"  class="header__nav-link butt">
						Sign Up
					</a>
				</li>
				<li class="header__nav-item">
					<a href="ContactUs.php" target="_blank"  class="header__nav-link butt">
						Contact Us
					</a>
				</li>
			</ul>
		</nav>
	</header>
</div>
   <div class="message"></div>
<div class="register">
<div class= "text1">
        REGISTRATION
    </div>

    <form class="form" id="form" name="contactForm" action="" method="post">
      <div class="form-control">
        <label> Username</label>
        <input type="text" placeholder="UserName" name="username" id="username" maxlength="30">
        
        <small>Error message</small>
      </div>

      <label> Message</label>
  
      <form class="form" id="form" action="" method="POST">
      <div class="form-control">
        
        <textarea id="message" name="message" placeholder="Write something.."></textarea>
        <small>Error message</small>
      </div>
   
      <button type ="submit" id="submitBtn">Submit</button>
      
      <script src="ContactUs.js"></script>
     
    </form>
</div>
    
</body>