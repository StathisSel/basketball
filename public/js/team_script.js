$(document).ready(function() {
    $('.panel-header').html('SIGN IN');
});

function getPlayers() {
    const apiUrl = "http://localhost:8002";
    const $list = $('.teams-list');

    $.ajax({
        url: apiUrl + '/?page=agh',
        dataType: 'json'
    })
        .done((res) => {
        res.forEach(el => {
                $list.append(`<tr>
                    <td>${el.name} </td>
                    <td><${el.surname} </td>
                    <td><?= $player->getSurname(); ?> </td>
                    <td><?= $player->getGamesPlayed(); ?> </td>
                    <td><?= $player->getPointsScored(); ?> </td>
                    <td><?= $player->getAssists(); ?> </td>
                    <td><?= $player->getRebounds(); ?> </td>
                    <td><?= $player->getSteals(); ?> </td>
                    </tr>`);
        })
    ;
}
