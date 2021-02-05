<?php
	require_once __DIR__ . '/../../vendor/autoload.php';
	use App\Game;

	$newGame = new Game();
	$cards = [];
	$cards = $newGame->distribute();
	$sortedCards = $newGame->sortCards($cards);
	echo '<div class="row">
			<div class="btn-replay">
				<a class="btn btn-primary" href="#" onclick="replayFunction()">Play Again</a>
			</div>
		</div>';
	echo '<div class="row">';

	foreach($cards as $card)
	{
		$image = ($card->getColor()->getType() == 'Trèfle') ? 'trefle' : strtolower($card->getColor()->getType());

		echo '<div class="col-lg">
			<div class="card h-100">
				<img class="card-img-top" src="../../public/images/'.$image.'.png" alt="">
				<div class="card-body">';
				$cost = $card->getCost();
				$persona = 'valet';
				switch ($cost) {
					case 1:
						$cost = 'AS';
					case 12:
						$persona = 'queen';
						break;
					case 13:
						$persona = 'king';
						break;
					default:
				}
				if($cost == 11 || $cost == 12 || $cost == 13)
				{
					$block = '<img class="img-fluid card-img" src="../../public/images/'.$persona.'.png" alt="">';
				}
				else
				{
					$block = '<h3 class="card-title">'.$cost.'</h3>';
				}
					echo $block;
				echo '</div>
			</div>
		</div>';
	}

	echo '</div>
		<div class="row">
			<div class="mx-auto text-center">
				<a class="btn btn-primary" href="#" onclick="sortFunction()">Sort</a>
			</div>
		</div>
		<div class="row d-none" id="sorted_cards">';
		foreach($sortedCards as $sortedCard)
		{
			$image = ($sortedCard->getColor()->getType() == 'Trèfle') ? 'trefle' : strtolower($sortedCard->getColor()->getType());

			echo '<div class="col-lg">
				<div class="card h-100">
					<img class="card-img-top" src="../../public/images/'.$image.'.png" alt="">
					<div class="card-body">';
					$cost = $sortedCard->getCost();
					switch ($cost) {
						case 1:
						$cost = 'AS';
						$persona = 'valet';
						case 12:
							$persona = 'queen';
							break;
						case 13:
							$persona = 'king';
							break;
						default:
					}
					if($cost == 11 || $cost == 12 || $cost == 13)
					{
						$block = '<img class="card-img" src="../../public/images/'.$persona.'.png" alt="">';
					}
					else
					{
						$block = '<h3 class="card-title">'.$cost.'</h3>';
					}
						echo $block;
					echo '</div>
				</div>
			</div>';
		}
		echo '</div>';
?>