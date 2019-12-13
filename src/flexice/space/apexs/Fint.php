<?php


namespace flexice\space\apexs;


use Exception;

class Fint
{

    public $data;

    /**
     * Fint constructor.
     * @param int $number
     * @throws Exception
     */
    public function __construct($number)
    {
        if (is_integer($number))
        {
            $this->data = $number;
            return $this->data;
        } else {
            throw new Exception("Data Type Mismatch","5089",'$data = new SomeType(<< `Data` >>);');
        }
    }
}