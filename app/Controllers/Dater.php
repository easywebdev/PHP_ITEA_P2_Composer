<?php

class Dater
{
    /**
     * @var string
     */
    private $data;

    /**
     * Dater constructor.
     */
    public function __construct()
    {
        $this->data = 'New Data No Packegist';
    }

    /**
     * @return string
     */
    public function getData2() : string
    {
        echo $this->data;
    }
}