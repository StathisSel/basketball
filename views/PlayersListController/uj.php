<!DOCTYPE html>
<html xmlns:padding="http://www.w3.org/1999/xhtml" xmlns:margin-right="http://www.w3.org/1999/xhtml">

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>

<div class="container">



    <h1 class="col-12 pl-0" style="margin-left: 460px">AZS UJ</h1>
    <h1 class="col-12 pl-0" style="margin-left: 310px">Coach: <?= $coach1->getName();?> <?= $coach1->getSurname();?></h1>



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
                <td><?= $player9->getName(); ?> </td>
                <td><?= $player9->getSurname(); ?> </td>
                <td><?= $player9->getGamesPlayed(); ?> </td>
                <td><?= $player9->getPointsScored(); ?> </td>
                <td><?= $player9->getAssists(); ?> </td>
                <td><?= $player9->getRebounds(); ?> </td>
                <td><?= $player9->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 2; ?> </td>
                <td><?= $player10->getName(); ?> </td>
                <td><?= $player10->getSurname(); ?> </td>
                <td><?= $player10->getGamesPlayed(); ?> </td>
                <td><?= $player10->getPointsScored(); ?> </td>
                <td><?= $player10->getAssists(); ?> </td>
                <td><?= $player10->getRebounds(); ?> </td>
                <td><?= $player10->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 3; ?> </td>
                <td><?= $player11->getName(); ?> </td>
                <td><?= $player11->getSurname(); ?> </td>
                <td><?= $player11->getGamesPlayed(); ?> </td>
                <td><?= $player11->getPointsScored(); ?> </td>
                <td><?= $player11->getAssists(); ?> </td>
                <td><?= $player11->getRebounds(); ?> </td>
                <td><?= $player11->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 4; ?> </td>
                <td><?= $player12->getName(); ?> </td>
                <td><?= $player12->getSurname(); ?> </td>
                <td><?= $player12->getGamesPlayed(); ?> </td>
                <td><?= $player12->getPointsScored(); ?> </td>
                <td><?= $player12->getAssists(); ?> </td>
                <td><?= $player12->getRebounds(); ?> </td>
                <td><?= $player12->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 5; ?> </td>
                <td><?= $player13->getName(); ?> </td>
                <td><?= $player13->getSurname(); ?> </td>
                <td><?= $player13->getGamesPlayed(); ?> </td>
                <td><?= $player13->getPointsScored(); ?> </td>
                <td><?= $player13->getAssists(); ?> </td>
                <td><?= $player13->getRebounds(); ?> </td>
                <td><?= $player13->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 6; ?> </td>
                <td><?= $player14->getName(); ?> </td>
                <td><?= $player14->getSurname(); ?> </td>
                <td><?= $player14->getGamesPlayed(); ?> </td>
                <td><?= $player14->getPointsScored(); ?> </td>
                <td><?= $player14->getAssists(); ?> </td>
                <td><?= $player14->getRebounds(); ?> </td>
                <td><?= $player14->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 7; ?> </td>
                <td><?= $player15->getName(); ?> </td>
                <td><?= $player15->getSurname(); ?> </td>
                <td><?= $player15->getGamesPlayed(); ?> </td>
                <td><?= $player15->getPointsScored(); ?> </td>
                <td><?= $player15->getAssists(); ?> </td>
                <td><?= $player15->getRebounds(); ?> </td>
                <td><?= $player15->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 8; ?> </td>
                <td><?= $player16->getName(); ?> </td>
                <td><?= $player16->getSurname(); ?> </td>
                <td><?= $player16->getGamesPlayed(); ?> </td>
                <td><?= $player16->getPointsScored(); ?> </td>
                <td><?= $player16->getAssists(); ?> </td>
                <td><?= $player16->getRebounds(); ?> </td>
                <td><?= $player16->getSteals(); ?> </td>
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