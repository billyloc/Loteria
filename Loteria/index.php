<?php include 'components/header.php'; ?>
	<div class="container header">
		<div class="row">
			<h1>Play the Loteria Online</h1>

			<h3>This is intended to be played online or on your phone, allow you to generate a new game quickly with the default game pieces, choose the amount of players, enter the players numbers, and then push out the uniquely generated game card for each player</h3>	
		</div>
	</div>
	<div class="container">
		<div class="row">
			<button class="game_button">Get Card</button>
		</div>
	</div>

	
	

	<div class="container loteria-container">
		<div class="row">
<!-- 			<form action="">
				<label for="name">Name:</label>
				<input type="text" name="name">

				<label for="player_num">Number of Players:</label>
				<input type="number" name="player_num">

				<label for="start_game">Start Game:</label>
				<input type="number" name="start_game">		

				<input type="submit">
			</form> -->

			<div class="game_space container-fluid">
				<div class="row">

					<div class="game_card_container col-md-6">
						<div class="game_card">

						</div>
					</div>

					<div class="game_deck col-md-6">
						<h3>Game Card Deck</h3>
						<ol>
						<?php 
						$deck = new ViewDeck();
						$deck->ShowGameDeck();
						 ?>
						 </ol>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php include 'components/footer.php'; ?>

