<?php
namespace Controllers;
use \Models\Data;

class Index
{
  public function home()
  {
    // A modifier
    view('Index/home');
  }
}