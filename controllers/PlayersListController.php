<?php
require_once "AppController.php";

require_once __DIR__.'/../model/Player.php';
require_once __DIR__.'/../model/PlayerMapper.php';


class PlayersListController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function agh(): void
    {
        $player = new PlayerMapper();
        $this->render('agh', ['player1' => $player->getPlayer(1),'player2' => $player->getPlayer(2),'player3' => $player->getPlayer(3)]);
    }

    public function players()
    {
        $this->render('players');
    }
//    public function agh()
//    {
//        $this->render('agh');
//    }
}