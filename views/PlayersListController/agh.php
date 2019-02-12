<!DOCTYPE html>
<html xmlns:padding="http://www.w3.org/1999/xhtml" xmlns:margin-right="http://www.w3.org/1999/xhtml">

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>

<div class="container">



    <h1 class="col-12 pl-0" style="margin-left: 450px">AZS AGH</h1>
    <h1 class="col-12 pl-0" style="margin-left: 310px">Coach: <?= $coach3->getName();?> <?= $coach3->getSurname();?></h1>


    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Surname</th>
                <th>GamesPlayed</th>
                <th>Points Scored</th>
                <th>Assists</th>
                <th>Rebounds</th>
                <th>Steals</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?= 1; ?> </td>
                <td><?= $player1->getName(); ?> </td>
                <td><?= $player1->getSurname(); ?> </td>
                <td><?= $player1->getGamesPlayed(); ?> </td>
                <td><?= $player1->getPointsScored(); ?> </td>
                <td><?= $player1->getAssists(); ?> </td>
                <td><?= $player1->getRebounds(); ?> </td>
                <td><?= $player1->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 2; ?> </td>
                <td><?= $player2->getName(); ?> </td>
                <td><?= $player2->getSurname(); ?> </td>
                <td><?= $player2->getGamesPlayed(); ?> </td>
                <td><?= $player2->getPointsScored(); ?> </td>
                <td><?= $player2->getAssists(); ?> </td>
                <td><?= $player2->getRebounds(); ?> </td>
                <td><?= $player2->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 3; ?> </td>
                <td><?= $player3->getName(); ?> </td>
                <td><?= $player3->getSurname(); ?> </td>
                <td><?= $player3->getGamesPlayed(); ?> </td>
                <td><?= $player3->getPointsScored(); ?> </td>
                <td><?= $player3->getAssists(); ?> </td>
                <td><?= $player3->getRebounds(); ?> </td>
                <td><?= $player3->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 4; ?> </td>
                <td><?= $player4->getName(); ?> </td>
                <td><?= $player4->getSurname(); ?> </td>
                <td><?= $player4->getGamesPlayed(); ?> </td>
                <td><?= $player4->getPointsScored(); ?> </td>
                <td><?= $player4->getAssists(); ?> </td>
                <td><?= $player4->getRebounds(); ?> </td>
                <td><?= $player4->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 5; ?> </td>
                <td><?= $player5->getName(); ?> </td>
                <td><?= $player5->getSurname(); ?> </td>
                <td><?= $player5->getGamesPlayed(); ?> </td>
                <td><?= $player5->getPointsScored(); ?> </td>
                <td><?= $player5->getAssists(); ?> </td>
                <td><?= $player5->getRebounds(); ?> </td>
                <td><?= $player5->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 6; ?> </td>
                <td><?= $player6->getName(); ?> </td>
                <td><?= $player6->getSurname(); ?> </td>
                <td><?= $player6->getGamesPlayed(); ?> </td>
                <td><?= $player6->getPointsScored(); ?> </td>
                <td><?= $player6->getAssists(); ?> </td>
                <td><?= $player6->getRebounds(); ?> </td>
                <td><?= $player6->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 7; ?> </td>
                <td><?= $player7->getName(); ?> </td>
                <td><?= $player7->getSurname(); ?> </td>
                <td><?= $player7->getGamesPlayed(); ?> </td>
                <td><?= $player7->getPointsScored(); ?> </td>
                <td><?= $player7->getAssists(); ?> </td>
                <td><?= $player7->getRebounds(); ?> </td>
                <td><?= $player7->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 8; ?> </td>
                <td><?= $player8->getName(); ?> </td>
                <td><?= $player8->getSurname(); ?> </td>
                <td><?= $player8->getGamesPlayed(); ?> </td>
                <td><?= $player8->getPointsScored(); ?> </td>
                <td><?= $player8->getAssists(); ?> </td>
                <td><?= $player8->getRebounds(); ?> </td>
                <td><?= $player8->getSteals(); ?> </td>
            </tr>

            </tbody>
            <tbody class="teams-list">
            </tbody>
        </table>
        <button class="btn btn-dark btn-lg"  type="button"  style="margin: auto; margin-right: 1px;" onclick="getPlayers()">Get ajax Players</button>
    </div>
</div>

</body>
</html>