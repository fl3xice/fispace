<?php


namespace flexice\space\apexs;


class FiString
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