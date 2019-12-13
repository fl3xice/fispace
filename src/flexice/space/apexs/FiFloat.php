<?php


namespace flexice\space\apexs;


use Exception;

class FiFloat
{
    public $data;

    /**
     * FiFloat constructor.
     * @param $floatnumberl
     * @throws Exception
     */
    public function __construct($floatnumberl)
    {
        if (is_float($floatnumberl))
        {
            $this->data = $floatnumberl;
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