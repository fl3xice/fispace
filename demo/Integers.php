<?php

// Require Auto Loader
require_once "../vendor/autoload.php";

// Uses

use flexice\space\apexs\Fint;
use flexice\space\FiSpace;
use flexice\space\FiUse;

// Create Example Class FiSpace And Add In His Arguments
$FiSpace = new FiSpace(new FiUse([
    "Fint"
]));

$Int = new Fint(89);
print $Int;