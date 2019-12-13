<?php


namespace flexice\space\apexs;


class String
{
    public $string;

    /**
     * String constructor.
     * @param $string
     */
    public function __construct($string)
    {
        $this->string = $string;
        return $string;
    }
}