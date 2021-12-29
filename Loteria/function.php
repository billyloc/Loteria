<?php 

include 'db_connection.php';
include 'get_game.php';
include 'view_game.php';


	function StartGame() {
		$game = new ViewGame();
		$game->ShowGameCard();	
	}

	StartGame();

