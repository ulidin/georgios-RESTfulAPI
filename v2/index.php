<?php
//Version 2

/**
 * Assignment-02: RESTful API
 * Date: 2021-05-04
 * By: Georigos Goussis
 * https://github.com/ulidin/
 */

/**
 * HTTP headers
 */
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");

include('./Cards.php');
include('./cardsArrays.php');


$limit = isset($_GET["show"]) ? $_GET["show"] : 20;

$card_category = isset($_GET["category"]) ? $_GET["category"] : "";

$cards = array();

for ($i = 0; $i < $limit; $i++) {

    $card = new Cards(
        $cardName[$i],
        $color[$i],
        $released_at[$i],
        $lang[$i],
        $category[$i],
        $image[$i]
    );

    array_push($cards, $card->toArray());
}


shuffle($cards);


echo json_encode($cards, JSON_UNESCAPED_UNICODE);
