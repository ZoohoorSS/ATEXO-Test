<?php
namespace Tests;

use App\Game, App\Card, App\Color;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
	protected Game $game;

	protected function setUp(): void
	{
		$this->game = new Game();
	}
	/**
     * @test
	 * @dataProvider factors
     */
    function it_sorts_cards($cards, $expected)
    {
        $this->assertEquals($expected, $this->game->sortCards($cards));
    }

	public function factors()
    {
		$color1 = new Color('carreaux', 'a');
        $color2 = new Color('coeur', 'b');
        $color3 = new Color('pique', 'c');
        $color4 = new Color('trèfle', 'd');

        return [
            [
				[
				new Card(7, $color3),
				new Card(1, $color1),
				new Card(3, $color1),
				new Card(9, $color2),
				new Card(11, $color4),
				new Card(6, $color3),
				new Card(10, $color4),
				new Card(1, $color1),
				new Card(13, $color1),
				new Card(8, $color2)
				],
				[
				new Card(1, $color1),
				new Card(1, $color1),
				new Card(3, $color1),
				new Card(13, $color1),
				new Card(8, $color2),
				new Card(9, $color2),
				new Card(6, $color3),
				new Card(7, $color3),
				new Card(10, $color4),
				new Card(11, $color4)
				]
			],
			[
				[
				new Card(7, $color3),
				new Card(1, $color1),
				new Card(3, $color1)
				],
				[
				new Card(1, $color1),
				new Card(3, $color1),
				new Card(7, $color3)
				]
			],
			[[],[]],
        ];
    }
}