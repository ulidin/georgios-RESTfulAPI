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
$cardName = [
    "Feasting Troll King", "Embercleave", "Kenrith, the Returned King",
    "Brazen Borrower", "Ayara, First of Locthwain", "Questing Beast",
    "Linden, the Steadfast Queen", "Stolen by the Fae", "Witch's Vengeance",
    "Torbran, Thane of Red Fell", "The Circle of Loyalty", "Happily Ever After",
    "Folio of Fancies", "Sundering Stroke", "Wishclaw Talisman", "Smitten Swordmaster",
    "Fires of Invention", "Irencrag Feat", "Gilded Goose", "Return of the Wildspeaker"
];

$color = [
    "Green", "Red", "White", "Blue", "Black",
    "Green", "White", "Blue", "Black", "Red",
    "White", "White", "Blue", "Red", "Black",
    "Black", "Red", "Red", "Green", "Green"
];

$released_at = [
    "January", "February", "December", "April", "January",
    "February", "February", "December", "July", "July",
    "August", "August", "August", "September", "November",
    "October", "October", "June", "June", "June"
];

$language = [
    "english", "english", "english", "english", "english",
    "english", "english", "english", "english", "english",
    "english", "english", "english", "english", "english",
    "english", "english", "english", "english", "english"
];

$category = [
    "Creature", "Artifact", "Creature", "Creature", "Creature",
    "Creature", "Creature", "Sorcery", "Sorcery", "Creature",
    "Artifact", "Enchantment", "Artifact", "Sorcery", "Artifact",
    "Creature", "Enchantment", "Sorcery", "Creature", "Instant"
];

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
    "https://media.wizards.com/2019/eld/en_z4OExIIYVo.png",
    "https://media.wizards.com/2019/eld/en_Zx7XO4JF7g.png",
    "https://media.wizards.com/2019/eld/en_HntUN5kM8o.png",
    "https://media.wizards.com/2019/eld/en_XeTGdRuTRT.png",
    "https://media.wizards.com/2019/eld/en_wUlwjXVmmC.png",
    "https://media.wizards.com/2019/eld/en_mgjcGccQui.png",
    "https://media.wizards.com/2019/eld/en_zSfSOD2n1G.png",
    "https://media.wizards.com/2019/eld/en_lYydBWi48a.png",
    "https://media.wizards.com/2019/eld/en_KJAS6weYJE.png",
    "https://media.wizards.com/2019/eld/en_cPWhGAvZzo.png",
    "https://media.wizards.com/2019/eld/en_2ZKkmPhbbt.png"
];

$cards = array();

for ($i = 0; $i < 20; $i++) {

    $card = array(
        "cardname" => $cardName[$i],
        "color" => $color[$i],
        "released_at" => $released_at[$i],
        "language" => $language[$i],
        "category" => $category[$i],
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
