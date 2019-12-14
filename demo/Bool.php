<?php

// Require Auto Loader
require_once "../vendor/autoload.php";

// Uses

use flexice\space\apexs\FiBool;
use flexice\space\FiSpace;
use flexice\space\FiUse;

// Create Example Class FiSpace And Add In His Arguments
$FiSpace = new FiSpace(new FiUse([
    "FiBool"
]));

$BoolTrue = new FiBool(true);
$BoolFalse = new FiBool(false);

print $BoolFalse;
print $BoolTrue;

// OutPut : 1