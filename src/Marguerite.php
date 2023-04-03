<?php

namespace Cowsay;
class Marguerite extends \CowSay\Cow 
{
    
  public function speak(string $message):string
  {
    $this->message =  $message;
    return $message;
  }
}