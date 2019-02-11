<?php

require_once "AppController.php";

require_once __DIR__.'/../model/Team.php';
require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../model/TeamMapper.php';
require_once __DIR__.'/../model/UserMapper.php';


class BasketballTeamController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(): void
    {
        $team = new TeamMapper();
        $this->render('index', ['team' => $team->getTeam(10), 'team1' => $team->getTeam(11), 'team2' => $team->getTeam(12), 'team3' => $team->getTeam(13), 'team4' => $team->getTeam(14), 'team5' => $team->getTeam(15), 'team6' => $team->getTeam(16)]);
    }


    public function Teams(): void
    {
        $team = new TeamMapper();

        header('Content-type: application/json');
        http_response_code(200);

        echo $team->getTeams() ? json_encode($team->getTeams()) : '';
    }

    public function teamDelete(): void
    {
        if (!isset($_POST['id'])) {
            http_response_code(404);
            return;
        }

        $team = new TeamMapper();
        $team->delete((int)$_POST['id']);

        http_response_code(200);
    }
}