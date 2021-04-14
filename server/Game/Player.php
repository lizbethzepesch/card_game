<?php
class Player
{
  private $id;
  private $socket;
  private $username;
  private $hero;
  private $cardHand = [];
  private $userDeck =[];
  private $health;
  private $mana;
  private $img;
  function __construct($id, $socket = NULL, $username, $hero = NULL, $cardHand = NULL, $img = NULL)
  {
    $this->id = $id;
    $this->socket = $socket;
    $this->username = $username;
    $this->hero = $hero;
    $this->cardHand = $cardHand;
    $this->img = $img;
    $this->health = 20;
    $this->mana = 1;
  }
  public function getId(){
    return $this->id;
  }
  public function getSocket(){
    return $this->socket;
  }
  public function getUsername(){
    return $this->username;
  }
  public function getHero(){
    return $this->hero;
  }
  public function getCardHand(){
    return $this->cardHand;
  }
  public function getUserDeck(){
    return $this->userDeck;
  }
  public function getHealth(){
    return $this->health;
  }
  public function getMana(){
    return $this->mana;
  }
  public function getImg(){
    return $this->img;
  }
  public function setSocket($socket){
    return $this->socket = $socket;
  }
  public function setUsername($username){
    return $this->username = $username;
  }
  public function setHero($hero){
    return $this->hero = $hero;
  }
  public function setCardHand($cardHand){
    return $this->cardHand = $cardHand;
  }
  public function setUserDeck($userDeck){
    return $this->userDeck = $userDeck;
  }
  public function setSocket($socket){
    return $this->socket = $socket;
  }
  public function setImg($img){
    return $this->img = $img;
  }
  public function setMana($mana){
    return $this->mana = $mana;
  }
  public function addMana(){$this->mana++;}
}
