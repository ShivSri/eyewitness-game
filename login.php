<?php
$_SESSION = array();
session_destroy();
session_start();
include 'register.php';

$username = $_REQUEST["name"];
$password = $_REQUEST["password"];
$username1 = "louis";
$password1 = "cs";
if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']== true) {
  header("Location: home.php");
}
if (isset($_POST['username']) && isset($_POST['password'])) {
  if($_POST['username']== $username && $_POST['password'] == $password){
    $_SESSION['loggedin'] = true;
    header("Location: home.php");
  }
}
if (isset($_POST['username']) && isset($_POST['password'])) {
  if($_POST['username']== $username1 && $_POST['password'] == $password1){
    $_SESSION['loggedin'] = true;
    header("Location: home.php");
  }
}
 ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
</head>

<style>
    h1{
          font-family: monospace;
          font-size: 40px;
          text-align: center;
      }
 * {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
    font-size: 17px;
}

#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
}

.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}
      .login-container{
          position:absolute;
              left: 37%;
          bottom: 10%;
      }

.info{
          position: relative;

          bottom:5%;
          z-index: 1;
      }
</style>

<body>
    <?php
    $_SESSION["points"] = 0;
    ?>

    <video autoplay muted loop id="myVideo">
        <source src="video.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <audio controls autoplay loop hidden>
<source src="Suspense.mp3" type="audio/mpeg">
<p>If you can read this, your browser does not support the audio element.</p>
</audio>

    <div class="content">
        <h1>EYE WITNESS</h1>

        <div class="login-container">
            <div class="info">A Game By Matt Rinoldo, Shiva Srini, & Jalen Walls </div>
            <form class="" action="login.php" method="post">
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" value="Login">Login</button>
                <a href="register.php">Register</a>
            </form>
        </div>
    </div>
</body>
</html>
