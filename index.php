<?php

/**
 * HTTP headers
 */
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");


/**
 * Create arrayer
 */
$cardName = ["Feasting Troll King", "Embercleave", "Kenrith, the Returned King", "Brazen Borrower", "Ayara, First of Locthwain", "Questing Beast", "Linden, the Steadfast Queen", "Stolen by the Fae", "Witch's Vengeance", "Torbran, Thane of Red Fell"];
$color = ["Green", "Red", "White", "Blue", "Black", "Green", "White", "Blue", "Black", "Red"];
$released_at = ["January", "February", "December", "April", "January", "February", "February", "December", "July", "2019-01-23"];
$lang = ["en", "en", "en", "en", "en", "en", "en", "en", "en", "en"];
$image = [
    "https://media.wizards.com/2019/eld/en_vsxkO1cHgt.png",
    "https://media.wizards.com/2019/eld/en_KrPDEzg9I9.png",
    "https://media.wizards.com/2019/eld/en_9sk4qNBCgb.png",
    "https://media.wizards.com/2019/eld/en_Pen4Mwa1ay.png",
    "https://media.wizards.com/2019/eld/en_fwaFYG5GGO.png",
    "https://media.wizards.com/2019/eld/en_JIl0E01Ulh.png",
    "https://media.wizards.com/2019/eld/en_ugXoH2A186.png",
    "https://media.wizards.com/2019/eld/en_YaSulArnbm.png",
    "https://media.wizards.com/2019/eld/en_b5MarCvEEl.png",
    "https://media.wizards.com/2019/eld/en_z4OExIIYVo.png"
];

$cards = array();

for ($i = 0; $i < 10; $i++) {

    $card = array(
        "cardname" => $cardName[$i],
        "color" => $color[$i],
        "released_at" => $released_at[$i],
        "lang" => $lang[$i],
        "image" => $image[$i]
    );
    array_push($cards, $card);
}




/**
 * Convert array to json
 */
$json = json_encode($cards, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);


/**
 * Send json to client
 */
echo $json;
