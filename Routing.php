<?php

require_once 'controllers/DefaultController.php';
require_once 'controllers/UploadController.php';
require_once 'controllers/PlayersListController.php';
require_once 'controllers/AdminController.php';
require_once 'controllers/AdminController.php';
require_once 'controllers/BasketballTeamController.php';

class Routing
{
    public $routes = [];

    public function __construct()
    {
        $this->routes = [
            'index' => [
                'controller' => 'DefaultController',
                'action' => 'index'                     /// index
            ],
            'login' => [
                'controller' => 'DefaultController',
                'action' => 'login'
            ],
            'logout' => [
                'controller' => 'DefaultController',
                'action' => 'logout'
            ],
            'admin' => [
                'controller' => 'AdminController',
                'action' => 'index'
            ],
            'admin_users' => [
                'controller' => 'AdminController',
                'action' => 'users'
            ],
            'admin_delete_user' => [
                'controller' => 'AdminController',
                'action' => 'userDelete'
            ],
            'basketball_team' => [
                'controller' => 'BasketballTeamController',
                'action' => 'index'
            ],
            'players' => [
                'controller' => 'PlayersListController',
                'action' => 'players'
            ],
            'agh' => [
                'controller' => 'PlayersListController',
                'action' => 'agh'
            ]
            ,
            'register' => [
                'controller' => 'DefaultController',
                'action' => 'register'
            ]
        ];
    }

    public function run()
    {
        $page = isset($_GET['page'])
            && isset($this->routes[$_GET['page']]) ? $_GET['page'] : 'basketball_team'; /// login ,, ewentualnie admin xd

        if ($this->routes[$page]) {
            $class = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $class;
            $object->$action();
        }
    }

}