<?php

class Cards
{
    /**
     * Instansvariables
     */
    private $cardName;
    private $color;
    private $released_at;
    private $language;
    private $category;
    private $image;


    /**
     * Constructor
     */
    public function __construct($cardName, $color, $released_at, $language, $category, $image)
    {
        $this->cardName = $cardName;
        $this->color = $color;
        $this->released_at = $released_at;
        $this->language = $language;
        $this->category = $category;
        $this->image = $image;
    }



    /**
     * Method to convert object to an array
     */
    public function toArray()
    {
        $array = array(
            "cardname"      => $this->cardName,
            "color"         => $this->color,
            "released_at"   => $this->released_at,
            "language"      => $this->language,
            "category"      => $this->category,
            "image"         => $this->image
        );


        return $array;
    }
}
