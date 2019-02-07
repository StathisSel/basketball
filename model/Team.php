<?php
/**
 * Created by PhpStorm.
 * User: Piotrek
 * Date: 2/2/2019
 * Time: 1:18 AM
 */

class Team
{
    private $name;
    private $games;
    private $points;
    private $gamesWon;
    private $gamesLost;
    private $pointsScored;
    private $pointsLost;

    /**
     * Team constructor.
     * @param $name
     * @param $games
     * @param $points
     * @param $gamesWon
     * @param $gamesLost
     * @param $pointsScored
     */
    public function __construct($name, $games, $points, $gamesWon, $gamesLost, $pointsScored,$pointsLost)
    {
        $this->name = $name;
        $this->games = $games;
        $this->points = $points;
        $this->gamesWon = $gamesWon;
        $this->gamesLost = $gamesLost;
        $this->pointsScored = $pointsScored;
        $this->pointsLost = $pointsLost;
    }

    /**
     * @return mixed
     */
    public function getPointsLost()
    {
        return $this->pointsLost;
    }

    /**
     * @param mixed $pointsLost
     */
    public function setPointsLost($pointsLost)
    {
        $this->pointsLost = $pointsLost;
    }

    /**
     * @return mixed
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * @param mixed $games
     */
    public function setGames($games)
    {
        $this->games = $games;
    }

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param mixed $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return mixed
     */
    public function getGamesWon()
    {
        return $this->gamesWon;
    }

    /**
     * @param mixed $gamesWon
     */
    public function setGamesWon($gamesWon)
    {
        $this->gamesWon = $gamesWon;
    }

    /**
     * @return mixed
     */
    public function getGamesLost()
    {
        return $this->gamesLost;
    }

    /**
     * @param mixed $gamesLost
     */
    public function setGamesLost($gamesLost)
    {
        $this->gamesLost = $gamesLost;
    }

    /**
     * @return mixed
     */
    public function getPointsScored()
    {
        return $this->pointsScored;
    }

    /**
     * @param mixed $pointsScored
     */
    public function setPointsScored($pointsScored)
    {
        $this->pointsScored = $pointsScored;
    }



    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }
}