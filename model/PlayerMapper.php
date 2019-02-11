<?php

require_once 'Player.php';
require_once __DIR__.'/../Database.php';

class PlayerMapper
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getPlayer(int $id): Player
    {
        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM Zawodnik WHERE idZawodnik = :id;');
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();


            $player = $stmt->fetch(PDO::FETCH_ASSOC);
            return new Player($player['imie'],$player['nazwisko'],$player['id_druzyny'],$player['suma_zagranych_meczy'],$player['suma_punktow'],$player['suma_asyst'],$player['suma_zbiorek'],$player['suma_przechwytow']);

        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
/*
    idZawodnik
    imie
    nazwisko
    id_druzyny
    suma_punktow
    suma_zbiorek
    suma_zagranych_meczy
    suma_asyst
    suma_przechwytow
*/
    }
}