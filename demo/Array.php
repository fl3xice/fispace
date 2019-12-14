<?php

// Require Auto Loader
require_once "../vendor/autoload.php";

// Uses

use flexice\space\apexs\FiArray;
use flexice\space\FiSpace;
use flexice\space\FiUse;

// Create Example Class FiSpace And Add In His Arguments
$FiSpace = new FiSpace(new FiUse([
    "FiArray"
]));

$Array = new FiArray([
    0,1,2,3,4,5,6,7,8,9
]);

var_dump($Array->toArray());