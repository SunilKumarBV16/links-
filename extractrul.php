<?php
include('simple_html_dom.php');
$url = 'http://www.google.com/search?hl=en&q=php&btnG=Search';

// Create DOM from URL
$html = file_get_html($url);

// Match all 'A' tags that have the class attribute equal with 'l'
foreach($html->find('a[class=l]') as $key => $info) 
{
echo ($key + 1).'. '.$info->plaintext."<br />\n";
}




?>