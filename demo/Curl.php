<?php

// Require Auto Loader
require_once "../vendor/autoload.php";

// Uses

use flexice\space\apexs\FiAlert;
use flexice\space\apexs\FiCurl;
use flexice\space\FiSpace;
use flexice\space\FiUse;

// Create Example Class FiSpace And Add In His Arguments
$FiSpace = new FiSpace(new FiUse(
    ["FiCurl"]
));

$Curl = new FiCurl();
$Response = $Curl->getCurl()->get("https://example.com");
FiAlert::Dump($Response);