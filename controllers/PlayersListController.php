<?php
require_once "AppController.php";

require_once __DIR__ . '/../model/Player.php';
require_once __DIR__ . '/../model/PlayerMapper.php';


class PlayersListController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function agh(): void
    {
        //var_dump($_SESSION);
        if (isset($_SESSION['id'])) {
            $player = new PlayerMapper();
            $this->render('agh', ['player1' => $player->getPlayer(1), 'player2' => $player->getPlayer(2), 'player3' => $player->getPlayer(3), 'player4' => $player->getPlayer(4), 'player5' => $player->getPlayer(5), 'player6' => $player->getPlayer(6), 'player7' => $player->getPlayer(7), 'player8' => $player->getPlayer(8)]);
        }
        else {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}");
            exit();
        }
    }
////////////////////////////////////id pozminiaj
    public function uj(): void
    {
        //var_dump($_SESSION);
        if (isset($_SESSION['id'])) {
            $player = new PlayerMapper();
            $this->render('uj', ['player9' => $player->getPlayer(9), 'player10' => $player->getPlayer(10), 'player11' => $player->getPlayer(11), 'player12' => $player->getPlayer(12), 'player13' => $player->getPlayer(13), 'player14' => $player->getPlayer(14), 'player15' => $player->getPlayer(15), 'player16' => $player->getPlayer(16)]);
        }
        else {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}");
            exit();
        }
    }

    public function pk(): void
    {
        //var_dump($_SESSION);
        if (isset($_SESSION['id'])) {
            $player = new PlayerMapper();
            $this->render('pk', ['player17' => $player->getPlayer(17), 'player18' => $player->getPlayer(18), 'player19' => $player->getPlayer(19), 'player20' => $player->getPlayer(20), 'player21' => $player->getPlayer(21), 'player22' => $player->getPlayer(22), 'player23' => $player->getPlayer(23), 'player24' => $player->getPlayer(24)]);
        }
        else {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}");
            exit();
        }
    }

    public function ur(): void
    {
        //var_dump($_SESSION);
        if (isset($_SESSION['id'])) {
            $player = new PlayerMapper();
            $this->render('ur', ['player25' => $player->getPlayer(25), 'player26' => $player->getPlayer(26), 'player27' => $player->getPlayer(27), 'player28' => $player->getPlayer(28), 'player29' => $player->getPlayer(29), 'player30' => $player->getPlayer(30), 'player31' => $player->getPlayer(31), 'player32' => $player->getPlayer(32)]);
        }
        else {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}");
            exit();
        }
    }

    public function up(): void
    {
        //var_dump($_SESSION);
        if (isset($_SESSION['id'])) {
            $player = new PlayerMapper();
            $this->render('up', ['player33' => $player->getPlayer(33), 'player34' => $player->getPlayer(34), 'player35' => $player->getPlayer(35), 'player36' => $player->getPlayer(36), 'player37' => $player->getPlayer(37), 'player38' => $player->getPlayer(38), 'player39' => $player->getPlayer(39), 'player40' => $player->getPlayer(40)]);
        }
        else {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}");
            exit();
        }
    }

    public function uek(): void
    {
        //var_dump($_SESSION);
        if (isset($_SESSION['id'])) {
            $player = new PlayerMapper();
            $this->render('uek', ['player41' => $player->getPlayer(41), 'player42' => $player->getPlayer(42), 'player43' => $player->getPlayer(43), 'player44' => $player->getPlayer(44), 'player45' => $player->getPlayer(45), 'player46' => $player->getPlayer(46), 'player47' => $player->getPlayer(47), 'player48' => $player->getPlayer(48)]);
        }
        else {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}");
            exit();
        }
    }

    public function ka(): void
    {
        var_dump($_SESSION);
        if (isset($_SESSION['id'])) {
            $player = new PlayerMapper();
            $this->render('ka', ['player49' => $player->getPlayer(49), 'player50' => $player->getPlayer(50), 'player51' => $player->getPlayer(51), 'player52' => $player->getPlayer(52), 'player53' => $player->getPlayer(53), 'player54' => $player->getPlayer(54), 'player55' => $player->getPlayer(55), 'player56' => $player->getPlayer(56)]);
        }
        else {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}");
            exit();
        }
    }

    public function players()
    {
        $this->render('players');
    }
}