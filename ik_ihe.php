<?php
function ik_ihe($max_item_cnt = 1) {
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
    
    for ($x=0;$x<$max_item_cnt;$x++) {
        $title = $feed[$x]['title'];
        $link = $feed[$x]['link'];
        $result .= $title;
        $result .= PHP_EOL;
		
	$regex = '/https?\:\/\/[^\" ]+/i';
	preg_match_all($regex, $link, $matches);
		
        $result .= $matches[0][1];
    }
    return $result;
}
?>
