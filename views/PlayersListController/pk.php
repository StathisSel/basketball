<!DOCTYPE html>
<html xmlns:padding="http://www.w3.org/1999/xhtml" xmlns:margin-right="http://www.w3.org/1999/xhtml">

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>

<div class="container">



    <h1 class="col-12 pl-0" style="margin-left: 450px">AZS PK</h1>
    <button class="btn btn-dark btn-lg"  type="button"  style="margin: auto; margin-right: 1px;" onclick="getPlayers()">Get All Players</button>

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
                <td><?= $player17->getName(); ?> </td>
                <td><?= $player17->getSurname(); ?> </td>
                <td><?= $player17->getGamesPlayed(); ?> </td>
                <td><?= $player17->getPointsScored(); ?> </td>
                <td><?= $player17->getAssists(); ?> </td>
                <td><?= $player17->getRebounds(); ?> </td>
                <td><?= $player17->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 2; ?> </td>
                <td><?= $player18->getName(); ?> </td>
                <td><?= $player18->getSurname(); ?> </td>
                <td><?= $player18->getGamesPlayed(); ?> </td>
                <td><?= $player18->getPointsScored(); ?> </td>
                <td><?= $player18->getAssists(); ?> </td>
                <td><?= $player18->getRebounds(); ?> </td>
                <td><?= $player18->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 3; ?> </td>
                <td><?= $player19->getName(); ?> </td>
                <td><?= $player19->getSurname(); ?> </td>
                <td><?= $player19->getGamesPlayed(); ?> </td>
                <td><?= $player19->getPointsScored(); ?> </td>
                <td><?= $player19->getAssists(); ?> </td>
                <td><?= $player19->getRebounds(); ?> </td>
                <td><?= $player19->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 4; ?> </td>
                <td><?= $player20->getName(); ?> </td>
                <td><?= $player20->getSurname(); ?> </td>
                <td><?= $player20->getGamesPlayed(); ?> </td>
                <td><?= $player20->getPointsScored(); ?> </td>
                <td><?= $player20->getAssists(); ?> </td>
                <td><?= $player20->getRebounds(); ?> </td>
                <td><?= $player20->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 5; ?> </td>
                <td><?= $player21->getName(); ?> </td>
                <td><?= $player21->getSurname(); ?> </td>
                <td><?= $player21->getGamesPlayed(); ?> </td>
                <td><?= $player21->getPointsScored(); ?> </td>
                <td><?= $player21->getAssists(); ?> </td>
                <td><?= $player21->getRebounds(); ?> </td>
                <td><?= $player21->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 6; ?> </td>
                <td><?= $player22->getName(); ?> </td>
                <td><?= $player22->getSurname(); ?> </td>
                <td><?= $player22->getGamesPlayed(); ?> </td>
                <td><?= $player22->getPointsScored(); ?> </td>
                <td><?= $player22->getAssists(); ?> </td>
                <td><?= $player22->getRebounds(); ?> </td>
                <td><?= $player22->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 7; ?> </td>
                <td><?= $player23->getName(); ?> </td>
                <td><?= $player23->getSurname(); ?> </td>
                <td><?= $player23->getGamesPlayed(); ?> </td>
                <td><?= $player23->getPointsScored(); ?> </td>
                <td><?= $player23->getAssists(); ?> </td>
                <td><?= $player23->getRebounds(); ?> </td>
                <td><?= $player23->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 8; ?> </td>
                <td><?= $player24->getName(); ?> </td>
                <td><?= $player24->getSurname(); ?> </td>
                <td><?= $player24->getGamesPlayed(); ?> </td>
                <td><?= $player24->getPointsScored(); ?> </td>
                <td><?= $player24->getAssists(); ?> </td>
                <td><?= $player24->getRebounds(); ?> </td>
                <td><?= $player24->getSteals(); ?> </td>
            </tr>

            </tbody>
            <tbody class="teams-list">
            </tbody>
        </table>
    </div>
</div>

</body>
</html>