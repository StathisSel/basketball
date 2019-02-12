<!DOCTYPE html>
<html xmlns:padding="http://www.w3.org/1999/xhtml" xmlns:margin-right="http://www.w3.org/1999/xhtml">

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>

<div class="container">

    <h1 class="col-12 pl-0" style="margin-left: 450px">AZS UR</h1>
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
                <td><?= $player25->getName(); ?> </td>
                <td><?= $player25->getSurname(); ?> </td>
                <td><?= $player25->getGamesPlayed(); ?> </td>
                <td><?= $player25->getPointsScored(); ?> </td>
                <td><?= $player25->getAssists(); ?> </td>
                <td><?= $player25->getRebounds(); ?> </td>
                <td><?= $player25->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 2; ?> </td>
                <td><?= $player26->getName(); ?> </td>
                <td><?= $player26->getSurname(); ?> </td>
                <td><?= $player26->getGamesPlayed(); ?> </td>
                <td><?= $player26->getPointsScored(); ?> </td>
                <td><?= $player26->getAssists(); ?> </td>
                <td><?= $player26->getRebounds(); ?> </td>
                <td><?= $player26->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 3; ?> </td>
                <td><?= $player27->getName(); ?> </td>
                <td><?= $player27->getSurname(); ?> </td>
                <td><?= $player27->getGamesPlayed(); ?> </td>
                <td><?= $player27->getPointsScored(); ?> </td>
                <td><?= $player27->getAssists(); ?> </td>
                <td><?= $player27->getRebounds(); ?> </td>
                <td><?= $player27->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 4; ?> </td>
                <td><?= $player28->getName(); ?> </td>
                <td><?= $player28->getSurname(); ?> </td>
                <td><?= $player28->getGamesPlayed(); ?> </td>
                <td><?= $player28->getPointsScored(); ?> </td>
                <td><?= $player28->getAssists(); ?> </td>
                <td><?= $player28->getRebounds(); ?> </td>
                <td><?= $player28->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 5; ?> </td>
                <td><?= $player29->getName(); ?> </td>
                <td><?= $player29->getSurname(); ?> </td>
                <td><?= $player29->getGamesPlayed(); ?> </td>
                <td><?= $player29->getPointsScored(); ?> </td>
                <td><?= $player29->getAssists(); ?> </td>
                <td><?= $player29->getRebounds(); ?> </td>
                <td><?= $player29->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 6; ?> </td>
                <td><?= $player30->getName(); ?> </td>
                <td><?= $player30->getSurname(); ?> </td>
                <td><?= $player30->getGamesPlayed(); ?> </td>
                <td><?= $player30->getPointsScored(); ?> </td>
                <td><?= $player30->getAssists(); ?> </td>
                <td><?= $player30->getRebounds(); ?> </td>
                <td><?= $player30->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 7; ?> </td>
                <td><?= $player31->getName(); ?> </td>
                <td><?= $player31->getSurname(); ?> </td>
                <td><?= $player31->getGamesPlayed(); ?> </td>
                <td><?= $player31->getPointsScored(); ?> </td>
                <td><?= $player31->getAssists(); ?> </td>
                <td><?= $player31->getRebounds(); ?> </td>
                <td><?= $player31->getSteals(); ?> </td>
            </tr>
            <tr>
                <td><?= 8; ?> </td>
                <td><?= $player32->getName(); ?> </td>
                <td><?= $player32->getSurname(); ?> </td>
                <td><?= $player32->getGamesPlayed(); ?> </td>
                <td><?= $player32->getPointsScored(); ?> </td>
                <td><?= $player32->getAssists(); ?> </td>
                <td><?= $player32->getRebounds(); ?> </td>
                <td><?= $player32->getSteals(); ?> </td>
            </tr>

            </tbody>
            <tbody class="teams-list">
            </tbody>
        </table>
    </div>
</div>

</body>
</html>