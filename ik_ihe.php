<?php
function ik_ihe() {
    $result = null;
    // get feeds and parse items
    $rss = new DOMDocument();
    // load from file or load content
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
