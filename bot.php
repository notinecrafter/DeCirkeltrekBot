<?php
include("Telegram.php");

//variables
$bot_token = '264723170:AAE5LSm6HYgW-fKhSNtzkUM_mz31qF9UGLI';
$oorporno = array("https://www.youtube.com/watch?v=xdb-KNTBdqA", "http://www.youtube.com/watch?v=hyB_VfrESNQ", "https://www.youtube.com/watch?v=_U2HsdbbDgI");

$telegram = new Telegram($bot_token);

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
perfect - perfect
jezus - Wat slecht
toppie - Toppie meid.
spanje - Een foto van Spanje
willemsliefde - De liefde voor willem
koningslied - Stuurt het koningslied
waarisdekoning - Stuurt de locatie van Willem
kopieerpasta - De fijnste WILLIEkeurige kopieerpasta's.
oorporno - De fijnste oorporno's van onder andere Dries.
levededev - Wat info over de shitty developers

*/
function copypasta($copypasta) {
   $filename = "./assets/kopieerpasta/" . $copypasta;
   if (file_exists($filename)) {
       return file_get_contents($filename);
   } else {
       return false;
   }
}

function random_copypasta($dir = 'assets/kopieerpasta')
{
    $files = glob($dir . '/*.*');
    $file = array_rand($files);
    return copypasta($files[$file]);
}


function oorporno() {
    $count = count($oorporno) - 1;
    $random = rand(0, $count);
    return $oorporno[$random];
}

//leve de koning!
if (strlen(strstr($text," koning"))>0 && strlen(strstr($text," de "))>0 && strlen(strstr($text,"leve "))>0 && substr( $text, 0, 1 ) !== "/" ) {
    $telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Leve de koning!"));
}

//levedekoning
else if (strlen(strstr($text,"/levedekoning"))>0) {
	$telegram->sendVoice(array('chat_id' => $chat_id, 'voice' => new CURLFile("./assets/levedekoning.mp3")));
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Leve de koning!"));
}

//willempie
else if (strlen(strstr($text,"/willempie"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/willem.jpg")));
}

//lachen
else if (strlen(strstr($text,"/lachen"))>0) {
	$telegram->sendDocument(array('chat_id' => $chat_id, 'document' => new CURLFile("./assets/lachen.gif")));
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
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/wat.jpg")));
}

//patat
else if (strlen(strstr($text,"/patat"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/patat.jpg")));
}

//waardeloos
else if (strlen(strstr($text,"/waardeloos"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAAD1AAD2U2JB26yI3XZE6IGAg' ));
}

//perfect
else if (strlen(strstr($text,"/perfect"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADFgADkzoFAAHdW_c7r7CjaAI' ));
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
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/spanje.jpg")));
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
    $telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Ik ben gemaakt door @Maartenwut met overgeporte code van de oude @FlippyBot gemaakt door @Flippylosaurus. \xF0\x9F\x98\x84"));
}
//kopieerpasta
else if (strlen(strstr($text,"/kopieerpasta"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => random_copypasta()));
}
//oorporno
else if (strlen(strstr($text,"/oorporno"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => oorporno()));
}
?>
