<?php

/**
 * HTTP headers
 */
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Origin: GET");
header("Access-Control-Allow-Origin: Origin, X-Requested-With, Content-type, Accept");
header("Referrer-Policy: no-referrer");


/**
 * Create arrayer
 */
$cardname = ["Howling mine", "Megrim"];
$color = ["None", "Black"];
$released_at = ["2015-01-23", "2000-05-15"];
$lang = ["en", "en"];
$image = [
    "https://mtgrandom.com/ups/uploads/ths-158-Feral-Invocation.png",
    "https://mtgrandom.com/ups/uploads/mb1-1079-Taurean-Mauler.png"
];

$cards = array();

for ($i = 0; $i < 10; $i++) {
    $card = array(
        "cardname" => $cardname,
        "color" => $color,
        "released_at" => $released_at,
        "lang" => $lang,
        "image" => $imga
    );
    array_push($cards, $card);
}
