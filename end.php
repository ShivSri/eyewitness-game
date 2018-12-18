<?php
session_start();
?>
<html lang="en" dir="ltr">

<head>
</head>
<style>
    h2 {
        text-align: center;
        position: absolute;
        background-color: antiquewhite;
        color: black;
        top: 5%;
        left: 7%;
        border: 1px solid gold;
        padding: 30px;
    }

    body,
    html {
        height: 100%;
        background-image: url("nosy.jpg");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .content {
        color: black;
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
        color: black;
        background-color: antiquewhite;
        border: none;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 200px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        position: absolute;
        top: 10%;
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

    a:link,
    a:visited,
    a:active {
        color: black;
    }

</style>

<body>
    <?php
    echo "<h2><u>Leaderboard</u><br><br> Your Score: " . $_SESSION["points"] . "<br>High Score: 11</h2>";
    ?>

    <div class="content">A pat on the back after a very successful week of keeping your neighborhood safe<br>Diligence is the key to life<br>You are a warrior</div>

    <a href="http://codd.cs.gsu.edu/~jwalls11/project2/login.php">
        <button class="button" style="vertical-align:middle">Log Out</button></a>

</body>

</html>
