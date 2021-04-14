<?php

class Card
{
  private $id;
  private $attack;
  private $defence;
  private $cost;
  private $frontImg;
  private $backImg;

  function __construct($id, $attack, $defence, $cost, $frontImg = null, $backImg = null)
  {
    $this->id = $id;
    $this->attack = $attack;
    $this->defence = $defence;
    $this->cost = $cost;
    $this->frontImg = $frontImg;
    $this->backImg = $backImg;
  }
  public function getId(){
    return $this->id;
  }
  public function getAttack(){
    return $this->attack;
  }
  public function getDefence(){
    return $this->defence;
  }
  public function getCost(){
    return $this->cost;
  }
  public function getFrontImg(){
    return $this->frontImg;
  }
  public function getBackImg(){
    return $this->backImg;
  }

  public function setDefence($defence){
    $this->defence = $defence;
  }
  public function setFrontImg($frontImg){
    $this->frontImg = $frontImg;
  }
  public function setBackImg($backImg){
    $this->backImg = $backImg;
  }
}
