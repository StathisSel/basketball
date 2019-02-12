<!DOCTYPE html>
<html xmlns:padding="http://www.w3.org/1999/xhtml" xmlns:margin-right="http://www.w3.org/1999/xhtml">

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>

<div class="container">



    <h1 class="col-12 pl-0" style="margin-left: 450px">AZS UEK</h1>
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
                <td><?= $player41->getName(); ?> </td>
                <td><?= $player41->getSurname(); ?> </td>
                <td><?= $player41->getGamesPlayed(); ?> </td>
                <td><?= $player41->getPointsScored(); ?> </td>
                <td><?= $player41->getAssists(); ?> </td>
                <td><?= $player41->getRebounds(); ?> </td>
                <td><?= $player41->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 2; ?> </td>
                <td><?= $player42->getName(); ?> </td>
                <td><?= $player42->getSurname(); ?> </td>
                <td><?= $player42->getGamesPlayed(); ?> </td>
                <td><?= $player42->getPointsScored(); ?> </td>
                <td><?= $player42->getAssists(); ?> </td>
                <td><?= $player42->getRebounds(); ?> </td>
                <td><?= $player42->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 3; ?> </td>
                <td><?= $player43->getName(); ?> </td>
                <td><?= $player43->getSurname(); ?> </td>
                <td><?= $player43->getGamesPlayed(); ?> </td>
                <td><?= $player43->getPointsScored(); ?> </td>
                <td><?= $player43->getAssists(); ?> </td>
                <td><?= $player43->getRebounds(); ?> </td>
                <td><?= $player43->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 4; ?> </td>
                <td><?= $player44->getName(); ?> </td>
                <td><?= $player44->getSurname(); ?> </td>
                <td><?= $player44->getGamesPlayed(); ?> </td>
                <td><?= $player44->getPointsScored(); ?> </td>
                <td><?= $player44->getAssists(); ?> </td>
                <td><?= $player44->getRebounds(); ?> </td>
                <td><?= $player44->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 5; ?> </td>
                <td><?= $player45->getName(); ?> </td>
                <td><?= $player45->getSurname(); ?> </td>
                <td><?= $player45->getGamesPlayed(); ?> </td>
                <td><?= $player45->getPointsScored(); ?> </td>
                <td><?= $player45->getAssists(); ?> </td>
                <td><?= $player45->getRebounds(); ?> </td>
                <td><?= $player45->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 6; ?> </td>
                <td><?= $player46->getName(); ?> </td>
                <td><?= $player46->getSurname(); ?> </td>
                <td><?= $player46->getGamesPlayed(); ?> </td>
                <td><?= $player46->getPointsScored(); ?> </td>
                <td><?= $player46->getAssists(); ?> </td>
                <td><?= $player46->getRebounds(); ?> </td>
                <td><?= $player46->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 7; ?> </td>
                <td><?= $player47->getName(); ?> </td>
                <td><?= $player47->getSurname(); ?> </td>
                <td><?= $player47->getGamesPlayed(); ?> </td>
                <td><?= $player47->getPointsScored(); ?> </td>
                <td><?= $player47->getAssists(); ?> </td>
                <td><?= $player47->getRebounds(); ?> </td>
                <td><?= $player47->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 8; ?> </td>
                <td><?= $player48->getName(); ?> </td>
                <td><?= $player48->getSurname(); ?> </td>
                <td><?= $player48->getGamesPlayed(); ?> </td>
                <td><?= $player48->getPointsScored(); ?> </td>
                <td><?= $player48->getAssists(); ?> </td>
                <td><?= $player48->getRebounds(); ?> </td>
                <td><?= $player48->getSteals(); ?> </td>
            </tr>

            </tbody>
            <tbody class="teams-list">
            </tbody>
        </table>
    </div>
</div>

</body>
</html>