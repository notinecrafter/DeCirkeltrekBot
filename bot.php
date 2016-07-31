<?php
include("Telegram.php");
include("feed.php");
//variables
$bot_id = "264723170:AAE5LSm6HYgW-fKhSNtzkUM_mz31qF9UGLI";
$telegram = new Telegram($bot_id);

$text = mb_strtolower($telegram->Text());
$chat_id = $telegram->ChatID();

//messages

/* commands

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
aanvalshelikopter - Trekkerwaarschuwing
meemsterkaas - de beste kaas
cirkeltrek - de beste onderlashet
goedepoep - dat is zeker goede poep daar
watzeije - wat zei je daar over mij?
stadhouders - even uitlaten
oorporno - De fijnste oorporno's van onder andere Dries.
drieswave - D R I E S W A V E
proost- Proost
opwillem - Opwillem
noice - noice.
spam - spam
feest - het is feest
gaben - een foto van onze heer
getrekkert - getrekkert
moetdit - moet dit
goedbezig - moet je nu een sticker?
nee - nee
ja - ja
doei - doei
ik_ihe - geeft de nieuwste ik_ihe post
levededevs - Wat info over de shitty developers

*/
function kopieerpasta($dir = 'assets/kopieerpasta') {
    $files = glob($dir . '/*.*');
    $file = array_rand($files);
    $kopieerpasta = file_get_contents($files[$file]);
    return $kopieerpasta ;
}

function oorporno() {
    $oorporno = array("http://www.youtube.com/watch?v=xdb-KNTBdqA",
                      "http://www.youtube.com/watch?v=hyB_VfrESNQ",
                      "http://www.youtube.com/watch?v=_U2HsdbbDgI");
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
else if (strlen(strstr($text,"/wat"))>0 && strlen(strstr($text,"/watzeije")) == 0) {
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

//kopieerpasta
else if (strlen(strstr($text,"/kopieerpasta"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => kopieerpasta()));
}

//aanvalshelikopter
else if (strlen(strstr($text,"/aanvalshelikopter"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/aanvalshelikopter.txt')));
}

//meemsterkaas
else if (strlen(strstr($text,"/meemsterkaas"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/meemsterkaas.txt')));
}

//cirkeltrek
else if (strlen(strstr($text,"/cirkeltrek"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/cirkeltrek.txt')));
}

//goedepoep
else if (strlen(strstr($text,"/goedepoep"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/goedepoep.txt')));
}

//watzeije
else if (strlen(strstr($text,"/watzeije"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/watzeije.txt')));
}

//stadhouders
else if (strlen(strstr($text,"/stadhouders"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/stadhouders.txt')));
}

//oorporno
else if (strlen(strstr($text,"/oorporno"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => oorporno()));
}

//drieswave
else if (strlen(strstr($text,"/drieswave"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/drieswave.png")));
}

//proost
else if (strlen(strstr($text,"/proost"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BBQADBAADcwADkzoFAAG-8JnnS_BGLgI' ));
}

//opwillem
else if (strlen(strstr($text,"/opwillem"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADLAADkgu4AAG76ewKdZNbggI' ));
}

//noice
else if (strlen(strstr($text,"/noice"))>0) {
	$telegram->sendDocument(array('chat_id' => $chat_id, 'document' => new CURLFile("./assets/noice.gif")));
}

//feest
else if (strlen(strstr($text,"/feest"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADAgADxAIAAi6uVQHaiW805ofWBgI' ));
}

//gaben
else if (strlen(strstr($text,"/gaben"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADmAAD0KSvAAG0nuRpqVg8SwI' ));
}

//spam
else if (strlen(strstr($text,"/spam"))>0) {
	$telegram->sendDocument(array('chat_id' => $chat_id, 'document' => new CURLFile("./assets/spam.gif")));
}

//getrekkert
else if (strlen(strstr($text,"/getrekkert"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/getrekkert.jpg")));
}

//moetdit
else if (strlen(strstr($text,"/moetdit"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADLwADOXRRAzX6um5Sinh6Ag' ));
}

//goedbezig
else if (strlen(strstr($text,"/goedbezig"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAAD0gAD2U2JB1VxulAa-EKkAg' ));
}

//nee
else if (strlen(strstr($text,"/nee"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/hahanee.jpg")));
}

//ja
else if (strlen(strstr($text,"/ja"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADUwADkzoFAAGkGccCqSSWSAI' ));
}

//doei
else if (strlen(strstr($text,"/doei"))>0 || strlen(strstr($text,"/dag"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADHQADkzoFAAGOXUKdbVRkMQI' ));
}

//ik_ihe
else if (strlen(strstr($text,"/ik_ihe"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => ));
}

//levededev
else if (strlen(strstr($text,"/levededevs"))>0) {
    $telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Ik ben gemaakt door @Maartenwut met overgeporte code van de oude @FlippyBot gemaakt door @Flippylosaurus. \xF0\x9F\x98\x84"));
}
?>
