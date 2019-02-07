<?php

require_once "AppController.php";

require_once __DIR__.'/../model/Team.php';
require_once __DIR__.'/../model/TeamMapper.php';


class BasketballTeamController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(): void
    {
        $team = new TeamMapper();
        $this->render('index', ['team' => $team->getTeam(11),'team2' => $team->getTeam(12),'team3' => $team->getTeam(13)]);


        //$this->render('index', ['team' => $team->getTeam(11)]);
        // $this->render('index');
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