<?php


namespace flexice\space\apexs;


use Exception;

class FiFloat
{
    public $data;

    /**
     * FiFloat constructor.
     * @param $floatnumber
     * @throws Exception
     */
    public function __construct($floatnumber)
    {
        if (is_float($floatnumber))
        {
            $this->data = $floatnumber;
            return $this->data;
        } else {
            throw new Exception("Data Type Mismatch","5089",'$data = new SomeType(<< `Data` >>);');
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return strval($this->data);
    }
}