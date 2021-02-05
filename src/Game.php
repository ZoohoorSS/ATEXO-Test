<?php
namespace App;

use App\Color, App\Card;

class Game
{
	/**
     * The number of cards in the hand.
     */
    const CARDSNUMBER = 10;
	/**
     * The default colors.
     */
	private $colors;

	public function __construct()
	{
		$this->colors = $this->prepareColors();
	}

	/**
     * Set cards' colors.
     *
     * @return array
     */
    public function prepareColors(): array
    {
        $diamond = new Color('carreaux', 'a');
        $heart = new Color('coeur', 'b');
        $spades = new Color('pique', 'c');
        $clover = new Color('trèfle', 'd');
        return array($diamond, $heart, $spades, $clover);
    }

	/**
     * Get a specific color.
     *
     * @return Color
     */
    public function getColor($key): Color
    {
        return $this->colors[$key];
    }

	/**
     * Get random card.
     *
     * @return Card
     */
    public function pickCard(): Card
    {
        $cost = rand(1, 13);
        $key = rand(0, 3);
        $color = $this->colors[$key];
        $card = new Card($cost, $color);
        return $card;
    }

	/**
     * Distribute cards.
     *
     * @return array
     */
    public function distribute(): array
    {
        $cards = [];
        for ($i = 0; $i < self::CARDSNUMBER; $i++) {
            $card = $this->pickCard();
            array_push($cards, $card);
        }
        return $cards;
    }

	/**
     * Show hand's cards.
     *
     * @param  array $cards
     * @return void
     */
    public function showCards(array $cards): void
    {
        foreach ($cards as $card) {
            echo $card->show();
        }
    }

	/**
     * Sort cards by comparing their scores (ASCII sort).
     *
     * @param  array $cards
     * @return array
     */
    public function sortCards(array $cards): array
    {
        usort($cards, function ($a, $b) {
            if ($a->getScore() == $b->getScore()) {
                return 0;
            }
            return ($a->getScore() < $b->getScore()) ? -1 : 1;
        });
        return $cards;
    }
}