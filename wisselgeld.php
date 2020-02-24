<?php

$input = $argv[1];
$bedrag = floatval($input);

define(
    "GELDEENHEDEN", 
    [
    50,
    20,
    10,
    5,
    2,
    1
    ]
);


$restbedrag = $bedrag;

foreach(GELDEENHEDEN as $euro){
    if($restbedrag >= $euro) {
        $aantalKeerEuroInRestBedrag = floor($restbedrag / $euro);
        $restbedrag = $restbedrag - $euro * $aantalKeerEuroInRestBedrag;
        echo($aantalKeerEuroInRestBedrag. " X " .$euro. " euro".PHP_EOL);
    }
}

$restbedrag = $restbedrag * 100;

foreach(GELDEENHEDEN as $euro){
    if($restbedrag >= $euro) {
        $aantalKeerEuroInRestBedrag = floor($restbedrag / $euro);
        $restbedrag = round($restbedrag - $euro * $aantalKeerEuroInRestBedrag);
        echo($aantalKeerEuroInRestBedrag. " X " .$euro. " cent".PHP_EOL);
    }
}
?>