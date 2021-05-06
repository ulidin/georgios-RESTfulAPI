<?php


class Error_display
{
    /**
     * Instansvariables
     */
    private $error_description;

    /**
     * Constructor
     */
    public function __construct($error_description)
    {
        $this->error_description = $error_description;
    }


    /**
     * Method to convert object to an array
     */
    public function toArray()
    {
        $array = array(
            "error_description"  => $this->error_description,
        );

        return $array;
    }
}
