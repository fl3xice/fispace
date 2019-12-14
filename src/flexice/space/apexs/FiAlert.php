<?php


namespace flexice\space\apexs;


class FiAlert
{
    public static function Push($Message)
    {
        switch ($Message)
        {
            case is_array($Message):
                print "<pre>";
                    print_r($Message);
                print "</pre>";
                break;
            default:
                print $Message;
                break;
        }
    }
    public static function Dump($Array)
    {
        print "<pre>";
            var_dump($Array);
        print "</pre>";
    }
}