<?php

// Require Auto Loader
require_once "../vendor/autoload.php";

// Uses

use flexice\space\apexs\FiAlert;
use flexice\space\FiSpace;
use flexice\space\FiUse;

// Create Example Class FiSpace And Add In His Arguments
$FiSpace = new FiSpace(new FiUse(
    ["FiAlert"]
));

FiAlert::Push("Hello");
FiAlert::Push([
    1,2,3
]);
FiAlert::Dump([
    1,2,3
]);
