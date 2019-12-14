<?php


namespace flexice\space\apexs;


use Exception;

class FiArray
{
    public $data;

    /**
     * FiArray constructor.
     * @param array $array
     * @throws Exception
     */
    public function __construct(array $array)
    {
        if (is_array($array))
        {
            $this->data = $array;
            return $this->data;
        } else {
            throw new Exception("Data Type Mismatch","5089",'$data = new SomeType(<< `Data` >>);');
        }
    }

    /**
     * @return array
     */
    public function toArray()
    {
        // TODO: Implement __toString() method.
        return $this->data;
    }
}