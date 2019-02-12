<!DOCTYPE html>
<html xmlns:padding="http://www.w3.org/1999/xhtml" xmlns:margin-right="http://www.w3.org/1999/xhtml">

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>

<div class="container">



    <h1 class="col-12 pl-0" style="margin-left: 450px">AZS KA</h1>
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
                <td><?= $player49->getName(); ?> </td>
                <td><?= $player49->getSurname(); ?> </td>
                <td><?= $player49->getGamesPlayed(); ?> </td>
                <td><?= $player49->getPointsScored(); ?> </td>
                <td><?= $player49->getAssists(); ?> </td>
                <td><?= $player49->getRebounds(); ?> </td>
                <td><?= $player49->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 2; ?> </td>
                <td><?= $player50->getName(); ?> </td>
                <td><?= $player50->getSurname(); ?> </td>
                <td><?= $player50->getGamesPlayed(); ?> </td>
                <td><?= $player50->getPointsScored(); ?> </td>
                <td><?= $player50->getAssists(); ?> </td>
                <td><?= $player50->getRebounds(); ?> </td>
                <td><?= $player50->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 3; ?> </td>
                <td><?= $player51->getName(); ?> </td>
                <td><?= $player51->getSurname(); ?> </td>
                <td><?= $player51->getGamesPlayed(); ?> </td>
                <td><?= $player51->getPointsScored(); ?> </td>
                <td><?= $player51->getAssists(); ?> </td>
                <td><?= $player51->getRebounds(); ?> </td>
                <td><?= $player51->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 4; ?> </td>
                <td><?= $player52->getName(); ?> </td>
                <td><?= $player52->getSurname(); ?> </td>
                <td><?= $player52->getGamesPlayed(); ?> </td>
                <td><?= $player52->getPointsScored(); ?> </td>
                <td><?= $player52->getAssists(); ?> </td>
                <td><?= $player52->getRebounds(); ?> </td>
                <td><?= $player52->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 5; ?> </td>
                <td><?= $player53->getName(); ?> </td>
                <td><?= $player53->getSurname(); ?> </td>
                <td><?= $player53->getGamesPlayed(); ?> </td>
                <td><?= $player53->getPointsScored(); ?> </td>
                <td><?= $player53->getAssists(); ?> </td>
                <td><?= $player53->getRebounds(); ?> </td>
                <td><?= $player53->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 6; ?> </td>
                <td><?= $player54->getName(); ?> </td>
                <td><?= $player54->getSurname(); ?> </td>
                <td><?= $player54->getGamesPlayed(); ?> </td>
                <td><?= $player54->getPointsScored(); ?> </td>
                <td><?= $player54->getAssists(); ?> </td>
                <td><?= $player54->getRebounds(); ?> </td>
                <td><?= $player54->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 7; ?> </td>
                <td><?= $player55->getName(); ?> </td>
                <td><?= $player55->getSurname(); ?> </td>
                <td><?= $player55->getGamesPlayed(); ?> </td>
                <td><?= $player55->getPointsScored(); ?> </td>
                <td><?= $player55->getAssists(); ?> </td>
                <td><?= $player55->getRebounds(); ?> </td>
                <td><?= $player55->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 8; ?> </td>
                <td><?= $player56->getName(); ?> </td>
                <td><?= $player56->getSurname(); ?> </td>
                <td><?= $player56->getGamesPlayed(); ?> </td>
                <td><?= $player56->getPointsScored(); ?> </td>
                <td><?= $player56->getAssists(); ?> </td>
                <td><?= $player56->getRebounds(); ?> </td>
                <td><?= $player56->getSteals(); ?> </td>
            </tr>

            </tbody>
            <tbody class="teams-list">
            </tbody>
        </table>
    </div>
</div>

</body>
</html>