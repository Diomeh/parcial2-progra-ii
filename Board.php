<?php

include_once __DIR__ . '/Tile.php';

class Board
{
    public const BOMB_PROBABILITY = 35;
    public int $size;
    public int $bombs;
    public array $tiles;

    public function __construct($size)
    {
        $this->size = $size;
        $this->bombs = intval($size * self::BOMB_PROBABILITY / 100);
        $this->tiles = [];
        $this->init();
    }

    private function init()
    {
        // populate board
        for ($i = 0; $i < $this->size; $i++) {
            $this->tiles[$i] = [];
            for ($j = 0; $j < $this->size; $j++) {
                $this->tiles[$i][$j] = new Tile("$i-$j");
            }
        }

        // distribute mines across the board
        while ($this->bombs > 0) {
            $i = rand(0, $this->size - 1);
            $j = rand(0, $this->size - 1);

            if ($this->tiles[$i][$j]->bomb)
                continue;

            $this->tiles[$i][$j]->bomb = true;
            $this->bombs -= 1;
        }
    }

    public function __toString()
    {
        $output = "<table><tbody>";

        for ($i = 0; $i < $this->size; $i++) {
            $output .= '<tr>';            
            for ($j = 0; $j < $this->size; $j++)
                $output .= $this->tiles[$i][$j];
            $output .= '</tr>';
        }
        $output .= '</tbody></table>';

        return $output;
    }
}
