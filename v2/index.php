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
include('./Error_display.php');
include('./cardsArrays.php');


$limit = isset($_GET["show"]) ? $_GET["show"] : 20;

$card_category = isset($_GET["category"]) ? $_GET["category"] : '';


$errors = array();

// Runtime exception
if ($limit > count($cardName)) {
    $err = new Error_display("You have chosen to show too many cards or using wrong characters");
    array_push($errors, $err->toArray());
}

if (!empty($card_category) && !in_array($card_category, $category, true)) {
    $err = new Error_display("You have chosen wrong category");
    array_push($errors, $err->toArray());
}

if (count($errors) > 0) {
    echo json_encode($errors, JSON_UNESCAPED_UNICODE);
    die();
}


$cards = array();

for ($i = 0; $i < count($cardName); $i++) {

    $card = new Cards(
        $cardName[$i],
        $color[$i],
        $released_at[$i],
        $language[$i],
        $category[$i],
        $image[$i]
    );

    if ($card_category === $category[$i]) {
        array_push($cards, $card->toArray());
    } elseif (empty($card_category)) {
        array_push($cards, $card->toArray());
    }
}


shuffle($cards);

if (count($cards) > $limit) {
    $cards = array_slice($cards, 0, $limit);
}


echo json_encode($cards, JSON_UNESCAPED_UNICODE);
