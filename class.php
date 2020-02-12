<?php

class Livemint {
  public function __construct($title){
    $this->total = count($title);
    $this->data = $title;
  }

  public $source = 'livemint';
}

class News {
  function __construct($title) {
    $this->title = $title;
  }
}