<?php
/**
 * Created by PhpStorm.
 * User: Piotrek
 * Date: 2/7/2019
 * Time: 10:15 PM
 */

class Player
{
    private $name;
    private $surname;
    private $idTeam;
    private $gamesPlayed;
    private $pointsScored;
    private $assists;
    private $rebounds;
    private $steals;

    /**
     * Player constructor.
     * @param $name
     * @param $surname
     * @param $idTeam
     * @param $gamesPlayed
     * @param $pointsScored
     * @param $assists
     * @param $rebounds
     * @param $steals
     */
    public function __construct($name, $surname,$idTeam, $gamesPlayed, $pointsScored, $assists, $rebounds, $steals)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->idTeam=$idTeam;
        $this->gamesPlayed = $gamesPlayed;
        $this->pointsScored = $pointsScored;
        $this->assists = $assists;
        $this->rebounds = $rebounds;
        $this->steals = $steals;
    }



    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }
    /**
     * @return mixed
     */
    public function getIdTeam()
    {
        return $this->idTeam;
    }

    /**
     * @param mixed $idTeam
     */
    public function setIdTeam($idTeam)
    {
        $this->idTeam = $idTeam;
    }
    /**
     * @return mixed
     */
    public function getGamesPlayed()
    {
        return $this->gamesPlayed;
    }

    /**
     * @param mixed $gamesPlayed
     */
    public function setGamesPlayed($gamesPlayed)
    {
        $this->gamesPlayed = $gamesPlayed;
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

    /**
     * @return mixed
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * @param mixed $assists
     */
    public function setAssists($assists)
    {
        $this->assists = $assists;
    }

    /**
     * @return mixed
     */
    public function getRebounds()
    {
        return $this->rebounds;
    }

    /**
     * @param mixed $rebounds
     */
    public function setRebounds($rebounds)
    {
        $this->rebounds = $rebounds;
    }

    /**
     * @return mixed
     */
    public function getSteals()
    {
        return $this->steals;
    }

    /**
     * @param mixed $steals
     */
    public function setSteals($steals)
    {
        $this->steals = $steals;
    }

}
