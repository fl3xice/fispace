<?php


namespace flexice\space\apexs;


class String
{
    public $string;

    public function __construct($string)
    {
        $this->string = $string;
        return $string;
    }
}