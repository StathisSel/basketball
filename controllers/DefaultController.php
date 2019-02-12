<?php

require_once "AppController.php";

require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../model/UserMapper.php';


class DefaultController extends AppController
{

    public function __construct()
    {
        parent::__construct();
    }

//    public function index()
//    {
//        $text = 'Hello there 👋';
//
//        $this->render('index', ['text' => $text]);
//    }


    public function index(): void
    {
        //var_dump($_SESSION);
        if(isset($_SESSION['id'])) {
            $team = new TeamMapper();
            $this->render('index', ['team' => $team->getTeam(10),'team1' => $team->getTeam(11),'team2' => $team->getTeam(12),'team3' => $team->getTeam(13),'team4' => $team->getTeam(14),'team5' => $team->getTeam(15),'team6' => $team->getTeam(16)]);
        } else {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}");
            exit();
        }
    }

    public function login()
    {
        $mapper = new UserMapper();

        $user = null;

        if ($this->isPost()) {

            $user = $mapper->getUser($_POST['email']);

            if(!$user) {
                return $this->render('login', ['message' => ['Email not recognized']]);
            }

            if ($user->getPassword() != $_POST['password']) {
                return $this->render('login', ['message' => [$user->getPassword()]]);
            } else {
                $_SESSION["id"] = $user->getEmail();
                $_SESSION["role"] = $user->getRole();

                $url = "http://$_SERVER[HTTP_HOST]/";
                header("Location: {$url}?page=index");
                exit();
            }
        }

        $this->render('login');
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        $url = "http://$_SERVER[HTTP_HOST]/";
        header("Location: {$url}");
        exit();

       // $this->render('index', ['text' => 'You have been successfully logged out!']);
    }
    public function home()
    {
        $this->render('home');
    }

    public function register()
    {
        $mapper = new UserMapper();
        $user = null;
        if ($this->isPost()) {
            //VALIDATE INPUTS
            $validationFailed = false;
            $messages[] = null;
            if(preg_match('/[^A-Za-z]/', $_POST['name'])) {
                $validationFailed = true;
                array_push($messages, 'The name should only consist of letters ('.$_POST['name'].' is wrong!)');
            }
            if(preg_match('/[^A-Za-z]/', $_POST['surname'])) {
                $validationFailed = true;
                array_push($messages, 'The surname should only consist of letters ('.$_POST['surname'].' is wrong!)');
            }
            if(!preg_match('/[^@]+@[^\.]+\..+/', $_POST['email'])) {
                $validationFailed = true;
                array_push($messages, 'The email provided is valid ('.$_POST['email'].' is wrong!)');
            }
            if($validationFailed) {
                return $this->render('register', ['message' => $messages]);
            }
            //VALIDATE IF EMAIL IS UNIQUE
            $user = $mapper->getUser($_POST['email']);
            if(!($user->getEmail() == null) && !($user->getEmail() == '')) {
                return $this->render('register', ['message' => ['This email has already been used!']]);
            }
            //ADD USER TO DATABASE
            $mapper->addUser($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password']);
            return $this->render('register', ['message' => ['Your account has been registered!']]);
        }
        $this->render('register');
    }


}