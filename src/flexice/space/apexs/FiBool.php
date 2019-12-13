<?php


namespace flexice\space\apexs;


use Exception;

class FiBool
{
    public $data;

    /**
     * FiBool constructor.
     * @param $bool
     * @throws Exception
     */
    public function __construct($bool)
    {
        if (is_bool($bool))
        {
            $this->data = $bool;
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