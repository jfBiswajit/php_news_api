<?php
include 'dom.php';
include 'class.php';

$url = 'https://www.livemint.com/latest-news';
$dom = new simple_html_dom();
$isloaded = $dom->load_file($url);
$title = array();

$items = $dom->find('#mylistView');

foreach ($items as $item) {
  $elements = $item->find('h2');
}

foreach ($elements as $element) {
  $title[] = new News($element->plaintext);
}

$foo = new Livemint($title);

echo json_encode($foo);
