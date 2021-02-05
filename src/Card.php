<?php
namespace App;

use App\Color;

class Card
{
	/**
     * The value of a card
     *
     * @var int in [1,2,3,4,5,6,7,8,9,10,11,12,13]
     */
    private $cost;
	/**
     * The Color info of a card
     *
     * @var Color
     */
    private $color;

    public function __construct(int $cost, Color $color)
    {
        $this->cost = $cost;
        $this->color = $color;
    }

	/**
     * Get the card value.
     *
     * @return int
     */
    public function getCost(): int
    {
        return $this->cost;
    }

	/**
     * Get the card color data.
     *
     * @return Color
     */
    public function getColor(): Color
    {
        return $this->color;
    }

	/**
     * Read the card.
     *
     * @return string
     */
    public function show(): string
    {
        $cost = $this->cost;
        switch ($cost) {
            case 1:
                $cost = 'AS';
                break;
            case 11:
                $cost = 'Valet';
                break;
            case 12:
                $cost = 'Dame';
                break;
            case 13:
                $cost = 'Roi';
                break;
        }

        return $cost . " " . $this->color->getType() . "\n";
    }

	/**
     * Read a card score depending on its value and its color.
     *
     * @return string
     */
    public function getScore(): string
    {
        $cost = $this->cost;
        switch ($cost) {
            case 10:
                $cost = 99;
                break;
            case 11:
                $cost = 999;
                break;
            case 12:
                $cost = 9999;
                break;
            case 13:
                $cost = 99999;
                break;
        }
        return $this->color->getPriority() . $cost;
    }
}