<!-- ! press tab -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="images/dice.ico" />

 <link rel="stylesheet" type="text/css" href="css/level1.css">

  <title>Dice Roll</title>

</head>
<body>
<h2> Level-1 is simple roll the dice</h2>
<center>  <img src="dice.png" height="200px" width="200px"/>
<h1> Roll the Dice </h1>
  <br>
  <p>
    <img id="dice"class=""src="images/
	<?php echo rand(1,6);?>.png"/>
  </p><br>
<input id="stop" class="button"type="button" value="Roll the Dice" onClick="location.href='level1.php'"/>
 <div class="button"><a href="guess.php">
        <button type="button" class="button" >
            Level - 2
        </button></a>
    </div>
  <div class="button"><a href="index.html">
        <button type="button" class="button" >
            Back To Home
        </button></a>
    </div>

</center>

</body>

</html>
