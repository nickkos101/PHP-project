<?php

class GameInstance {

  public $id;

  public $players;
  public $maxPlayers;

  public $dictionary;
  public $used_words;

  function __construct(){
    $this->players = array();
    $this->maxPlayers = 4;
  }


  public function get_players() {
      return $this->players;
  }

  public function get_player_count() {
    return count($this->players);
  }

  public function add_player($player) {

    if ($this->get_player_count() < $this->maxPlayers) {
      $this->players[] = $player;
    } else {
      return 'The game is full.';
    }

  }

  public function remove_player($slot) {
    unset($this->players[$slot]);
    $this->players = array_values($this->players);
  }
}
