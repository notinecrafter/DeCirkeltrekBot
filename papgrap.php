<?php
function papgrap($max_item_cnt = 10) {
    $result = null;
    // get feeds and parse items
    $rss = new DOMDocument();
    // load from file or load content
    $rss->load('https://www.reddit.com/r/papgrappen/new/.rss');
    $feed = array();
    foreach ($rss->getElementsByTagName('entry') as $node) {
        $item = array (
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'text' => $node->getElementsByTagName('content')->item(0)->nodeValue
        );
        array_push($feed, $item);
    }
    $rand = rand(0,10); 
    for ($x=0;$x<1;$x++) {
        $title = $feed[$rand]['title'];
        $text = $feed[$rand]['text'];
        $result .= '**'.$title.'**';
        $result .= PHP_EOL;
        $result .= PHP_EOL;
		
		$degrap = strstr($text, 'submitted', true);
		
        $result .=  $degrap;
    }
    return $result;
}
?>
