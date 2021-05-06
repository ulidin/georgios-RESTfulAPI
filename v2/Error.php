<?php


class Error
{


    private $error_description;
    private $error_code;

    /**
     * Constructor
     */
    public function __construct($error_description, $error_code)
    {
        $this->error_description = $error_description;
        $this->error_code = $error_code;
    }
}
