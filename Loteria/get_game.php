<?php

class Game extends Db {

	public function GetGameCard() {
		$sql = "SELECT * FROM game_pieces ORDER BY RAND() LIMIT 16";
		$result = $this->connect()->query($sql);

		$numRows = $result->num_rows;

		if($numRows > 0) {
			while($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

			return $data; 
		}
	}

	public function GetGameDeck() {
		$sql = "SELECT * FROM game_pieces ORDER BY RAND()";
		$result = $this->connect()->query($sql);

		$numRows = $result->num_rows;

		if($numRows > 0) {
			while($row = $result->fetch_assoc()) {
				$decks[] = $row;
			}

			return $decks; 
		}		
	}


}


?>
