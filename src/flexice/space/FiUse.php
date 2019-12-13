<?php


namespace flexice\space;

class FiUse
{

    protected $Apexs = [];

    /**
     * FiUse constructor.
     * @param array $Apexs
     */
    public function __construct(array $Apexs = [])
    {
        $this->Apexs = $Apexs;
    }

    /**
     * @return array
     */
    public function getApexs()
    {
        return $this->Apexs;
    }
}