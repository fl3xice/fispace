<?php

// Require Auto Loader
require_once "./vendor/autoload.php";

// Uses

use flexice\space\apexs\String;
use flexice\space\FiSpace;
use flexice\space\FiUse;

// Create Example Class FiSpace And Add In His Arguments
$FiSpace = new FiSpace(new FiUse([
    "String"
]));

$String = new String("Hello World!");
print $String->string;

$Var2 = new String("Donate Me ¯\_(ツ)_/¯");
print $Var2->string;