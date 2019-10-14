<?php
$quiz = array();
echo "Hoeveel landen wil je toevoegen?\n";
$input = readline();
for ($i = 1; $i <= $input; $i++) {
    echo "Welk land wil je toevoegen?\n";
    $land = readline();
    echo "Welke hoofstad heeft ". $land;
    echo "?\n";
    $hoofdstad = readline();
    $quiz[$land] = $hoofdstad;
}
echo "De volgende land(en) zijn toegevoegd aan de database:\n";
foreach ($quiz as $land => $hoofdstad) {
    echo "$land, $hoofdstad\n";
}
?>