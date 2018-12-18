<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
</head>
<style>
    html{
            background-color: black;
            background-image: url("cell.png");
            background-repeat: no-repeat;
            background-position: center;
            height: 100%;
    }
    
        @keyframes MoveUpDown {
  0%, 100% {
    bottom: 38%;
  }
  50% {
    bottom: 35%;
  }
}
        .killer {
        animation: shake 10s;
        animation-iteration-count: infinite;
        position: absolute;
        left: 48%;
        bottom: 40%;
         transform: scale(2);
            animation: MoveUpDown 1s linear infinite;
       }
        
        .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #282828;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position:absolute;
  bottom: 10%;
  right: 18%;
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
        color:white;
    }
    </style>

<body>
    <?php
    $_SESSION["points"] = $_SESSION["points"] + 1;
?>
    <audio controls autoplay hidden>
        <source src="celldoor.mp3" type="audio/mpeg">
        <p>If you can read this, your browser does not support the audio element.</p>
    </audio>
    <div class="killer" class=""><img src="Male-Face-F3-icon.png" alt=""></div>
    <a href="http://codd.cs.gsu.edu/~jwalls11/project2/scene9.html">
    <button class="button" style="vertical-align:middle"><span>Next </span></button></a>
</body>
