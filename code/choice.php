<html>
	<body>





		<div>
			<h2>Nice!  Looks like you chose</h2>
		</div>

		<?php

		//---------------Variables


			$choice = $_POST['choice'];
			$options = array("Rock","Paper","Scissors");
			$compChoice = array_rand($options);
			$compChoiceWord = "";



			echo "<h2>$choice</h2>";

			// Comp picks from 3 options

			

			

			//dispay computer choice
			echo "<h2>The Computer chose ";
			
			if ($compChoice == 0){
				$compChoiceWord = "Rock";
				echo "Rock";
			}

			elseif ($compChoice == 1) {
				$compChoiceWord = "Paper";
				echo "Paper";
			}

			else {
				$compChoiceWord = "Scissors";
				echo "Scissors";
			}
		?>
		<?php	


			//Functions for who won round

			//Rock
			if ($choice == "Rock" && $compChoiceWord == "Rock") {
					echo "Draw1";
			}		
			elseif ($choice == "Rock" && $compChoiceWord == "Paper") {
					echo "You Lose";
			}
			elseif ($choice == "Rock" && $compChoiceWord == "Scissors") {
					echo "You Win";
			}
			
			//paper
			elseif ($choice == "Paper" && $compChoiceWord == "Paper") {
				echo "Draw";
			}
			elseif ($choice == "Paper" && $compChoiceWord == "Rock") {
				echo "You Win";
			}
			elseif ($choice == "Paper" && $compChoiceWord == "Scissors") {
				echo "You Lose";
			}

			//Scissors
			elseif ($choice == "Scissors" && $compChoiceWord == "Scissors") {
				echo "Draw";
			}
			elseif ($choice == "Scissors" && $compChoiceWord == "Rock") {
				echo "You Lose";
			}
			elseif ($choice == "Scissors" && $compChoiceWord == "Paper") {
				echo "You win";
			}

			else{
				echo "How did you get here";
			}


		?>


	


		

	


	</body>



</html>