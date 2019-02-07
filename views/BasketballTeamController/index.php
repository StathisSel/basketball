<!DOCTYPE html>
<html>

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>
<div class="container">
    <div class="row">
        <button class="btn btn-dark btn-lg" type="button" onclick="getTeams()">Login</button>
        <h1 class="col-12 pl-0">TEAMS</h1>

        <?= $team->getName(); ?>
        <h4 class="mt-4">Teams:</h4>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Points</th>
                <th>Games</th>
                <th>Games Won</th>
                <th>Games Lost</th>
                <th>Points Scored</th>
                <th>Points Lost</th>
            </tr>
            </thead>
            <tbody>
            <tr>

                <td><?= $team->getName(); ?> </td>
                <td><?= $team->getPoints(); ?></td>
                <td><?= $team->getGames(); ?></td>
                <td><?= $team->getGamesWon();?></td>
                <td><?= $team->getGamesLost();?></td>
                <td><?= $team->getPointsScored(); ?></td>
                <td><?= $team->getPointsLost(); ?></td>
            </tr>
            <tr>
                <td><?= $team2->getName(); ?> </td>
                <td><?= $team2->getPoints(); ?></td>
                <td><?= $team2->getGames(); ?></td>
                <td><?= $team2->getGamesWon();?></td>
                <td><?= $team2->getGamesLost();?></td>
                <td><?= $team2->getPointsScored(); ?></td>
                <td><?= $team2->getPointsLost(); ?></td>
            </tr>
            <tr>
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