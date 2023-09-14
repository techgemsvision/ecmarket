<?php
session_start();
if($_SESSION['visit']){

}
else{
    header("location:user/index.php");
}
$_SESSION['visit']="Visit Style Tech Gems";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

body, html {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #1F2029;
  font-family: 'Montserrat', sans-serif;
}

.hero-text {
  font-weight: bold;
  font-size: 7em;
  position: relative;
  color: black;
  background: url('https://images.unsplash.com/photo-1570308345368-f21d4b0d81a9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60') repeat top right;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transition: 0.5s;
}

.hero-text:hover {
  letter-spacing: 3px;
}

.upText {
  animation: upText 1s ease;
  animation-timing-function: ease;
  cursor: pointer;
}

@keyframes upText {
  0% {
    transform: translateY(2rem);
    opacity: 0;
    visibility: hidden;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
    visibility: visible;
  }
}

    </style>
</head>
<body>
<a href="user/index.php"><button class="hero-text upText"><?php echo $_SESSION['visit']?></button></a>
</body>
</html>