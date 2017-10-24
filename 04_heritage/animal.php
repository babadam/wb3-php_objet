<?php

class Animal
{
  protected function deplacement()
  {
    return 'je me deplace';
  }
  public function manger()
  {
    return 'Je mange chaque jour';
  }
}

class Elephant extends Animal
{
  public function quiSuisJe()
  {
    return 'Je suis un éléphant et ' . $this->deplacement();
  }
}

class Chat extends Animal
{
  public function quiSuisJe()
  {
    return 'Je suis un chat ';
  }
  public function manger()
  {
    return 'Je mange comme un chat';
  }
}

$eleph = new Elephant;
echo 'Eléphant : '. $eleph->manger() . '<br>';
echo 'Eléphant : '. $eleph->quiSuisJe() . '<hr>';

$chat = new Chat;
echo 'Chat : '. $chat->manger() . '<br>';
echo 'Chat : '. $chat->quiSuisJe() . '<hr>';
