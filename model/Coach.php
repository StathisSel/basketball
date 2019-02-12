<?php
/**
 * Created by PhpStorm.
 * User: Piotrek
 * Date: 2/12/2019
 * Time: 4:46 AM
 */

class Coach
{
    private $name;
    private $surname;
    private $idTeam;

    /**
     * Coach constructor.
     * @param $name
     * @param $surname
     * @param $idTeam
     */
    public function __construct($name, $surname, $idTeam)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->idTeam = $idTeam;
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

//return new Coach($coach['Imie'],$coach['Nazwisko'],$coach['id_klub']);
}