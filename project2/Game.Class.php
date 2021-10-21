<?php 
	class Game {
		// variables
		private $diceValue;			
		private $guessesArray;		
		private $winCount;			


		public function play() {
			$dice = new Dice();								// instantiate dice object
			$dice->throwDice();								// make the throw
			$this->diceValue = $dice->getFaceValue();		// get the result of the throw & assign it to $diceValue
			
			echo "The value of the dice: <br/>";
			$this->showDiceImage($this->diceValue);			// show value of throw as an image 

			$this->guessesArray = new SplFixedArray(3);		// create array with length initially equals to 3
			$this->winCount = 0;
			$this->guessHandler();
			$this->saveScores();
		}


		public function guessHandler() {
			$guess = new NumberGenerator();			// instantiate object - instance of the NumberGenerator class

			echo "<br><br>And your guesses in this round: <br/>";

			$winString = "";	// to collect the win info messages

			for($i=0; $i<3; $i++) {		// make 3 guesses
				$currentGuess = $guess->makeAGuess();

				$this->showDiceImage($currentGuess);	// show the guess as dice images
				echo " ";

				$this->guessesArray[$i] = $currentGuess;	// add current guess to guesses array
				
				if($this->diceValue == $currentGuess) {			// if win:
					$winString .= $this->getWinGuessInfo($i);	// get win stats message
					$this->winCount++;							// correct winCount
				}
			}

			// display statistics
			if($this->winCount > 0) {
				echo "<br>".$winString;
			}
			else {
				echo "<br><br>All your guesses were wrong.";
			}

			// display the game result
			echo "<p style='color:#CC0000'><font size='5'><strong>" . $this->getEndMessage() . "</strong></font></p>";
		}


		public function showDiceImage($dots) {
			switch($dots) {
				case 1:
					echo "<img class='dotsImg' src='images/d1.png'>";
					break;
				case 2:
					echo "<img class='dotsImg' src='images/d2.png'>";
					break;
				case 3:
					echo "<img class='dotsImg' src='images/d3.png'>";
					break;
				case 4:
					echo "<img class='dotsImg' src='images/d4.png'>";
					break;
				case 5:
					echo "<img class='dotsImg' src='images/d5.png'>";
					break;
				case 6:
					echo "<img class='dotsImg' src='images/d6.png'>";
					break;
				default:
					break;
			}
		}


		public function getWinGuessInfo($index) {
			$infoString = "";
			switch ($index) {
				case 0:
					$infoString = "<br>Your first guess was correct.";
					break;
				case 1:
					$infoString = "<br>Your second guess was correct.";
					break;
				case 2:
					$infoString = "<br>Your third guess was correct.";
					break;
				default:
					break;
			}
			return $infoString;
		}


		public function getEndMessage() {
			$endMessage = "";
			switch($this->winCount) {
				case 1:
					$endMessage = "You win ! 1 time in 3 guesses. Congrats !";
					break;

				case 2:
					$endMessage =  "You win ! 2 times in 3 guesses. Well done !!";
					break;

				case 3:
					$endMessage = "You win ! 3 times in 1 round !! You are the best !!!";
					break;

				default:
					$loseParts = array("Press a magic button to try again.", "Keep calm & try again.", "Don't worry, next time you will be better.");
					$castedPart = $loseParts[rand(0, sizeOf($loseParts)-1)];	// cast 1 from 3 options
					$endMessage = "You lose... " . $castedPart;
					break;
			}
			return $endMessage;
		}
	}
?>