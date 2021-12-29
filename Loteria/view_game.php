<?php

class ViewGame extends Game {

	public function ShowGameCard() {
		$data = $this->GetGameCard();
		foreach ($data as $key) {
			echo "<div class=\"game_piece\">";
			echo "<div class=\"game_box\">";
			echo "<img src=\"" .$key['image']."\" >";
			echo "<div>" .$key['card_number']."</div>";
			echo "<div>".$key['name']."</div>";
			echo "</div>";
			echo "</div>";
		}
	}


}


?>
