<?php

require_once 'Coach.php';
require_once __DIR__ . '/../Database.php';

class CoachMapper
{

    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getCoach(int $id): Coach
    {
        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM Trener WHERE idTrener = :id;');
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();

            $coach = $stmt->fetch(PDO::FETCH_ASSOC);
            return new Coach($coach['Imie'], $coach['Nazwisko'], $coach['id_klub']);

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