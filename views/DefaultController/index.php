<!DOCTYPE html>
<html xmlns:padding="http://www.w3.org/1999/xhtml" xmlns:margin-right="http://www.w3.org/1999/xhtml">

<?php include(dirname(__DIR__).'/head.html'); ?>

<body>

<div class="container">


    <nav class="navbar navbar-expand-lg justify-content-between">
        <img src="../../azsLogo2.jpg" alt="AZS LOGO" style="width:131px;height:111px; align="left">
        <div class="row">
            <button class="btn btn-dark btn-lg"  type="button"  style="margin: auto; margin-right: 1px;" onclick="window.location.href = 'http://localhost:8002/?page=logout'">Logout</button>
        </div>
    </nav>
    <h1 class="col-12 pl-0" style="margin-left: 230px"> </h1>
    <h1 class="col-12 pl-0" style="margin-left: 230px"> AZS Kraków Basketball Classification</h1>
    <div class="row">



        <table class="table table-hover">
            <thead>
            <tr>
                <th>Place</th>
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
            <tr onclick="window.location.href = 'http://localhost:8002/?page=uj'";>
                <td><?= 1; ?> </td>
                <td ><?= $team->getName(); ?> </td>
                <td><?= $team->getPoints(); ?></td>
                <td><?= $team->getGames(); ?></td>
                <td><?= $team->getGamesWon();?></td>
                <td><?= $team->getGamesLost();?></td>
                <td><?= $team->getPointsScored(); ?></td>
                <td><?= $team->getPointsLost(); ?></td>
            </tr>
            <tr onclick="window.location.href = 'http://localhost:8002/?page=pk'";>
                <td><?= 2; ?> </td>
                <td ><?= $team1->getName(); ?> </td>
                <td><?= $team1->getPoints(); ?></td>
                <td><?= $team1->getGames(); ?></td>
                <td><?= $team1->getGamesWon();?></td>
                <td><?= $team1->getGamesLost();?></td>
                <td><?= $team1->getPointsScored(); ?></td>
                <td><?= $team1->getPointsLost(); ?></td>
            </tr>
            <tr onclick="window.location.href = 'http://localhost:8002/?page=agh'";>
                <td><?= 3; ?> </td>
                <td><?= $team2->getName(); ?> </td>
                <td><?= $team2->getPoints(); ?></td>
                <td><?= $team2->getGames(); ?></td>
                <td><?= $team2->getGamesWon();?></td>
                <td><?= $team2->getGamesLost();?></td>
                <td><?= $team2->getPointsScored(); ?></td>
                <td><?= $team2->getPointsLost(); ?></td>
            </tr>
            <tr onclick="window.location.href = 'http://localhost:8002/?page=ur'";>
                <td><?=4; ?> </td>
                <td><?= $team3->getName(); ?> </td>
                <td><?= $team3->getPoints(); ?></td>
                <td><?= $team3->getGames(); ?></td>
                <td><?= $team3->getGamesWon();?></td>
                <td><?= $team3->getGamesLost();?></td>
                <td><?= $team3->getPointsScored(); ?></td>
                <td><?= $team3->getPointsLost(); ?></td>
            </tr>
            <tr onclick="window.location.href = 'http://localhost:8002/?page=up'";>
                <td><?=5; ?> </td>
                <td><?= $team4->getName(); ?> </td>
                <td><?= $team4->getPoints(); ?></td>
                <td><?= $team4->getGames(); ?></td>
                <td><?= $team4->getGamesWon();?></td>
                <td><?= $team4->getGamesLost();?></td>
                <td><?= $team4->getPointsScored(); ?></td>
                <td><?= $team4->getPointsLost(); ?></td>
            </tr>
            <tr onclick="window.location.href = 'http://localhost:8002/?page=uek'";>
                <td><?=6; ?> </td>
                <td><?= $team5->getName(); ?> </td>
                <td><?= $team5->getPoints(); ?></td>
                <td><?= $team5->getGames(); ?></td>
                <td><?= $team5->getGamesWon();?></td>
                <td><?= $team5->getGamesLost();?></td>
                <td><?= $team5->getPointsScored(); ?></td>
                <td><?= $team5->getPointsLost(); ?></td>
            </tr>
            <tr onclick="window.location.href = 'http://localhost:8002/?page=ka'";>
                <td><?=7; ?> </td>
                <td><?= $team6->getName(); ?> </td>
                <td><?= $team6->getPoints(); ?></td>
                <td><?= $team6->getGames(); ?></td>
                <td><?= $team6->getGamesWon();?></td>
                <td><?= $team6->getGamesLost();?></td>
                <td><?= $team6->getPointsScored(); ?></td>
                <td><?= $team6->getPointsLost(); ?></td>
            </tr>


            </tbody>
            <tbody class="teams-list">
            </tbody>
        </table>
    </div>
</div>

</body>
</html>