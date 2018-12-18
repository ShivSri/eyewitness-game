<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    
</head>
<style>
    body, html{
         background-image: url("wrong.jpg");

    /* Full height */
    height: 100%; 
    z-index: 0;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    .content{
        
        font-size: 20px;
        position: absolute;
        left: 25%;
        top: 1%;
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
  right: 1%;
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
        <source src="sad.mp3" type="audio/mp3">
        <p>If you can read this, your browser does not support the audio element.</p>
    </audio>
      <div class="content">Your eye witness testimony has led to a (likely) innocent civilian spending the next 25 years in prison<br> But don't let that stop you from saving the neighborhood  </div>
    <a href="http://codd.cs.gsu.edu/~jwalls11/project2/scene5.html">
     <button class="button" style="vertical-align:middle"><span> Continue </span></button></a>
    </body>
</html>