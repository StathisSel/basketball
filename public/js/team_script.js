$(document).ready(function(){
    $('.panel-header').html('SIGN IN');
});


function getTeams() {
    const apiUrl = "http://localhost:8002";
    const $list = $('.teams-list');

    $.ajax({
        url : apiUrl + '/?page=teams',
        dataType : 'json'
    })
        .done((res) => {

            $list.empty();
            res.forEach(el => {
                $list.append(`<tr>
                    <td>${el.name}</td>
                    <td>
                    <button class="btn btn-danger" type="button" onclick="deleteTeam(${el.id})">
                        <i class="material-icons">delete_forever</i>
                    </button>
                    </td>
                    </tr>`);
            })
        });
}

function deleteTeam(id) {
    if (!confirm('Do you want to delete this team?')) {
        return;
    }

    const apiUrl = "http://localhost:8002";

    $.ajax({
        url : apiUrl + '/?page=admin_delete_team',
        method : "POST",
        data : {
            id : id
        },
        success: function() {
            alert('Selected team successfully deleted from database!');
            getTeams();
        }
    });
}
