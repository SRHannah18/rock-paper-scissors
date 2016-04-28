<?php session_start();?>

<!DOCTYPE HTML>

<html>

	<head>
		<title>Rock Paper Scissors</title>

	</head>
	<body>


		<php?
			
		IF($_POST['user_choice']){
			$user_choice = $_POST['user_choice'];

			$Choosefrom= array(Rock, Paper, Scissors);
			$Choice= rand(0,2);
			$Computer= $Choosefrom[$Choice];

			echo 'You Picked: '.$user_choice.'';

			IF($user_choice == $Computer){
				echo 'Result : Draw +0';
				$_SESSION['Score']= (int) $_SESSION['Score'];
			}

			ELSEIF ($user_choice == 'Rock' && $Computer == 'Scissors'){
				echo 'Result : Win +1';
				$_SESSION['Score']= (int) $_SESSION['Score'] +1;
			}

			ELSEIF ($user_choice == 'Rock' && $Computer == 'Paper'){
				echo 'Result : Lose -1';
				$_SESSION['Score']= (int) $_SESSION['Score'] -1;
			}

			ELSEIF ($user_choice == 'Paper' && $Computer == 'Rock'){
				echo 'Result : Win +1';
				$_SESSION['Score']= (int) $_SESSION['Score'] +1;
			}
			
			ELSEIF ($user_choice == 'Paper' && $Computer == 'Scissors'){
				echo 'Result : Lose -1';
				$_SESSION['Score']= (int) $_SESSION['Score'] -1;
			}

			ElSEIF ($user_choice == 'Scissors' && $Computer == 'Rock'){
				echo 'Result : Lose -1';
				$_SESSION['Score']= (int) $_SESSION['Score'] -1;
			}

			ELSEIF ($user_choice == 'Scissors' && $Computer == 'Paper'){
				echo 'Result : Win +1';
				$_SESSION['Score']= (int) $_SESSION['Score'] =1;
			}

		}

		ELSE IF(){
		echo '<form action="rps.php" method="post" />
		<input type="image" src="/img/rock.png" alt="Rock" name="user_choice" value="Rock" title="Rock" /> <br /><br />
		<input type="image" src="/img/paper.png" alt="Paper" name="user_choice" value="Paper" title="Paper" /> <br /><br />
		<input type="image" src="/img/scissors.png" alt="Scissors" name="user_choice" value="Scissors" title="Scissors" /> <br /><br />
		</form> ';
		}

		echo 'Your score is currently: '.$_SESSION['Score'].' ';

		echo '<a href="rps.php">Play Again ?</a>';

		?>

	</body>
</html>		
	


