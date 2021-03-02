<?php

Class Tile
{
    public string $id;
    public string $icon;
    public bool $bomb;
    public bool $flagged;
    public bool $flipped;

    public function __construct($id)
    {
        $this->id = $id;
        $this->icon = "";
        $this->bomb = $this->flagged = $this->flipped = false;
    }

    public function __toString()
    {
        return "<td><button id=\"$this->id\" onclick=\"handleTileClicked('$this->id')\"></button></td>";
    }
}