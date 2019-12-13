<?php


namespace flexice\space\apexs;


use Exception;

class FiString
{
    public $data;

    /**
     * String constructor.
     * @param $string
     * @throws Exception
     */
    public function __construct($string)
    {
        if (is_string($string))
        {
            $this->data = $string;
            return $this->data;
        } else {
            throw new Exception("Data Type Mismatch","5089",'$data = new SomeType(<< `Data` >>);');
        }
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->data;
    }
}