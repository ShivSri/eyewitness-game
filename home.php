<?php
session_start();

  session_destroy();
  if (isset($_SESSION['loggedout'])&& $_SESSION['loggedout']== true) {
    header("Location: home.php");
  }

?>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>
<style>
    body, html{
        height:100%;
         background-image: url("nosy.jpg");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    .content{

        font-size: 20px;
        position: absolute;
        left: 25%;
        bottom: 1%;
        z-index: 1;
         background-color: antiquewhite;
        text-align: center;
    border: 1px solid #888;
    width: 50%;
    }
           .button {
  display: inline-block;
  border-radius: 4px;
  background-color: antiquewhite;
  border: none;
  color: black;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position:absolute;
  bottom: 6%;
  right: 5%;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -50px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
    a:link,a:visited,a:active{
        color:black;
    }
</style>

<body>
    <audio controls autoplay loop hidden>
<source src="Suspense.mp3" type="audio/mpeg">
<p>If you can read this, your browser does not support the audio element.</p>
</audio>
    <div class="content">You're a very diligent (nosy) neighbor <br>Many would say too diligent (nosy)<br>Spending your days staring out of your window, you carefully watch your neighhbors and your neighborhood<br>A true CrimeWatcher<br>You are far too dedicated to let something as trivial as your rapidly developing glaucoma hold you back<br>You are a warrior</div>
    <a href="http://codd.cs.gsu.edu/~jwalls11/project2/scene1.html">
     <button class="button" style="vertical-align:middle"><span>Start </span></button></a>

</body>
</html>
