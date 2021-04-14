<?php
require ("Card.php");
require ("Player.php");
require ("../Database/DatabaseConnection.php");
class Game {
    private $id_game;
    private $playerA;
    private $playerB;
    //private $db_connect;
    private $battlefield;
    private $deckOfCard = [];

function __construct($playerA, $playerB){
    $this->playerA = $playerA;
    $this->playerB = $playerB;
   
    //$this->db_connect = new DatabaseConnection();
}




}
