<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Game;

$newGame = new Game();
$array = [];
$cards = $newGame->distribute();
$newGame->showCards($cards);
echo "\n ----------------------------------------------------------\n |                        After Sort                      |\n ----------------------------------------------------------\n\n";

$sortedCards = $newGame->sortCards($cards);
$newGame->showCards($sortedCards);