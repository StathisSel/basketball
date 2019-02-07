<?php
require_once 'Team.php';
require_once __DIR__.'/../Database.php';

class TeamMapper
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getTeam(int $id): Team
    {
        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM Klub WHERE idKlub = :id;');
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();


            $team = $stmt->fetch(PDO::FETCH_ASSOC);
            return new Team($team['nazwa'],$team['mecze'],$team['punkty'],$team['zwyciestwa'],$team['przegrane'],$team['zdobytePunkty'],$team['straconePunkty']);
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    public function getTeams()
    {
        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM Klub;');
            $stmt->bindParam(':name', $_SESSION['id'], PDO::PARAM_STR);
            $stmt->execute();

            $team = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $team;
        }
        catch(PDOException $e) {
            die();
        }
    }
    public function delete(int $id): void
    {
        try {
            $stmt = $this->database->connect()->prepare('DELETE FROM Klub WHERE idKlub = :id;');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }
        catch(PDOException $e) {
            die();
        }
    }

}