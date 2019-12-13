<?php


namespace flexice\space;


class FiSpace
{
    protected $Apexs;

    /**
     * FiSpace constructor.
     * @param FiUse $fiUse
     */
    public function __construct(FiUse $fiUse)
    {
        $this->Apexs = $fiUse->getApexs();
    }
}