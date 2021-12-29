<?php

class ViewDeck extends Game {

	public function ShowGameDeck() {
		$decks = $this->GetGameDeck();
		foreach ($decks as $deck) {
			echo "<li>".$deck['name']."</li>";
		}
	}


}

?>
