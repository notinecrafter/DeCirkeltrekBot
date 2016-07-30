<?php
include("Telegram.php");

//variables
$bot_id = "264723170:AAE5LSm6HYgW-fKhSNtzkUM_mz31qF9UGLI";
$telegram = new Telegram($bot_id);

$originaltext = $telegram->Text();
$text = mb_strtolower($originaltext);
$chat_id = $telegram->ChatID();

//messages

/* oke, dit zijn de commands

levedekoning - Leve de koning!
willempie - Foto van onze sexy willem
lachen - Lachen joh
kek - kek
applaus - Applaus!
netjes - Netjes, netjes.
wat - wat
patat - Wat? Patat.
waardeloos - waerdeleus
jezus - Wat slecht
toppie - Toppie meid.
spanje - Een foto van Spanje
willemsliefde - De liefde voor willem
koningslied - Stuurt het koningslied
waarisdekoning - Stuurt de locatie van Willem
levededev - Wat info over de shitty developer

*/


//leve de koning!
if (strlen(strstr($text," koning"))>0 && strlen(strstr($text," de "))>0 && strlen(strstr($text,"leve "))>0 && substr( $text, 0, 1 ) !== "/" ) {
    $telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Leve de koning!"));
}

//levedekoning
else if (strlen(strstr($text,"/levedekoning"))>0) {
	$telegram->sendVoice(array('chat_id' => $chat_id, 'voice' => new CURLFile(realpath("/var/www/maartendekkers.com/LeveDeKoningBot-Telegram/assets/levedekoning.mp3"))));
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Leve de koning!"));
}

//willempie
else if (strlen(strstr($text,"/willempie"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile(realpath("/var/www/maartendekkers.com/LeveDeKoningBot-Telegram/assets/willem.jpg"))));
}

//lachen
else if (strlen(strstr($text,"/lachen"))>0) {
	$telegram->sendDocument(array('chat_id' => $chat_id, 'document' => new CURLFile(realpath("/var/www/maartendekkers.com/LeveDeKoningBot-Telegram/assets/lachen.gif"))));
}

//kek
else if (strlen(strstr($text,"/kek"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADOQADkzoFAAFw9gW6EJBQIQI' ));
}

//applaus
else if (strlen(strstr($text,"/applaus"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADVQADkzoFAAHl_TiVLZF85AI' ));
}

//netjes
else if (strlen(strstr($text,"/netjes"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADvgIAAsaj4AABihreNcuFbD0C' ));
}

//wat
else if (strlen(strstr($text,"/wat"))>0) {
	$telegram->sendDocument(array('chat_id' => $chat_id, 'document' => new CURLFile(realpath("/var/www/maartendekkers.com/LeveDeKoningBot-Telegram/assets/wat.jpg"))));
}

//patat
else if (strlen(strstr($text,"/patat"))>0) {
	$telegram->sendDocument(array('chat_id' => $chat_id, 'document' => new CURLFile(realpath("/var/www/maartendekkers.com/LeveDeKoningBot-Telegram/assets/patat.jpg"))));
}

//waardeloos
else if (strlen(strstr($text,"/waardeloos"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAAD1AAD2U2JB26yI3XZE6IGAg' ));
}

//jezus
else if (strlen(strstr($text,"/jezus"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAAD2AAD2U2JB4bqtEgPGqC_Ag' ));
}

//toppie
else if (strlen(strstr($text,"/toppie"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADUQADkzoFAAHlKFBIGuS3sAI' ));
}

//spanje
else if (strlen(strstr($text,"/spanje"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile(realpath("/var/www/maartendekkers.com/LeveDeKoningBot-Telegram/assets/spanje.jpg"))));
}

//willemsliefde
else if (strlen(strstr($text,"/willemsliefde"))>0 || strlen(strstr($text,"/koningsliefde"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => 'Willem is liefde, Willem is leven.'));
}

//koningslied
else if (strlen(strstr($text,"/koningslied"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => 'https://www.youtube.com/watch?v=MEUKyKb4g6k'));
}

//waarisdekoning
else if (strlen(strstr($text, "/waarisdekoning"))>0) {
	$telegram->sendLocation(array('chat_id' => $chat_id, 'latitude' => '52.080810', 'longitude' => '4.306228'));
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Hier is de koning! \xF0\x9F\x98\x9C"));
}

//levededev
else if (strlen(strstr($text,"/levededev"))>0) {
    $telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Ik ben gemaakt door @Maartenwut. \xF0\x9F\x98\x84"));
}
?>
