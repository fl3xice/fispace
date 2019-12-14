<?php


namespace flexice\space\apexs;


use Curl\Curl;

class FiCurl
{
    protected $curl;

    public function __construct()
    {
        $this->curl = new Curl();
    }

    /**
     * @return Curl
     */
    public function getCurl()
    {
        return $this->curl;
    }
}