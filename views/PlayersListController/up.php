<!DOCTYPE html>
<html xmlns:padding="http://www.w3.org/1999/xhtml" xmlns:margin-right="http://www.w3.org/1999/xhtml">

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>

<div class="container">



    <h1 class="col-12 pl-0" style="margin-left: 450px">AZS UP</h1>
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
                <td><?= $player33->getName(); ?> </td>
                <td><?= $player33->getSurname(); ?> </td>
                <td><?= $player33->getGamesPlayed(); ?> </td>
                <td><?= $player33->getPointsScored(); ?> </td>
                <td><?= $player33->getAssists(); ?> </td>
                <td><?= $player33->getRebounds(); ?> </td>
                <td><?= $player33->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 2; ?> </td>
                <td><?= $player34->getName(); ?> </td>
                <td><?= $player34->getSurname(); ?> </td>
                <td><?= $player34->getGamesPlayed(); ?> </td>
                <td><?= $player34->getPointsScored(); ?> </td>
                <td><?= $player34->getAssists(); ?> </td>
                <td><?= $player34->getRebounds(); ?> </td>
                <td><?= $player34->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 3; ?> </td>
                <td><?= $player35->getName(); ?> </td>
                <td><?= $player35->getSurname(); ?> </td>
                <td><?= $player35->getGamesPlayed(); ?> </td>
                <td><?= $player35->getPointsScored(); ?> </td>
                <td><?= $player35->getAssists(); ?> </td>
                <td><?= $player35->getRebounds(); ?> </td>
                <td><?= $player35->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 4; ?> </td>
                <td><?= $player36->getName(); ?> </td>
                <td><?= $player36->getSurname(); ?> </td>
                <td><?= $player36->getGamesPlayed(); ?> </td>
                <td><?= $player36->getPointsScored(); ?> </td>
                <td><?= $player36->getAssists(); ?> </td>
                <td><?= $player36->getRebounds(); ?> </td>
                <td><?= $player36->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 5; ?> </td>
                <td><?= $player37->getName(); ?> </td>
                <td><?= $player37->getSurname(); ?> </td>
                <td><?= $player37->getGamesPlayed(); ?> </td>
                <td><?= $player37->getPointsScored(); ?> </td>
                <td><?= $player37->getAssists(); ?> </td>
                <td><?= $player37->getRebounds(); ?> </td>
                <td><?= $player37->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 6; ?> </td>
                <td><?= $player38->getName(); ?> </td>
                <td><?= $player38->getSurname(); ?> </td>
                <td><?= $player38->getGamesPlayed(); ?> </td>
                <td><?= $player38->getPointsScored(); ?> </td>
                <td><?= $player38->getAssists(); ?> </td>
                <td><?= $player38->getRebounds(); ?> </td>
                <td><?= $player38->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 7; ?> </td>
                <td><?= $player39->getName(); ?> </td>
                <td><?= $player39->getSurname(); ?> </td>
                <td><?= $player39->getGamesPlayed(); ?> </td>
                <td><?= $player39->getPointsScored(); ?> </td>
                <td><?= $player39->getAssists(); ?> </td>
                <td><?= $player39->getRebounds(); ?> </td>
                <td><?= $player39->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 8; ?> </td>
                <td><?= $player40->getName(); ?> </td>
                <td><?= $player40->getSurname(); ?> </td>
                <td><?= $player40->getGamesPlayed(); ?> </td>
                <td><?= $player40->getPointsScored(); ?> </td>
                <td><?= $player40->getAssists(); ?> </td>
                <td><?= $player40->getRebounds(); ?> </td>
                <td><?= $player40->getSteals(); ?> </td>
            </tr>

            </tbody>
            <tbody class="teams-list">
            </tbody>
        </table>
    </div>
</div>

</body>
</html>