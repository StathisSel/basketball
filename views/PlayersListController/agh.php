<!DOCTYPE html>
<html xmlns:padding="http://www.w3.org/1999/xhtml" xmlns:margin-right="http://www.w3.org/1999/xhtml">

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>

<div class="container">



    <h1 class="col-12 pl-0" style="margin-left: 450px">AZS AGH</h1>
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

            </tbody>
            <tbody class="teams-list">
            </tbody>
        </table>
    </div>
</div>

</body>
</html>