<?php

// Require Auto Loader
require_once "../vendor/autoload.php";

// Uses

use flexice\space\apexs\FiString;
use flexice\space\FiSpace;
use flexice\space\FiUse;

// Create Example Class FiSpace And Add In His Arguments
$FiSpace = new FiSpace(new FiUse([
    "FiString"
]));

$String = new FiString("Hello World!");
print $String;

$Var2 = new FiString("Donate Me ¯\_(ツ)_/¯");
print $Var2;