<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1a3c21e021.js" crossorigin="anonymous"></script>
<!--<link rel="stylesheet" type="text/css" href="css/Login.css">-->
        <style>
            *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    
}
body{
    background-color: #383838;
    background-image: linear-gradient(90deg, #d53369 0%, #daae51 100%);
}
.container{
    display: flex;
    height: 100vh;
    justify-content: center;
    text-align: center;
    align-items: center;
    
}
h2{
        font-family: sans-serif;
        letter-spacing: 7px;
        font-size: 2em;
        margin-bottom: 30px;
}
form {
    width: 380px;
    margin: 4em auto;
    padding: 2em 1em 1em 1em;
    background: #fafafa;
    border: 1px solid #ebebeb;
    box-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
}

.group { 
    position: relative; 
    margin-bottom: 45px; 
}

input {
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    -webkit-appearance: none;
    display: block;
    background: #fafafa;
    color: #636363;
    width: 100%;
    border: none;
    border-radius: 0;
    border-bottom: 1px solid #757575;
}

input:focus { outline: none; }


/* Label */

label {
    color: #999; 
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 5px;
    top: 10px;
    transition: all 0.2s ease;
}


/* active */

input:focus ~ label, input.used ~ label {
    top: -20px;
  transform: scale(.75); left: -2px;
    /* font-size: 14px; */
    color: #4a89dc;
}


/* Underline */

.bar {
    position: relative;
    display: block;
    width: 100%;
}

.bar:before, .bar:after {
    content: '';
    height: 2px; 
    width: 0;
    bottom: 1px; 
    position: absolute;
    background: #4a89dc; 
    transition: all 0.2s ease;
}

.bar:before { left: 50%; }

.bar:after { right: 50%; }


/* active */

input:focus ~ .bar:before, input:focus ~ .bar:after { width: 50%; }


/* Highlight */

.highlight {
    position: absolute;
    height: 60%; 
    width: 100px; 
    top: 25%; 
    left: 0;
    pointer-events: none;
    opacity: 0.5;
}


/* active */

input:focus ~ .highlight {
    animation: inputHighlighter 0.3s ease;
}


/* Animations */

@keyframes inputHighlighter {
    from { background: #4a89dc; }
    to  { width: 0; background: transparent; }
}


/* Button */

.button {
  position: relative;
  display: inline-block;
  padding: 12px 24px;
  margin: .3em 0 1em 0;
  width: 100%;
  vertical-align: middle;
  color: #fff;
  font-size: 16px;
  line-height: 20px;
  -webkit-font-smoothing: antialiased;
  text-align: center;
  letter-spacing: 1px;
  background: transparent;
  border: 0;
  border-bottom: 2px solid #3160B6;
  cursor: pointer;
  transition: all 0.15s ease;
}
.button:focus { outline: 0; }


/* Button modifiers */

.buttonBlue {
  background: #4a89dc;
  text-shadow: 1px 1px 0 rgba(39, 110, 204, .5);
}

.buttonBlue:hover { background: #357bd8; }
p{
    color: #636363;
    font-weight: 10px;
}
.social i{
    background-color: #636363;
    color: white;
    padding: 8px;
    border-radius: 10px;
    margin-top: 10px;
    margin-right: 3px;
    transition: 0.3s all;
}
.social i:hover{
    background-color: #357bd8;
}
.f{
    color: #636363;
    font-weight: 10px;
    margin-top: 20px;
    font-size: 0.75em;
}
a{
    color:white;
}
        </style>
        <script src="https://kit.fontawesome.com/1a3c21e021.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg  navbar-light sticky-top">
            <!-- Brand -->
            <a class="navbar-brand" href="index.html" style="padding-left: 10px;"><del>TechBlog</del></a>
          
          
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <!-- Navbar links -->
            
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                
               
              <ul class="navbar-nav ml-auto text-center ">
               
                
                <li class="nav-item dropdown justify-content-center">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Contact Us
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#"><i class="far fa-envelope-open"></i>    Drop a Mail</a>
                      <a class="dropdown-item" href="#"><i class="fab fa-instagram"></i>    Instagram</a>
                      <a class="dropdown-item" href="#"><i class="fab fa-youtube"></i>    YouTube</a>
                      <a class="dropdown-item" href="#"><i class="fab fa-linkedin-in"></i>    LinkedIn</a>
                    </div>
                  </li>
                

                <li class="nav-item text-center">
                  <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Account</a>
                  </li>
              </ul>
              
              
            </div>
          </nav>
    	<div class="container">
            <form action="login.php" method="POST">
                <h2>LOGIN</h2>
                <img src="avatar.svg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"><br><br>
                <body>
<?php 
$email=$_POST['email'];
$pass=$_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `registration` (`email`,`password`) values ('$email','$pass')";

if (mysqli_query($conn, $sql)) {
  echo "Logged In succesfully   ";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

  <button type="button" class="button buttonBlue"><a href="index.html"> Go To Home</a>   
  </button>
 
</form>
            </div>   
        </div>
    </body>
</html>