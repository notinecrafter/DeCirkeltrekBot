<?php
$bot_id = file_get_contents('./ignore/token');
$telegram = new Telegram($bot_id);

$text = mb_strtolower($telegram->Text());
$chat_id = $telegram->ChatID();

function kopieerpasta($dir = 'assets/kopieerpasta') {
    $files = glob($dir . '/*.*');
    $file = array_rand($files);
    $kopieerpasta = file_get_contents($files[$file]);
    return $kopieerpasta;
}

function nsb($dir = 'assets/nsb') {
    $files = glob($dir . '/*.*');
    $file = array_rand($files);
    $nsb = new CURLFile($files[$file]);
    return $nsb;
}

function rms($dir = 'assets/rms') {
    $files = glob($dir . '/*.*');
    $file = array_rand($files);
    $rms = new CURLFile($files[$file]);
    return $rms;
}

function zeg($tekst, $taal) {
   $woorden =  substr($tekst, 0, 200);
   $words = urlencode($woorden);
   $file  = md5($words);
   $file = "audio/" . $file . ".mp3";
   if (!file_exists($file)) {
     $mp3 = file_get_contents('http://translate.google.com/translate_tts?ie=UTF-8&total=1&idx=0&textlen=32&client=tw-ob&q=' . $words . '&tl=' . $taal);
     file_put_contents($file, $mp3);
   }
   return new CURLFile($file);
}

function oorporno() {
    $oorporno = array("http://www.youtube.com/watch?v=xdb-KNTBdqA",
                      "http://www.youtube.com/watch?v=hyB_VfrESNQ",
                      "http://www.youtube.com/watch?v=_U2HsdbbDgI");
    $count = count($oorporno) - 1;
    $random = rand(0, $count);
    return $oorporno[$random];
}

function draai($text){
    return "lol doet het niet";
}
function draaitest($text) {
    $search  = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '.', ',');
    $replace = array('ɐ', 'q', 'ɔ', 'p', 'ǝ', 'ɟ', 'b', 'ɥ', 'ı', 'ſ', 'ʞ', 'ן', 'ɯ', 'u', 'o', 'd', 'b', 'ɹ', 's', 'ʇ', 'n', 'ʌ', 'ʍ', 'x', 'ʎ', 'z', '˙','\'');
    $text = $text.explode();
    $result = "";
    
    for($x = 1; $x < sizeof($text); $x++){
        for($y = 1; $y < sizeof($search); $y++){
            if($text[$x] === $search[$y]){
                $result += $replace[$y];
            }
        }
    }
    return strrev($result);
}

function papgrap() {
    $result = null;
    $rss = new DOMDocument();
    $rss->load('https://www.reddit.com/r/papgrappen/new/.rss');
    $feed = array();
    foreach ($rss->getElementsByTagName('entry') as $node) {
        $item = array (
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'text' => $node->getElementsByTagName('content')->item(0)->nodeValue
        );
        array_push($feed, $item);
    }
    $rand = rand(0,24); 
    for ($x=0;$x<1;$x++) {
        $title = $feed[$rand]['title'];
        $text = $feed[$rand]['text'];
        $result .= '*'.$title.'*';
        $result .= PHP_EOL;
        $result .= PHP_EOL;
    
    $degrap = strstr($text, '</p> </div>', true);
    
        $result .= htmlspecialchars_decode(urldecode(strip_tags($degrap)));
    }
    return $result;
}

function meem() {
    $result = null;
    $rss = new DOMDocument();
    $rss->load('https://www.reddit.com/r/cirkeltrek/new/.rss');
    $feed = array();
    foreach ($rss->getElementsByTagName('entry') as $node) {
        $item = array (
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('content')->item(0)->nodeValue
        );
        array_push($feed, $item);
    }
    
    $rand = rand(0,24); 
    for ($x=0;$x<1;$x++) {
        $title = $feed[$rand]['title'];
        $link = strstr($feed[$rand]['link'], 'submitted');
        $result .= $title;
        $result .= PHP_EOL;
    
  $regex = '/https?\:\/\/[^\" ]+/i';
  preg_match_all($regex, $link, $matches);
    
        $result .= $matches[0][1];
    }
    return $result;
}

function feesboek() {
    $result = null;
    $rss = new DOMDocument();
    $rss->load('https://www.reddit.com/r/tokkiefeesboek/new/.rss');
    $feed = array();
    foreach ($rss->getElementsByTagName('entry') as $node) {
        $item = array (
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('content')->item(0)->nodeValue
        );
        array_push($feed, $item);
    }
    
    $rand = rand(0,24); 
    for ($x=0;$x<1;$x++) {
        $title = $feed[$rand]['title'];
        $link = strstr($feed[$rand]['link'], 'submitted');
        $result .= $title;
        $result .= PHP_EOL;
    
  $regex = '/https?\:\/\/[^\" ]+/i';
  preg_match_all($regex, $link, $matches);
    
        $result .= $matches[0][1];
    }
    return $result;
}

function ik_ihe() {
    $result = null;
    $rss = new DOMDocument();
    $rss->load('https://www.reddit.com/r/ik_ihe/new/.rss');
    $feed = array();
    foreach ($rss->getElementsByTagName('entry') as $node) {
        $item = array (
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('content')->item(0)->nodeValue
        );
        array_push($feed, $item);
    }
    
    $rand = rand(0,24); 
    for ($x=0;$x<1;$x++) {
        $title = $feed[$rand]['title'];
        $link = strstr($feed[$rand]['link'], 'submitted');
        $result .= $title;
        $result .= PHP_EOL;
    
  $regex = '/https?\:\/\/[^\" ]+/i';
  preg_match_all($regex, $link, $matches);
    
        $result .= $matches[0][1];
    }
    return $result;
}

?>
