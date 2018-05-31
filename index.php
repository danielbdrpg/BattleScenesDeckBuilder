<?php
$dir = opendir('./assets/bases_json');
$aux = [];
while($file = readdir($dir)) {
    if(!in_array($file, ['.', '..'])) {
        array_push($aux, "{$file}");
    }
}
sort($aux);
//header('Content-Type: application/json');


$json = file_get_contents('./assets/bases_json/13_battlebox5_battle_royal.json');
foreach(json_decode($json) as $card) {
    //echo "<pre>"; print_r($card->main_card); echo "</pre>";
    $img = file_get_contents($card->main_card->image);
    file_put_contents('./assets/img/cards/'.$card->main_card->site_name, $img);
}    