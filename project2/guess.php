
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Dice Game </title>
		<link rel="stylesheet" type="text/css" href="css/level3.css">
	</head>

	<body>
	<h2> Level- 2 Guessing the dice</h2>
		<div id="container">	
			<header>
				<?php
				
					 echo "<img src='images/head.jpg'  class='center' />"; 
					 
				?>
			</header>

			<form action="guess.php" method="POST">
				<input type="submit" name="guess" id="guessBtn" value="Make your guess">
			</form>


			<?php 
				include ('NumberGenerator.Class.php');
				include ('Dice.Class.php');
				include ('Game.Class.php');
				
			
				if(isset($_POST['guess'])) {
					echo "<h3>Thanks for the guesses, lets see the result...<br/></h3>";
					$myGame = new Game();
					$myGame->play();
				}

				// reset the score table (delete all records in 'correct_guesses' table)
				echo "<br><form action='guess.php' method='POST'>
					<input type='submit' name='resetTable' id='resetBtn' value='Reset All Scores & Start New Game'>
				</form>";

			
			?>
		</div>
		  <div class="button"><a href="index.html">
        <button type="button" class="button" >
            Back To Home
        </button></a>
    </div>

		
	</body>
</html>