<!DOCTYPE html>
<html>

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>

<div class="container">
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Games Played</th>
                <th>Points Scored</th>
                <th>Assists</th>
                <th>Rebounds</th>
                <th>Steals</th>
                <th>Blocks</th>
            </tr>
            </thead>
            <tbody>
            <tr onclick="window.location.href = 'http://localhost:8002/?page=login';">
                <td><?= 1; ?> </td>
                <td ><?= $team->getName(); ?> </td>
                <td><?= $team->getPoints(); ?></td>
                <td><?= $team->getGames(); ?></td>
                <td><?= $team->getGamesWon();?></td>
                <td><?= $team->getGamesLost();?></td>
                <td><?= $team->getPointsScored(); ?></td>
                <td><?= $team->getPointsLost(); ?></td>
            </tr>
            <tr onclick="window.location.href = 'http://localhost:8002/?page=login';">
                <td><?= 2; ?> </td>
                <td><?= $team2->getName(); ?> </td>
                <td><?= $team2->getPoints(); ?></td>
                <td><?= $team2->getGames(); ?></td>
                <td><?= $team2->getGamesWon();?></td>
                <td><?= $team2->getGamesLost();?></td>
                <td><?= $team2->getPointsScored(); ?></td>
                <td><?= $team2->getPointsLost(); ?></td>
            </tr>
            <tr onclick="window.location.href = 'http://localhost:8002/?page=login';">
                <td><?=3; ?> </td>
                <td><?= $team3->getName(); ?> </td>
                <td><?= $team3->getPoints(); ?></td>
                <td><?= $team3->getGames(); ?></td>
                <td><?= $team3->getGamesWon();?></td>
                <td><?= $team3->getGamesLost();?></td>
                <td><?= $team3->getPointsScored(); ?></td>
                <td><?= $team3->getPointsLost(); ?></td>
            </tr>


            </tbody>
            <tbody class="teams-list">
            </tbody>
        </table>
    </div>
</div>

</body>
</html>