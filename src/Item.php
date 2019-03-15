<?php

namespace App;


class Item
{
    public $quality;
    public $sellIn;

    /**
     * Normal constructor.
     * @param $quality
     * @param $sellIn
     */
    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function tick()
    {
        //
    }

}